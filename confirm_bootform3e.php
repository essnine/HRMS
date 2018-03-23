<?php
session_start();
include_once('include/Connection.php');

//Fetching Values from URL
$professional=mysqli_real_escape_string($conn,$_POST['professional']);
$membership=mysqli_real_escape_string($conn,$_POST['membership']);
$valid=mysqli_real_escape_string($conn,$_POST['valid']);

$username=mysqli_real_escape_string($conn,$_SESSION['user']);
//Insert query
//echo $event;
$count_query=mysqli_query($conn,"SELECT COUNT(*) as total FROM `bootform3e` WHERE `username`='$username'");
$count=mysqli_fetch_assoc($count_query);

$count1=$count['total']+1;
$membershipcode = $username.'_membership_'.$count1;
$query ="INSERT INTO `bootform3e`(`professional`,`membership`
,`valid`,`username`,`membershipcode`) VALUES ('$professional', '$membership', '$valid',
'$username','$membershipcode')";
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
		



