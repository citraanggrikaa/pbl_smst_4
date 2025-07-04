@extends('layouts.main')

@section('title', 'Destination')

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
        <link rel="stylesheet" href="{{ asset('css/pagination-custom.css') }}">
    @endpush

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <div class="hero-wrap js-fullheight" style="background-image: url('images/gwk.jpeg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
      data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>

        <!-- Search Bar -->
     <form action="#" class="search-destination-form d-flex justify-content-center mt-4">
  <div class="form-group d-flex" style="max-width: 600px; width: 100%;">
    <input type="text" class="form-control form-control-lg"
      placeholder="Search..."
      style="border-top-left-radius: 30px; border-bottom-left-radius: 30px; border-top-right-radius: 0; border-bottom-right-radius: 0; box-shadow: none; border: none; padding: 12px 20px;">
    
    <button type="submit"
      class="d-flex align-items-center justify-content-center"
      style="background-color: white; border: none; border-top-right-radius: 30px; border-bottom-right-radius: 30px; padding: 0 20px;">
      <i class="fas fa-search" style="color: #d6336c;"></i>
    </button>
  </div>
</form>



      </div>
    </div>
  </div>
</div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($destinations as $d)
                            <div class="col-md-4 ftco-animate mb-4">
                                <div class="destination">
                                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(images/kuta.jpg);">
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
                                        <p> {{ $d->address }}
                                        </p>
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
                        <div class="col-12 d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 gap-2">
                            <div class="w-100 w-md-auto d-flex justify-content-center justify-content-md-center">
                                @php
                                    $elements = $destinations->links()->elements[0] ?? [];
                                @endphp
                                <!-- Custom pagination style moved to external CSS file -->
                                <nav style="width:100%; display:flex; justify-content:center;">
                                    <ul class="pagination mb-0" style="margin-left:auto; margin-right:auto;">
                                        @foreach ($destinations->getUrlRange(1, $destinations->lastPage()) as $page => $url)
                                            <li class="page-item{{ $page == $destinations->currentPage() ? ' active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .col-md-8 -->
        </div>
        </div>
    </section> <!-- .section -->

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
