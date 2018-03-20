<?php
session_start();
include('include/Connection.php');
?>
<!DOCTYPE HTML>
<html>
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
                    
<img src="res/img/head - Copy.gif" class="img-responsive">
  
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left: 1em">
      <a class="navbar-brand">Navigation</a>
    </div>
    <ul class="nav navbar-nav" style="list-style: none">
      <li class="active"><a href="#">Home</a></li>
      </li>
      <li><a href="bootform1.php">Personal Details</a></li>
      <li><a href="bootform2.php">Educational Qualifications</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Professional Details
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
              <li><a href="bootform3a.php">Books Written</a></li>
              <li><a href="bootform3b1.php">Papers/Publications</a></li></li>
              <li><a href="bootform3b2.php">STTP/Seminar/Workshop/Symposium/FDP Attended</a></li>
              <li><a href="bootform3b3.php">STTP/Seminar/Workshop/Symposium/FDP Conducted</a></li>
              <li><a href="bootform3b4.php">Expert Lectures Delivered</a></li>
              <li><a href="bootform3b5.php">Consultancy</a></li>
              <li><a href="bootform3c.php">Patent Details</a></li>
              <li><a href="bootform3d.php">AICTE/GTU Endorsement</a></li>
        </ul>
      </li>
      <li><a href="#">Leave Management</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding-right: 1em;">
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
</body>
</html>
	