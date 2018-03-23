<?php

include('include/Connection.php');?>
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
                    
<img src="res/img/head.gif" class="img-responsive">
  
</div>

<div class="container">
  <h4 style="font-family: verdana ">Paper Details</h4>
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" action="/action_page.php">

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Co-Author Names(Seperated by commas):</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="name1,name2,name3" id="coauthor"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Title of Paper:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="papertitle"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Type:</label>
    <label class="radio-inline" style="padding-left: 160px">
      <input type="radio" id="type" value="national">National
    </label>
    <label class="radio-inline">
      <input type="radio" id="type" value="international">International
    </label>   
  </div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Name of Conference/Journal:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="conference"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Mode of Presentation:</label>
    <label class="radio-inline" style="padding-left: 160px">
      <input type="radio" id="presentation" value="published">Published
    </label>
    <label class="radio-inline">
      <input type="radio" id="presentation" value="presented">Presented
    </label>   
  </div>





<div class="form-group">  
    <div class="col-sm-10">
    
    <label style="padding-right: 82px">Published/Presented on:</label>
    
       <input type="Date" style="width:200px; height:19" placeholder="" id="dateofpresentation">
       
    
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Organizer/Publisher:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px; height:19" placeholder="Name of place in case of Conference" id="organiser"> 
</div>
</div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Date/Duration:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="dd-mm-yyyy / No. of Years" id="duration"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">ISSN/ISBN No.:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="" id="issn"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Impact Factor:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="" id="impact"> 
</div>
</div>

<div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" onclick="submitbutton()" id="submit" name="submit">Add</button>
      
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var coauthor = $("#coauthor").val();
var papertitle = $("#papertitle").val();
var type = $("#type").val();
var conference = $("#conference").val();
var presentation = $("#presentation").val();
var dateofpresentation = $("#dateofpresentation").val();
var organiser = $("#organiser").val();
var duration = $("#duration").val();
var issn = $("#issn").val();
var impact = $("#impact").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'coauthor='+ coauthor + '&papertitle='+ papertitle + 
'&type='+ type + '&conference='+ conference + '&presentation='+ presentation
+ '&dateofpresentation='+ dateofpresentation + '&organiser='+ organiser + '&duration='+ duration + '&issn='+ issn + '&impact='+ impact;
if(coauthor==''||papertitle==''||type==''||conference==''
||presentation==''||dateofpresentation==''||organiser==''||duration==''||issn==''||impact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3b1.php",
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
cell1.innerHTML = ''+coauthor+'';
cell2.innerHTML = ''+papertitle+''; 
cell3.innerHTML = ''+type+''; 
cell4.innerHTML = ''+conference+''; 
cell5.innerHTML = ''+presentation+''; 
cell6.innerHTML = ''+dateofpresentation+''; 
cell7.innerHTML = ''+organiser+''; 
cell8.innerHTML = ''+duration+''; 
cell9.innerHTML = ''+issn+''; 
cell10.innerHTML = ''+impact+''; 
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
 
    <table border="3" style="font-family:Verdana; font-size:12px " class="table" id=="myTable" >
    <caption>Details</caption>
   
                <td>Co-Authors</td>
                <td>Title Of Paper</td>
                <td>Type</td>
                <td>Conference/Journal</td>
                <td>?????</td>
                <td>Published/Presented on</td>
                <td>Organizer/Publisher</td>
                <td>Date/Duration</td>
                <td>ISSN/ISBN No.</td>
                <td>Impact Factor</td>
                <td></td>
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
                <td><input type="button" value="Verify"></td> 



  </table>
</div>

<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="bootform3b2.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</body>
</html>