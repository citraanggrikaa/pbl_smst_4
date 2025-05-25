<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detail Destinasi</title>
  <!-- CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- Font Awesome untuk ikon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Tambahan styling untuk navbar */
    .navbar {
      padding: 1rem 0;
    }

    .navbar-brand {
      font-size: 1.5rem;
      letter-spacing: 1px;
    }

    .nav-link {
      font-weight: 500;
      margin: 0 0.5rem;
    }
  </style>
</head>

<body>
  {{-- Panggil Navbar --}}
  @include('components.navbar')

  <main class="container px-3 pt-[20px] pb-5">
    {{-- Judul & Alamat di Tengah --}}
    <div class="text-center">

      {{-- Judul Destinasi --}}
      <h1 class="text-4xl font-bold mb-2">Pantai Kuta</h1>

      {{-- Alamat Destinasi --}}
      <h5 class="text-lg text-gray-600 mb-6">Desa Kuta, Kecamatan Kuta, Kabupaten Badung, Provinsi Bali, Indonesia</h5>
    </div>

    {{-- Gambar Destinasi --}}
    <div class="d-flex justify-content-center">
      <img src="{{ asset('images/kuta1.jpg') }}" alt="Gambar Destinasi"
        class="rounded-lg shadow-md mb-4 img-fluid"
        style="max-width: 600px; width: 100%; height: auto;" />
    </div>



    {{-- Deskripsi --}}
    <div class="text-justify text-gray-700 leading-relaxed mb-24">
      <p>[24/05/25]
       Pantai Kuta adalah salah satu ikon pariwisata paling terkenal di Pulau Bali, Indonesia. Terletak di wilayah Kuta, Kabupaten Badung, pantai ini telah menjadi tujuan utama wisatawan lokal maupun mancanegara selama beberapa dekade. Dikenal dengan garis pantainya yang panjang dan landai, pasir putih yang halus, serta ombak laut yang cocok untuk berselancar, Pantai Kuta menawarkan keindahan alam tropis yang sulit ditandingi.

      Dulu, kawasan ini hanyalah sebuah desa nelayan kecil yang tenang dan sepi. Namun, sejak tahun 1970-an, seiring dengan berkembangnya industri pariwisata di Bali, Pantai Kuta berubah menjadi salah satu destinasi paling sibuk dan hidup di pulau ini. Kini, Kuta dikenal sebagai pusat hiburan dan rekreasi yang dipenuhi hotel, restoran, bar, pusat perbelanjaan, serta berbagai tempat hiburan malam.

      Salah satu daya tarik utama Pantai Kuta adalah pemandangan matahari terbenamnya yang spektakuler. Setiap sore, wisatawan berkumpul di tepi pantai untuk menyaksikan langit berubah warna menjadi jingga keemasan, menciptakan suasana romantis dan damai. Banyak fotografer dan pecinta alam datang ke sini hanya untuk mengabadikan momen sunset yang memukau.

      Pantai ini juga merupakan surga bagi para peselancar pemula, karena ombaknya cukup besar namun masih aman untuk belajar. Tersedia banyak tempat penyewaan papan selancar dan kursus singkat yang diajarkan oleh instruktur lokal berpengalaman. Selain itu, pengunjung juga bisa menikmati berbagai aktivitas seperti bermain voli pantai, berjemur, naik kuda di tepi pantai, hingga pijat tradisional Bali yang dilakukan langsung di atas pasir.

      Fasilitas di sekitar Pantai Kuta sangat lengkap. Terdapat hotel berbintang hingga penginapan murah, pusat oleh-oleh khas Bali, warung makan tradisional, hingga restoran internasional. Kawasan ini juga dekat dengan berbagai tempat wisata lainnya, seperti Waterbom Bali, Beachwalk Shopping Center, dan Pantai Legian yang bersebelahan.

      Meskipun Pantai Kuta kini dikenal sebagai daerah yang ramai dan padat, nuansa liburan tropis masih bisa dirasakan, terutama saat berjalan-jalan di pagi hari atau menikmati suara deburan ombak di malam hari. Suasana yang dinamis namun tetap menyimpan sisi tenang menjadikan Pantai Kuta tempat yang cocok untuk berbagai kalangan—mulai dari backpacker, pasangan bulan madu, hingga keluarga yang berlibur bersama anak-anak.

      Dengan kombinasi antara keindahan alam, keramahan penduduk lokal, dan fasilitas modern, Pantai Kuta tetap menjadi destinasi wajib bagi siapa pun yang berkunjung ke Bali.
      </p>
    </div>
  </main>

  {{-- Panggil Footer --}}
  @include('components.footer')

  <!-- JavaScript -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>