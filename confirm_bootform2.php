<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$qualifications=mysqli_real_escape_string($conn,$_POST['qualifications']);
$levels=mysqli_real_escape_string($conn,$_POST['levels']);
$degreename=mysqli_real_escape_string($conn,$_POST['degreename']);
$instname=mysqli_real_escape_string($conn,$_POST['instname']);
$passyear=mysqli_real_escape_string($conn,$_POST['passyear']);
$specialization=mysqli_real_escape_string($conn,$_POST['specialization']);
$univ=mysqli_real_escape_string($conn,$_POST['univ']);
$mode=mysqli_real_escape_string($conn,$_POST['mode']);
$perccc=mysqli_real_escape_string($conn,$_POST['perccc']);
$classname=mysqli_real_escape_string($conn,$_POST['classname']);
$username=mysqli_real_escape_string($conn,$_SESSION['user']);

//Insert query

$query ="INSERT INTO `educational_qualifications`(`qualifications`,`levels`
,`degree_name`,`institute_name`,`passing_year`,`specialization`,`university`,`mode`,`percentage`,`class`,`username`) VALUES ('$qualifications', '$levels', '$degreename','$instname','$passyear','$specialization','$univ','$mode','$perccc','$classname','$username')";
		//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print '<script>alert("Details Saved Successfully!");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform3a.php");</script>';
		}
else
		{
			Print '<script>alert("Improper file upload");</script>'; //Prompts the user
			Print '<script>window.location.assign("bootform2.php");</script>'; // redirects to login.php
		}

?>
		



