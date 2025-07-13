<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menonaktifkan query log untuk efisiensi dan mengosongkan tabel
        DB::disableQueryLog();
        DB::table('destinations')->truncate();

        // Menggunakan file CSV baru
        $csvFile = fopen(database_path('seeders/csv/destinations.csv'), 'r');
        
        // Lewati baris header dari CSV
        fgetcsv($csvFile); 

        $this->command->getOutput()->progressStart();

        while (($row = fgetcsv($csvFile, 2000, ',')) !== false) {
            // Lewati baris yang kosong atau tidak memiliki data utama
            if (empty($row) || empty($row[0])) {
                continue;
            }

            // Memetakan data dari CSV ke variabel berdasarkan urutan kolom baru
            // 0: Place_Name, 1: City, 2: Description, 3: Category, 5: Image_1
            $title       = $row[1];
            $address     = $row[2];
            $description = $row[3];
            $category    = $row[4];
            
            // Mengambil URL gambar pertama yang valid dari kolom Image_1 (indeks ke-5)
            // Anda bisa menambahkan logika untuk memeriksa kolom gambar lain jika diperlukan
            $imageUrl = 'images/bali.webp';

            // 1. Kolom 'desc' untuk ditampilkan di web, langsung dari deskripsi CSV
            // Kita bungkus dengan tag <p> untuk konsistensi format HTML
            $descForWeb = "<p>" . e($description) . "</p>";

            // 2. Kolom 'data_detail' untuk referensi AI, berisi gabungan informasi penting
            $dataDetail = "Nama: " . $title . ". Kategori: " . $category . ". Alamat: " . $address . ". Deskripsi: " . $description;
            // Membersihkan spasi berlebih
            $dataDetail = preg_replace('/\s+/', ' ', $dataDetail);

            // 3. Membuat record baru di database
            Destination::create([
                'title'       => $title,
                'address'     => $address,
                'desc'        => $descForWeb,
                'data_detail' => $dataDetail,
                'image'       => $imageUrl,
                'embedding'   => null, // Embedding akan diisi oleh Job nanti
            ]);
            
            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
        fclose($csvFile);
    }
}
