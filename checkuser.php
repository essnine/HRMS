<?php
include('include/Connection.php');

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$query="SELECT COUNT(*) from `users` WHERE `username`='$username'";
$result=mysqli_query($conn,$query) or die("Check your Connection".mysqli_error($conn));
$count=mysqli_fetch_array($result);
if($count[0]==1){
	
				Print 'Username exists!'; //Prompts the user
	
}
elseif($count[0]==0){
	
$query1="INSERT INTO `users` (`username`,`password`) VALUES ('$username','$password')";

$result1=mysqli_query($conn,$query1) or die("Check your Connection".mysqli_error($conn));

if($result1){
	
					Print 'Registered Successfully!'; //Prompts the user

	
}
else{
	
					Print 'Something went wrong...'; //Prompts the user

}

}


else{

					Print 'Contact System Admin!'; //Prompts the user

}
?>