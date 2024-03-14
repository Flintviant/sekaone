<?php
define('DB_SERVER','localhost');
define('DB_USER','u1575043_sekawan');
define('DB_PASS' ,'1234Harusdigunakan!');
define('DB_NAME','u1575043_newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

$defaulturl  = "https://multisekawan.com/";
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>