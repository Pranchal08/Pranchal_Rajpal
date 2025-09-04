<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:broaker_registration.php");
}
?>
<?php

include("databaselocation.php");
if(!empty($_POST['u1']) && !empty($_POST['l1']) && !empty($_POST['e1']) && !empty($_POST['p1'])  &&!empty($_POST['pass'])  && !empty($_POST['con_pass']))
{
$user_name=$_POST['u1'];
$lastname=$_POST['l1'];
$email=$_POST['e1'];
$phoneno=$_POST['p1'];
$pass=md5($_POST['pass']);
$con_pass=md5($_POST['con_pass']);
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$_SESSION['data']="emailformat";
$_SESSION['error']="1";
header("location:broaker_registration.php");
}
else if(!preg_match('/^[0-9]{10}+$/', $phoneno))
{
$_SESSION['data']="Phone number invalied";
$_SESSION['error']="1";
header("location:broaker_registration.php");
}else if($pass != $con_pass)
{
$_SESSION['data']="Password not matched";
$_SESSION['error']="1";
header("location:broaker_registration.php");
}
else
{
	$sql="INSERT INTO `user_info`( `user_name`, `lastname`, `email`, `pass`,`phoneno`, `broaker`)  VALUES ('$user_name','$lastname','$email','$pass','$phoneno','1')";
if(mysqli_query($con, $sql)){
$_SESSION['data']=" your broker account is created successfully";
$_SESSION['success']="1";
header('location:broaker_registration.php');

}

}
}else{
$_SESSION['data']="all fields must not be blank";
$_SESSION['error']="1";
header("location:broaker_registration.php");

}




		



?>
