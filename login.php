<!DOCTYPE HTML>
<html>
<head>  
  <link rel="stylesheet" href="res/css/main.css">

</head>

<body>

<div class="container head-container">
                    
<img src="res/img/head.gif" class="img-responsive">
  
</div>

<div align=center style="padding-top: 3em;">
 <form action='checklogin.php' method="POST">
    <p>
     <label>Username</label>
     <input type="text" name="username" value="" required="required" placeholder="Enter Username" name="username">
     <br />
    </p>
    <p>
      <label>Password</label>
      <input type="password" name="password" id="password" required="required" placeholder="Enter Password" name="password">
    </p>
    <br />

    <p>
      <button type="submit" name="register"><span>Login</span></button>
      <button type="reset" name="reset"><span>Reset</span></button>
    </p>
 </form>
 </div> 

</body>
</html>