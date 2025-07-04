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

<section style="padding: 60px 0 0 0; background-color: transparent;">
  <div style="max-width: 700px; margin: 0 auto; padding: 0 15px; text-align: center;">
    <h2 style="font-size: 38px; color: #222; font-weight: bold; margin-bottom: 10px;">Contact Us</h2>
    <p style="color: #444; font-size: 18px; margin-bottom: 32px;">Any questions or remarks? Just write us a message!</p>
    <form action="{{ route('contact.send') }}" method="POST" style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-bottom: 0;">
      @csrf
      <input type="text" name="Name" placeholder="Enter your Name" style="flex:1 1 220px; min-width: 200px; max-width: 300px; padding: 12px 16px; border-radius: 20px; border: 1px solid #ddd; font-size: 16px; outline: none; margin-bottom: 8px;" required>
      <input type="text" name="Suggestion" placeholder="Enter your Suggestion" style="flex:1 1 180px; min-width: 160px; max-width: 220px; padding: 12px 16px; border-radius: 20px; border: 1px solid #ddd; font-size: 16px; outline: none; margin-bottom: 8px;" required>
      <div style="flex-basis: 100%;"></div>
      <button type="submit" style="width: 100%; max-width: 400px; margin: 0 auto; background: #232830; color: #fff; border: 2px solid #232830; border-radius: 8px; padding: 12px 0; font-size: 24px; font-weight: 500; letter-spacing: 1px; cursor: pointer; transition: background 0.2s;">SUBMIT</button>
    </form>
  </div>
  <div style="background: transparent; padding: 20px 0 0 0; margin-top: 0;">
    <div style="max-width: 1400px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: center; gap: 0; padding: 20px;">
      <div style="flex:1 1 260px; min-width: 220px; background: #f7f7f7; margin: 20px; border-radius: 0 0 0 0; text-align: center; padding: 20px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 16px;">
          <div style="background: #232830; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-envelope" style="font-size: 28px; color: #fff;"></i>
          </div>
        </div>
        <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 8px;">EMAIL</h4>
        <div style="color: #444; font-size: 15px;">pesonabali@gmail.com</div>
      </div>
      <div style="flex:1 1 260px; min-width: 220px; background: #f7f7f7; margin: 20px; border-radius: 0 0 0 0; text-align: center; padding: 20px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 16px;">
          <div style="background: #232830; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-phone" style="font-size: 28px; color: #fff;"></i>
          </div>
        </div>
        <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 8px;">PHONE</h4>
        <div style="color: #444; font-size: 15px;">+62 812 3456 7890</div>
      </div>
      <div style="flex:1 1 260px; min-width: 220px; background: #f7f7f7; margin: 20px; border-radius: 0 0 0 0; text-align: center; padding: 20px;">
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 16px;">
          <div style="background: #232830; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-map-marker-alt" style="font-size: 28px; color: #fff;"></i>
          </div>
        </div>
        <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 8px;">OUR OFFICE LOCATION</h4>
        <div style="color: #444; font-size: 15px;">Nangka street, Denpasar, Bali</div>
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
