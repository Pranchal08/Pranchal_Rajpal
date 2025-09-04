<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:contact.php");
}
?>
<?php

include("databaselocation.php");
if(!empty($_POST['u1']) && !empty($_POST['l1']) && !empty($_POST['e1']) && !empty($_POST['sub1'])  && !empty($_POST['msg1']))
{
$username=$_POST['u1'];
$lastname=$_POST['l1'];
$email=$_POST['e1'];
$sub=$_POST['sub1'];
$msg=$_POST['msg1'];
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$_SESSION['data']="Wrong email format";
$_SESSION['error']="1";
header("location:contact.php");
}
$sql="INSERT INTO `contact_us`(`username`, `lastname`, `email`, `subject`, `message`) VALUES ('$username','$lastname','$email','$sub','$msg')";
if(mysqli_query($con, $sql)){
$_SESSION['data']=" your data is saved successfully";
$_SESSION['success']="1";
header('location:contact.php');
//echo"hi";
}
}else{//field blank
$_SESSION['data']="All fields must be filled.";
$_SESSION['error']="1";
header("location:contact.php");
}
		



?>
