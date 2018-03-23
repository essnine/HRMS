<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$title=mysqli_real_escape_string($conn,$_POST['title']);
$organiser=mysqli_real_escape_string($conn,$_POST['organiser']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$username=mysqli_real_escape_string($conn,$_SESSION['user']);
$event=mysqli_real_escape_string($conn,$_POST['event']);
//Insert query
//echo $event;
$count_query=mysqli_query($conn,"SELECT COUNT(*) as total FROM `bootform3b4` WHERE `username`='$username'");
$count=mysqli_fetch_assoc($count_query);

$count1=$count['total']+1;
$expert = $username.'_expert_'.$count1;
$query ="INSERT INTO `bootform3b4`(`title`,`organiser`
,`type`,`date`,`username`,`expert`,`event`) VALUES ('$title', '$organiser', '$type',
'$date','$username','$expert','$event')";
	//	echo $query;
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
		



