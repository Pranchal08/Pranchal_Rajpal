<?php
session_start();
include("databaselocation.php");
$uid= $_SESSION['id'];
if(!empty($_POST['pass']) && !empty($_POST['new_pass'])&& !empty($_POST['conn_pass']))
{
$pass=md5($_POST['pass']);
$orignal_pass=$_POST['new_pass'];
$new_pass=md5($_POST['new_pass']);
$conn_pass=md5($_POST['conn_pass']);

$s=	"SELECT * FROM `user_info` WHERE uid='$uid'";
$r=mysqli_query($con,$s);	
$row = mysqli_fetch_assoc($r);
 //print_r($row['pass']);die;
$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
if($pass==$row['pass']){

 if(($new_pass==$conn_pass) && (preg_match($pattern, $orignal_pass)))
 { 
$sql="UPDATE `user_info` SET `pass`='$new_pass' WHERE `uid`='$uid'";
mysqli_query($con, $sql);
$_SESSION['data']="Your Password Updated successfully....";
$_SESSION['success']="1";
header('location:update_password.php');

}else{
echo"12";
$_SESSION['data']="Please! Enter the Correct Password According to Rules.";
$_SESSION['error']="1";
 header('location:update_password.php');
}//enter correct new password as per rule///


}else
{
	$_SESSION['data']="Your Current Password Not Matched";
$_SESSION['error']="1";
 header('location:update_password.php');

}
}else{
$_SESSION['data']="All fields must be filled.";
$_SESSION['error']="1";
header('location:update_password.php');

}

mysqli_close($con);



?>

