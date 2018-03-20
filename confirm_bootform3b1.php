<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$coauthor=mysqli_real_escape_string($conn,$_POST['coauthor']);
$papertitle=mysqli_real_escape_string($conn,$_POST['papertitle']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$conference=mysqli_real_escape_string($conn,$_POST['conference']);
$presentation=mysqli_real_escape_string($conn,$_POST['presentation']);
$dateofpresentation=mysqli_real_escape_string($conn,$_POST['dateofpresentation']);
$organiser=mysqli_real_escape_string($conn,$_POST['organiser']);
$duration=mysqli_real_escape_string($conn,$_POST['duration']);
$issn=mysqli_real_escape_string($conn,$_POST['issn']);
$impact=mysqli_real_escape_string($conn,$_POST['impact']);
$username=mysqli_real_escape_string($conn,$_SESSION['user']);
//Insert query

$query ="INSERT INTO `bootform3b1`(`coauthor`,`papertitle`
,`type`,`conference`,`presentation`,
`dateofpresentation`,`organiser`,`duration`,`issn`,`impact`,
`username`) VALUES ('$coauthor', '$papertitle', '$type',
'$conference','$presentation','$dateofpresentation','$organiser','$duration',
'$issn',
'$impact','$username')";
		//echo $query;
//echo $_SESSION['user'];
		$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
		
		if($query){
			Print 'Details Saved Successfully!'; //Prompts the user
			Print '<script>window.location.assign("bootform3a.php");</script>';
		}
else
		{
			Print 'Contact Server admin'; //Prompts the user
			Print '<script>window.location.assign("bootform2.php");</script>'; // redirects to login.php
		}

?>
		



