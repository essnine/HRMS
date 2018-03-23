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
  <h4 style="font-family: verdana ">Consultancy</h4>
  <p><font face="Verdana" size="1.5px">*All fields are mandatory</font></p>
  <form class="form-horizontal" >



<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Details of Work:</label>
    <div class="col-sm-10">
       <input type="text" style="width:500px ; height:19" placeholder="" id="details"> 
</div>
</div>


<div class="form-group" style="width: 1500px">  
    <label class="control-label col-sm-2" style=" text-align: left">Amount:</label>
    <div class="col-sm-10">
       <input type="text" style="width:200px; height:19" placeholder="" id="amount"> 
</div>
</div>



<div class="form-group"> 
    <div class=" col-sm-10">
      <button type="submit" class="btn btn-default" id="submit" >Add</button>
      
  </div>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var details = $("#details").val();
var amount = $("#amount").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'details='+ details + '&amount='+ amount ;

if(details==''||amount=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "confirm_bootform3b5.php",
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



// Add some text to the new cells:
cell1.innerHTML = ''+details+'';
cell2.innerHTML = ''+amount+''; 


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
   
                <td>Details Of Work</td>
                <td>Amount</td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                
                <td><input type="button" value="Edit"></td>
                <td><input type="button" value="Verify"></td> 



  </table>
</div>

<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <a type="submit" class="btn btn-default" href="bootform3c.php">Save & Next</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>
</body>
</html>