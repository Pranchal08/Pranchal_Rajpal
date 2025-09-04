<?php
session_start();
?>
<html>
<head>
<title>LOGIN PAGE</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="custom css/allcss.php" rel="stylesheet" type="text/css">   
 
  </head> 
<body>
<?php
	include('header_login.php');
?>
 
 <div class="hero">
<div class="hero-slide">
			<div class="img overlay" style="height:620px;background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="height:620px;background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="height:620px;background-image: url('images/hero_bg_1.jpg')"></div>
		</div>
<br><br><br><br><br><br><br><br>
<?php
	if(isset($_SESSION['success']) && isset($_SESSION['data'])) {
echo "<div class='alert alert-success' style='width:70%;text-align:center;margin-left:15%;font-size:19px;height:5%;padding-top:5px;'>";
                 echo $_SESSION['data'];
echo"</div>";
			}
			if(isset($_SESSION['error']) && isset($_SESSION['data'])) {
echo "<div class='alert alert-danger'style='width:70%;text-align:center;margin-left:15%;font-size:19px;height:6%;padding-top:5px;'>";

                 echo $_SESSION['data'];
echo"</div>";
 
			}
			unset($_SESSION['error']);
			unset($_SESSION['data']);
			unset($_SESSION['success']);
 ?>

<div class="container col-lg-8" style="border:2px solid white;">
<h2 style="text-align:center;color:white; margin-top:10px;">Broaker Registration</h1>
<div class="container text-center"> 
<form class="row g-3" action="broaker_info.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
    <label for="uname" class="form-label"></label>
    <input type="text" class="form-control" id="uname" name="u1" placeholder="Username" style="height:50px;border-radius:30px;">
    </div>
  <div class="col-md-6"style=" margin-top:20px">
    <label for="lname" class="form-label"></label>
    <input type="text" class="form-control" id="lname" name="l1"placeholder="Lastname"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label"></label>
    <input type="text" class="form-control" id="email" name="e1"placeholder="Email"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="phoneno." class="form-label"></label>
    <input type="Number" class="form-control" id="phoneno." name="p1" placeholder="Phone Number"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <input type="password" class="form-control" id="floatingPassword1" name="pass" placeholder="Password"style="height:50px;border-radius:30px;">
	</div>
	<div class="col-md-6">
    <input type="password" class="form-control" id="floatingPassword" name="con_pass" placeholder="Confirm Your Password"style="height:50px;border-radius:30px;">
	</div>
	
  <div class="col-12" style="margin-left:-1px;">
    <button type="submit" class="btn btn-primary">Submit Your Details</button>
  </div>
  
</form></div></div>




<script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
	

<br><br><br>
<br><br>
<?php
include('footer.php');
?>

 