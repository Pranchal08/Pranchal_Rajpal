<?php
session_start();
include('databaselocation.php');
if(!empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['pass']) )
{
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn_pass=$_POST['conn_pass'];

$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';



if(preg_match($pattern, $pass)){
 
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
	
$s=	"select * from `user_info` where email='$email'";
$r=mysqli_query($con,$s);
if(mysqli_num_rows($r)==0)	
{
	$encrypted_pass=md5($pass);
if($pass==$conn_pass)
{
	
$sql="INSERT INTO `user_info`( `user_name`, `email`, `pass`)values ( '$uname','$email','$encrypted_pass')";
if(mysqli_query($con,$sql))
{	 
$_SESSION['data']=" success";
	header("location:index.php?success='1'");
}else{
	$_SESSION['data']="error";
	header("location:signup.php?error='1'");
	

}
}else{
	// password not same
	$_SESSION['data']="password not same";
header("location:signup.php?error='1'");

}

}else{
	// email already exist
	$_SESSION['data']=" email already exist";
header("location:signup.php?error='1'");

}

}else{
// email format
$_SESSION['data']=" emailformat";
header("location:signup.php?error='1'");
	
	}
}
else {
	$_SESSION['data']=" week password";
header("location:signup.php?error='1'");

}
}else{//field blank
header("location:signup.php?error='1'");
echo " all fields must not be blank";
}
?>