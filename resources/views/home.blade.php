@php
    $backgroundUrl = asset('images/bali.webp');
@endphp

@extends('layouts.main')

@section('title', 'Home')

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


    <div id="dify-chat-window" class="shadow-lg rounded">

        <div class="">
            {{-- <h6 class="mb-0">Pemandu Wisata Pribadi Anda</h6> --}}
            <button id="close-dify-chat-btn" type="button" class="close">
                <span>&times;</span>
            </button>
        </div>

        <div class="chat-body">
            <iframe src="https://udify.app/chatbot/UvaJDZsX51J9CbpL" style="width: 100%; height: 100%; border: none;"
                frameborder="0" allow="microphone">
            </iframe>
        </div>
    </div>

    <style>
        /* Gaya untuk Tombol Mengambang (FAB) */
        #open-dify-chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            z-index: 1000;
            transition: transform 0.2s ease-in-out;
        }

        #open-dify-chat-btn:hover {
            transform: scale(1.1);
        }

        /* Gaya untuk Jendela Chat Pop-up */
        #dify-chat-window {
            /* Awalnya disembunyikan dan di luar layar */
            display: none;
            opacity: 0;
            transform: translateY(20px);

            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 350px;
            /* Ukuran default untuk mobile */
            max-width: 90%;
            height: 500px;
            /* Ukuran default untuk mobile */
            background-color: white;
            z-index: 999;
            flex-direction: column;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        /* Style untuk membuatnya terlihat saat aktif */
        #dify-chat-window.active {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }

        /* Gaya untuk Header Chat */
        .chat-header {
            background-color: #001f3f;
            color: white;
            padding: 0.75rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .chat-header .close {
            color: white;
            opacity: 0.9;
            font-size: 1.5rem;
        }

        /* Gaya untuk Body Chat (Container Iframe) */
        .chat-body {
            flex-grow: 1;
            padding: 0;
            /* Hapus padding agar iframe pas */
            overflow: hidden;
            /* Sembunyikan overflow dari iframe */
        }

        /* Gaya Responsif untuk Layar Desktop */
        @media (min-width: 768px) {
            #open-dify-chat-btn {
                bottom: 30px;
                right: 30px;
            }

            #dify-chat-window {
                width: 400px;
                /* Lebar lebih besar untuk desktop */
                height: 650px;
                /* Tinggi lebih besar untuk desktop */
                bottom: 110px;
                right: 30px;

            }

        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const openBtn = document.getElementById('open-dify-chat-btn');
            const closeBtn = document.getElementById('close-dify-chat-btn');
            const chatWindow = document.getElementById('dify-chat-window');

            openBtn.addEventListener('click', () => {
                chatWindow.classList.add('active');
            });

            closeBtn.addEventListener('click', () => {
                chatWindow.classList.remove('active');
            });
        });
    </script>


    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <div class="hero-wrap js-fullheight position-relative" style="z-index: 1; overflow: hidden;">
        <!-- Blur Background -->
        <div
            style="position: absolute; inset: 0;
    background-image: url('{{ $backgroundUrl }}');
    background-size: cover;
    background-position: center;
    filter: blur(3px);
    opacity: 0.8;
    z-index: 0;">
        </div>


        <!-- Konten Utama -->
        <div class="container position-relative" style="z-index: 2;">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" style="font-size: 48px; color: #001f3f;">
                        <strong>Selamat Datang Di Pesona Bali</strong><br>
                        Temukan Keindahan, Ciptakan Kenangan!
                    </h1>

                    <!-- Search Bar -->
                    <div class="d-flex justify-content-center mt-5 px-3">
                        <!-- Search Bar -->
                        <form action="{{ route('search') }}" method="GET" class="w-100" style="max-width: 700px;">
                            <div class="form-group d-flex" style="max-width: 600px; width: 100%;">

                                <!-- TAMBAHKAN name="query" DI SINI -->
                                <input type="text" name="query" class="form-control form-control-lg"
                                    placeholder="Search..."
                                    style="border-top-left-radius: 30px; border-bottom-left-radius: 30px; border-top-right-radius: 0; border-bottom-right-radius: 0; box-shadow: none; border: none; padding: 12px 20px;">

                                <button type="submit" class="d-flex align-items-center justify-content-center"
                                    style="background-color: rgb(231, 252, 219); border: none; border-top-right-radius: 30px; border-bottom-right-radius: 30px; padding: 0 20px;">
                                    <i class="fas fa-search" style="color: #001f3f;"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                    <!-- End Search Bar -->

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4 text-4xl font-bold">Popular Destinations</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($destinations->take(3) as $d)
                    <div class="col-md-4 ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                style="background-image: url({{ asset('images/' . 'kuta.webp') }}); 
                               height: 300px;
                               background-size: cover;
                               background-position: center;">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">{{ $d->title }}</a></h3>
                                    </div>
                                </div>
                                <p>{{ $d->address }}</p>
                                <hr>
                                <p class="bottom-area flex justify-center items-center w-full">
                                    <span>
                                        <a href="{{ route('destination.single', ['id' => $d->id]) }}"
                                            class="btn btn-success">Read More</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="text-3xl fw-bold mb-2">Gallery</h2>
                    <p class="text-muted">Explore our photo collection from various destinations</p>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <img src="images/monkey.webp" class="card-img-top rounded" alt="Image 1">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <img src="images/jatiluwih.webp" class="card-img-top rounded" alt="Image 2">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <img src="images/penglipuran.webp" class="card-img-top rounded" alt="Image 3">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <img src="images/ubud.webp" class="card-img-top rounded" alt="Image 4">
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
