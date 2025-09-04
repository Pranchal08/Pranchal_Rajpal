<html>
<head>
<link href="custom css/allcss.php" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="asset/bootstrap-5.3.1-dist/css/bootstrap.min.css">

</head>
<body>
<?php
session_start();
include('css.php');
include('javascript.php');
include('header_login.php');
 ?>


<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
		</div><br><br><br><br><br><br><br><br>
		<br>
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
<div class="container col-lg-6" style="border:2px solid white;">
<h2 style="text-align:center;color:white; margin-top:10px;">SIGN UP</h1>
<div class="container text-center"> 
<form class="row g-3" action="signup.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
<input type="text" class="form-control" id="floatingInput1" name="uname"  placeholder=  "        your name"   style="height:50px;border-radius:30px;"><i class="fa fa-user-circle-o fa-lg" title="Username" style="color:#005555;margin-top:-30px;margin-left:-214px;"></i>
               </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="        Your Email"style="height:50px;border-radius:30px;"> <i class="fa fa-envelope fa-lg"style="color:#005555;font-size:20px;margin-top:-30px;margin-left:-214px;"></i>
        
             </div>
  <div class="col-md-6">
    <input type="password" class="form-control" id="floatingPassword1" name="pass" placeholder="        Password"style="height:50px;border-radius:30px;"><i class="fa fa-lock fa-lg"style="color:#005555;font-size:26px;margin-top:-33px;margin-left:-214px;"></i>
                
             </div>
  <div class="col-md-6">
    <input type="password" class="form-control" id="floatingPassword" name="conn_pass" placeholder="        Confirm Your Password"style="height:50px;border-radius:30px;"><i class="fa fa-key fa-lg"style="color:#005555;font-size:21px;margin-top:-30px;margin-left:-214px;"></i>
     	 </div>
	<p style="font-size:17px;margin-left:-198px;color:white;"> Have an account? </p> <a href="index.php" style="font-size:17px;;color:white;text-decoration:none;margin-top:-42px;margin-left:231px;">Login here </a>
  <div class="col-11"align="center">
 <button type="submit" style="height:50px;width:116px;margin-top:-29px;font-size:20px;color:white;background-color:#005555;font-weight:900; border:1px solid #005555;border-radius:30px;margin-left:11%;">SIGN UP</button>
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