@php
$backgroundUrl = asset('images/bali2.jpg');
@endphp

@include('components.navbar')

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="hero-wrap js-fullheight position-relative" style="z-index: 1; overflow: hidden;">
	<!-- Blur Background -->
	<div style="position: absolute; inset: 0;
    background-image: url('{{ $backgroundUrl }}');
    background-size: cover;
    background-position: center;
    filter: blur(3px);
    opacity: 0.6;
    z-index: 0;">
	</div>


	<!-- Konten Utama -->
	<div class="container position-relative" style="z-index: 2;">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-4" style="font-size: 48px; color: #001f3f;">
					<strong>Selamat Datang Di Jelajah Nusantara</strong><br>
					Temukan Keindahan, Ciptakan Kenangan!
				</h1>

				<!-- Search Bar -->
				<div class="d-flex justify-content-center mt-5 px-3">
					<form action="" method="post" class="w-100" style="max-width: 700px;">
						<div class="d-flex align-items-center px-3 py-2" style="background: white; border-radius: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); height: 54px;">
							<input type="text" id="searchInput"
								class="form-control border-0"
								placeholder="Search..."
								style="border-radius: 30px; box-shadow: none; outline: none;">
							<button type="button" id="voiceBtn" class="btn p-0 mx-3 border-0 bg-transparent">
								<i class="fas fa-microphone text-dark"></i>
							</button>
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
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm col-md-6 col-lg ftco-animate">
				<div class="destination">
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/kuta.jpg);">
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
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
						</p>

					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
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
			<div class="col-sm col-md-6 col-lg ftco-animate">
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
						<p>Terkenal dengan tebing curam yang menjulang langsung ke Samudra Hindia.</p>
						<hr>
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
						</p>

					</div>
				</div>
			</div>
			<div class="col-sm col-md-6 col-lg ftco-animate">
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
			<div class="col-sm col-md-6 col-lg ftco-animate">
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
		</div>
	</div>
</section>

@include('components.footer')