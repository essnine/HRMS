<?php
session_start();
include('include/Connection.php');
$user=$_SESSION['user'];
$role=$_SESSION['role'];


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

if($role=="fac"){
	  echo '<a href="applyleave.php">Apply Leave</a><br />';

}
elseif($role=="hod"){
	  echo '<a href="recommend.php">Recommend Leave</a><br />';

}
elseif($role=="director"){
	  echo '<a href="approve.php">Approve Leave</a><br />';

}
elseif($role=="admin"){
	
	echo 'Admin';
}
elseif($check['role']==NULL || $check['role']==""){
	  echo 'Please Fill Up the Details First!';

}
?>

	</body>
	</html>
	