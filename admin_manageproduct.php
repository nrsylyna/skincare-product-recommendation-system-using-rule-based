<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iSkin Product</title>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="homepage.php"><img src="assets/img/logoiskin.jpg" alt="" class="img-fluid"><span>i</span>Skin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="admin_homepage.php">Home</a></li>

          <li><a href="admin_manageproduct.php" class="active">Manage Product</a>
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
          <h2>Manage Product</h2>
            <nav>
            <ol>
                <li><a href="homepage.php">Home</a></li>
                    <li>Manage Products</li>
                
            </ol>
            </nav>
        
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of Products</h5>
              <div class="row">
              <div class="col-lg-12">
                  <a href="admin_addproduct.php"><button type='button' class='btn btn-success mb-2'><i class='ri-add-circle-fill'></i> Add Products</button></a>
                </div>
              </div>    

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("config.php");

                    $query1 = "SELECT * FROM product";
                    $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));

                    if(mysqli_num_rows($result1) > 0) {
                      foreach($result1 as $row1) {
                        $productID = $row1["PRODUCT_ID"];
                        $productName = $row1["PRODUCT_NAME"];
                        $productDescription = $row1["PRODUCT_DESCRIPTION"];
                        $productCategory = $row1["PRODUCT_CATEGORY"];
                        $productImage = $row1["PRODUCT_IMAGE"];
                    
                        echo "<tr>";
                            echo "<td>".$productName."</td>"; 
                            echo "<td>".'<img src ="data:image/jpg;base64,'.base64_encode($row1['PRODUCT_IMAGE']).
                            '"width="100px" height ="100px"/>'."</td>"; 
                            echo "<td>".$productDescription."</td>";
                            echo "<td>".$productCategory."</td>";
                            
                            if($productName == "Coalface Soap Cleanser Kayman" || $productName == "Cerave Hydrating Facial Cleanser" 
                            || $productName == "Eucerin Cleansing Gel" || $productName == "Eucerin Redness Relief Soothing Cleanser" 
                            || $productName == "3W Clinic Sunscreen" || $productName == "Biore Aqua Rich Watery Essence Sunscreen" 
                            || $productName == "Garnier Light Complete Boost Serum" || $productName == "Klairs Midnight Blue Youth Serum" 
                            || $productName == "Skintella Repairing Serum"
                            || $productName == "The Ordinary Niacinamide Serum" || $productName == "The Ordinary Alpha Arbutin Serum") {
                              echo "<td>
                                    <button type='button' class='btn btn-primary mb-2' disabled><i class='bx bxs-edit'></i><a href='admin_editproduct.php?productID=".$productID."' style='color: white'>Edit</a></button>
                                    <button type='button' class='btn btn-danger mb-2'onclick='del(event)' disabled><i class='bx bx-x'></i><a href='admin_deleteproduct.php?productID=".$productID."' style='color: white'>Delete</a></button>
                                     
                                    </td>";
                            }
                            else {
                              echo "<td>
                                      <a href='admin_editproduct.php?productID=".$productID."'><button type='button' class='btn btn-primary mb-2'><i class='bx bxs-edit'></i> Edit</button></a>
                                      <a href='admin_deleteproduct.php?productID=".$productID."'><button type='button' class='btn btn-danger mb-2'onclick='del(event)'><i class='bx bx-x'></i> Delete</button></a>
                                    </td>";
                            }
                        echo "</tr>";
                      }
                    }
                  ?>
                </tbody>
              </table>
              
              <script>
                function del(event){
                  event.preventDefault();
                  Swal.fire({
                      title: 'Are you sure?',
                      text: "Do you really want to delete this product? This process cannot be undone",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes'
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = event.target.offsetParent.children[1].href;
                      }
                  })
                }
              </script>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- End Portfolio Section -->

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