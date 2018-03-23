
<?php 
include('include/Connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HRMS beta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="res/css/main.css">

</head>
<body>

<div class="container head-container">
                    
<img src="res/img/hd-head" class="img-responsive">
  
</div>

<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" >
  <div class="form-group">  
    <div >
    
    <label class="control-label col-sm-2" style=" text-align: left">Qualifications:</label>
    
       <input type="text" style="width:225; height:19 " placeholder="" id="qualifications">
       <label style="padding-left: 22px">Levels:</label> 
       <select style="width:225; height:19" id="levels">
          <option value="1">option 1</option>
          <option value="2">option 2</option>
          <option value="3">option 3</option>
          <option value="4">option 4</option>
       </select>

      
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Name of Degree/Diploma:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="degreename"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Institute Name:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="instname"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Passing Year:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" id="passyear"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Specialization:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="specialization"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">University:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="univ"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Mode:</label>
    <label class="radio-inline" style="padding-left: 33px">
      <input type="radio" id="mode" value="regular">Regular
    </label>
    <label class="radio-inline">
      <input type="radio" id="mode" value="distance">Distance
    </label>   

</div>


<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Percentage/CPI/CGPA:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" id="perccc"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Class:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="No. of Years" id="classname"> 
</div>
</div>



 <div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit" onclick="submitbutton()">Add</button>
 
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var qualifications = $("#qualifications").val();
var levels = $("#levels").val();
var degreename = $("#degreename").val();
var instname = $("#instname").val();
var passyear = $("#passyear").val();
var specialization = $("#specialization").val();
var univ = $("#univ").val();
var mode = $("#mode").val();
var perccc = $("#perccc").val();
var classname = $("#classname").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'qualifications='+ qualifications + '&degreename='+ degreename + 
'&instname='+ instname + '&passyear='+ passyear + '&specialization='+ specialization
+ '&univ='+ univ + '&mode='+ mode + '&perccc='+ perccc + '&classname='+ classname + '&levels='+ levels;
if(qualifications==''||degreename==''||instname==''||passyear==''
||specialization==''||univ==''||mode==''||perccc==''||classname==''||levels=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform2.php",
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
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);
var cell9 = row.insertCell(8);
var cell10 = row.insertCell(9);

// Add some text to the new cells:
cell1.innerHTML = +levels;
cell2.innerHTML = ''+qualifications+''; 
cell3.innerHTML = ''+degreename+''; 
cell4.innerHTML = ''+instname+''; 
cell5.innerHTML = ''+passyear+''; 
cell6.innerHTML = ''+specialization+''; 
cell7.innerHTML = ''+univ+''; 
cell8.innerHTML = ''+mode+''; 
cell9.innerHTML = ''+perccc+''; 
cell10.innerHTML = ''+classname+''; 
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
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable" >
    <caption>Details</caption>
   
                <td>Level</td>
                <td>Qualifications</td>
                <td>Name of Degree/Diploma</td>
                <td>Name of Institute</td>
                <td>Passing Year</td>
                <td>Specialization</td>
                <td>University</td><br>
        <td>Mode</td>
                <td>Percentage/CPI/CGPA</td>
                <td>Class</td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
        <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="button" value="Edit"></td> 



  </table>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="bootform3a.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>>
</form>
</div>

</body>
=======
<?php 
include('include/Connection.php');
session_start();

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
                    
  <img src="C:/Users/admin/Desktop/Sunny/hd-head" class="img-responsive"  width="1536" height="110"> 
  
</div>
<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" >
  <div class="form-group">  
    <div >
    
    <label class="control-label col-sm-2" style=" text-align: left">Qualifications:</label>
    
       <input type="text" style="width:225; height:19 " placeholder="" id="qualifications">
       <label style="padding-left: 22px">Levels:</label> 
       <select style="width:225; height:19" id="levels">
          <option value="1">option 1</option>
          <option value="2">option 2</option>
          <option value="3">option 3</option>
          <option value="4">option 4</option>
       </select>

      
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Name of Degree/Diploma:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="degreename"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Institute Name:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="instname"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Passing Year:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" id="passyear"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Specialization:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="specialization"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">University:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="No. of Years" id="univ"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Mode:</label>
    <label class="radio-inline" style="padding-left: 33px">
      <input type="radio" id="mode" value="regular">Regular
    </label>
    <label class="radio-inline">
      <input type="radio" id="mode" value="distance">Distance
    </label>   

</div>


<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Percentage/CPI/CGPA:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" id="perccc"> 
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Class:</label>
    <div class="col-sm-10">
       <input type="text" setyle="width:225; height:19" placeholder="No. of Years" id="classname"> 
</div>
</div>



 <div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit" onclick="submitbutton()">Add</button>
 
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var qualifications = $("#qualifications").val();
var levels = $("#levels").val();
var degreename = $("#degreename").val();
var instname = $("#instname").val();
var passyear = $("#passyear").val();
var specialization = $("#specialization").val();
var univ = $("#univ").val();
var mode = $("#mode").val();
var perccc = $("#perccc").val();
var classname = $("#classname").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'qualifications='+ qualifications + '&degreename='+ degreename + 
'&instname='+ instname + '&passyear='+ passyear + '&specialization='+ specialization
+ '&univ='+ univ + '&mode='+ mode + '&perccc='+ perccc + '&classname='+ classname + '&levels='+ levels;
if(qualifications==''||degreename==''||instname==''||passyear==''
||specialization==''||univ==''||mode==''||perccc==''||classname==''||levels=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform2.php",
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
var cell4 = row.insertCell(3);
var cell5 = row.insertCell(4);
var cell6 = row.insertCell(5);
var cell7 = row.insertCell(6);
var cell8 = row.insertCell(7);
var cell9 = row.insertCell(8);
var cell10 = row.insertCell(9);

// Add some text to the new cells:
cell1.innerHTML = +levels;
cell2.innerHTML = ''+qualifications+''; 
cell3.innerHTML = ''+degreename+''; 
cell4.innerHTML = ''+instname+''; 
cell5.innerHTML = ''+passyear+''; 
cell6.innerHTML = ''+specialization+''; 
cell7.innerHTML = ''+univ+''; 
cell8.innerHTML = ''+mode+''; 
cell9.innerHTML = ''+perccc+''; 
cell10.innerHTML = ''+classname+''; 
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
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id="myTable" >
    <caption>Details</caption>
   
                <td>Level</td>
                <td>Qualifications</td>
                <td>Name of Degree/Diploma</td>
                <td>Name of Institute</td>
                <td>Passing Year</td>
                <td>Specialization</td>
                <td>University</td><br>
        <td>Mode</td>
                <td>Percentage/CPI/CGPA</td>
                <td>Class</td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
        <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="button" value="Edit"></td> 



  </table>
</div>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="bootform3a.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>>
</form>
</div>

</body>

</html>