<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:index.php");
}
$user_id= $_SESSION['id'];
?>
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
</head>
<body>
<?php 
include('header_admin.php');
include('custom css/cardscss.php');


?>

<div class="container-fluid">
<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">
  </div>
<?php
while($row=mysqli_fetch_assoc($result))
{
	$user_id=	$row['user_id'];
$s= "SELECT * FROM `user_info` WHERE `uid`='$user_id'";	
$a=mysqli_query($con,$s);	
$b=mysqli_fetch_assoc($a);	
$broker="";
if($b['broaker']==1){	
	$broker="Posted By Broker";
}

	$postid=$row['id'];
	//print_r($row);
	//die;//$ SESSION['id']=$row['id'];


?>
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
  <div class='card <?php echo "bg-success-subtle mt-4";  ?>'>
  

    <img src="property_images/<?=$row['img']; ?>" class="card-img-top" alt="..." style="height:109px;width:200px;">
    <div class="card-body"style="width:222px;height:122px;">
      <div class="text-section"style='color:#005555;'>
        <h5 class="card-title fw-bold"style='color:black;margin-bottom:0%;'><?=$row['property_type']; ?></h5>
     <p class="card-text"style='color:#005555;width:-10px;'><?="<img src='images/house2.png' width='36' height='38' title='House Address'style='margin-left:-11px;' ></i>"."<style='margin-left:-4px'>".$row['address'].' <br>'."<img src='images/l.png' width='34' height='33'style='margin-left:-13px;margin-top:-10px;' >".$row['city'].'<br>'."<h5 style='color:black;margin-left:10px;margin-top:-11%;font-size:16px;'>$broker</h5>"; ?>
		
		</p>
      </div>
      <div class="cta-section" style="border:1px solid #005555;width:20%; border-radius:2px;background-color:#005555;color:white;margin-top:-12px; margin-right:-11px;height:21px;"><?=  '    for   '  .    $row['post_type'];?>
        <div style='color:#005555;margin-top:7px;'><?=$row['expected_price']; ?></div>
         <a href="details.php?postid=<?=$postid;?>" class="btn btn-dark" style="margin-top:5px;background-color:#005555 ">View</a>	
		 <i class='fa fa-check-circle' aria-hidden='true' style='font-size:20px; color:#005555; margin-right:24px; margin-top:6px;'></i><a href="delete_post.php?postid=<?=$postid;?>"><i class='fa fa-trash' style='color:#005555; font-size:20px;margin-top:-21px;'></i></a>
		</div>
    </div>
  </div>
  <?php
  }
  ?>
 
  </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 <?php
include('footer.php');
include('custom css/allcss.php');
?>

</body>
</html>
