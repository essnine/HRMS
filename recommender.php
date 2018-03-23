<?php
session_start();
include_once('include/Connection.php');
 

$hod_username=mysqli_real_escape_string($conn,$_SESSION['user']);
$srno=mysqli_real_escape_string($conn,$_POST['srno']);
//echo $srno;
$leave_set="SELECT * FROM `leaverepo` WHERE `sr_no`='$srno'";
$leave_set_fetch=mysqli_query($conn,$leave_set);
$leave_result=mysqli_fetch_array($leave_set_fetch);
$username=$leave_result['username'];

$recommend="UPDATE `leaverepo` SET recommend_status='1' WHERE `username`='$username' && `sr_no`='$srno'";
$recommend_query=mysqli_query($conn,$recommend) or die("Error Inserting Data".mysqli_error($conn));
if($query){
			Print 'Leave Submitted Successfully!'; //Prompts the user
		Print '<script>window.location.assign("recommend.php");</script>'; // redirects to login.php

		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("dashboard.php");</script>'; // redirects to login.php
		}
?>