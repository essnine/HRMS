
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
  <form class="form-horizontal" action="confirmleave.php">




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
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
  
  
</body>
</html>