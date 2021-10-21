<?php
session_start();
error_reporting(0);
include "conlan.php";
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $lang['title'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto col-md-6"><a href="index.html">
        <img src="./assets/img/logo.jpg" alt="logo">
      </a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>            
          <li><a class="active" href="index.php">Home</a></li>
          <li><a class="active" href="course-details.php">Houses</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" target="_blank" class="get-started-btn"> Register now</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center ">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Ali real estate company <br> Offer free real estate</h1>
      <a href="course-details.php" target="_blank" class="btn-get-started">Register now</a>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/pexels2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <p>
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</li>
              <li><i class="bi bi-check-circle"></i>  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</li>
              <li><i class="bi bi-check-circle"></i>  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</li>
            </ul>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p> -->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Houses</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Countries</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Winners</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Excepteur sint occaecat</h3>
              <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn"> أقرا المزيد <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt bx-tada "></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt bx-tada "></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class='bx bxl-paypal bx-tada  ' ></i>  
                    <h4>طريقة الدفع</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                      <button type="button" class="btn btn-success">
                      <a href="paypal.html" style="color: #fff;" target="_blank">ادفع هنا</a>
                    </button>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
              <img src="./assets/img/flage-1.jpg" style="width: 50px; padding: 5px;">
              <h3><a href="">Denmark </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img src="./assets/img/flage-1.png" style="width: 50px; padding: 5px;">
              <h3><a href="">Portugal </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img src="./assets/img/flag-3.png" style="width: 55px; padding: 5px;">
              <h3><a href=""> Saudi Arabia</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <img src="./assets/img/flag-4.png" style="width: 55px; padding: 5px;">
              <h3><a href="">UAE</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-5png.png" style="width: 55px; padding: 5px;">
              <h3><a href="">Turkey</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-6.jpg" style="width: 55px; padding: 5px;">
              <h3><a href="">Spain</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-7.jpg" style="width: 55px; padding: 5px;">
              <h3><a href="">Germany</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-8.jpg" style="width: 55px; padding: 5px;">
              <h3><a href="">Sweden</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/f.jpg" style="width: 55px; padding: 5px;">
              <h3><a href="">Belgium</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-9.jpg" style="width: 70px; ">
              <h3><a href="">France</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-10.jpg" style="width: 60px; padding: 5px;">
              <h3><a href="">Russia</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-11.jpg" style="width: 55px; ">
              <h3><a href="">Holland</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>This property has been sold</h2>
          <p> 
            Contact us to find
          </p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/testimonials/testimonials-10.jpg" class="img-fluid"  style=" height: 339px; width: 100%;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- <h4>Excepteur</h4> -->
                  <!-- <p class="price">$169</p> -->
                </div>

                <h3><a href="#">Notes</a></h3>
                <p>
                  Villa within a complex in the prestigious Beylikdüzü area, within the Gurpinar district. 
                  The villa has sea views, and is a short walk from restaurants and cafes on the adjacent beach. 
                  The villa has 3 floors, 6 rooms and 4 bathrooms, with a total area of 550 meters (net: 500 meters)
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/testimonials/testimonials-9.jpg" class="img-fluid" style=" height: 339px; width: 100%;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <h3><a href="#">Notes</a></h3>
                <p>
                  Villa within a complex in the prestigious Beylikdüzü area, within the Gurpinar district. 
                  The villa has sea views, and is a short walk from restaurants and cafes on the adjacent beach. 
                  The villa has 3 floors, 6 rooms and 4 bathrooms, with a total area of 550 meters (net: 500 meters)
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>ExcepteurExcepteur</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> anatoliascholarships@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Excepteur</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Excepteur Excepteur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Excepteur Excepteur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">  Excepteur Excepteur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Excepteur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> Excepteur Excepteur</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>ExcepteurExcepteurExcepteur</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Yaser</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://github.com/YasserNabil1998">Yaser</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>