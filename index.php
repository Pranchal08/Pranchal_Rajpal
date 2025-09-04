<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

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
<?php 
include('header_login.php');



?>


<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
		</div>
		
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Easiest way to find your dream home</h1>
					<form action="validate_user.php" method="POST" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text"   class="form-control form-rounded" id="exampleInputm1" name="email" placeholder="Email" style="height:50px;"><input type="password"   class="form-control" id="exampleInputPass1" name="password" placeholder="Password"style="height:50px;" >
						<button type="submit" class="btn btn-primary" style="border-radius:40px;height:50px;">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	


    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
  </body>
  </html>
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

<?php
include('footer.php');
include('custom css/allcss.php');
include('css.php');
?>