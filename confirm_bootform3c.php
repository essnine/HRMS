<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$title=mysqli_real_escape_string($conn,$_POST['title']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$desc=mysqli_real_escape_string($conn,$_POST['desc']);

$username=mysqli_real_escape_string($conn,$_SESSION['user']);
//Insert query

$count_query=mysqli_query($conn,"SELECT COUNT(*) as total FROM `bootform3c` WHERE `username`='$username'");
$count=mysqli_fetch_assoc($count_query);

$count1=$count['total']+1;
$enter_unique = $username.'_indexname_'.$count1;
$query ="INSERT INTO `bootform3c`(`title`,`type`,`username`,`indexer`,`status`,`description`) VALUES ('$title', '$type', '$username','$enter_unique','$status','$desc')";
	//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print 'Details Saved Successfully!'; //Prompts the user
		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("bootform2.php");</script>'; // redirects to login.php
		}

?>
		



