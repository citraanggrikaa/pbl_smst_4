<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

      $destinations = [
            [
                'title' => 'Pantai Kuta',
                'address' => 'Kuta, Badung',
                'desc' => "Pantai Kuta merupakan salah satu ikon pariwisata Bali yang paling terkenal, baik di kalangan wisatawan domestik maupun mancanegara. Dikenal dengan hamparan pasir putihnya yang luas dan ombak yang ideal untuk berselancar, pantai ini menjadi destinasi utama bagi mereka yang ingin menikmati suasana pantai yang hidup dan energik.\n\nSaat matahari terbenam, langit di Kuta berubah menjadi kanvas jingga yang memukau, menjadikannya tempat yang sempurna untuk menikmati sunset. Di sekitarnya, deretan kafe, restoran, dan toko-toko suvenir menambah daya tarik kawasan ini sebagai tempat nongkrong yang ramai hingga malam hari.",
            ],
            [
                'title' => 'Tanah Lot',
                'address' => 'Tabanan',
                'desc' => "Tanah Lot adalah salah satu pura laut yang paling ikonik di Bali, terletak di atas batu karang besar yang menjorok ke laut. Ketika air pasang, pura ini tampak terpisah dari daratan dan menciptakan pemandangan dramatis yang sangat memesona, terutama saat matahari terbenam.\n\nSelain sebagai destinasi wisata, Tanah Lot juga merupakan tempat suci bagi umat Hindu Bali. Suasana spiritual berpadu dengan keindahan alam menjadikan tempat ini istimewa, baik untuk berdoa maupun sekadar menikmati ketenangan alam.",
            ],
            [
                'title' => 'Ubud Monkey Forest',
                'address' => 'Ubud, Gianyar',
                'desc' => "Ubud Monkey Forest adalah kawasan hutan alami yang dihuni oleh ratusan kera ekor panjang dan dikelilingi oleh pohon-pohon besar yang rindang. Hutan ini juga menjadi rumah bagi tiga pura kuno yang masih digunakan oleh masyarakat sekitar untuk ritual keagamaan.\n\nPengunjung dapat berjalan menyusuri jalur setapak yang tertata rapi sambil menyaksikan aktivitas para kera. Selain menjadi daya tarik wisata, tempat ini juga berfungsi sebagai pusat konservasi dan pelestarian budaya.",
            ],
            [
                'title' => 'Tegalalang Rice Terrace',
                'address' => 'Ubud, Gianyar',
                'desc' => "Tegalalang Rice Terrace menawarkan pemandangan sawah terasering yang menakjubkan, khas pedesaan Bali. Hamparan hijau berundak ini menciptakan lanskap yang sangat fotogenik dan menjadi salah satu daya tarik utama di daerah Ubud. Wisatawan dapat berjalan-jalan di antara petak-petak sawah, menikmati udara segar, dan mengagumi sistem irigasi tradisional Bali yang disebut subak.\n\nTempat ini juga menyediakan banyak spot foto yang menarik, seperti ayunan 'Love Bali' yang populer. Di sekitar area, terdapat kafe dan restoran yang memungkinkan pengunjung menikmati keindahan pemandangan sambil menyantap hidangan lokal.",
            ],
            [
                'title' => 'Pura Ulun Danu Beratan',
                'address' => 'Bedugul, Tabanan',
                'desc' => "Pura Ulun Danu Beratan adalah pura air yang indah, terletak di tepi Danau Beratan, dikelilingi oleh pegunungan yang berkabut. Keunikan pura ini adalah lokasinya yang seolah mengambang di atas air saat danau pasang, menciptakan pemandangan yang sangat memesona dan menenangkan. Pura ini didedikasikan untuk Dewi Danu, dewi danau dan sungai.\n\nUdara di sekitar Bedugul cenderung sejuk, menjadikannya tempat yang nyaman untuk bersantai dan menikmati keindahan alam. Selain pura, area ini juga memiliki taman yang terawat baik dan menjadi tempat populer untuk fotografi.",
            ],
            [
                'title' => 'Garuda Wisnu Kencana (GWK)',
                'address' => 'Ungasan, Badung',
                'desc' => "Garuda Wisnu Kencana Cultural Park adalah kompleks taman budaya yang megah, didominasi oleh patung Dewa Wisnu yang menunggangi burung Garuda raksasa. Patung ini merupakan salah satu patung tertinggi di dunia dan menjadi simbol kebesaran budaya Bali. Area taman ini sering menjadi lokasi berbagai acara seni dan budaya, konser, serta festival.\n\nSelain patung utama, pengunjung dapat menjelajahi area taman yang luas, menikmati pemandangan laut dari ketinggian, dan menyaksikan pertunjukan tari tradisional Bali. GWK menawarkan pengalaman budaya yang mendalam dengan latar belakang pemandangan yang spektakuler.",
            ],
            [
                'title' => 'Nusa Penida',
                'address' => 'Klungkung',
                'desc' => "Nusa Penida adalah pulau di sebelah tenggara Bali yang terkenal dengan tebing-tebing kapurnya yang dramatis, pantai-pantai tersembunyi berpasir putih, dan kehidupan bawah laut yang kaya. Destinasi populer di sini termasuk Kelingking Beach dengan formasi tebing 'T-Rex'-nya yang ikonik, Angel's Billabong, dan Broken Beach.\n\nPulau ini menawarkan pengalaman petualangan yang berbeda dari Bali daratan, cocok untuk snorkeling, diving, atau sekadar menikmati keindahan alam yang masih sangat alami. Akses ke Nusa Penida umumnya menggunakan kapal cepat dari Sanur atau pelabuhan lainnya di Bali.",
            ],
            [
                'title' => 'Pantai Sanur',
                'address' => 'Sanur, Denpasar',
                'desc' => "Pantai Sanur dikenal dengan ombaknya yang tenang, menjadikannya ideal untuk berenang, berjemur, atau sekadar bersantai. Pemandangan matahari terbit di Sanur sangat indah, dengan perahu-perahu nelayan tradisional berjejer di tepi pantai yang menambah nuansa eksotis. Jalur pejalan kaki di sepanjang pantai sangat populer untuk bersepeda atau jogging di pagi hari.\n\nDi sekitar pantai, terdapat banyak hotel, restoran, dan toko-toko yang menawarkan suasana lebih santai dibandingkan dengan area lain di Bali. Sanur juga merupakan titik keberangkatan utama untuk menuju pulau-pulau kecil seperti Nusa Lembongan dan Nusa Penida.",
            ],
            [
                'title' => 'Pura Besakih',
                'address' => 'Karangasem',
                'desc' => "Pura Besakih, yang dikenal sebagai 'Pura Induk' Bali, adalah kompleks pura terbesar dan paling suci di pulau ini. Terletak di lereng Gunung Agung, pura ini terdiri dari puluhan pura yang berjenjang, menawarkan pemandangan spiritual yang megah. Pura Besakih merupakan pusat kegiatan keagamaan Hindu Bali.\n\nPengunjung dapat merasakan atmosfer sakral dan mengagumi arsitektur tradisional Bali yang rumit. Penting untuk menghormati adat istiadat setempat saat berkunjung ke pura ini, yang mencerminkan kekayaan budaya dan spiritualitas Bali.",
            ],
            [
                'title' => 'Goa Gajah',
                'address' => 'Bedulu, Gianyar',
                'desc' => "Goa Gajah, atau Gua Gajah, adalah situs arkeologi yang menarik dengan fitur utama sebuah gua yang diukir menyerupai mulut raksasa. Di dalamnya terdapat patung Ganesha dan lingga-yoni, simbol kesuburan dalam Hindu. Situs ini diyakini berasal dari abad ke-9 dan berfungsi sebagai tempat meditasi.\n\nSelain gua, pengunjung juga dapat menjelajahi area sekitarnya yang terdapat pemandian kuno dengan tujuh patung bidadari. Suasana di Goa Gajah sangat tenang dan sejuk, menjadikannya tempat yang cocok untuk merasakan sejarah dan spiritualitas Bali.",
            ],
            [
                'title' => 'Tirta Empul',
                'address' => 'Tampaksiring, Gianyar',
                'desc' => "Tirta Empul adalah kompleks pura air suci yang terkenal dengan mata airnya yang digunakan untuk ritual pembersihan atau melukat. Air suci ini mengalir dari mata air alami ke kolam-kolam pemandian yang dapat digunakan oleh umat Hindu dan juga wisatawan. Dipercaya air ini memiliki kekuatan penyembuhan dan pemurnian.\n\nPengunjung dapat menyaksikan atau bahkan ikut serta dalam ritual melukat, dengan mengenakan sarung yang disediakan. Pura ini menawarkan pengalaman budaya dan spiritual yang mendalam, serta pemandangan arsitektur pura yang indah.",
            ],
            [
                'title' => 'Bali Safari and Marine Park',
                'address' => 'Gianyar',
                'desc' => "Bali Safari and Marine Park adalah taman konservasi dan hiburan yang menampung lebih dari 100 spesies hewan dari berbagai belahan dunia, termasuk satwa langka seperti gajah, harimau sumatera, dan orangutan. Pengunjung dapat menikmati safari journey dengan bus khusus yang melintasi habitat alami hewan-hewan tersebut.\n\nSelain safari, taman ini juga menawarkan berbagai pertunjukan edukatif, interaksi dengan hewan, waterpark, dan panggung hiburan Bali Theatre. Destinasi ini cocok untuk keluarga dan para pencinta hewan yang ingin belajar tentang konservasi.",
            ],
            [
                'title' => 'Campuhan Ridge Walk',
                'address' => 'Ubud, Gianyar',
                'desc' => "Campuhan Ridge Walk adalah jalur pejalan kaki yang indah di Ubud, melintasi punggung bukit dengan pemandangan lembah hijau yang menawan di kedua sisinya. Jalur ini sangat populer untuk aktivitas jogging santai atau berjalan kaki di pagi atau sore hari, menawarkan udara segar dan ketenangan alam.\n\nSepanjang jalan, pengunjung akan disuguhkan pemandangan sawah, hutan, dan sesekali melihat rumah-rumah penduduk. Jalur ini memberikan pelarian singkat dari keramaian Ubud, cocok untuk mereka yang mencari ketenangan dan inspirasi.",
            ],
            [
                'title' => 'Pantai Seminyak',
                'address' => 'Seminyak, Badung',
                'desc' => "Pantai Seminyak adalah salah satu pantai paling trendi di Bali, dikenal dengan suasana yang lebih mewah dan bergaya dibandingkan Kuta. Pantai ini menawarkan pasir putih yang indah dan ombak yang cocok untuk berselancar. Deretan beach club, restoran fine dining, dan butik-butik desainer berjejer di sepanjang kawasan ini.\n\nSunset di Seminyak juga sangat memukau, seringkali ditemani musik dari beach club yang hidup. Area ini sangat cocok bagi wisatawan yang mencari pengalaman liburan yang lebih santai namun tetap modern dan penuh gaya.",
            ],
            [
                'title' => 'Waterbom Bali',
                'address' => 'Kuta, Badung',
                'desc' => "Waterbom Bali adalah taman air kelas dunia yang menawarkan berbagai seluncuran dan wahana air yang mendebarkan untuk segala usia. Dari seluncuran ekstrem yang memacu adrenalin hingga area bermain air yang ramah anak, Waterbom menjanjikan kesenangan seharian penuh. Taman ini didesain dengan konsep tropis yang asri, dikelilingi oleh taman yang rimbun.\n\nTempat ini juga dilengkapi dengan berbagai fasilitas seperti restoran, toko suvenir, dan area relaksasi. Waterbom Bali merupakan pilihan sempurna untuk liburan keluarga yang mencari hiburan air yang seru dan menyegarkan.",
            ],
            [
                'title' => 'Jimbaran Bay',
                'address' => 'Jimbaran, Badung',
                'desc' => "Jimbaran Bay terkenal dengan hidangan laut segar yang disajikan di restoran-restoran tepi pantai, terutama saat makan malam. Pengunjung dapat memilih ikan, udang, atau lobster segar langsung dari tangkapan nelayan, lalu dimasak sesuai selera dan dinikmati di bawah langit terbuka dengan pemandangan matahari terbenam yang spektakuler.\n\nSuasana romantis dengan meja-meja yang diterangi lilin di pasir menjadikan Jimbaran Bay destinasi favorit untuk pasangan atau keluarga yang ingin menikmati santapan malam yang tak terlupakan di tepi laut.",
            ],
            [
                'title' => 'Taman Ayun Temple',
                'address' => 'Mengwi, Badung',
                'desc' => "Pura Taman Ayun adalah pura kerajaan yang indah, dikelilingi oleh parit yang melambangkan lautan dan taman-taman yang terawat rapi. Pura ini dibangun pada abad ke-17 dan merupakan salah satu situs warisan dunia UNESCO. Arsitekturnya yang megah dengan banyak menara meru (tempat suci beratap susun) mencerminkan kebesaran kerajaan Mengwi di masa lampau.\n\nPengunjung dapat berjalan di sekitar kompleks pura, mengagumi keindahan arsitektur dan ketenangan lingkungannya. Taman Ayun adalah tempat yang sempurna untuk merasakan sejarah dan budaya Bali yang kaya.",
            ],
            [
                'title' => 'Pantai Pandawa',
                'address' => 'Kutuh, Badung',
                'desc' => "Pantai Pandawa adalah pantai tersembunyi yang kini mudah diakses melalui jalan yang membelah tebing kapur. Pantai ini dikenal dengan pasir putihnya yang lembut, air laut yang tenang dan jernih, serta ombak yang ideal untuk berenang atau bermain kano. Pemandangan tebing-tebing tinggi yang mengelilingi pantai sangat ikonik dan sering menjadi latar belakang foto.\n\nPatung-patung panca Pandawa (lima bersaudara dalam wiracarita Mahabharata) yang diukir di dinding tebing menambah daya tarik artistik pantai ini. Pantai Pandawa menawarkan suasana yang lebih tenang dibandingkan pantai-pantai lain di selatan Bali, cocok untuk bersantai.",
            ],
            [
                'title' => 'Gitgit Waterfall',
                'address' => 'Gitgit, Buleleng',
                'desc' => "Gitgit Waterfall adalah salah satu air terjun paling terkenal di Bali Utara, dengan ketinggian sekitar 35 meter. Air terjun ini dikelilingi oleh hutan tropis yang rimbun, menciptakan suasana yang sejuk dan menenangkan. Perjalanan menuju air terjun melibatkan sedikit trekking melalui jalur yang indah, melewati kebun kopi dan cengkeh.\n\nPengunjung dapat berenang di kolam alami di bawah air terjun atau sekadar menikmati keindahan alam dan suara gemuruh air. Gitgit Waterfall menawarkan pengalaman alam yang menyegarkan jauh dari keramaian.",
            ],
            [
                'title' => 'Secret Garden Village',
                'address' => 'Baturiti, Tabanan',
                'desc' => "Secret Garden Village adalah destinasi edukasi dan wisata yang menggabungkan elemen budaya, kosmetik, dan kopi. Pengunjung dapat belajar tentang proses pembuatan kopi Bali, mengunjungi museum kosmetik yang menampilkan sejarah kecantikan Indonesia, dan melihat proses produksi berbagai produk herbal.\n\nTempat ini juga memiliki restoran dengan pemandangan sawah yang indah dan toko-toko yang menjual produk lokal. Secret Garden Village menawarkan pengalaman wisata yang unik dan mendidik, cocok untuk semua kalangan.",
            ],
        ];

        // foreach ($destinations as $destination) {
        //     Destination::create([
        //         'title' => $destination['title'],
        //         'address' => $destination['address'],
        //         'desc' => $destination['desc'],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
