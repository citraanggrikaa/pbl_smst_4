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
    @endpush

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="hero-wrap js-fullheight" style="background-image: url('images/gwk.jpeg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
			</div>
			
		</div>
	</div>
</div>


<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/kuta1.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pantai Kuta</a></h3>
									</div>
								</div>
								<p> Terkenal dengan pasir putihnya yang lembut, ombak yang cocok untuk berselancar.</p>
								<hr>
								<p class="bottom-area flex justify-center items-center w-full">
									<span>
										<a href="{{ route('destination.single', ['slug' => 'blog-single']) }}" class="btn btn-success">Read More</a>
									</span>
								</p>

							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/uluwatu.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Uluwatu</a></h3>
									</div>
								</div>
								<p>Pura di tebing dengan pemandangan laut yang menakjubkan.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span>
										<a href="{{ route('destination.single', ['slug' => 'blog-single2']) }}" class="btn btn-success">Read More</a>
									</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/ubud.jpeg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Ubud</a></h3>
									</div>
								</div>
								<p>Pusat seni dan budaya Bali, dikelilingi sawah dan hutan.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
								<span>
									<a href="{{ route('destination.single', ['slug' => 'blog-single3']) }}" class="btn btn-success">Read More</a>
								</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/monkey.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Monkey Forest</a></h3>
									</div>
								</div>
								<p>Hutan lindung dengan kera ekor panjang dan pura suci.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/jatiluwih.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Jatiluwih</a></h3>
									</div>
								</div>
								<p>Terkenal dengan panorama alamnya yang hijau dan sistem irigasi tradisional subak.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>

							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/seminyak.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Seminyak</a></h3>
									</div>
								</div>
								<p>Seminyak adalah kawasan populer di Bali yang terkenal dengan pantainya yang indah.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/tanah_lot.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Tanah Lot</a></h3>
									</div>
								</div>
								<p>Terkenal dengan pura di atas batu karang besar di tengah laut.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/lovina.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pantai Lovina</a></h3>
									</div>
								</div>
								<p>Terkenal dengan atraksi lumba-lumba di pagi hari.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/gitgit.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Air Terjun Gitgit</a></h3>
									</div>
								</div>
								<p>Air terjun yang populer, aksesnya mudah dijangkau dan keindahan alamnya.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/taman_ujung.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Taman Ujung</a></h3>
									</div>
								</div>
								<p>Taman ini memiliki kolam-kolam besar, bangunan bergaya Bali-Eropa.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/besakih.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pura Besakih</a></h3>
									</div>
								</div>
								<p>Pura terbesar dan paling suci di Bali, terletak di lereng Gunung Agung. </p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/kelingking.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pantai Kelingking</a></h3>
									</div>
								</div>
								<p>Terkenal karena tebingnya menyerupai jari kelingking dan punggung dinosaurus.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/lembongan.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Nusa Lembongan</a></h3>
									</div>
								</div>
								<p>terkenal dengan pantai berpasir putih, air laut jernih, dan terumbu karang yang indah. </p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/penglipuran.jpeg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Penglipuran</a></h3>
									</div>
								</div>
								<p>erkenal karena kebersihan, tata ruang tradisional, dan pelestarian budaya Bali.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bali2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pura Ulun Danu Batur</a></h3>
									</div>
								</div>
								<p>Salah satu pura terbesar dan terpenting di Bali, terletak di Kintamani, dekat Danau Batur.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/makepung.png);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Festival Makepung</a></h3>
									</div>
								</div>
								<p>Tradisi balap kerbau khas Kabupaten Jembrana, yang menjadi ikon budaya lokal.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/jembrana.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Taman Nasional Bali Barat</a></h3>
									</div>
								</div>
								<p>taman ini melindungi beragam ekosistem darat dan laut, termasuk hutan hujan tropis.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/sanur.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Pantai Sanur</a></h3>
									</div>
								</div>
								<p>Pantai indah terkenal dengan pemandangan matahari terbit yang memukau.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/renon.jpeg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Monumen Bajra Sandhi</a></h3>
									</div>
								</div>
								<p>Monumen Bajra Sandhi adalah simbol perjuangan rakyat Bali, terletak di Denpasar. </p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/tamblingan.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Danau Tamblingan</a></h3>
									</div>
								</div>
								<p>Danau ini dikelilingi oleh hutan tropis lebat yang menjadi habitat bagi flora dan fauna.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/tegallalang.jpeg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Tegallalang</a></h3>
									</div>
								</div>
								<p>Rerkenal dengan keindahan sawah teraseringnya yang hijau dan rapi.</p>
								<hr>
								<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
									<span><a href="#" class="btn btn-success">Read More</a></span>
								</p>
							</div>
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
