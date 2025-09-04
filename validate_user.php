<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:index.php");
}
?>

<?php
session_start();
include('databaselocation.php');
if(!empty($_POST['email']) && !empty($_POST['password']) )
{
$email=$_POST['email'];
$password= md5($_POST['password']);
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
$sql="SELECT * FROM `user_info` WHERE email='$email' && pass='$password' && acc_status='1'";
$result=mysqli_query($con,$sql);
//echo(mysqli_num_rows($result));
//die;
if(mysqli_num_rows($result))
{
$row=mysqli_fetch_assoc($result);
   $_SESSION['id']=$row['uid'];
   
   if($row['uid']=='1')
	header("location:welcome.php?success='1'");
   else
	header("location:home.php?success='1'");	
//echo "hi";
}
else{
	echo $password;
	$_SESSION['data']="either email or password is wrong";
header("location:index.php?error='1'");
//echo "hello";	
}

}else{
	$_SESSION['data']=" your email format is wrong";
header("location:index.php?error='1'");
//echo "hhh";
}	
}else{
	$_SESSION['data']="all fields are mandatory";
header("location:index.php?error='1'");	
//echo "hloooo";
}




?>