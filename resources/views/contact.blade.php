
    
 @include('components.navbar')
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/gwk.jpeg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

<!-- Tambahkan ini di bagian <head> halaman kamu -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
/>
<section style="padding: 40px 0; background-color: #f0f0f0;">
  <div style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 30px;">
      <h2>Contact Information</h2>
    </div>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-map-marker-alt" style="color:#ff5e14; margin-right: 8px;"></i>
            Address
          </h4>
          <p>Nangka street, Denpasar, Bali, Indonesia</p>
        </div>
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-phone" style="color:#28a745; margin-right: 8px;"></i>
            Phone
          </h4>
          <p>+62 812 345 678 910</p>
        </div>          
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-envelope" style="color:#007bff; margin-right: 8px;"></i>
            Email
          </h4>
          <p>jelajahnusantara@gmail.com</p>
        </div>
      </div>
      <div class="card contact-card" style="width: 220px;">
        <div class="card-body" style="text-align: center;">
          <h4 class="card-title">
            <i class="fas fa-globe" style="color:#6f42c1; margin-right: 8px;"></i>
            Website
          </h4>
          <p>jelajahnusantara.com</p>
        </div>
      </div>
    </div>
  </div>
</section>


  @include('components.footer')