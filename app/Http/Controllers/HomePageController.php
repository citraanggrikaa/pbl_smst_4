<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {

        return view('home');
    }

    public function single($id)
    {
        $data = [
            "id" => $id,
            "title" => "Pantai Kuta",
            "address" => "Desa Kuta, Kecamatan Kuta, Kabupaten Badung, Provinsi Bali, Indonesia",
            "desc" => " Pantai Kuta adalah salah satu ikon pariwisata paling terkenal di Pulau Bali, Indonesia. Terletak di wilayah Kuta, Kabupaten Badung, pantai ini telah menjadi tujuan utama wisatawan lokal maupun mancanegara selama beberapa dekade. Dikenal dengan garis pantainya yang panjang dan landai, pasir putih yang halus, serta ombak laut yang cocok untuk berselancar, Pantai Kuta menawarkan keindahan alam tropis yang sulit ditandingi.

      Dulu, kawasan ini hanyalah sebuah desa nelayan kecil yang tenang dan sepi. Namun, sejak tahun 1970-an, seiring dengan berkembangnya industri pariwisata di Bali, Pantai Kuta berubah menjadi salah satu destinasi paling sibuk dan hidup di pulau ini. Kini, Kuta dikenal sebagai pusat hiburan dan rekreasi yang dipenuhi hotel, restoran, bar, pusat perbelanjaan, serta berbagai tempat hiburan malam.

      Salah satu daya tarik utama Pantai Kuta adalah pemandangan matahari terbenamnya yang spektakuler. Setiap sore, wisatawan berkumpul di tepi pantai untuk menyaksikan langit berubah warna menjadi jingga keemasan, menciptakan suasana romantis dan damai. Banyak fotografer dan pecinta alam datang ke sini hanya untuk mengabadikan momen sunset yang memukau.

      Pantai ini juga merupakan surga bagi para peselancar pemula, karena ombaknya cukup besar namun masih aman untuk belajar. Tersedia banyak tempat penyewaan papan selancar dan kursus singkat yang diajarkan oleh instruktur lokal berpengalaman. Selain itu, pengunjung juga bisa menikmati berbagai aktivitas seperti bermain voli pantai, berjemur, naik kuda di tepi pantai, hingga pijat tradisional Bali yang dilakukan langsung di atas pasir.

      Fasilitas di sekitar Pantai Kuta sangat lengkap. Terdapat hotel berbintang hingga penginapan murah, pusat oleh-oleh khas Bali, warung makan tradisional, hingga restoran internasional. Kawasan ini juga dekat dengan berbagai tempat wisata lainnya, seperti Waterbom Bali, Beachwalk Shopping Center, dan Pantai Legian yang bersebelahan.

      Meskipun Pantai Kuta kini dikenal sebagai daerah yang ramai dan padat, nuansa liburan tropis masih bisa dirasakan, terutama saat berjalan-jalan di pagi hari atau menikmati suara deburan ombak di malam hari. Suasana yang dinamis namun tetap menyimpan sisi tenang menjadikan Pantai Kuta tempat yang cocok untuk berbagai kalangan—mulai dari backpacker, pasangan bulan madu, hingga keluarga yang berlibur bersama anak-anak.

      Dengan kombinasi antara keindahan alam, keramahan penduduk lokal, dan fasilitas modern, Pantai Kuta tetap menjadi destinasi wajib bagi siapa pun yang berkunjung ke Bali.
    ",
            "created_at" => "[24/05/25]"
        ];
        return view('blog-single', $data);
    }

    public function destinations()
    {
        return view('destination');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $data = [
            'body' => 'Kami adalah tim yang berkomitmen untuk menghadirkan pengalaman pencarian wisata yang inovatif dan efisien. Dengan teknologi full-text search, Anda dapat menemukan informasi tempat wisata berdasarkan nama, lokasi, kategori, atau bahkan kata kunci spesifik yang Anda inginkan'
        ];
        return view('about', $data);
    }
}
