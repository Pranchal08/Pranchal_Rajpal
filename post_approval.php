<?php
session_start();
$post_id=$_GET['pid'];
include("databaselocation.php");
$status="approved";
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="UPDATE `post_property` SET status='approved' WHERE id='$post_id'";
if (mysqli_query($con, $sql)) {
$_SESSION['data']="Post approved successfully";
$_SESSION['success']="1";
  header('location:welcome.php');
} else {
$_SESSION['data']=" Post Not Approved";
$_SESSION['error']="0";
echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);
?>

