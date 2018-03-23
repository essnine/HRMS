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
  <h4 style="font-family: verdana ">Expert Lecture Deliverd</h4>
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" action="/action_page.php">



<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Title of Lecture:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="title"> 
</div>
</div>

<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Title of Event:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="event"> 
</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left; margin-right: 5em">Type:</label>
    <label class="radio-inline" style="margin-left: 2em">
      <input type="radio" name="type" value="national">National</label>
      <label class="radio-inline" style="margin-left: 2em">
      <input type="radio" name="type" value="international">International
    </label>   
  </div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Organizer/Publisher:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px; height:19" placeholder="" id="organiser"> 
</div>
</div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Date/Duration:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="dd-mm-yyyy / No. of days" id="date"> 
</div>
</div>



<div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" name="submit">Add</button>
      
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var title = $("#title").val();
var event = $("#event").val();
var type = $("#type").val();
var organiser = $("#organiser").val();
var date = $("#date").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&title='+ title + '&organiser='+ organiser + 
'&type='+ type + '&date='+ date + '&event='+ event;
if(title==''||organiser==''||type==''||date==''||event=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3b4.php",
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


// Add some text to the new cells:
cell1.innerHTML = ''+title+'';
cell2.innerHTML = ''+event+''; 
cell3.innerHTML = ''+type+''; 
cell4.innerHTML = ''+organiser+''; 
cell5.innerHTML = ''+date+''; 

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
   
                <td>Title of Lecture</td>
                <td>Title of Event</td>
                <td>Type</td>
                <td>Organizer/Publisher</td>
                <td>Date/Duration</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
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
      <a type="submit" class="btn btn-default" href="bootform3b5.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</body>
</html>