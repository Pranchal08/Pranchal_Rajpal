<?php
session_start();
include('databaselocation.php');
$uid= $_SESSION['id'];
$s=	"SELECT * FROM `user_info` WHERE uid='$uid'";
$r=mysqli_query($con,$s);	
$row = mysqli_fetch_assoc($r);
 //print_r($row);die;
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
<?php

include('css.php');
include('javascript.php');
include('header.php');
 ?>


<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
		</div><br><br><br><br><br><br><br><br>
		<br>
<div class="container col-md-2"style="width:38%;height:55%;border:2px solid white;">
<h2 style="text-align:center;color:white; margin-top:10px;">Update  Your Password</h1>
<div class="container text-center"> 
<form class="row g-3" action="update_password.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
<input type="password" class="form-control" id="floatingInput1" name="pass" value=<?=$row['pass'] ;?>    placeholder="Old Password"   style="height:50px;width:145%;border-radius:30px;margin-left:33%;margin-top:2%;">               </div></div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="password" class="form-control" id="floatingInput2" name="pass1" placeholder="New Password"style="height:50px;border-radius:30px;margin-left:39%;width:128%;margin-top:2%;">
        
             </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="password" class="form-control" id="floatingInput3" name="pass2" placeholder="Confirm Password"style="height:50px;border-radius:30px;margin-left:39%;margin-top:2%;width:128%">         
             </div>
  <div class="col-11"align="center">
 <button type="submit" style="height:50px;width:95px;margin-top:15px;font-size:20px;color:white;background-color:#005555;font-weight:900; border:1px solid #005555;border-radius:30px;margin-left:9%;">Update</button>
	</div>			
			    
			  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

<script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
	
  
  <?php
  include('footer.php');
  ?>
</body>
</html>