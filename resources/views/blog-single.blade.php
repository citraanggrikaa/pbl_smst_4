@extends('layouts.main')

@section('title', 'Blog Single')

@section('content')
    @push('css')
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endpush

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

   @push('script')
        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('js/scrollax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            window.addEventListener('scroll', () => {
                const nav = document.querySelector('nav.navbar');
                const links = nav.querySelectorAll('.nav-link, .navbar-brand, button');

                if (window.scrollY > 30) {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    nav.style.backdropFilter = 'blur(10px)';
                    nav.style.webkitBackdropFilter = 'blur(10px)';
                    links.forEach(el => {
                        el.classList.remove('text-dark', 'text-white');
                        el.style.color = '#001f3f'; // Navy
                    });
                } else {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    nav.style.backdropFilter = 'blur(10px)';
                    nav.style.webkitBackdropFilter = 'blur(10px)';
                    links.forEach(el => {
                        el.style.color = '';
                        el.classList.remove('text-white');
                        el.classList.add('text-dark');
                    });
                }
            });
        </script>
        <script>
            document.getElementById('toggleSearch').addEventListener('click', function() {
                const bar = document.getElementById('searchBar');
                bar.style.display = bar.style.display === 'none' ? 'flex' : 'none';
            });
        </script>
    @endpush
@endsection
