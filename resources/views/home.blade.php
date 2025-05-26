@php
$backgroundUrl = asset('images/bali.jpg');
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


<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="hero-wrap js-fullheight position-relative" style="z-index: 1; overflow: hidden;">
	<!-- Blur Background -->
	<div style="position: absolute; inset: 0;
    background-image: url('{{ $backgroundUrl }}');
    background-size: cover;
    background-position: center;
    filter: blur(3px);
    opacity: 0.8;
    z-index: 0;">
	</div>


	<!-- Konten Utama -->
	<div class="container position-relative" style="z-index: 2;">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-4" style="font-size: 48px; color: #001f3f;">
					<strong>Selamat Datang Di Pesona Bali</strong><br>
					Temukan Keindahan, Ciptakan Kenangan!
				</h1>

				<!-- Search Bar -->
				<div class="d-flex justify-content-center mt-5 px-3">
					<form action="{{ route('search.destination') }}" method="GET" class="w-100" style="max-width: 700px;">
						<div class="d-flex align-items-center px-4 py-2 mx-auto"
							style="background: white; border-radius: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); height: 54px;">

							<input type="text" id="searchInput"
								name="query"
								class="form-control border-0"
								placeholder="Search..."
								style="border-radius: 30px; box-shadow: none; outline: none;">

							<button type="submit" class="btn p-0 border-0 bg-transparent">
								<i class="fas fa-search text-danger"></i>
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
		<div class="row d-md-flex">
			<div class="col-md-6 ftco-animate img about-image" style="background-image: url(images/bg1.jpg);">
			</div>
			<div class="col-md-6 ftco-animate p-md-5">
				<div class="row">
					<div class="col-md-12 nav-link-wrap mb-5">
						<div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						</div>
					</div>
					<div class="col-md-12 d-flex align-items-center">

						<div class="tab-content ftco-animate" id="v-pills-tabContent">

							<div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
								<div>
									<h1 class="mb-4">About Us</h1>
									<p style="text-align: justify;">
										Kami adalah tim yang berkomitmen untuk menghadirkan pengalaman pencarian wisata yang inovatif dan efisien. Dengan teknologi full-text search, Anda dapat menemukan informasi tempat wisata berdasarkan nama, lokasi, kategori, atau bahkan kata kunci spesifik yang Anda inginkan.
									</p>
									<p style="text-align: justify;">
										Platform kami dirancang untuk memberikan kemudahan dalam menemukan destinasi wisata yang sesuai dengan preferensi Anda. Dengan fitur pencarian yang canggih, Anda dapat menjelajahi berbagai tempat menarik di Bali dengan cepat dan mudah.
									</p>
									<p style="text-align: justify;">
										Tim kami terdiri dari para ahli di bidang teknologi informasi dan pariwisata, yang bekerja sama untuk memberikan pengalaman terbaik bagi pengguna. Kami percaya bahwa setiap perjalanan adalah kesempatan untuk menciptakan kenangan tak terlupakan, dan kami ingin membantu Anda mewujudkannya.
									</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-start mb-5 pb-3">
			<div class="col-md-12">
				<h2 class="mb-4 text-4xl font-bold">Popular Destinations</h2>
			</div>
		</div>
		<div class="row">
			@foreach ($destinations->take(3) as $d)
			<div class="col-md-4 ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center"
						style="background-image: url({{ asset('images/' . ($d->image ?? 'kuta.jpg')) }}); 
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