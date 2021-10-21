
<?php
session_start();
include "conlan.php";
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
    $name                   = $_POST['name'];
    $email	                = $_POST['email'];
    $country                = $_POST['country'];
    $address	            = $_POST['address'];
    $contactNumber          = $_POST['contactNumber'];
    $serial                 = $_POST['serial'];


    $sql=mysqli_query($con,"insert into ordersmerch(name,email, country,address ,contactNumber,serial) 
                        values('$name','$email' ,'$country','$address','$contactNumber','$serial')");
    $_SESSION['msg']="data Created !!";
}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from debts where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="merchant deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
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

  <style>
    label{
        width: 20%;
    border: 1px solid #6c757d;
    margin: 10px 0;
    padding: 3px;
    border-radius: 5px;
    text-align: center;
    color: #fff;
    /* margin-left: 27%; */
    background: #0d6efd;
    }
    button{
        margin: 20px 0;
        text-align: center;
        /* margin-left: 37%; */
    }
    p{
        border: 1px solid;
        width: 124px;
        padding: 5px;
    }
  </style>
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

	<div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="span9">
					<div class="content">

          <h3 class=" col-lg-12   address"><?php echo $lang['regester-tilte'] ?></h1>

            <div class="col-lg-12  cont">
              <div class="col-lg-12 col-12">
                <h2 class="col-lg-12 col-12"><?php echo $lang['regester-perfect'] ?><strong > U36691600</strong></h2>
                <h2 class="col-lg-12 col-12"><?php echo $lang['regester-USDT'] ?><strong> TAYsfesGZWFtRaB7uFvcv34b1MQwMPBqFZ</strong></h2>
              </div>
            </div>



						<div class="module">
							<div class="module-head">
								<h3 class="address"><?php echo $lang['regester-par'] ?></h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>

									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

<form class="form-horizontal row-fluid form-control form-control-lg" name="Category" method="post" >
									
        <div class="control-group ">
            <label class="control-label" for="basicinput" ><?php echo $lang['regester-nmae'] ?></label>
                <div class="controls">
                    <input class="form-control" type="text" placeholder="<?php echo $lang['regester-nmae'] ?>"  name="name"  required>
                </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="basicinput"><?php echo $lang['regester-email'] ?></label>
                <div class="controls">
                    <input class="form-control" type="email" placeholder="<?php echo $lang['regester-email'] ?>"  name="email"  required>
                </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput"><?php echo $lang['regester-contry'] ?></label>
                <div class="controls">
                    <input class="form-control" type="text" placeholder="<?php echo $lang['regester-contry'] ?>"  name="country"  required>
                </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput"><?php echo $lang['regester-address'] ?></label>
                <div class="controls">
                    <input class="form-control" type="text" placeholder="<?php echo $lang['regester-address'] ?>"  name="address"  required>
                </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="basicinput"><?php echo $lang['regester-num'] ?></label>
                <div class="controls">
                    <input class="form-control" type="text" placeholder="<?php echo $lang['regester-num'] ?>"  name="contactNumber"  required>
                </div>
        </div>

        <div class="control-group">
            <label class="control-label " for="basicinput"><?php echo $lang['regester-ser'] ?></label>
                <div class="controls">
                    <input class="form-control" type="text" placeholder="<?php echo $lang['regester-ser'] ?>"  name="serial" required>
                </div>
        </div>
        <button  class="btn btn-info"  id="generate" onclick="generateSarial()"><?php echo $lang['regester-ser1'] ?></button>
        <!-- <div id="srial"></div> -->
        <p id="srial" ></p>
        <div class="control-group">
            <div class="controls">
            <button  type="submit" name="submit" class="btn btn-primary"><?php echo $lang['regester-send'] ?></button>
            </div>
        </div>
</form>
        </div>
    </div>
    
<?php } ?>


<script>
    function generateSarial() {
  "use strict";

  var chars = "0123456789",
    serialLength = 10,
    randomSerial = "",
    i,
    randomNumber;

  for (i = 0; i < serialLength; i = i + 1) {
    randomNumber = Math.floor(Math.random() * chars.length);

    randomSerial += chars.substring(randomNumber, randomNumber + 1);
  }

  document.getElementById("srial").innerHTML = randomSerial;
}

</script>

