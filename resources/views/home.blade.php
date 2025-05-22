@include('components.navbar')

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="hero-wrap js-fullheight" style="background-image: url('images/bali.jpg');">
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
									<p>Kami adalah tim yang berkomitmen untuk menghadirkan pengalaman pencarian wisata yang inovatif dan efisien. Dengan teknologi full-text search, Anda dapat menemukan informasi tempat wisata berdasarkan nama, lokasi, kategori, atau bahkan kata kunci spesifik yang Anda inginkan.</p>
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
					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="icon-search2"></span>
						</div>
					</a>
					<div class="text p-3">
						<div class="d-flex">
							<div class="one">
								<h3><a href="#">Paris, Italy</a></h3>
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
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
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
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
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
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
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
						<hr>
						<p class="bottom-area justify-content-center align-items-center" style="width: 100%;">
							<span><a href="#" class="btn btn-success">Read More</a></span>
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
							</div>
						</div>
						<p>Far far away, behind the word mountains, far from the countries</p>
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