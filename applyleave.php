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
  <form class="form-horizontal" action="confirmleave.php" method="POST">



<div class="form-group">  

<label class="control-label col-sm-2" style=" text-align: left">Type of Leaves:</label>
    <label class="radio-inline" style="padding-left: 90px">
      <?php 
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
	  }?>
    </label>
	
    <label class="radio-inline">
 <?php 
	  
	  if ($row['casual_leave']!=0){
		  
		  echo '<input type="radio" name="type" value="fcl">Full Casual Leave </input>';
	  }
	  else{
		  
		  echo '<input type="radio" name="type" value="fcl" disabled>Full Casual Leave</input>';
	  }?>    
	  </label> 
<label class="radio-inline">
    <?php 
	  
	  if ($row['casual_leave']!=0){
		  
		  echo '<input type="radio" name="type" value="hcl">Half Casual Leave </input>';
	  }
	  else{
		  
		  echo '<input type="radio" name="type" value="hcl" disabled>Half Casual Leave</input>';
	  }?>  
	
	</label> 
	<label class="radio-inline">
<?php 
	  
	  if ($row['earned_leave']!=0 && $row['role']="nonfac"){
		  
		  echo '<input type="radio" name="type" value="earned">Earned Leave </input>';
	  }
	  elseif($row['role']="fac"){
		  
		  echo '<input type="radio" name="type" value="earned" disabled>Earned Leave</input>';
	  }?>  
	  </label> 
	<label class="radio-inline">
      <input type="radio" name="type" value="lwp">Leave Without Pay</input>
    </label> 
	<label class="radio-inline">
<?php 
		
	 echo '<input type="radio" name="type" value="earned">Vacation Leave </input>';?>  
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

</form>
</div>

<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="confirmleave.php">Apply!</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
  
  
</body>
</html>