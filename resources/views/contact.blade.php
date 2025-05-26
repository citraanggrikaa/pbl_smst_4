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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/gwk.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

<!-- Tambahkan ini di bagian <head> halaman kamu -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
<section style="padding: 40px 0; background-color: #f0f0f0;">
  <div style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 30px;">
      <h2>Contact Information</h2>
    </div>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-map-marker-alt" style="color:#ff5e14; margin-right: 8px;"></i>
            Address
          </h4>
          <p>Nangka street, Denpasar, Bali, Indonesia</p>
        </div>
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-phone" style="color:#28a745; margin-right: 8px;"></i>
            Phone
          </h4>
          <p>+62 812 345 678 910</p>
        </div>          
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-envelope" style="color:#007bff; margin-right: 8px;"></i>
            Email
          </h4>
          <p>pesonabali@gmail.com</p>
        </div>
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-globe" style="color:#6f42c1; margin-right: 8px;"></i>
            Website
          </h4>
          <p>pesonabali.com</p>
        </div>
      </div>
    </div>
  </div>
</section>


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
