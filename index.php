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

</header>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto col-md-6"><a href="index.html">
        <img src="./assets/img/house.png" alt="logo">
      </a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
      <?php include('includes/top-header.php');?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center ">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $lang['test'] ?></h1>
      <a href="regester.php" target="_blank" class="btn-get-started"><?php echo $lang['now'] ?></a>
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
            <p><?php echo $lang['index-title'] ?></p>
            <ul>
              <li><i class="bi bi-house-fill"></i> <?php echo $lang['index-li1'] ?></li>
              <li><i class="bi bi-house-fill"></i> <?php echo $lang['index-li2'] ?></li>
              <li><i class="bi bi-house-fill"></i> <?php echo $lang['index-li3'] ?></li>
            </ul>

          </div>
        </div>

      </div>
    </section>
  <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="content">
              <h3><i class="bi bi-house-fill"></i><?php echo $lang['index-title1'] ?></h3>
              <p><?php echo $lang['index4'] ?></p>
              <p><?php echo $lang['index5'] ?></p>
              <p><?php echo $lang['index6'] ?></p>
              <p><?php echo $lang['index7'] ?></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['num-1'] ?></p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['num-2'] ?></p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $lang['num-3'] ?></p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
              <img src="./assets/img/flage-1.jpg" style="width: 50px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-1'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img src="./assets/img/flage-1.png" style="width: 50px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-2'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <img src="./assets/img/flag-3.png" style="width: 55px; padding: 5px;">
              <h3><a href=""> <?php echo $lang['country-3'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <img src="./assets/img/flag-4.png" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-4'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-5png.png" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-5'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-6.jpg" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-6'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-7.jpg" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-7'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-8.jpg" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-8'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/f.jpg" style="width: 55px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-9'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-9.jpg" style="width: 70px; ">
              <h3><a href=""><?php echo $lang['country-10'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-10.jpg" style="width: 60px; padding: 5px;">
              <h3><a href=""><?php echo $lang['country-11'] ?> </a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <img src="./assets/img/flag-11.jpg" style="width: 55px; ">
              <h3><a href=""><?php echo $lang['country-12'] ?> </a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php echo $lang['num-4'] ?></h2>
          <p> <?php echo $lang['num-5'] ?></p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <!-- <img src="assets/img/testimonials/testimonials-10.jpg" class="img-fluid"  style=" height: 339px; width: 100%;"> -->

              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/testimonials/testimonials-10-1.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/testimonials/testimonials-10-2.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/testimonials/testimonials-10-3.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- <h4>Excepteur</h4> -->
                  <!-- <p class="price">$169</p> -->
                </div>

                <h3><a href="#"><?php echo $lang['num-6'] ?></a></h3>
                <p><?php echo $lang['num-7'] ?></p>
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

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <!-- <img src="assets/img/testimonials/testimonials-10.jpg" class="img-fluid"  style=" height: 339px; width: 100%;"> -->

              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/testimonials/testimonials-9-1.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/testimonials/testimonials-9-2.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/testimonials/testimonials-9-2.jpg" class="d-block w-100" style=" height: 339px; width: 100%;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- <h4>Excepteur</h4> -->
                  <!-- <p class="price">$169</p> -->
                </div>

                <h3><a href="#"><?php echo $lang['num-6'] ?></a></h3>
                <p><?php echo $lang['num-7'] ?></p>
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
            <h3><?php echo $lang['footer-title'] ?></h3>
            <p>
            <?php echo $lang['footer-p'] ?><br><br>
              <strong><?php echo $lang['footer-stron1'] ?>:</strong> <?php echo $lang['footer-pone'] ?><br>
              <strong><?php echo $lang['footer-stron2'] ?>:</strong> <?php echo $lang['footer-email'] ?><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4><?php echo $lang['footer-title'] ?></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> <?php echo $lang['footer-home'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> <?php echo $lang['footer-houeses'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> <?php echo $lang['footer-regis'] ?></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"> <?php echo $lang['footer-sin'] ?></a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4><?php echo $lang['footer-title'] ?></h4>
            <p> <?php echo $lang['footer-h1'] ?></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="<?php echo $lang['footer-sub'] ?>">
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