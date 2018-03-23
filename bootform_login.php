<?php 
session_start();
ob_start();
	if(isset($_SESSION['user']))
   {
		header('Location:dashboard.php');
   }
   
?>
<html>
<head>
</head>

<body bgcolor=#ffffff leftmargin=0 topmargin=0 marginwidth=0 marginheight=0>
<!-- imageready slices (personal deatails template logo updated.psd) -->
<table width=1536 border=0 cellpadding=0 cellspacing=0>
  <tr>
    <td colspan=3>
      <img src="/login/views/images/header.gif" class="img-responsive" width=1536 height=110 alt=""></td>
  </tr>
  <tr>
    <td colspan=3>
      <img src="/login/views/images/title.gif" width=1536 height=53 alt=""></td>
  </tr>
</table>
<div align=center style="padding-top: 3em;">
  <form class="form-horizontal" action="checklogin.php"  method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">password:</label>
      <div class="col-sm-10"> 
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="register">submit</button>
      </div>
    </div>
  </form>
  <a href="bootform1.php" class="button">Register</a>
</div>
</body>
</html>