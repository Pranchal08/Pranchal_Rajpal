<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:index.php");
}
?>
<?php
 include('css.php');
 include('custom css/allcss.php');
  

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
if($_SESSION['id']<5)
{
	include('header_admin.php');
}
else{
include('header.php');
}
?>
 
 <div class="hero">
<div class="hero-slide">
<div class="img overlay" style="height:852px;background-image: url('images/hero_bg_3.jpg')"></div>
<div class="img overlay" style="height:852px;background-image: url('images/hero_bg_2.jpg')"></div>
<div class="img overlay" style="height:852px;background-image: url('images/hero_bg_1.jpg')"></div>
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
<h2 style="text-align:center;color:white; margin-top:10px;">Post Your Property</h1>
<div class="container text-center"> 
<form class="row g-3" action="postdata.php" method="post">
  <div class="col-md-6"style=" margin-top:20px">
    <label for="uname" class="form-label"></label>
    <input type="text" class="form-control" id="uname" name="u1" placeholder="Username" style="height:50px;border-radius:30px;">
    <input type="hidden" class="form-control" name="user_id" value="<?=$user_id; ?>">
  </div>
  <div class="col-md-6"style=" margin-top:20px">
    <label for="lname" class="form-label"></label>
    <input type="text" class="form-control" id="lname" name="l1"placeholder="Lastname"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label"></label>
    <input type="email" class="form-control" id="email" name="e1"placeholder="Email"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6">
    <label for="phoneno." class="form-label"></label>
    <input type="Number" class="form-control" id="phoneno." name="p1" placeholder="Phone Number"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-6">
    <label for="inputAdd1" class="form-label"></label>
    <input type="text" class="form-control" id="inputAdd1" placeholder="Where is your property located?" name="add1"style="height:50px;border-radius:30px;">
  </div>
 <div class="col-md-6">
    <label for="details" class="form-label"></label>
    <textarea class="form-control"  id="details" name="detail1" placeholder="Other Details of your property" style="height:50px;border-radius:30px;"></textarea>
  </div>

  <div class="col-md-6">
    <label for="inputcity" class="form-label"></label>
    <select id="inputcity" class="form-select" name="city1"style="height:50px;border-radius:30px;">
      <option selected>Sri Ganganagar</option>
      <option>Jaipur</option>
	      <option>Delhi</option>
		      <option>Mumbai</option>
			    <option>Haryana</option>
				<option>Bikaner</option>
				<option>Noida</option>
                <option>Hanumangarh</option> 
                <option>Patiala</option>
   
    </select></div>
  <div class="col-md-6">
    <label for="inputState" class="form-label"></label>
    <select id="inputState" class="form-select" name="state1"style="height:50px;border-radius:30px;">
      <option selected>Rajasthan</option>
      <option>Assam</option>
	      <option>Bihar</option>
		      <option>Punjab</option>
			    <option>Haryana</option>
    </select>
  </div>
  
  
  
   <div class="col-md-6">
    <label for="price" class="form-label"></label>
    <input class="form-control"  type="text" id="price1" name="price1" placeholder="Expected price"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-6" style="margin-top:24px;">
 <input class="form-control"  type="text" id="price2" name="price2" placeholder="Price per acres"style="height:50px;border-radius:30px;">
  </div>
  <div class="col-md-5" style="margin-top:35px;color:white; font-size:17px;">
	 <label class="btn btn-secondary"onclick="Disable_rent()" for="hide" style="height:48px;">Sell</label><br>
	<input type="radio" name="sell1" value="residential"id="resi" disabled>Residential</label>
	<input type="radio" name="sell1" value="plot" id="plot"disabled>Plot/Land</label><br>
<input type="radio" name="sell1" value="commercial"id="comm"disabled >Commercial</label>
<input type="radio" name="sell1" value="flat"id="flat"disabled>Flat/Apartment</label>
</div>
	<?php
 include('custom js/script.php');
 ?>
	
<div class="col-md-6"style="margin-top:35px;color:white; font-size:17px;">
<label class="btn btn-secondary" for="hide1" onclick="Disable_sell()"style="height:48px;">Rent</label><br>
<label for="resi1"><input type="radio" name="rent1" value="residential" id="resi1" disabled>Residential</label>
<label for="comm1"><input type="radio" name="rent1" value="commercial"id="comm1"disabled>Commercial</label>
<label for="ind1"><input type="radio" name="rent1"value="build floor" id="ind1" disabled>Independent/Buider Floor</label>
<label for="flat1"><input type="radio" name="rent1" value="flat"id="flat1" disabled>Flat/Apartment</label>
 </div>
  <div class="col-12" style="margin-left:-25px;">
    <button type="submit" class="btn btn-primary">Post Your Property</button>
  </div>
</form></div></div>




<script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
	

<br>




<br>


<?php
include('footer.php');
?>

 