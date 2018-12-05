<?php

include("functions.php");

session_set_cookie_params ( 0, "/~jsp74/");
session_start();

$_SESSION = array();
session_destroy();
setcookie("PHPSESSID", "", time()-5, '/~jsp74/', "", 0,0);
$_COOKIE = array();
if (isset($_COOKIE['user_name'])) {
    unset($_COOKIE['user_name']);
    setcookie('user_name', '', time()-( 365 * 24 * 60 * 60 ), '/'); // empty value and old timestamp
}
if (isset($_COOKIE['user_password'])) {
    unset($_COOKIE['user_password']);
    setcookie('user_password', '', time()-( 24 * 60 * 60 ), '/'); // empty value and old timestamp
}

$message = "<center><font color= 'blue' ><br><br><h2>LOGGING OUT</h2></font><br><font color= 'black'>Redirecting to Login Page</center>";
$siteurl = "samslogin.html";
$time = 3;
redirect ($message, $siteurl, $time);
exit();

?>