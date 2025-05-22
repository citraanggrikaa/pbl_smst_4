

	@include('components.navbar')

	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_pantai.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-12 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
					<h1 class="mb-4" style="font-size: 48px;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
						<strong>Selamat Datang Di Jelajah Nusantara</strong><br>
						Temukan Keindahan, Ciptakan Kenangan!
					</h1>

					<!-- Search Bar -->
					<div class="d-flex justify-content-center mt-5 px-3">
						<form action="" method="post" class="w-100" style="max-width: 700px;">
							<div class="d-flex align-items-center px-3 py-2" style="background: white; border-radius: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); height: 54px;">

								<!-- Input -->
								<input type="text" id="searchInput"
									class="form-control border-0"
									placeholder="Search..."
									style="border-radius: 30px; box-shadow: none; outline: none;">

								<!-- Voice Icon -->
								<button type="button" id="voiceBtn" class="btn p-0 mx-3 border-0 bg-transparent">
									<i class="fas fa-microphone text-dark"></i>
								</button>

								<!-- Search Icon -->
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


	<section class="py-16 bg-white">
		<div class="container mx-auto px-6 lg:px-12 flex flex-col lg:flex-row gap-10">

			<!-- Bagian Kiri: 4 Cards -->
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:w-1/2">
				<!-- Card 1 -->
				<div class="bg-cover bg-center h-64 relative rounded-xl overflow-hidden shadow-md" style="background-image: url('/images/services-1.jpg');">
					<div class="absolute top-0 left-0 p-3 bg-orange-500 rounded-br-xl">
						<span class="text-white text-xl"><i class="flaticon-tree"></i></span>
					</div>
					<div class="absolute bottom-0 left-0 p-4 bg-black/40 w-full text-white">
						<h3 class="text-lg font-semibold mb-1">Beach</h3>
						<p class="text-sm">Nikmati pesona ombak dan pasir putih yang menenangkan jiwa di berbagai destinasi pantai eksotis.</p>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="bg-cover bg-center h-64 relative rounded-xl overflow-hidden shadow-md" style="background-image: url('/images/services-2.jpg');">
					<div class="absolute top-0 left-0 p-3 bg-orange-500 rounded-br-xl">
						<span class="text-white text-xl"><i class="flaticon-location"></i></span>
					</div>
					<div class="absolute bottom-0 left-0 p-4 bg-black/40 w-full text-white">
						<h3 class="text-lg font-semibold mb-1">Mountain</h3>
						<p class="text-sm">Rasakan kesejukan dan keindahan alam pegunungan yang menantang dan memukau.</p>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="bg-cover bg-center h-64 relative rounded-xl overflow-hidden shadow-md" style="background-image: url('/images/services-3.jpg');">
					<div class="absolute top-0 left-0 p-3 bg-orange-500 rounded-br-xl">
						<span class="text-white text-xl"><i class="flaticon-guide"></i></span>
					</div>
					<div class="absolute bottom-0 left-0 p-4 bg-black/40 w-full text-white">
						<h3 class="text-lg font-semibold mb-1">Lake</h3>
						<p class="text-sm">Temukan ketenangan di danau alami dengan panorama yang menakjubkan dan udara segar.</p>
					</div>
				</div>

				<!-- Card 4 -->
				<div class="bg-cover bg-center h-64 relative rounded-xl overflow-hidden shadow-md" style="background-image: url('/images/services-4.jpg');">
					<div class="absolute top-0 left-0 p-3 bg-orange-500 rounded-br-xl">
						<span class="text-white text-xl"><i class="flaticon-map"></i></span>
					</div>
					<div class="absolute bottom-0 left-0 p-4 bg-black/40 w-full text-white">
						<h3 class="text-lg font-semibold mb-1">Park</h3>
						<p class="text-sm">Jelajahi taman kota maupun alam yang menawarkan ruang hijau dan aktivitas santai.</p>
					</div>
				</div>
			</div>

			<!-- Bagian Kanan: Teks -->
			<div class="lg:w-1/2 flex flex-col justify-center">
				<h4 class="text-orange-500 text-2xl italic mb-2">Selamat Datang Di Jelajah Nusantara</h4>
				<h2 class="text-4xl font-bold leading-tight mb-6">It's time to start your adventure</h2>

				<p class="text-gray-700 mb-4">
					Kami percaya bahwa setiap perjalanan adalah awal dari petualangan baru. Dengan menjelajahi tempat-tempat menakjubkan di Indonesia, Anda akan menemukan keajaiban budaya, alam, dan keramahan yang tiada duanya.
				</p>
				<p class="text-gray-700 mb-6">
					Jelajah Nusantara hadir untuk membantu Anda menemukan destinasi impian dengan mudah dan cepat. Dari pantai yang memikat hingga pegunungan yang memesona, kami menghadirkan informasi yang akurat dan terkini. Gunakan pencarian kami untuk menelusuri wisata berdasarkan nama, lokasi, kategori, atau kata kunci tertentu. Mari mulai petualangan Anda sekarang dan jadikan setiap perjalanan lebih bermakna.
				</p>

				<a href="/tour" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
					Search Destination
				</a>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-destination">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Featured</span>
					<h2 class="mb-4"><strong>Featured</strong> Destination</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="destination-slider owl-carousel ftco-animate">
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">Paris, Italy</a></h3>
									<span class="listing">15 Listing</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">San Francisco, USA</a></h3>
									<span class="listing">20 Listing</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">Lodon, UK</a></h3>
									<span class="listing">10 Listing</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">Lion, Singapore</a></h3>
									<span class="listing">3 Listing</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">Australia</a></h3>
									<span class="listing">3 Listing</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="destination">
								<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/destination-6.jpg);">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
									<h3><a href="#">Paris, Italy</a></h3>
									<span class="listing">3 Listing</span>
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
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Special Offers</span>
					<h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Paris, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price">$200</span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p class="days"><span>2 days 3 nights</span></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Paris, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price">$200</span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p class="days"><span>2 days 3 nights</span></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Paris, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price">$200</span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p class="days"><span>2 days 3 nights</span></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Paris, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price">$200</span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p class="days"><span>2 days 3 nights</span></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-5.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Paris, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price">$200</span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<p class="days"><span>2 days 3 nights</span></p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<h2 class="mb-4">Some fun facts</h2>
					<span class="subheading">More than 100,000 websites hosted</span>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="100000">0</strong>
									<span>Happy Customers</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="40000">0</strong>
									<span>Destination Places</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="87000">0</strong>
									<span>Hotels</span>
								</div>
							</div>
						</div>
						<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="56400">0</strong>
									<span>Restaurant</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Special Offers</span>
					<h2 class="mb-4"><strong>Popular</strong> Hotels &amp; Rooms</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-1.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Hotel, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">$40<br><small>/night</small></span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Miami, Fl</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-2.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Hotel, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">$40<br><small>/night</small></span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Miami, Fl</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-3.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Hotel, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">$40<br><small>/night</small></span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Miami, Fl</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-4.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Hotel, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">$40<br><small>/night</small></span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Miami, Fl</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/hotel-5.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<div class="d-flex">
								<div class="one">
									<h3><a href="#">Hotel, Italy</a></h3>
									<p class="rate">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-o"></i>
										<span>8 Rating</span>
									</p>
								</div>
								<div class="two">
									<span class="price per-price">$40<br><small>/night</small></span>
								</div>
							</div>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> Miami, Fl</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-md-5 heading-section ftco-animate">
					<span class="subheading">Best Directory Website</span>
					<h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
					<p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 heading-section ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
					<div class="row ftco-animate">
						<div class="col-md-12">
							<div class="carousel-testimony owl-carousel">
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="name">Dennis Green</p>
											<span class="position">Guest from italy</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="name">Dennis Green</p>
											<span class="position">Guest from London</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap d-flex">
										<div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text ml-md-4">
											<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<p class="name">Dennis Green</p>
											<span class="position">Guest from Philippines</span>
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

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Special Offers</span>
					<h2 class="mb-4"><strong>Popular</strong> Restaurants</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-1.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<h3><a href="#">Luxury Restaurant</a></h3>
							<p class="rate">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-o"></i>
								<span>8 Rating</span>
							</p>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Discover</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-2.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<h3><a href="#">Luxury Restaurant</a></h3>
							<p class="rate">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-o"></i>
								<span>8 Rating</span>
							</p>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-3.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<h3><a href="#">Luxury Restaurant</a></h3>
							<p class="rate">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-o"></i>
								<span>8 Rating</span>
							</p>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="destination">
						<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-4.jpg);">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="icon-search2"></span>
							</div>
						</a>
						<div class="text p-3">
							<h3><a href="#">Luxury Restaurant</a></h3>
							<p class="rate">
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star"></i>
								<i class="icon-star-o"></i>
								<span>8 Rating</span>
							</p>
							<p>Far far away, behind the word mountains, far from the countries</p>
							<hr>
							<p class="bottom-area d-flex">
								<span><i class="icon-map-o"></i> San Franciso, CA</span>
								<span class="ml-auto"><a href="#">Book Now</a></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate">
					<span class="subheading">Recent Blog</span>
					<h2><strong>Tips</strong> &amp; Articles</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text p-4 d-block">
							<span class="tag">Tips, Travel</span>
							<h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
							<div class="meta mb-3">
								<div><a href="#">August 12, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text p-4">
							<span class="tag">Culture</span>
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">August 12, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text p-4">
							<span class="tag">Tips, Travel</span>
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">August 12, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_4.jpg');">
						</a>
						<div class="text p-4">
							<span class="tag">Tips, Travel</span>
							<h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<div class="meta mb-3">
								<div><a href="#">August 12, 2018</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section-parallax">
		<div class="parallax-img d-flex align-items-center">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
						<h2>Subcribe to our Newsletter</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
						<div class="row d-flex justify-content-center mt-5">
							<div class="col-md-8">
								<form action="#" class="subscribe-form">
									<div class="form-group d-flex">
										<input type="text" class="form-control" placeholder="Enter email address">
										<input type="submit" value="Subscribe" class="submit px-3">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('components.footer')