<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logout Page | SAMS</title>
    <style>
    .loader {
    	border: 7px solid #f3f3f3;
    	border-radius: 50%;
    	border-top: 5px solid #3498db;
    	width: 30px;
    	height: 30px;
    	-webkit-animation: spin 2s linear infinite; 
    	animation: spin 2s linear infinite;
      margin:auto;
      left:0;
      right:0;
      top:0;
      bottom:0;
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