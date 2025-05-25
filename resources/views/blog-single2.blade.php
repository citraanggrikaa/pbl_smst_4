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
      <h1 class="text-4xl font-bold mb-2">Uluwatu</h1>

      {{-- Alamat Destinasi --}}
      <h5 class="text-lg text-gray-600 mb-6">Desa Pecatu, Kecamatan Kuta Selatan, Kabupaten Badung, Bali.</h5>
    </div>

    {{-- Gambar Destinasi --}}
    <div class="d-flex justify-content-center">
      <img src="{{ asset('images/uluwatu.jpg') }}" alt="Gambar Destinasi"
        class="rounded-lg shadow-md mb-4 img-fluid"
        style="max-width: 600px; width: 100%; height: auto;" />
    </div>



    {{-- Deskripsi --}}
    <div class="text-justify text-gray-700 leading-relaxed mb-24">
      <p>[24/05/25]
      Uluwatu adalah salah satu destinasi wisata unggulan di ujung selatan Pulau Bali, tepatnya di wilayah Kecamatan Kuta Selatan, Kabupaten Badung. Terkenal dengan pemandangan tebing tinggi yang langsung menghadap ke Samudra Hindia, Uluwatu menawarkan pesona alam yang luar biasa indah, suasana yang tenang, dan kekayaan budaya yang memikat. Nama “Uluwatu” berasal dari kata "ulu" yang berarti "ujung tanah" dan "watu" yang berarti "batu" atau "karang", sangat menggambarkan letak geografisnya yang berada di atas batu karang besar di tepi laut.

Salah satu daya tarik utama kawasan ini adalah Pura Luhur Uluwatu, sebuah pura suci umat Hindu yang berdiri megah di atas tebing setinggi sekitar 70 meter dari permukaan laut. Pura ini merupakan salah satu dari enam pura utama (Sad Kahyangan) di Bali dan memiliki nilai spiritual yang sangat tinggi. Selain sebagai tempat ibadah, pura ini juga menjadi spot favorit wisatawan karena menawarkan panorama laut lepas yang dramatis, terutama saat matahari terbenam. Sunset di Uluwatu sangat ikonik, dengan warna langit keemasan yang berpadu dengan siluet pura dan laut biru yang luas.

Setiap sore, di area amfiteater dekat pura, pengunjung bisa menyaksikan pertunjukan Tari Kecak Uluwatu. Tarian ini tidak hanya memikat secara visual, tetapi juga menyuguhkan cerita epik dari Ramayana yang dibawakan dengan iringan suara "cak" khas, tanpa alat musik. Penampilan para penari berlatar langit senja dan deburan ombak menjadikan pengalaman ini sangat magis dan tak terlupakan.

Uluwatu juga dikenal sebagai surga bagi para peselancar dunia, karena ombaknya yang besar dan menantang. Pantai-pantai seperti Padang Padang, Bingin, Dreamland, Suluban (Blue Point), dan Nyang Nyang menjadi favorit para surfer profesional dari berbagai negara. Meskipun beberapa pantai memiliki akses yang menantang, keindahan yang ditawarkan sebanding dengan usaha untuk mencapainya.

Selain pantai dan pura, kawasan Uluwatu juga memiliki banyak resor mewah, vila privat, beach club, dan restoran eksklusif yang menyajikan pemandangan laut dari ketinggian. Tempat-tempat seperti Single Fin, El Kabron, dan Sundays Beach Club menjadi pilihan populer untuk menikmati makanan, minuman, dan suasana tropis yang mewah.

Bagi mereka yang mencari ketenangan, Uluwatu menyuguhkan suasana yang lebih santai dan alami dibandingkan dengan keramaian Kuta atau Seminyak. Lanskap yang berbukit, tebing kapur putih, dan udara laut yang segar menjadikan Uluwatu tempat yang sempurna untuk beristirahat, menyatu dengan alam, atau hanya sekadar menikmati matahari terbenam yang megah.
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