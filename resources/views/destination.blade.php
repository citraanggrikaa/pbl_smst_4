@include('components.navbar')

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
				</div>
			</div> <!-- .col-md-8 -->
		</div>
	</div>
</section> <!-- .section -->

@include('components.footer')