<?php
session_start();
error_reporting(0);
include "conlan.php";
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$contactno=$_POST['contactno'];
		$query=mysqli_query($con,"update users set name='$name',contactno='$contactno' where id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Your info has been updated');</script>";
		}
	}


date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update students set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
echo "<script>alert('Password Changed Successfully !!');</script>";
}
else
{
	echo "<script>alert('Current Password not match !!');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $lang['houses-title'] ?></title>
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
      <!-- <a href="#" target="_blank" class="get-started-btn"> Register now</a> -->
    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php echo $lang['houses-text'] ?></h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <!-- <img src="assets/img/course-details.jpg" class="img-fluid" alt=""> -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-6.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-7.jpg" class="d-block w-100"  style="height: 530px;">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/testimonials/testimonials-8.jpg" class="d-block w-100"  style="height: 530px;">
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
            <h3>
            <?php echo $lang['houses-notes-1'] ?>
            </h3>
            <p>
              <?php echo $lang['houses-notes-2'] ?>
            </p>
            <div class="col-lg-12"> 
              <strong><?php echo $lang['houses-notes-3'] ?></strong>
              <?php echo $lang['houses-notes-4'] ?>
              <?php echo $lang['houses-notes-5'] ?>
              <?php echo $lang['houses-notes-6'] ?>
            </div>
            <div class="col-lg-12">
              <strong><?php echo $lang['houses-notes-7'] ?></strong>
              <?php echo $lang['houses-notes-8'] ?>
              <?php echo $lang['houses-notes-9'] ?>
            </div>
            <div class="col-lg-12"> 
              <strong><?php echo $lang['houses-notes-10'] ?></strong>
              <?php echo $lang['houses-notes-11'] ?>
              <?php echo $lang['houses-notes-12'] ?>
            </div>
            <div class="col-lg-12"> 
              <strong><?php echo $lang['houses-notes-13'] ?></strong>
              <?php echo $lang['houses-notes-14'] ?>
              <?php echo $lang['houses-notes-15'] ?>
              <?php echo $lang['houses-notes-16'] ?>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-1'] ?></h5>
              <p><a href="#"><?php echo $lang['houses-details-2'] ?></a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-3'] ?>  </h5>
              <p><?php echo $lang['houses-details-4'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-5'] ?></h5>
              <p><?php echo $lang['houses-details-6'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-7'] ?></h5>
              <p><?php echo $lang['houses-details-8'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-9'] ?></h5>
              <p><?php echo $lang['houses-details-10'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-11'] ?></h5>
              <p><?php echo $lang['houses-details-12'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-13'] ?></h5>
              <p><?php echo $lang['houses-details-14'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-15'] ?></h5>
              <p><?php echo $lang['houses-details-16'] ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5><?php echo $lang['houses-details-17'] ?></h5>
              <p><?php echo $lang['houses-details-18'] ?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-6 details order-2 order-lg-1">
                    <h3><?php echo $lang['map-1'] ?></h3>
                    <p class="fst-italic"><?php echo $lang['map-2'] ?></p>
                    <p> <?php echo $lang['map-3'] ?></p>
                  </div>
                  <div class="col-lg-6 text-center order-1 order-lg-2">
                    <!-- <img src="assets/img/testimonials/testimonials-1.jpg" alt="" class="img-fluid"> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24097.17427253051!2d28.664987122332644!3d40.978266575021514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b55fdda60fc6e9%3A0x4fed87f06f9bbc72!2zS2F2YWtsxLEsIDM0NTIwINio2YrZhNmK2YMg2K_ZiNiy2Ygv2KXYs9i32YbYqNmI2YTYjCDYqtix2YPZitin!5e0!3m2!1sar!2s!4v1634154236452!5m2!1sar!2s" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

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
<?php }?>