<?php
session_start();
if(!(isset($_SESSION['id']))){
header("location:index.php");
}
?>
<?php
 include('css.php');
 include('custom css/allcss.php');
  include('header.php');

?>

<html>
<head>
<link href="asset/fontawesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="favicon.png">
<link href="asset/fontawesome/css/font-awesome.min.css" rel="stylesheet" > 

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="asset/fonts/icomoon/style.css">
	<link rel="stylesheet" href="asset/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="asset/css/tiny-slider.css">
	<link rel="stylesheet" href="asset/css/aos.css">
	<link rel="stylesheet" href="asset/css/style.css">

	

</head>
<body>
<div class="hero">
<div class="hero-slide">
<div class="img overlay" style="height:700px;background-image: url('images/hero_bg_3.jpg')"></div>
<div class="img overlay" style="height:700px;background-image: url('images/hero_bg_2.jpg')"></div>
<div class="img overlay" style="height:700px;background-image: url('images/hero_bg_1.jpg')"></div>
		</div>
<div class="container col-md-4"style="margin-top:15%;width:64%;">
<br>
<a href="update_profile.php"><img src="images/email.png" width="174" height="174" style="margin-left:8%"><a href="update_password.php"><img src="images/key.png" width="170" height="178" style="margin-left:31%;margin-top:3%;"><h3 style="color:white;margin-top:2%;margin-left:50%;"> Update Password</h3>			
<h3 style="color:white;margin-top:-5%;margin-left:10%;"> Update Profile</h3>



</div>
<br><br><br><br><br><br><br><br><br><br>
<br>
<?php
include('footer.php');
include('custom css/allcss.php');

?>








<script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
 