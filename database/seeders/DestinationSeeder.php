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
        DB::disableQueryLog();
        DB::table('destinations')->truncate();

        // Menggunakan file CSV baru yang bersih
        $csvFile = fopen(database_path('seeders/csv/destinasi_bali.csv'), 'r');
        
        // Lewati baris header
        fgetcsv($csvFile); 

        $this->command->getOutput()->progressStart();

        // Membaca file dengan delimiter koma (,)
        while (($row = fgetcsv($csvFile, 2000, ',')) !== false) {
            // Lewati baris yang kosong atau tidak valid
            if (empty($row) || !isset($row[0])) {
                continue;
            }

            // Memetakan data dari CSV ke variabel (indeks sekarang pasti benar)
            // 0:title, 1:category, 2:address, 3:description, 4:facilities, 5:opening_hours, 6:ticket_price, 7:image_url
            $title        = $row[0];
            $category     = $row[1];
            $address      = $row[2];
            $description  = $row[3];
            $facilities   = $row[4];
            $openingHours = $row[5];
            $ticketPrice  = $row[6];
            $imageUrl     = $row[7];

            // 1. Membuat kolom 'desc' dengan format Markdown untuk ditampilkan di web
            $descMarkdown = "## Deskripsi\n\n<p>" . e($description) . "</p>\n\n";
            if ($facilities) {
                $descMarkdown .= "### Fasilitas\n<ul>\n";
                foreach (explode(',', $facilities) as $facility) { 
                    $descMarkdown .= "<li>" . e(trim($facility)) . "</li>\n";
                }
                $descMarkdown .= "</ul>\n\n";
            }
            if ($openingHours) {
                $descMarkdown .= "### Jam Buka\n<p>" . e($openingHours) . "</p>\n\n";
            }
            if ($ticketPrice) {
                $descMarkdown .= "### Harga Tiket Masuk\n<p>" . e($ticketPrice) . "</p>";
            }

            // 2. Membuat kolom 'data_detail' untuk semantic search (gabungan semua data teks)
            $dataDetail = "Nama: " . $title . ". Kategori: " . $category . ". Alamat: " . $address . ". Deskripsi: " . $description . ". Fasilitas yang tersedia: " . $facilities . ".";
            $dataDetail = preg_replace('/\s+/', ' ', $dataDetail);

            // 3. Membuat record baru di database
            Destination::create([
                'title'       => $title,
                'address'     => $address,
                'desc'        => $descMarkdown,
                'data_detail' => $dataDetail,
                'image'       => $imageUrl,
                'embedding'   => null,
            ]);
            
            $this->command->getOutput()->progressAdvance();
        }

        $this->command->getOutput()->progressFinish();
        fclose($csvFile);
    }
}