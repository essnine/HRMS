<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$books=mysqli_real_escape_string($conn,$_POST['books']);
$ug=mysqli_real_escape_string($conn,$_POST['ug']);
$pg=mysqli_real_escape_string($conn,$_POST['pg']);
$phd=mysqli_real_escape_string($conn,$_POST['phd']);
$username=mysqli_real_escape_string($conn,$_SESSION['user']);


//Insert query

$query ="INSERT INTO `bootform3a`(`username`,`books`
,`ug`,`pg`,`phd`) VALUES ('$username', '$books', '$ug','$pg','$phd')";
		//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print '<script>alert("Details Saved Successfully!");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform3b1.php");</script>';
		}
else
		{
			Print '<script>alert("Improper file upload");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform3a.php");</script>'; // redirects to login.php
		}

?>
		



