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

$local_query = "SELECT * from `personal_details` WHERE `username`='$username'";

   $local_execute=mysqli_query($conn,$local_query);
   $result_local=mysqli_fetch_array($local_execute);
   $fname=$result_local['fname'];
   $lname=$result_local['lname'];
	 
	 
	 
	 if($leave_result['leave_type']=="fcl"){
		
		$leave="Casual Leave";
	}
	elseif($leave_result['leave_type']=="sick"){
		
		$leave="Sick Leave";
	}elseif($leave_result['leave_type']=="duty"){
		
		$leave="Duty Leave";
	}
	elseif($leave_result['leave_type']=="vacation"){
		
		$leave="Vacation Leave";
	}
	elseif($leave_result['leave_type']=="lwp"){
		
		$leave="Leave Without Pay";
	}elseif($leave_result['leave_type']=="eaned"){
		
		$leave="Earned Leave";
	}
//Insert query

?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
</head>
<body>


 <div class="container">
  <h4 style="font-family: verdana ">Leave Details</h4>
  Username: <?php echo $leave_result['username'];?> <br />
  First Name: <?php echo $fname;?><br />
  Last Name: <?php echo $lname;?><br />
  Leave Type: <?php echo $leave;?><br />
  Leave From: <?php echo $leave_result['from_date'];?><br />
  Leave To: <?php echo $leave_result['to_date'];?><br />
Description: <?php echo $leave_result['description'];?><br />
 Timestamp: <?php echo $leave_result['timestamp'];?><br />
 
 </div>
<form action="recommender.php" method="POST">
<input type="hidden" value="<?php echo $srno;?>" name="srno"></input>
<button value="Approve">Approve</button>
<button value="Reject">Reject</button>
</form>


 </html>