<!DOCTYPE HTML>

<style>
body {
    background-image: url("images/background.png");
    background-color: #cccccc; 
}
</style>

<?php

include( "functions.php" );
//sessions
session_start();     

$user = getdata( "user" );
$pass = getdata( "pass" );

auth_red($user, $pass);
?>
