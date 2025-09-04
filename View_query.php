<?php
session_start();
if(!isset($_SESSION['id'])){
header("location:index.php");
}
?>
<html>
<head>
<link href="asset/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>
</head>
<body>

<?php
include("databaselocation.php");
include('header_admin.php');

$sql="SELECT * FROM `contact_us`  ";
$result=mysqli_query($con,$sql);?>
<div class="container mt-3" >
<h2 align="center" style="margin-top:14%;"> User's  Queries</h2>
 <table class="table table-hover" id="example" style="margin-top:1%;">
	  <caption >   
	  <thead>
          <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Subject</th>  
			<th>Message</th>
          </tr>
        </thead>
<?php
if(mysqli_num_rows($result)){
while($row = mysqli_fetch_assoc($result)){
	?>	
        <tbody>
          <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php  echo $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['message'];?></td>
          </tr>
        </tbody>
<?php
}
}
else{
	echo "not done";
}
?>

<script>

new DataTable('#example');

</script>














