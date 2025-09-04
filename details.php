<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_GET['postid']))){
header("location:index.php");
}
include("databaselocation.php");
$user_id= $_SESSION['id'];
$postid=$_GET['postid'];
$sql="SELECT * FROM `post_property` where id='$postid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if($_SESSION['id']<5)
{
	include('header_admin.php');
	
}else{
include('header.php');
}

?>


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

	<title>Property &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	
	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up"><?=$row['address']; ?></h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="home.php">Home</a></li>
							<li class="breadcrumb-item "><a href="properties.html">Properties</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page"><?=$row['address']; ?></li>
						</ol>
					</nav>


				</div>
			</div>


		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<img src="property_images/<?=$row['img']; ?>" alt="Image" class="img-fluid">
							<img src="property_images/<?=$row['img']; ?>" alt="Image" class="img-fluid">
							<img src="property_images/<?=$row['img']; ?>" alt="Image" class="img-fluid">
						</div>
					</div>
				</div>

<div class="col-lg-4">
<h2 class="heading text-primary"><?=$row['address'];?></h2>
<p class="meta"><?=$row['property_type'].'<br>'. $row['post_type'].'<br>'.$row['email'].'<br>'. $row['phoneno'].'<br>'.$row['expected_price'].'<br>'. $row['detail'];?>
			<br><br><br><br>
<div class="container" style=" border:1px solid black;width:300px; margin-left:-1px; height:170px;">
<img  src="images/p.png" width="48"  height="48" title="Parking"style="margin-bottom:-13px;margin-left:-12px;">
<img src="images/s.png" width="40" height="40" style="margin-bottom:-10px;margin-left:5px;"  title="Shower">
<img src="images/g.png" width="42" height="42" style="margin-top:9px;margin-left:4px;"title="Garden">
<img src="images/b.png" width="40" height="40" style="margin-top:9px;margin-left:4px;"title="Bedroom">
<img src="images/c.png" width="48" height="48" style="margin-top:9px;margin-left:10px;"title="Chimney">
<img src="images/f.png" width="44" height="44" style="margin-top:11px;margin-left:-6px;"title="Heater">	
<img src="images/ff.png" width="40" height="40" style="margin-top:9px;margin-left:4px;"title="Furnichure">					
<img src="images/gg.png" width="47" height="47" style="margin-top:9px;margin-left:4px;"title="Guest Room">				
<img src="images/k.png" width="42" height="42" style="margin-top:8px;margin-left:4px;"title="Kids Bed">					
<img src="images/pg.png" width="45" height="45" style="margin-top:9px;margin-left:6px;"title="Swing">					
<img src="images/t.png" width="43" height="43" style="margin-top:6px;margin-left:-7px;"title="Outdoor Bathroom">					
<img src="images/o.png" width="44" height="44" style="margin-top:9px;margin-left:4px;"title="Outdoor Furnichure">					
<img src="images/d.png" width="45" height="45" style="margin-top:6px;margin-left:4px;"title="Dinning Table">			
<img src="images/cu.png" width="42" height="42" style="margin-top:6px;margin-left:4px;"title="Curtains">			
<img src="images/fan.png" width="40" height="40" style="margin-top:1px;margin-left:4px;"title="Table Fan">			
									
			</div>
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
  <br><br>
<?php
include('footer.php');
include('custom css/allcss.php');

?>
