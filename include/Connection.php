<?php 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'github1234');
define('DB_NAME', 'hrms');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>