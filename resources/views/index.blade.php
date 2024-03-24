<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shopping India</title>
        <!-- Local CSS -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<!-- Bootstrap CSS (choose one version, example uses 5.3.2) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- bs-brain Footer Component CSS -->
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">

<!-- Google Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap Bundle JS (includes Popper.js) for Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </head>
    <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-light bg-gradient-nav">
        <div class="container-fluid">
            <div class="zoom">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="logo image" width="90" height="44" class="d-inline-block align-text-top">
            Shopping
            </a>
        </div>
        <div class="search">
          <form action="#">
          <input type="text" placeholder="Search Courses" name="search">
            <button type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-search"></span> Search
            </button>
			    </form>
		    </div>
        <div>
            <button type="button" class="btn btn-outline-info">Home</button>
            <button type="button" class="btn btn-outline-info">Features</button>
            <button type="button" class="btn btn-outline-info">Contact</button>
            <button type="button" class="btn btn-outline-info">Sign</button>
        </div>
        </div>
    </nav>
    <marquee> <h3>Select Your City</h3> </marquee>
    <div class="cimg">
        <a href="/index1">
        <input name="imgbtn" type="Image" value="index1.php" class="city" src="{{ asset('images/glass.jpg') }}"></a>
        <a href="index2.php">
        <input name="imgbtn" type="Image" value="index2.php" class="city" src="{{ asset('images/saree.jpg') }}"></a>
        <a href="index3.php">
        <input name="imgbtn" type="Image" value="index3.php" class="city" src="{{ asset('images/chickn.jpeg') }}"></a>
        <a href="comming.php">
        <input name="imgbtn" type="Image" value="index3.html" class="city" src="{{ asset('images/lether.jpeg') }}"></a>
    </div>   
    <div class="main-box">
    <div class="top-text top-left"><b>Best of Firozabad</b></div>
    <div class="top-text top-right">Explore More<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
      </svg>
    </div>
    <div class="sub-box"><img src="{{ asset('images/wedd.webp') }}" alt="Item Image">
    <p class="sub-box-text"> Top Wedding Collection<br><b>Shop Now !</b></p></div>
    <div class="sub-box"><img src="{{ asset('images/wedd.webp') }}" alt="Item Image">
    <p class="sub-box-text"> Top Wedding Collection<br><b>Shop Now !</b></p></div>
    <div class="sub-box"><img src="{{ asset('images/wedd.webp') }}" alt="Item Image">
    <p class="sub-box-text"> Top Wedding Collection<br><b>Shop Now !</b></p></div>
    <div class="sub-box"><img src="{{ asset('images/wedd.webp') }}" alt="Item Image">
    <p class="sub-box-text"> Top Wedding Collection<br><b>Shop Now !</b></p></div>
    <div class="sub-box"><img src="{{ asset('images/wedd.webp') }}" alt="Item Image">
    <p class="sub-box-text"> Top Wedding Collection<br><b>Shop Now !</b></p></div>
</div>

    <!-- Footer 2 - Bootstrap Brain Component -->
<footer class="footer" >

<!-- Widgets - Bootstrap Brain Component -->
<section class="bg-LightGray py-4 py-md-5 py-xl-8 border-top border-light">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 justify-content-xl-between">
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <a href="#!">
            <img src="{{ asset('images/logo.png') }}" alt="BootstrapBrain Logo" width="175" height="157">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2"style="color: goldenrod;">
        <div class="widget" >
          <h4 class="widget-title mb-4">Get in Touch</h4>
          <address class="mb-4">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
          <p class="mb-1">
            <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
          </p>
          <p class="mb-0">
            <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget"style="color: goldenrod;">
          <h4 class="widget-title mb-4">Learn More</h4>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">About</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">Contact</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">Advertise</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">Terms of Service</a>
            </li>
            <li class="mb-0">
              <a href="#!" class="link-secondary text-decoration-none">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-xl-4">
        <div class="widget"style="color: goldenrod;">
          <h4 class="widget-title mb-4">Your Feedback</h4>
          <form action="#">
              <textarea class="div1" placeholder="Write Your feedback"></textarea>
              <button type="button" class="btn btn-primary">Submit your feedback</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

</footer>
            
    </body>
    <script>
        const slider = document.querySelector('.slider');
        const slides = document.querySelectorAll('.slide');
        let currentIndex = 0;

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlider();
        }

        function updateSlider() {
            const offset = -currentIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

        setInterval(nextSlide, 3000); // Auto slide every 3 seconds
    </script>
</html>



<!--<div class="slides">
            <div class="slider-image"><img src="{{ asset('https://image.ibb.co/kpmt3k/background_1.jpg') }}"></div>
                <marquee> <h3>Select Your City</h3> </marquee>
                    <div class="cimg">
                        <a href="index1.php">
                        <input name="imgbtn" type="Image" value="index1.php" class="city" src="{{ asset('images/glass.jpg') }}"></a>
                        <a href="index2.php">
                        <input name="imgbtn" type="Image" value="index2.php" class="city" src="{{ asset('images/saree.jpg') }}"></a>
                        <a href="index3.php">
                        <input name="imgbtn" type="Image" value="index3.php" class="city" src="{{ asset('images/chickn.jpeg') }}"></a>
                        <a href="comming.php">
                        <input name="imgbtn" type="Image" value="index3.html" class="city" src="{{ asset('images/lether.jpeg') }}"></a>
                    </div>    
                <a href="map.php">map button</a>
            </div>-->
             <!-- <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="{{ asset('images/jewel.jpg') }}" alt="Slide 1" class="full-screen-image">
            </div>
            <div class="slide">
                <img src="{{ asset('images/saree.jpg') }}" alt="Slide 2" class="full-screen-image">
            </div>
            <div class="slide">
                <img src="{{ asset('images/jewel.jpg') }}" alt="Slide 3" class="full-screen-image">
            </div>
            <div class="slide">
                <img src="{{ asset('images/saree.jpg') }}" alt="Slide 4" class="full-screen-image">
            </div>
        </div>
    </div> -->