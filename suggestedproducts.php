<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iSkin Quiz</title>
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
      include("config.php");

      $skinType = $_GET["skinType"];
      $skinConcern = $_GET["skinConcern"];
      $query1 = "SELECT product_id FROM rules WHERE skin_type = '$skinType' AND skin_concern = '$skinConcern' ";
      $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));
      $productID = mysqli_fetch_row($result1);

      $query2 = "SELECT product_name, product_description, product_image FROM product WHERE product_id = '$productID[0]'";
      $result2 = mysqli_query($conn, $query2) or die (mysqli_error($conn));
      $product = mysqli_fetch_row($result2);
  ?>
    
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="homepage.php"><img src="assets/img/logoiskin.jpg" alt="" class="img-fluid"><span>i</span>Skin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="homepage.php">Home</a></li>
            
          <li><a href="quiz.php" class="active">Quiz</a>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Quiz</h2>
          <ol>
            <li><a href="homepage.php">Home</a></li>
            <li>Quiz</li>
            <li>Suggested Product</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">  
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
          <h4>Suggested product you should use based<br>on your skin type and skin concern</h4><br><br>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        <?php 
          include("config.php");

          $skinType = $_GET["skinType"];
          $skinConcern = $_GET["skinConcern"];
          $query1 = "SELECT * FROM rules WHERE skin_type = '$skinType' AND skin_concern = '$skinConcern'";
          $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));
            foreach($result1 as $row1) {
              $productID = $row1["PRODUCT_ID"];
              $query2 = "SELECT * FROM product WHERE product_id = '$productID'";
              $result2 = mysqli_query($conn, $query2) or die (mysqli_error($conn));
              foreach($result2 as $row2) {
                $productName = $row2["PRODUCT_NAME"];
                $productDescription = $row2["PRODUCT_DESCRIPTION"];
                $productImage = $row2["PRODUCT_IMAGE"];
                $productCategory = $row2["PRODUCT_CATEGORY"]
                ?>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <h4 style="text-align: center"><?php echo $productCategory ?></h4>
                    <img src="data:image/*;charset=utf8;base64,<?php echo base64_encode($productImage); ?>" class="img-fluid" alt="" width="500px" height="500px">
                    <div class="portfolio-info">
                      <h4><?php echo $productName ?></h4>
                      <p><?php echo $productDescription ?></p>
                    </div>
                  </div>
                <?php
              }
            }
          ?>
        
      </div>
    </div>
  </section><!-- End Portfolio Section -->

   
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