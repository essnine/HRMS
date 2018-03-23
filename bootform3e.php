
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
  <form class="form-horizontal" action="/action_page.php">
  

<h3>Membership of Professional Bodies:</h3>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Name of Professional Body:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="professional">
        
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Membership No.:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="membership">
        
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Valid Till:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="valid">
        
</div>
</div>





 <div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit">Add</button>
      
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var professional = $("#professional").val();
var membership = $("#membership").val();
var valid = $("#valid").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'professional='+ professional + '&membership='+ membership+ '&valid='+ valid;

if(professional==''||membership==''||valid=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3e.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
// Find a <table> element with id="myTable":
var table = document.getElementById("myTable");
var row = table.insertRow(1);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);



// Add some text to the new cells:
cell1.innerHTML = ''+professional+'';
cell2.innerHTML = ''+membership+''; 
cell3.innerHTML = ''+valid+''; 


}
});
}
return false;
});
});
</script>
</form>
</div>

 <div class="table-responsive">
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable">
    <caption>Details</caption>
   
                <td>Professional Body</td>
                <td>Membership No.</td>
                <td>Vaild Till</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="button" value="Edit"></td> 
                <td><input type="button" value="Edit"></td>
                


  </table>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="dashboard.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</form>
</div>

</body>
=======
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
  <form class="form-horizontal" action="/action_page.php">
  

<h3>Membership of Professional Bodies:</h3>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Name of Professional Body:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="professional">
        
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Membership No.:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="membership">
        
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Valid Till:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" id="valid">
        
</div>
</div>





 <div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit">Add</button>
      
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var professional = $("#professional").val();
var membership = $("#membership").val();
var valid = $("#valid").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'professional='+ professional + '&membership='+ membership+ '&valid='+ valid;

if(professional==''||membership==''||valid=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3e.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
// Find a <table> element with id="myTable":
var table = document.getElementById("myTable");
var row = table.insertRow(1);

// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);



// Add some text to the new cells:
cell1.innerHTML = ''+professional+'';
cell2.innerHTML = ''+membership+''; 
cell3.innerHTML = ''+valid+''; 


}
});
}
return false;
});
});
</script>
</form>
</div>

 <div class="table-responsive">
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable">
    <caption>Details</caption>
   
                <td>Professional Body</td>
                <td>Membership No.</td>
                <td>Vaild Till</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="button" value="Edit"></td> 
                <td><input type="button" value="Edit"></td>
                


  </table>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="dashboard.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</form>
</div>

</body>

</html>