<!DOCTYPE HTML>
<html>
<head>
</head>

<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (personal deatails template logo updated.psd) -->
<TABLE WIDTH=1536 BORDER=0 CELLPADDING=0 CELLSPACING=0>
  <TR>
    <TD COLSPAN=3>
      <IMG SRC="views/images/header.gif" WIDTH=1536 HEIGHT=110 ALT=""></TD>
  </TR>
  <TR>
    <TD COLSPAN=3>
      <IMG SRC="views/images/title.gif" WIDTH=1536 HEIGHT=53 ALT=""></TD>
  </TR>
</TABLE>
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