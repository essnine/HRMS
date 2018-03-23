
<?php

include('include/Connection.php');
?>
<!DOCTYPE HTML>
<html>
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

  <form class="form-horizontal" >
  <div class="form-group">

   <label class="control-label col-sm-2" style=" text-align: left">Username<font size="1px">(Should be unique)</font>:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="Username" id="username">
	   </div>
	   </div>
	   <div class="form-group">

   <label class="control-label col-sm-2" style=" text-align: left">Password:</label>
    <div class="col-sm-10">
       <input type="password" style="width:225; height:19" placeholder="Password" id="password">
	   </div>
	   </div>
	   
	     <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit" id="submit">Register</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  <script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var username = $("#username").val();
var password = $("#password").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'username='+ username + '&password='+ password; 
if(username==''||password==''){
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "checkuser.php",
data: dataString,
cache: false,
success: function(result){
alert(result);

}
});
}
return false;
});
});
</script>
=======
<?php

include('include/Connection.php');
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
  <form class="form-horizontal" >
  <div class="form-group">

   <label class="control-label col-sm-2" style=" text-align: left">Username<font size="1px">(Should be unique)</font>:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="Username" id="username">
	   </div>
	   </div>
	   <div class="form-group">

   <label class="control-label col-sm-2" style=" text-align: left">Password:</label>
    <div class="col-sm-10">
       <input type="password" style="width:225; height:19" placeholder="Password" id="password">
	   </div>
	   </div>
	   
	     <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit" id="submit">Register</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  <script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var username = $("#username").val();
var password = $("#password").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'username='+ username + '&password='+ password; 
if(username==''||password==''){
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "checkuser.php",
data: dataString,
cache: false,
success: function(result){
alert(result);

}
});
}
return false;
});
});
</script>

  </form>