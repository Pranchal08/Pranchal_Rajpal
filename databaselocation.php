<?php
$host="localhost";
$username="root";
$pass="";
$dbname="express_homz";

$con=mysqli_connect($host,$username,$pass,$dbname);
if(!$con){
die("error:".mysqli_connect_error());
}
?>