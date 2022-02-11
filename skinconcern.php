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
    $query1 = "SELECT question_text FROM question WHERE question_id = '2' ";
    $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));
    $question = mysqli_fetch_row($result1);
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
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                <!-- <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>-->
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="#"><?php echo $question[0] ?></a></h4>
              <form action="suggestedproducts.php" method="get">
              <input type="hidden" id="skinType" name="skinType" value="<?php echo $skinType ?>"> 
                <input type="radio" id="blemish" name="skinConcern" value="Blemish" required>
                <label for="blemish">Blemish</label><br>
                <input type="radio" id="acne" name="skinConcern" value="Acne Prone" required>
                <label for="acne">Acne Prone </label><br>
                <input type="radio" id="redspot" name="skinConcern" value="Red Spot" required>
                <label for="redspot">Redspot</label><br>
                <input type="radio" id="flaky" name="skinConcern" value="Flaky Dry" required>
                <label for="flaky"> Flaky Dry</label><br>
                <input type="radio" id="sunburnt" name="skinConcern" value="Sunburnt" required>
                <label for="sunburnt"> Sunburnt </label><br>
                <input type="radio" id="wrinkles" name="skinConcern" value="Wrinkles" required>
                <label for="wrinkles"> Wrinkles</label><br>
                <br>
                <input type="submit" value="View Suggested Products" class='btn btn-success mb-2'>   
              </form>

              <div class="text-center">
                <a href="skintype.php" class="btn-get-started"><input type="submit" value="Back" class='btn btn-secondary mb-2'></a>
              </div>
            </div>
          </div>

          

        

        </div>

      </div>
    </section><!-- End Services Section -->


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