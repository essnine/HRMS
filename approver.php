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

$approval="UPDATE `leaverepo` SET approval_status='1' WHERE `username`='$username' && `sr_no`='$srno'";
$approval_query=mysqli_query($conn,$approval) or die("Error Inserting Data".mysqli_error($conn));
//echo $approval;


	if($leave_result['leave_type']=="fcl"){
		
		$leave="casual_leave";
	}
	elseif($leave_result['leave_type']=="sick"){
		
		$leave="sick_leave";
	}elseif($leave_result['leave_type']=="duty"){
		
		$leave="duty_leave";
	}
	elseif($leave_result['leave_type']=="vacation"){
		
		$leave="vacation_leave";
	}
	elseif($leave_result['leave_type']=="lwp"){
		
		$leave="leave_without_pay";
	}elseif($leave_result['leave_type']=="earned"){
		
		$leave="earned_leave";
	}
//echo $leave;	
$leave_count_query="SELECT `$leave` from `leavemaster` WHERE `username`='$username'";
$leave_count_result=mysqli_query($conn,$leave_count_query);
$leave_count_set=mysqli_fetch_array($leave_count_result);
$leave_count=$leave_count_set["$leave"];
//echo $leave_count;

$new_leave_count=$leave_count-1;

$reduce_leave="UPDATE `leavemaster` SET `$leave`='$new_leave_count' WHERE `username`='$username'";
$reduce_leave_query=mysqli_query($conn,$reduce_leave) or die("Error Inserting Data".mysqli_error($conn));


if($reduce_leave_query){
			Print 'Leave Submitted Successfully!'; //Prompts the user
		Print '<script>window.location.assign("approve.php");</script>'; // redirects to login.php
	
		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("dashboard.php");</script>'; // redirects to login.php
		}
?>