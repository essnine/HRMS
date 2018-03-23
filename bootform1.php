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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
                    
  <img src="C:/Users/admin/Desktop/Sunny/head.gif" class="img-responsive"  width="1536" height="110"> 
  
</div>

<div class="container">
  
  <p><font face="Verdana" size="1.5px">*All fields are mandetory</font></p>
  <form class="form-horizontal" action="confirm_bootform1.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Full Name<font size="1px">(as in ID submitted)</font>:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="First Name" name="fname">
          <input type="text" style="width:225; height:19;" placeholder="Middle Name" name="mname">
          
          <input type="text" style="width:225; height:19" placeholder="Last Name" name="lname">
          
    </div>
  </div>
  

<div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Short Name:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="FML" name="sname">
                   
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">AICTE UID:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="aicte">
                   
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Biometric Details:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="Card Number" name="cardno">
       <input type="text" style="width:225; height:19" placeholder="Code" name="cardcode">            
    </div>
  </div>
  <div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Father's Name:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="father">
       <label>Mother's Name:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="mother">
    
</div>
</div>


<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Gender:</label>
    <label class="radio-inline" style="padding-left: 33px">
      <input type="radio" name="gender" value="male">Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="female">Female
    </label>   

</div>

<div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Current Address:</label>
    <div class="col-sm-10">
       <input type="text" style="width:625; height:19" placeholder="A1" name="address">
              
    </div>
  </div>
    <div class="form-group" style="padding-left: 0px">
    <div class="col-sm-10 col-sm-offset-2 " >
       
       
       <input type="text" style="width:225; height:19" placeholder="City/Village" name="city">
       <input type="text" style="width:225; height:19" placeholder="District"name="district">
       <input type="text" style="width:225; height:19" placeholder="State" name="state">
       <input type="text" style="width:225; height:19" placeholder="Postal Code" name="pcode">            
    </div>

  </div>

  <div class="form-group" >  
    
      
    <label class="radio-inline" style="padding-left: 35px">
      <input type="checkbox" name="checkbox1" onclick="FillBilling(this.form)">Tick if Permanent Address is same as Current Address
    </label>
	 </label>
	<script>
	function FillBilling(f) {
  if(f.checkbox1.checked == true) {
    f.address1.value = f.address.value;
    f.city1.value = f.city.value;
    f.district1.value = f.district.value;
    f.state1.value = f.state.value;
    f.pcode1.value = f.pcode.value;
  }
  else{
  f.address1.value = "";
    f.city1.value = "";
    f.district1.value = "";
    f.state1.value = "";
    f.pcode1.value = "";
  }
}</script>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Permanent Address:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="A1" name="address1">
           
    </div>
  </div>
    <div class="form-group" style="padding-left: 0px">
    <div class="col-sm-10 col-sm-offset-2 " >
      
       
       <input type="text" style="width:225; height:19" placeholder="City/Village" name="city1">
       <input type="text" style="width:225; height:19" placeholder="District" name="district1">
       <input type="text" style="width:225; height:19" placeholder="State" name="state1">
       <input type="text" style="width:225; height:19" placeholder="Postal Code" name="pcode1">            
    </div>

  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Contact:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="Phone(R)" name="residence">
          <input type="text" style="width:225; height:19;" placeholder="Mobile 1" name="mob1">
          
          <input type="text" style="width:225; height:19" placeholder="Mobile 2" name="mob2">
          
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" style=" text-align: left">Email:</label>
    <div class="col-sm-10">
       <input type="Email" style="width:225; height:19" placeholder="Email 1" name="email1">
          <input type="Email" style="width:225; height:19;" placeholder="Email 2" name="email2">
    </div>
  </div>


<div class="form-group">  
    <div class="col-sm-10">
    <label >Blood Group:</label>
       <select id="" style="width:225; height:19" name="bloodgroup">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
       </select>
    <label >Date Of Birth:</label>
    
       <input type="Date" style="width:225; height:19" placeholder="" name="dob">
       <label style="padding-left: 22px">Place of Birth:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="place">
    
</div>
</div>

    
<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Nationality:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="nationality">
       <label style="padding-right: 36px" >Religion:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="religion">
    
</div>
</div>
    
<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Caste:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="caste">
       <label>Sub-caste:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="subcaste">
       <label >Caste Category:</label>
       <select id="" style="width:225; height:19" name="castecat">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
       </select>


</div>
</div>


<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Attach caste certificate:</label>
    <div class="col-sm-10">
       <input type="File" style="width:225; height:19" placeholder="" name="castecert">

</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Identification:</label>
    <div class="col-sm-10">
       <input type="File" style="width:225; height:19" placeholder="" name="idproof">  
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Photo:</label>
    <div class="col-sm-10">
       <input type="File" style="width:225; height:19" placeholder="" name="photograph">

</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Thumb Impression:</label>
    <div class="col-sm-10">
       <input type="File" style="width:225; height:19" placeholder="" name="thumb">

</div>
</div>

<div class="form-group">  
    
<label class="control-label col-sm-2" style=" text-align: left">Physically Disabled:</label>
    <label class="radio-inline" style="padding-left: 33px">
      <input type="radio" name="dis" value="yes">yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="dis" value="no">no
    </label>   

</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Disability Certificate:</label>
    <div class="col-sm-10">
       <input type="File" style="width:225; height:19" placeholder="" name="discert">

</div>
</div>

<div class="form-group">  
    <div >
    
    <label class="control-label col-sm-2" style=" text-align: left">Date Of Joining:</label>
    
       <input type="Date" style="width:225; height:19 " placeholder="" name="joindate">
       <label style="padding-left: 22px">Appointment Category:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="appcat">
       <label >Appointment Type:</label>
       <select id="" style="width:225; height:19" name="apptype">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
       </select>

    
</div>
</div>

<div class="form-group">  
    <div >
    
    <label class="control-label col-sm-2" style=" text-align: left">Program:</label>
    
       <input type="text" style="width:225; height:19 " placeholder="" name="program">
       <label style="padding-left: 22px">Faculty Type:</label> 
       <select id="" style="width:225; height:19" name="factype">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
       </select>

       <label >Designation:</label>
       <select id="" style="width:225; height:19" name="designation">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
       </select>

    
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Department:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="dept">
       <label>Department Code:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="deptcode">
       
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">College Code:</label>
    <div class="col-sm-10">
       <input type="text" style="width:225; height:19" placeholder="" name="collegecode">
       <label>Staff Type:</label> 
       <input type="text" style="width:225; height:19" placeholder="" name="stafftype">
       
</div>
</div>

<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Visiting Experience:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" name="visit">
       <label>Teaching Experience:</label> 
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" name="teaching"> 
       
</div>
</div>


<div class="form-group">  
    <label class="control-label col-sm-2" style=" text-align: left">Research Experience:</label>
    <div class="col-sm-10">
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" name="research">
       <label>Industrial Experience:</label> 
       <input type="Number" style="width:225; height:19" placeholder="No. of Years" name="industrial">
       
</div>
</div>





<br>


<center>
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Save & Next</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  </center>>
</form>
</div>

</body>
</html>
