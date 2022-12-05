<?php
/*
------------------------------------------------------------------------------------------------------
Script Name: mysql_connect.php
Author:  OdeToCode
Description: To connect to the MySQL server and database
------------------------------------------------------------------------------------------------------
*/
$username ="root";
$password="";
$database="oqsodetocode";
$conn = mysqli_connect("localhost",$username,$password);
mysqli_select_db($conn, $database) or die ("Unable to select database");
?>