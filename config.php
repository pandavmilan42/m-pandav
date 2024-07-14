<?php
// Database configuration
$servername="localhost";
$username="root";
$password="";
$database="milan pandav";
$con=mysqli_connect($servername,$username,$password,$database);

if (!$con) 
{
    die("Connection failed: ".mysqli_error($con));
}
?>