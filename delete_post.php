<?php
$post_id=$_GET['postid'];
include('databaselocation.php');

$sql="UPDATE `post_property` SET status='deleted' WHERE id='$post_id'";
if (mysqli_query($con, $sql)) {
$_SESSION['data']="Post deleted successfully";
$_SESSION['success']="1";
header('location:view_posts.php');
} else {
$_SESSION['data']=" Error ! post not deleted";
$_SESSION['error']="1";
}
?>
	