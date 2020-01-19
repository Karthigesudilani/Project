<?php
	$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="ttgms";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName);

   
	$sql="DELETE from package_booking where pBookingId=".$_GET['id'].";";
	if($conn->query($sql))
	{
		 echo"<script>alert('Delete successful');</script>";
		 header("location:./add_package.php");
	}
	else
	{
		echo "<script>window.open('admin_meals_search.php','_self')</script>";
	}
?>
