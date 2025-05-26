<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $destinations = [
            ['title' => 'Pantai Kuta', 'address' => 'Kuta, Badung', 'desc' => 'Pantai populer dengan pasir putih dan sunset yang menawan.'],
            ['title' => 'Tanah Lot', 'address' => 'Tabanan', 'desc' => 'Pura di atas batu karang yang dikelilingi laut saat pasang.'],
            ['title' => 'Ubud Monkey Forest', 'address' => 'Ubud, Gianyar', 'desc' => 'Hutan lindung dengan ratusan kera dan pura suci.'],
            ['title' => 'Tegallalang Rice Terrace', 'address' => 'Tegallalang, Gianyar', 'desc' => 'Pemandangan sawah terasering yang indah.'],
            ['title' => 'Pura Ulun Danu Beratan', 'address' => 'Bedugul, Tabanan', 'desc' => 'Pura ikonik di tepi Danau Beratan.'],
            ['title' => 'Pantai Pandawa', 'address' => 'Kutuh, Badung', 'desc' => 'Pantai tersembunyi dengan tebing kapur dan air jernih.'],
            ['title' => 'Garuda Wisnu Kencana', 'address' => 'Ungasan, Badung', 'desc' => 'Taman budaya dengan patung raksasa dewa Wisnu.'],
            ['title' => 'Pantai Sanur', 'address' => 'Sanur, Denpasar', 'desc' => 'Pantai tenang dengan pemandangan matahari terbit.'],
            ['title' => 'Tirta Empul', 'address' => 'Tampaksiring, Gianyar', 'desc' => 'Pura dengan kolam suci untuk ritual penyucian.'],
            ['title' => 'Pantai Jimbaran', 'address' => 'Jimbaran, Badung', 'desc' => 'Pantai dengan restoran seafood tepi pantai.'],
            ['title' => 'Pura Lempuyang', 'address' => 'Karangasem', 'desc' => 'Pura dengan “Gate of Heaven” dan latar Gunung Agung.'],
            ['title' => 'Danau Batur', 'address' => 'Kintamani, Bangli', 'desc' => 'Danau di kaki Gunung Batur dengan udara sejuk.'],
            ['title' => 'Lovina Beach', 'address' => 'Buleleng', 'desc' => 'Pantai utara Bali terkenal untuk melihat lumba-lumba.'],
            ['title' => 'Pantai Nusa Dua', 'address' => 'Nusa Dua, Badung', 'desc' => 'Resor mewah dengan pantai pasir putih dan ombak tenang.'],
            ['title' => 'Air Terjun Sekumpul', 'address' => 'Buleleng', 'desc' => 'Air terjun indah yang tersembunyi di utara Bali.'],
            ['title' => 'Goa Gajah', 'address' => 'Bedulu, Gianyar', 'desc' => 'Situs arkeologi gua kuno dengan ukiran batu.'],
            ['title' => 'Pura Besakih', 'address' => 'Karangasem', 'desc' => 'Pura terbesar dan terpenting di Bali.'],
            ['title' => 'Bukit Campuhan', 'address' => 'Ubud, Gianyar', 'desc' => 'Jalur hiking dengan pemandangan bukit dan sawah.'],
            ['title' => 'Pantai Dreamland', 'address' => 'Pecatu, Badung', 'desc' => 'Pantai indah dengan pasir putih dan ombak besar.'],
            ['title' => 'Pantai Blue Lagoon', 'address' => 'Padangbai, Karangasem', 'desc' => 'Spot snorkeling dengan air biru jernih.'],
        ];

        foreach ($destinations as $destination) {
            DB::table('destinations')->insert([
                'title' => $destination['title'],
                'address' => $destination['address'],
                'desc' => $destination['desc'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
