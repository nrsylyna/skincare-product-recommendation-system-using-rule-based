<!DOCTYPE html>
<html lang="en">

<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iSkin Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo1.png" rel="logo1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
      session_start();

        if($_SESSION["loggedIn"] === true) {
          $_SESSION["loggedIn"] = false; 
      ?>
          <script>
            Swal.fire({
              icon: 'success',
              title: 'Successfully Login!',
            })
          </script>
      <?php 
        }
      ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="homepage.php"><img src="assets/img/logoiskin.jpg" alt="" class="img-fluid"><span>i</span>Skin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="homepage.php" class="active">Home</a></li>
            
          <li><a href="quiz.php">Quiz</a>
          </li>

          <li><a href="product.php">Product</a>
          </li>

          <li><a href="logout.php">Logout</a></li>
            <!--
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
-->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/3.jpg);">
<!--
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Company</span></h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
-->
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg);">
          
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/6.jpg);">
        
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2>Highly recommended product to explore</h2>
            <h3>Discover the best products based on your skin type and skin concern on iSkin now!</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
             How to find the right product for your skin? All 
             steps that you need to do to save your money!
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Know your skin type and skin concern</li>
              <li><i class="ri-check-double-line"></i> Product research</li>
              <li><i class="ri-check-double-line"></i> Buy and try it yourself</li>
            </ul>
            <p>
              We know skincare isn't one one size fits all, 
              that's why we have curated solutions for every 
              skin type and concern.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">  
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All Products</li>
              <li data-filter=".filter-app">Cleanser</li>
              <li data-filter=".filter-card">Serum</li>
              <li data-filter=".filter-web">Sunscreen</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <?php
            include("config.php");

            $query1 = "SELECT * FROM product";
            $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));

            if(mysqli_num_rows($result1) > 0) {
              foreach($result1 as $row1) {
                $productName = $row1["PRODUCT_NAME"];
                $productDescription = $row1["PRODUCT_DESCRIPTION"];
                $productCategory = $row1["PRODUCT_CATEGORY"];
                $productImage = $row1["PRODUCT_IMAGE"];

                if($productCategory == "Cleanser") {
          ?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="data:image/*;charset=utf8;base64,<?php echo base64_encode($productImage); ?>" class="img-fluid" alt="" width="500px" height="500px">
                    <div class="portfolio-info">
                      <h4><?php echo $productName ?></h4>
                      <p><?php echo $productDescription ?></p>
                    </div>
                  </div>
          <?php
                }
                else if($productCategory == "Serum") {
          ?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="data:image/*;charset=utf8;base64,<?php echo base64_encode($productImage); ?>" class="img-fluid" alt="" width="500px" height="500px">
                    <div class="portfolio-info">
                      <h4><?php echo $productName ?></h4>
                      <p><?php echo $productDescription ?></p>
                    </div>
                  </div>
          <?php
                }
                else if($productCategory == "Sunscreen") {
          ?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="data:image/*;charset=utf8;base64,<?php echo base64_encode($productImage); ?>" class="img-fluid" alt="" width="500px" height="500px">
                    <div class="portfolio-info">
                      <h4><?php echo $productName ?></h4>
                      <p><?php echo $productDescription ?></p>
                    </div>
                  </div>
          <?php
                }
              }
            }
          ?>
          
        </div>
      
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
 <!-- ======= Footer ======= -->
 <footer id="footer">
    
    <div class="container">
    <br>
      <div class="me-md-auto text-center text-md-right pt-3 pt-md-0">
        <div class="copyright">
          &copy; Copyright <strong><span>iSkin Recommendation System</span></strong>. All Rights Reserved<br>
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <br><br>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>