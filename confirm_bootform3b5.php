<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$details=mysqli_real_escape_string($conn,$_POST['details']);
$amount=mysqli_real_escape_string($conn,$_POST['amount']);

$username=mysqli_real_escape_string($conn,$_SESSION['user']);
//Insert query

$count_query=mysqli_query($conn,"SELECT COUNT(*) as total FROM `bootform3b5` WHERE `username`='$username'");
$count=mysqli_fetch_assoc($count_query);

$count1=$count['total']+1;
$consult = $username.'_consult_'.$count1;
$query ="INSERT INTO `bootform3b5`(`details`,`amount`,`username`,`consult`) VALUES ('$details', '$amount', '$username','$consult')";
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
		



