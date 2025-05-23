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
      <h1 class="text-4xl font-bold mb-2">Judul Destinasi</h1>

      {{-- Alamat Destinasi --}}
      <p class="text-lg text-gray-600 mb-6">Alamat Destinasi</p>
    </div>


    {{-- Gambar Destinasi --}}
    <div class="d-flex justify-content-center">
      <img src="{{ asset('images/kuta.jpg') }}" alt="Gambar Destinasi"
        class="rounded-lg shadow-md mb-4 img-fluid"
        style="max-width: 1000px; width: 100%; height: auto;" />
    </div>


    {{-- Deskripsi --}}
    <div class="text-justify text-gray-700 leading-relaxed mb-24">
      <p>
        Mari sejenak lupakan rutinitas harian dan bersandar di kursi malas atau tikar yang tergelar
        di hamparan pasir putih. Saat ombak mulai tenang, semburat jingga perlahan menyapu ujung langit,
        lalu menghilang di balik lautan lepas. Momen ketika pantai dan senja menyatu dalam warna keemasan
        menjadi suguhan yang sayang dilewatkan, terutama jika berkunjung ke Pantai Kuta, Bali. Siapa yang
        tak kenal ikon wisata ini? Dalam deretan pantai legendaris Bali, Kuta berdiri sejajar dengan Sanur
        sebagai simbol keindahan Pulau Dewata. Tak heran jika menyebut Bali sebagai "surga terakhir di bumi"
        rasanya tak lengkap tanpa menyebut nama Kuta.
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