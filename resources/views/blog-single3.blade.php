@extends('layouts.main')

@section('title', 'About')

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
      <h1 class="text-4xl font-bold mb-2">Ubud</h1>

      {{-- Alamat Destinasi --}}
      <h5 class="text-lg text-gray-600 mb-6">Ubud, Kabupaten Gianyar, Bali.</h5>
    </div>

    {{-- Gambar Destinasi --}}
    <div class="d-flex justify-content-center">
      <img src="{{ asset('images/ubud.jpeg') }}" alt="Gambar Destinasi"
        class="rounded-lg shadow-md mb-4 img-fluid"
        style="max-width: 600px; width: 100%; height: auto;" />
    </div>



    {{-- Deskripsi --}}
    <div class="text-justify text-gray-700 leading-relaxed mb-24">
      <p> [25/05/25]
   Ubud adalah sebuah kawasan di Kabupaten Gianyar, Bali, yang dikenal sebagai pusat seni, budaya, dan spiritualitas. Terletak di dataran tinggi dengan lanskap sawah hijau yang luas, lembah sungai yang asri, dan hutan tropis yang rimbun, Ubud menawarkan suasana tenang dan damai yang sangat berbeda dari kawasan wisata pantai seperti Kuta atau Seminyak.

Nama “Ubud” berasal dari kata “ubad” dalam Bahasa Bali yang berarti “obat”, karena daerah ini dahulu dikenal memiliki banyak tanaman obat dan ramuan tradisional. Kini, Ubud menjadi tempat yang dicari wisatawan dari seluruh dunia yang ingin menemukan ketenangan, kesehatan holistik, serta pengalaman budaya yang otentik.

Salah satu daya tarik utama Ubud adalah kekayaan seni dan budaya yang sangat kental. Di sini, kamu bisa menemukan banyak galeri seni, sanggar lukis, museum, dan pertunjukan tari tradisional Bali hampir setiap malam. Museum terkenal seperti Museum Puri Lukisan, Museum Blanco, dan ARMA (Agung Rai Museum of Art) memamerkan karya-karya seniman Bali klasik hingga kontemporer. Jalan-jalan di pusat kota Ubud juga dipenuhi toko kerajinan tangan, butik etnik, dan pasar seni yang menjual lukisan, patung, kain batik, hingga perhiasan khas Bali.

Tak kalah menarik, Ubud juga merupakan rumah bagi Puri Saren Agung (Puri Ubud) — istana kerajaan tempat tinggal keluarga kerajaan Ubud. Bangunan ini merupakan contoh arsitektur Bali yang indah dan menjadi lokasi utama pertunjukan tari setiap malam.

Ubud juga terkenal akan keindahan alamnya. Di sekelilingnya terdapat hamparan sawah yang menenangkan seperti Tegalalang Rice Terrace, hutan tropis di Sacred Monkey Forest, dan aliran sungai jernih seperti Sungai Ayung yang menjadi lokasi populer untuk aktivitas rafting. Bagi pecinta alam dan petualangan, Ubud menawarkan banyak jalur trekking, bersepeda, dan meditasi di alam terbuka.

Tak hanya budaya dan alam, Ubud juga menjadi pusat wellness dan healing. Banyak wisatawan datang untuk mengikuti yoga retreat, meditasi, hingga pengobatan tradisional Bali. Tempat-tempat seperti Yoga Barn atau Radiantly Alive sangat populer bagi mereka yang ingin memulihkan tubuh dan pikiran. Selain itu, banyak spa alami dan restoran organik yang mendukung gaya hidup sehat.

Suasana di Ubud sangat bersahabat bagi pelancong yang mencari pengalaman yang lebih mendalam, baik untuk eksplorasi diri, belajar budaya, atau sekadar menikmati waktu berkualitas jauh dari hiruk pikuk kota. Ubud juga dikenal sebagai lokasi utama dalam film Eat Pray Love, yang memperkuat citranya sebagai tempat pencarian makna hidup.
      </p>
    </div>
  </main>

  {{-- Panggil Footer --}}
  @include('components.footer')

  <!-- JavaScript -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html> @push('script')
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
