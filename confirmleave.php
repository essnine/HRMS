<<<<<<< HEAD
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
		



=======
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

//Insert query
$dept_query="SELECT `dept` from `personal_details` WHERE `username`='$username'";
$dept_query_result=mysqli_query($conn,$dept_query);
$dept_result=mysqli_fetch_array($dept_query_result);
$dept=$dept_result['dept'];
$timestamp=date("d/m/Y");

$query ="INSERT INTO `leaverepo`(`username`,`leave_type`,`from_date`,`to_date`,`description`,`recommend_status`,`approval_status`,`hod_remarks`,`timestamp`,`branch`) VALUES 
('$username', '$type', '$fromdate','$todate','$description',0,0,'Not recommended yet','$timestamp','$dept')";
	//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print 'Leave Submitted Successfully!'; //Prompts the user
		Print '<script>window.location.assign("dashboard.php");</script>'; // redirects to login.php

		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("dashboard.php");</script>'; // redirects to login.php
		}

?>
		



>>>>>>> e56b2830b8d0c8bfbe24f08520be1f965b9a329a
