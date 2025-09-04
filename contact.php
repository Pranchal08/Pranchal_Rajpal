<?php
session_start();
include('header_login.php');
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">
<link href="asset/fontawesome/css/font-awesome.min.css" rel="stylesheet" 
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
			<div class="img overlay" style="height:719px;background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="height:719px;background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="height:719px;background-image: url('images/hero_bg_1.jpg')"></div>
		
		</div>
		

<br><br><br><br><br><br>
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
<div class="container col-md-5 col-lg-5" style="border:2px solid white;margin-left:91px;margin-top:66px; height:55%">
<h2 style="text-align:center;color:white; margin-top:10px;">Share Your Query</h1>
<div class="container text-center"> 
<form class="row g-3" action="post_query.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
    <label for="uname" class="form-label"></label>
    <input type="text" class="form-control" id="uname" name="u1" placeholder="Your name" style="height:50px;border-radius:30px;">
    <input type="hidden" class="form-control" name="user_id" value="<?=$user_id; ?>">
  </div>
  <div class="col-md-6"style=" margin-top:20px">
    <label for="lname" class="form-label"></label>
    <input type="text" class="form-control" id="lname" name="l1" placeholder="Your Lastname" style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label"></label>
    <input type="email" class="form-control" id="email" name="e1"placeholder=" Your email"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="sub" class="form-label"></label>
    <input class="form-control"  type="text" id="sub" name="sub1" placeholder="Subject"style="height:50px;border-radius:30px;">
  </div>
 
  <div class="col-md-6">
    <label for="msg" class="form-label"></label>
    <textarea class="form-control"  id="msg" name="msg1" placeholder="Your message" style="height:50px;width:206%;border-radius:30px;"></textarea>
  </div>
   <?php
 include('custom js/script.php');
 ?>
 <div class="col-12" style="margin-left:4px;">
    <button type="submit" class="btn btn-primary">Send Message</button>
  </div>
</form>
<div class="col-lg-3 col-md-3"style="margin-top:-69%; margin-left:116%;" >
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3458.9913337822286!2d73.89398392415269!3d29.89335032571632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39164b2cebc015bb%3A0x4b3ba4431712675c!2sRidhi%20Sidhi%20Mall%2C%20Ridhi%20Sidhi%20Enclave%2C%20Sri%20Ganganagar%2C%20Rajasthan%20335001!5e0!3m2!1sen!2sin!4v1709207112967!5m2!1sen!2sin" width="600" height="352" style="border:4px solid #005555;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div>


</div>

</div>




<script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
	<br><br><br><br><br><br><br><br>
<?php
include('footer.php');
include('custom css/allcss.php');
?>