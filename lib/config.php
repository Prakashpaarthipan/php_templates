<?php
header('Content-type: application/json');
// display all error except deprecated and notice  
//error_reporting();
// turn on output buffering 
ob_start();

$host = "localhost";
$username = "root";
$pwd = "Welcome12121";
$db = "tcs";

//$con = mysqli_connect($host,$username,$pwd,$db) or die ('Unable to connect');

$con = mysqli_connect($host,$username,$pwd,$db);

if(!$con)
{
	die ("Failed to connect"	.mysqli_connect_error());
}

echo 'Database is Conneced';

?>