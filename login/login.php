<?php

include( "functions.php" );
//sessions
session_set_cookie_params ( 0, "/~jsp74/"); 
session_start();     

//getting the username and password
$user = getdata( "user" );
$pass = getdata( "pass" );

auth_red($user, $pass);
?>
