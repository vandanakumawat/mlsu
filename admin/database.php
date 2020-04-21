<?php
@ob_start();
error_reporting(0);
session_start();

if($_SERVER['REQUEST_URI']=="/database.php")
	header("location:index.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mlsu";
 
$connection = mysqli_connect($servername, $username, $password, $dbname);
?>