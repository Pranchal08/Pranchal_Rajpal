<?php
session_start();
if(!empty($_POST['userid']) && !empty($_POST['phoneno'])&& !empty($_POST['phoneno']) && !empty($_POST['email'])  && !empty($_POST['lname']) && !empty($_POST['uname']) )
{
$userid=$_POST['userid'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
include("databaselocation.php");
if(!preg_match('/^[0-9]{10}+$/', $phoneno))
{
$_SESSION['data']="Invalid Phoneno Format.";
$_SESSION['error']="1";
header('location:update_profile.php');
}else{
	$sql="UPDATE `user_info` SET `user_name`='$uname',`lastname`='$lname',`email`='$email',`phoneno`='$phoneno' WHERE uid='$userid'";
if (mysqli_query($con, $sql)) {
$_SESSION['data']="Your Profile Updated successfully";
$_SESSION['success']="1";
 header('location:update_profile.php');
} else {
$_SESSION['data']=" Profile not updated";
$_SESSION['error']="1";
header('location:update_profile.php');
}
}

}else{
$_SESSION['data']="All fields must be filled.";
$_SESSION['error']="1";
header('location:update_profile.php');
}
mysqli_close($con);
?>

