@include('components.navbar')

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="hero-wrap js-fullheight" style="background-image: url('images/gwk.jpeg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
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

@include('components.footer')