<?php

include( "functions.php" );
//sessions
session_start();     

$user = getdata( "user" );
$pass = getdata( "pass" );

auth_red($user, $pass);
?>
