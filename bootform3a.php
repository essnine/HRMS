
<?php
include('include/Connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HRMS beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="res/css/main.css">

</head>
<body>

<div class="container head-container">
                    
<img src="res/img/hd-head" class="img-responsive">
  
</div>

<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" action="confirm_bootform3a.php" method="POST">
  <div class="form-group">  
    <div >
    


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of Books:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="books"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of UG Project Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="ug"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of PG Project Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="pg"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of PhD Students Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="phd"> 
</div>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save & Next</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</form>
</div>

</body>
=======
<?php
include('include/Connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandetory</font></p>
  <form class="form-horizontal" action="confirm_bootform3a.php" method="POST">
  <div class="form-group">  
    <div >
    


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of Books:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="books"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of UG Project Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="ug"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of PG Project Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="pg"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">No. of PhD Students Guided:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="" name="phd"> 
</div>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save & Next</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</form>
</div>

</body>

</html>