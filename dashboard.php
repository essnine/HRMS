<?php
session_start();
include('include/Connection.php');
$user=$_SESSION['user'];


$query="SELECT `role` as role FROM `personal_details` WHERE `username`='$user'";
$result=mysqli_query($conn,$query);
$check=mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <a href="bootform1.php">Personal Details</a><br />
    <a href="bootform2.php">Educational Qualifications</a><br />
    <a href="bootform3a.php">Books Written</a><br />
    <a href="bootform3b1.php">Papers/Publications</a><br />
    <a href="bootform3b2.php">STTP/Seminar/Workshop/Symposium/FDP Attended</a><br />
    <a href="bootform3b3.php">STTP/Seminar/Workshop/Symposium/FDP Conducted</a><br />
    <a href="bootform3b4.php">Expert Lectures Delivered</a><br />
    <a href="bootform3b5.php">Consultancy</a><br />
    <a href="bootform3c.php">What's this??</a><br />
    <a href="bootform3d.php">AICTE/GTU Endorsement</a><br />
<?php

if($check['role']=="staff"){
	  echo '<a href="applyleave.php">Apply Leave</a><br />';

}
elseif($check['role']=="hod"){
	  echo '<a href="recommendleave.php">Recommend Leave</a><br />';

}
elseif($check['role']=="director"){
	  echo '<a href="approveleave.php">Approve Leave</a><br />';

}
elseif($check['role']==NULL || $check['role']==""){
	  echo 'Please Fill Up the Details First!';

}
?>

	</body>
	</html>
	