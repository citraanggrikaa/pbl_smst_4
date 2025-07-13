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



    <section
        style="min-height: 100vh; display: flex; align-items: center; justify-content: center; background-image: url('{{ asset('images/bg1.webp') }}'); background-size: cover; background-position: center; padding: 60px 0;">

        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center px-4 px-md-5 py-4 py-md-5 shadow-lg"
            style="background: rgba(255, 255, 255, 0.82); max-width: 1200px; width: 100%; border-radius: 20px; gap: 3rem;">

            <!-- Gambar -->
            <div class="rounded shadow"
                style="background-image: url('{{ asset('images/bg1.webp') }}'); width: 100%; max-width: 340px; height: 440px; background-size: cover; background-position: center;">
            </div>

            <!-- Teks -->
            <div class="mt-4 mt-md-0" style="max-width: 700px;">
                <h2 class="mb-4"
                    style="font-size: 2.2rem; font-weight: bold; color: #fffff; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                    About Us
                </h2>
                <div style="font-size: 1.05rem; color: #fffff; text-shadow: 0 1px 3px rgba(0,0,0,0.15); font-weight: 500;">
                    <p style="text-align: justify;">
                        Welcome to the future of travel discovery. We're a team of travel lovers and tech innovators
                        dedicated to one simple idea: finding your perfect destination should be effortless and personal.
                    </p>
                    <p style="text-align: justify;">
                        Forget keywords. Our platform is powered by Multilingual Semantic Search, allowing you to describe
                        what you're looking for in your own words and language. Simply ask a question like, "Where can I
                        find authentic street food away from the tourist crowds?" and we'll understand.
                    </p>
                    <p style="text-align: justify;">
                        Once you're there, our Multilingual AI Tour Guide becomes your pocket-sized expert. Ask it anything
                        about your location and get instant answers, making every visit richer and more informed.
                    </p>
                    <p style="text-align: justify;">
                        We blend the art of travel with the science of AI to help you create truly unforgettable memories.
                        Your perfect journey starts with a simple conversation. We're here to listen.
                    </p>
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
