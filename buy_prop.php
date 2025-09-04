
<?php
include("databaselocation.php");
$status="approved";


$sql="SELECT * FROM `post_property` where status='$status'";
$result=mysqli_query($con,$sql);
//print_r($result);

?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="asset/fontawesome/css/font-awesome.min.css" rel="stylesheet" >
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
include('custom css/cardscss.php');
?>

<div class="container-fluid">
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">
<br>
<div class="container">
		<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Easiest way to find your dream house</h1>
					<form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. New York"style="height:50px;">
						<button type="submit" class="btn btn-primary" style="height:50px;">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	  
<?php
while($row=mysqli_fetch_assoc($result))
{
	$postid=$row['id'];
	//print_r($row);
	//die;//$ SESSION['id']=$row['id'];


?>
  <div class='card <?php echo "bg-success-subtle mt-4";  ?>'>
  

    <img src="property_images/<?=$row['img']; ?>" class="card-img-top" alt="..." style="height:109px;width:200px;">
    <div class="card-body">
      <div class="text-section">
        <h5 class="card-title fw-bold"><?=$row['post_type'].' for '.$row['property_type']; ?></h5>
        <p class="card-text"><?=$row['address'].' <br>'. $row['city']; ?></p>
      </div>
      <div class="cta-section">
        <div><?=$row['expected_price']; ?></div>
        <a href="details.php?postid=<?=$postid;?>"class="btn btn-dark" style="margin-top:17px;">View</a>
		<i class="fa fa-check-circle"style="font-size:24px;color:green; margin-right:60px; margin-bottom:-12px;"></i>
		
      </div>
    </div>
  </div>
  


  <?php
  }
  ?>
 <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/tiny-slider.js"></script>
    <script src="asset/js/aos.js"></script>
    <script src="asset/js/navbar.js"></script>
    <script src="asset/js/counter.js"></script>
    <script src="asset/js/custom.js"></script>
  </div>

  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 <?php
include('footer.php');
include('custom css/allcss.php');
?>

</body>
</html>
