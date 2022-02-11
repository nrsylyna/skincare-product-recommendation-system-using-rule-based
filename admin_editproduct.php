<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Product - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php
    include("config.php");
    session_start();

    $productID = $_GET["productID"];
    $productName = "";
    $productDescription = "";
    $productImage = "";

    $query1 = "SELECT * FROM product WHERE product_ID = '$productID'";
    $result1 = mysqli_query($conn, $query1) or die (mysqli_error($conn));

    if(mysqli_num_rows($result1) > 0){
      foreach($result1 as $row1){
        $productName = $row1["PRODUCT_NAME"];
        $productDescription = $row1["PRODUCT_DESCRIPTION"];
        $productCategory = $row1["PRODUCT_CATEGORY"];
        $productImage = $row1["PRODUCT_IMAGE"];
      }
    }

    if(isset($_POST["update"])) { 
      $updateName = $_POST["productName"];
      $updateDescription = $_POST["productDescription"];
      $updateCategory = $_POST["productCategory"];
      
      $fileName = basename($_FILES["productImage"]["name"]);
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
      $allowTypes = array("jpg", "jpeg", "png");
      $image = $_FILES['productImage']['tmp_name']; 
      $imgContent = addslashes(file_get_contents($image)); 

      if(empty($imgContent)) {
        $query2 = "UPDATE product SET product_name = '$updateName', product_description = '$updateDescription', product_category = '$updateCategory' WHERE product_ID = '$productID'";
        mysqli_query($conn, $query2) or die (mysqli_error($conn));
        ?> 
          <script>
            Swal.fire({
              icon: 'success',
              title: 'Successfully Update Product',
            }).then(function() {
              window.location.href = 'admin_manageproduct.php'
            });
          </script>
        <?php 
      }
      else { 
        if(in_array($fileType, $allowTypes)){ 
          $query2 = "UPDATE product SET product_name = '$updateName', product_description = '$updateDescription', product_image = '$imgContent', product_category = '$updateCategory' WHERE product_ID = '$productID'";
          mysqli_query($conn, $query2) or die (mysqli_error($conn));
          ?> 
            <script>
              Swal.fire({
                icon: 'success',
                title: 'Successfully Update Product',
              }).then(function() {
                window.location.href = 'admin_manageproduct.php'
              });
            </script>
          <?php 
        }
        else {
          ?> 
            <script>
              Swal.fire({
                icon: 'error',
                title: 'Sorry, only JPG, JPEG, PNG files are allowed to upload',
              })
            </script>
          <?php 
        }
      }
    }
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logoiskin.jpg" alt="">
        <span class="d-none d-lg-block">iSkin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

         
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $department ?></h6>
              <span><?php echo $position ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="adminChangesPassword.php">
                <i class="bi bi-gear"></i>
                <span>Change password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="signOut.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      
      <!--<li class="nav-item">
        <a class="nav-link " href="adminManagesEmployees.php">
          <i class="bi bi-people"></i>
          <span>Employees</span>
        </a>
        </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="adminManagesLeaves.php">
          <i class="bi bi-briefcase"></i>
          <span>Leaves</span>
        </a>
      </li>-->
      <!-- End Register Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Products</h1>
      <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin_homepage.php">Home</a></li>
          <li class="breadcrumb-item"><a href="admin_manageproduct.php">Manage Products</a></li>
          <li class="breadcrumb-item active">Edit Product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products Details</h5>

                <!-- Edit Product Form -->
                <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                   
                    <div class="col-md-12">
                      <div class="form-floating has-validation">
                        <!-- <input type="text" class="form-control" name="name" placeholder="Name" pattern="[a-zA-Z ]+" required> -->
                        <input type="text" class="form-control" name="productName" placeholder="Product Name" value="<?php echo $productName ?>" required>
                        <label for="floatingProduct">Product Name</label>
                        <div class="invalid-feedback">Please enter product name!</div>  
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating has-validation">
                        <!-- <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@gmail.com" required> -->
                        <input type="text" class="form-control" name="productDescription" placeholder="Product Description" value="<?php echo $productDescription ?>" required>
                        <label for="floatingDescription">Product Description</label>
                        <div class="invalid-feedback">Please enter product description!</div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating has-validation">
                        <!-- <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@gmail.com" required> -->
                        <input type="text" class="form-control" name="productCategory" placeholder="Product Category" value="<?php echo $productCategory ?>" required>
                        <label for="floatingDescription">Product Category</label>
                        <div class="invalid-feedback">Please enter product category!</div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="productImage" class="form-control" accept="image/*">
                      </div>
                    </div>
                   
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary mb-2" name="update"><i class='ri-add-circle-fill'></i>Update Product</button>
                      <a href="admin_manageproduct.php"><button type="button" class="btn btn-secondary mb-2"><i class='bx bxs-left-arrow-alt'></i> Back</button></a>
                    </div>
                </form><!-- End Edit Product Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

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