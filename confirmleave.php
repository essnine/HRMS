<?php
session_start();
include_once('include/Connection.php');
 if(!empty($_POST['type'])) {

        $type=mysqli_real_escape_string($conn,$_POST['type']);

        }
//Fetching Values from URL
$fromdate=mysqli_real_escape_string($conn,$_POST['fromdate']);
$todate=mysqli_real_escape_string($conn,$_POST['todate']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$username=mysqli_real_escape_string($conn,$_SESSION['user']);

$username=mysqli_real_escape_string($conn,$_SESSION['user']);
//Insert query


$query ="INSERT INTO `bootform3c`(`title`,`type`,`username`,`indexer`,`status`,`description`) VALUES ('$title', '$type', '$username','$enter_unique','$status','$desc')";
	//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print 'Leave Submitted Successfully!'; //Prompts the user
		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("bootform2.php");</script>'; // redirects to login.php
		}

?>
		



