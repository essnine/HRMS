 <?php
 session_start();
 include('include/Connection.php');
 
 $username_hod=mysqli_real_escape_string($conn,$_SESSION['user']);

 if($username_hod=="hodce"){
	
	$branch="ce";
}
if($username_hod=="hodme"){
	
	$branch="me";
}
if($username_hod=="hodcl"){
	
	$branch="cl";
}
if($username_hod=="hodec"){
	
	$branch="ec";
}

if($username_hod=="hodee"){
	
	$branch="ee";
}
if($username_hod=="hodmba"){
	
	$branch="mba";
}
if($username_hod=="hodmaths"){
	
	$branch="maths";
}
 ?>
 <!DOCTYPE html>
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
  <h4 style="font-family: verdana ">Leave List</h4>

    <caption>Details</caption>
  <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable">
 
 <tr>
 
                <td>Username</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Leave Type</td>
                <td>Total Leaves Remaining</td>
                <td>Description</td>
                <td>Details</td>
                </tr>
  
   <?php
   $table_query = "SELECT * from `leaverepo` WHERE `branch`='$branch' &&`recommend_status`=0";
   $table_query_result = mysqli_query($conn,$table_query);
   
    if(mysqli_num_rows($table_query_result)>=0){
		$row_count=0;
   while($row=mysqli_fetch_assoc($table_query_result)){
   
   


	if($row['leave_type']=="fcl"){
		
		$leave="casual_leave";
	}
	elseif($row['leave_type']=="sick"){
		
		$leave="sick_leave";
	}elseif($row['leave_type']=="duty"){
		
		$leave="duty_leave";
	}
	elseif($row['leave_type']=="vacation"){
		
		$leave="vacation_leave";
	}
	elseif($row['leave_type']=="lwp"){
		
		$leave="leave_without_pay";
	}elseif($row['leave_type']=="earned"){
		
		$leave="earned_leave";
	}
	$username=$row['username'];
   $local_query = "SELECT * from `personal_details` WHERE `username`='$username'";

   $local_execute=mysqli_query($conn,$local_query);
   $result_local=mysqli_fetch_array($local_execute);
   $fname=$result_local['fname'];
   $lname=$result_local['lname'];
	 
   
$leave_result="SELECT `$leave` FROM `leavemaster` WHERE `username`='$username'";
$leave_query=mysqli_query($conn,$leave_result);
$leave_count=mysqli_fetch_row($leave_query);

//echo $row['sr_no'];
				echo "
                <tr>
                <td>".$row['username']."</td>
                <td>".$fname."</td>
                <td>".$lname."</td>
                <td>".$row['leave_type']."</td>
                <td>".$leave_count[$row_count]."</td>
                <td>".$row['description']."</td>
                <td> <form action='confirm_recommend.php' method='POST'><input type='hidden' name='srno' value='".$row['sr_no']."'>
				

				<button name='submit'>Details</button></form></td>
                
				
				</tr>";
	}
	$row_count++;
	}   
      ?>
                
                
               


  </table>


 </div>
 
 


</body>
</html>