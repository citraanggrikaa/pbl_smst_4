<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Pgvector\Laravel\Distance; // Jangan lupa import Distance

class SearchController extends Controller
{
    /**
     * Menangani permintaan pencarian dengan strategi Hibrida.
     */
    public function handleSearch(Request $request)
    {
        // 1. Validasi input
        $request->validate(['query' => 'required|string|max:255']);
        $query = $request->input('query');

        // =========================================================
        // LANGKAH 1: PENCARIAN KEYWORD BIASA (CEPAT & EKSPLISIT)
        // =========================================================
        Log::info("Memulai pencarian keyword untuk: '{$query}'");
        $keywordResults = Destination::where('title', 'LIKE', "%{$query}%")
            ->orWhere('desc', 'LIKE', "%{$query}%")
            ->take(5) // Ambil 5 hasil teratas
            ->get();

        $semanticResults = collect(); // Siapkan koleksi kosong untuk hasil semantik

        // =========================================================
        // LANGKAH 2: PENCARIAN SEMANTIK JIKA HASIL KURANG (PINTAR & KONTEKSTUAL)
        // =========================================================

        // Jika hasil keyword kurang dari 3 (atau 0), jalankan pencarian semantik
        if ($keywordResults->count() < 3) {
            try {
                Log::info("Hasil keyword sedikit, memulai pencarian semantik untuk: '{$query}'");

                // Ubah query pengguna menjadi vektor
                $embeddingVector = $this->getEmbeddingForQuery($query);

                // Lakukan pencarian nearest neighbor
                // PERBAIKAN: Urutan argumen diubah sesuai pesan error
                // Format yang benar adalah: (nama_kolom, tipe_jarak, vektor)
                $semanticResults = Destination::query()
                    ->nearestNeighbors('embedding', $embeddingVector, Distance::Cosine)
                    ->take(5)
                    ->get();

                Log::info("Pencarian semantik berhasil.");

            } catch (\Exception $e) {
                // Jika service AI gagal, kita tidak perlu menghentikan proses.
                // Cukup catat errornya dan lanjutkan dengan hasil keyword yang sudah ada.
                Log::error("Gagal melakukan pencarian semantik: " . $e->getMessage());
                // $semanticResults akan tetap menjadi koleksi kosong.
            }
        }

        // =========================================================
        // LANGKAH 3: GABUNGKAN HASIL DAN TAMPILKAN
        // =========================================================

        // Gabungkan hasil keyword dengan hasil semantik,
        // lalu hapus duplikat berdasarkan 'id'.
        $finalResults = $keywordResults
            ->merge($semanticResults)
            ->unique('id');

        // Kembalikan view dengan hasil pencarian yang sudah digabung
        // return view('search-results', [
        //     'query' => $query,
        //     'results' => $finalResults
        // ]);

        return response()->json([
            'query' => $query,
            'results' => $finalResults
        ]);
    }

    /**
     * Fungsi helper untuk memanggil service embedding.
     */
    private function getEmbeddingForQuery(string $query): array
    {
        $embeddingServiceUrl = 'http://127.0.0.1:8002/generate-embedding';
        $response = Http::timeout(10)->post($embeddingServiceUrl, ['text' => $query]);

        if (!$response->successful() || $response->json('status') !== 'success') {
            throw new \Exception('Service embedding tidak merespons dengan benar.');
        }

        return $response->json('embedding');
    }
}
