 <?php
 session_start();
 include('include/Connection.php');
 
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
  <script>
  $( function() {
    $( "#fromdate" ).datepicker();
  } );
  $( function() {
    $( "#todate" ).datepicker();
  } );

 </script>
 
</head>
<body>

<div class="container">
  <h4 style="font-family: verdana ">Leave Form</h4>
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  
  <?php echo'<form class="form-horizontal"  method="POST" action="confirmleave.php">



<div class="form-group">  

<label class="control-label col-sm-2" style=" text-align: left">Type of Leaves:</label>
    <label class="radio-inline" style="padding-left: 90px">';
      
	  $username=mysqli_real_escape_string($conn,$_SESSION['user']);

 $query ="SELECT * FROM `leavemaster`WHERE `username`='$username'";
$result=mysqli_query($conn,$query) or die("Error Inserting Data".mysqli_error($conn));
$row=mysqli_fetch_array($result);

 $query1 ="SELECT * FROM `leaverepo`WHERE `username`='$username'";
$result1=mysqli_query($conn,$query1) or die("Error Inserting Data".mysqli_error($conn));
$row1=mysqli_fetch_array($result1);
	  if ($row['sick_leave']!=0){
		  
		  echo '<input type="radio" name="type" value="sick">Sick Leave </input>';
	  }
	  else{
		  
		  echo '<input type="radio" name="type" value="sick" disabled>Sick Leave </input>';
	  }
    
	
  echo'  </label><label class="radio-inline">';
	  
	  if ($row['casual_leave']!=0){
		  
		  echo '<input type="radio" name="type" value="fcl">Full Casual Leave </input>';
	  }
	  else{
		  
		  echo '<input type="radio" name="type" value="fcl" disabled>Full Casual Leave</input>';
	  } 
echo'	  </label> 
<label class="radio-inline">';
	  
	  if ($row['casual_leave']!=0){
		  
		  echo '<input type="radio" name="type" value="hcl">Half Casual Leave </input>';
	  }
	  else{
		  
		  echo '<input type="radio" name="type" value="hcl" disabled>Half Casual Leave</input>';
	  }  
	echo'
	</label> 
	<label class="radio-inline">';
	  
	  if ($row['earned_leave']!=0 && $row['role']="nonfac"){
		  
		  echo '<input type="radio" name="type" value="earned">Earned Leave </input>';
	  }
	  elseif($row['role']="fac"){
		  
		  echo '<input type="radio" name="type" value="earned" disabled>Earned Leave</input>';
	  }echo'
	  </label> 
	<label class="radio-inline">
      <input type="radio" name="type" value="lwp">Leave Without Pay</input>
    </label> 
	<label class="radio-inline">';
		
	 echo '<input type="radio" name="type" value="vacation">Vacation Leave </input>
	  </label> 
	
  </div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">From:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="" id="fromdate" name="fromdate"> 
 </div>
 
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">To:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="" id="todate" name="todate"> 
 </div>
 
</div>


<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Description:</label>
    <div class="col-sm-10">
       <textarea class="form-control" rows="2" name="description"></textarea>
       
    
</div>
</div>

</div>

<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Apply!</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center> </form>
';?>
 <div class="container">
  <h4 style="font-family: verdana ">Leave Status</h4>
  <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable">
    <caption>Details</caption>
   <?php
   $table_query = "SELECT * from `leavemaster` WHERE `username`='$username'";
   $table_query_result = mysqli_query($conn,$table_query);
   $rows=mysqli_fetch_array($table_query_result);
   
   if($rows['role']=="fac"){
	   
	   $rows['earned_leave']="Not applicable";
   }
   ?>
                <td>Casual Leave</td>
                <td>Sick Leave</td>
                <td>Duty Leave</td>
                <td>Vacation Leave</td>
                <td>Leave Without Pay</td>
                <td>Earned Leave</td>
                </tr>
                <tr>
                <td><?php echo $rows['casual_leave'];?></td>
                <td><?php echo $rows['sick_leave'];?></td>
                <td><?php echo $rows['duty_leave'];?></td>
                <td><?php echo $rows['vacation_leave'];?></td>
                <td><?php echo $rows['leave_without_pay'];?></td>
                <td><?php echo $rows['earned_leave'];?></td>
                
               



  </table>


 </div>
 
 <div class="container">
  <h4 style="font-family: verdana ">Recently Applied Leaves</h4>
  <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable">
  <tr><td>Leave Submitted Date</td>
                <td>Leave Type</td>
                <td>HOD Recommendation</td>
                <td>Director Approval</td>
               
                </tr>
    <caption>Details</caption>
   <?php
   $table_query = "SELECT * from `leaverepo` WHERE `username`='$username'";
   $table_query_result = mysqli_query($conn,$table_query);
   
   if(mysqli_num_rows($table_query_result)>=0){
   while($row=mysqli_fetch_assoc($table_query_result)){
   
   if($row['leave_type']=="fcl"){
	   
	   $type="Full Casual Leave";
   }
   elseif($row['leave_type']=="hcl"){
	   
	   $type="Hald Casual Leave";
   }
   elseif($row['leave_type']=="sick"){
	   
	   $type="Sick Leave";
   }
   elseif($row['leave_type']=="lwp"){
	   
	   $type="Leave Without Pay";
	   
   }
   elseif($row['leave_type']=="vacation"){
	   
	   $type="Vacation Leave";
	   
   }
   
   if($row['recommend_status']=='0'){
	   
	   $recommend="Not recommended yet!";
	   
   }
   elseif($row['recommend_status']=='1'){
	   
	   $recommend="Recommended!";
	   
   }
   
   if($row['approval_status']=='0'){
	   
	   $approval="Not approved yet!";
	   
   }
   elseif($row['approval_status']=='1'){
	   
	   $approval="Approved!";
   }
   
   if($row['approval_status']=='2'){
	   
	   $approved="Rejected!";
   }
   if($row['recommend_status']=='2'){
	   
	   $recommend="Rejected!";
   }
   
   
                
				echo '
                <tr>
                <td>'.$row['timestamp'].'</td>
                <td>'.$type.'</td>
                <td>'.$recommend.'</td>
                <td>'.$approval.'</td></tr>';
              
   }}?>



  </table>


 </div>
</body>
</html>