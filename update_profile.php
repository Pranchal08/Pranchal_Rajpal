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
<div class="container col-lg-6" style="border:2px solid white;">
<h2 style="text-align:center;color:white; margin-top:10px;">Update  Your Profile</h1>
<div class="container text-center"> 
<form class="row g-3" action="update2.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
<input type="text" class="form-control" id="floatingInput1" name="uname"  placeholder=  "your Firstname" value="<?=$row['user_name']; ?>"   style="height:50px;border-radius:30px;"><i class="fa fa-user-circle-o fa-lg" title="Username" style="font-size:21px;color:#005555;margin-top:-31px;margin-right:-84%;"></i>
               </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="lname" class="form-control" id="floatingInput" name="lname" placeholder="Your Lastname"value="<?=$row['lastname']; ?>" style="height:50px;border-radius:30px;"> <i class="fa fa-user"style="color:#005555;font-size:23px;margin-top:-35px;margin-right:-84%;"></i>
        
             </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="email" class="form-control" readonly id="floatingInput" name="email" placeholder="Your Email"value="<?=$row['email']; ?>" style="height:50px;border-radius:30px;"> <i class="fa fa-envelope fa-lg"style="color:#005555;font-size:20px;margin-top:-32px;margin-right:-84%;"></i>
        
             </div>
  <div class="col-md-6"style=" margin-top:20px">
    <input type="number" class="form-control" id="floatingInput" name="phoneno" placeholder="Your Phoneno."value="<?=$row['phoneno']; ?>" style="height:50px;border-radius:30px;"><i class="fa fa-phone-square"
style="color:#005555;font-size:22px;margin-top:-35px;margin-right:-84%;"></i>
        
             </div>
  <div class="col-11"align="center">
  <input type="hidden" value="<?=$row['uid']; ?>" name="userid"/>
 <button type="submit" style="height:52px;width:219px;margin-top:-2px;font-size:20px;color:white;background-color:#005555;font-weight:600; border:1px solid #005555;border-radius:30px;margin-left:11%;">Update Your Profile</button>
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