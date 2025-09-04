<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:index.php");
}
$user_id= $_SESSION['id'];
if($user_id=='1')
	$status="approved";
else
	$status="pending";

?>
<?php

include("databaselocation.php");
if(!empty($_POST['u1']) && !empty($_POST['e1']) && !empty($_POST['l1'])  && !empty($_POST['detail1']) && !empty($_POST['add1']) && !empty($_POST['city1']) && !empty($_POST['state1']) && !empty($_POST['price1']) && !empty($_POST['price2']) &&( !empty($_POST['sell1']) || !empty($_POST['rent1'])))
{
	
$uname=$_POST['u1'];
$lname=$_POST['l1'];
$phoneno=$_POST['p1'];
$email=$_POST['e1'];
$detail=$_POST['detail1'];
$address=$_POST['add1'];
$city=$_POST['city1'];
$state=$_POST['state1'];
$expected_price=$_POST['price1'];
$price_per_acres=$_POST['price2'];
$user_id=$_POST['user_id'];
if(isset($_POST['sell1']))
{
	$post_type="sell";
	$property_type=$_POST['sell1'];	
}
if(isset($_POST['rent1']))
{
	$post_type="rent";
	$property_type=$_POST['rent1'];
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$_SESSION['data']="emailformat";
$_SESSION['error']="0";
header("location:post_property.php");
}
else if(!preg_match('/^[0-9]/', $expected_price&&$price_per_acres))
{
$_SESSION['data']="Invalid Price Format";
$_SESSION['error']="0";
header("location:post_property.php");
}

		
else if(!preg_match('/^[0-9]{10}+$/', $phoneno))
{
$_SESSION['data']="Invalid Phoneno Format.";
$_SESSION['error']="0";
header("location:post_property.php");

}
else 
{
	
$sql="INSERT INTO `post_property`(`user_id`,`username`, `lastname`, `email`, `phoneno`, `address`, `detail`, `expected_price`, `price_per_acrs`, `city`, `state`, `property_type`, `post_type`,`status`) VALUES ('$user_id','$username','$lname','$email','$phoneno','$address','$detail','$expected_price','$price_per_acres','$city','$state','$property_type','$post_type','$status')";
if(mysqli_query($con, $sql)){
$last_id = mysqli_insert_id($con);		
	echo $las_id;
$_SESSION['data']=" your data is saved successfully";
$_SESSION['success']="1";
header("location:upload_property_image.php?postid=$last_id");
	
}else{
	echo mysqli_error($con);
	echo "failure";
}	

	
}

}else if(isset($_FILES['image'])){
	$post_id=$_POST['postid'];
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 $_SESSION['error']="1";
		$_SESSION['data']="extension not allowed, please choose a JPEG or PNG file.";
		header("location:upload_property_image.php?postid=$post_id");
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be exactely 2 MB';
		$_SESSION['error']="1";
		$_SESSION['data']="File size must be exactely 2 MB";
		header("location:upload_property_image.php?postid=$post_id");
      }
      
      if(empty($errors)==true){
		  $fname=$post_id.".".$file_ext;
         move_uploaded_file($file_tmp,"property_images/".$fname);
		$sql="UPDATE `post_property` SET `img`='$fname' where id='$post_id'";
		 if(mysqli_query($con,$sql))
		 {
			 $_SESSION['success']="1";
			 $_SESSION['data']="your post uploaded success, will be approved shortly ";
			header("location:post_property.php");
		 }else{
			$_SESSION['error']="1";
			 $_SESSION['data']="your post saved but unexpected error occur in image upload";
			header("location:post_property.php");
		 
		 }
      }else{
         print_r($errors);
      }
   }

else{//field blank
$_SESSION['data']="All fields must be filled.";
$_SESSION['error']="1";
header("location:post_property.php");
}

?>