<!DOCTYPE html>
<html>
<head>
	<title>Logout Page | SAMS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.loader {
	border: 7px solid #f3f3f3;
	border-radius: 50%;
	border-top: 7px solid #3498db;
	width: 50px;
	height: 50px;
	-webkit-animation: spin 2s linear infinite; 
	animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
	0% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
}
</style>
</head>

<?php

include("functions.php");

session_start();
$_SESSION = array();
session_destroy();

$_SESSION[ 'logged' ] = false;

// $message = "<center><font color= 'blue' ><br><br><h2>LOGGING OUT</h2></font><br><font color= 'black'>Redirecting to Login Page</center>";
$message = "<center><font color= 'black' ><br><br><h2>LOGGING OUT</h2></font><br><div class='loader'></div>";
$siteurl = "samslogin.html";
$time = 2;
redirect ($message, $siteurl, $time);
exit();

?>
</html>