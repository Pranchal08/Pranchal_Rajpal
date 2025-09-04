<?php
session_start();
include('databaselocation.php');
//$uid= $_SESSION['id'];
//$s=	"SELECT * FROM `user_info` WHERE uid='$uid'";
//$r=mysqli_query($con,$s);	
//$row = mysqli_fetch_assoc($r);
 //print_r($row);die;
?>	





<html>
<head>
<link href="custom css/allcss.php" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="asset/bootstrap-5.3.1-dist/css/bootstrap.min.css">

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
		<?php
	if(isset($_SESSION['success']) && isset($_SESSION['data'])) {
echo "<div class='alert alert-success' style='width:70%;text-align:center;margin-left:15%;font-size:19px;height:6%;padding-top:2px;'>";
                 echo $_SESSION['data'];
echo"</div>";
			}
			if(isset($_SESSION['error']) && isset($_SESSION['data'])) {
echo "<div class='alert alert-danger'style='width:70%;text-align:center;margin-left:15%;font-size:19px;height:6%;padding-top:2px;'>";

                 echo $_SESSION['data'];
echo"</div>";
 
			}
			unset($_SESSION['error']);
			unset($_SESSION['data']);
			unset($_SESSION['success']);
 ?>
<div class="container col-lg-6" style="border:2px solid white;width:39%;height:54%;">
<h2 style="text-align:center;color:white; margin-top:10px;">Update  Your Password</h1>
<div class="container text-center"> 
<form class="row g-3" action="update3.php" method="post">
  <div class="col-md-6"style=" margin-top:20px;">
<input type="password" class="form-control" id="floatingInput1" name="pass"  placeholder=  "Old Password"   style="height:50px;border-radius:30px;width:161%;margin-left:25%;">
               </div></div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="password" class="form-control" id="floatingInput2" name="new_pass" placeholder="New Password" style="height:50px;border-radius:30px;margin-left:32%;width:141%;"> 
        
             </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="password" class="form-control" id="floatingInput3" name="conn_pass" placeholder="Confirm Password" style="height:50px;border-radius:30px;margin-left:32%;width:141%;"> 
             </div>
        
  <div class="col-11"align="center">
  <input type="hidden"  name="userid"/>
 <button type="submit" style="height:53px;width:219px;margin-top:11px;font-size:20px;color:white;background-color:#005555;font-weight:600; border:1px solid #005555;border-radius:30px;margin-left:11%;">Update Password</button>
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