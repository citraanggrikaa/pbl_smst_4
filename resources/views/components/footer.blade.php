<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Jelajah Nusantara</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Information</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Home</a></li>
            <li><a href="#" class="py-2 d-block">About Us</a></li>
            <li><a href="#" class="py-2 d-block">Destination</a></li>
            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">Nangka street, Denpasar, Bali, Indonesia</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 812 345 678 910</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">jelajahnusantara@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>This project is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://JelajahNusantara.com" target="_blank">Kelompok5</a></p>
      </div>
    </div>
  </div>
</footer>

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
  document.getElementById('toggleSearch').addEventListener('click', function () {
    const bar = document.getElementById('searchBar');
    bar.style.display = bar.style.display === 'none' ? 'flex' : 'none';
  });
</script>



