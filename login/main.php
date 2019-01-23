<!DOCTYPE html>
<html>
<form action = "logout.php" id= "B">
	<style> 
		input[type=button ] { 
			background-color: #E0E0E0; 
			color: black; 
			padding: 10px 20px; 
			cursor: pointer;
		}
		#B {
			position: absolute; 
			right: 1%; 
			top: 1%;
		}
	</style>
	<input type="submit" value="Logout">
</form>
</html> 

<?php

session_start();
include( "functions.php" );

//check if there is a logged in session, then allow to login in, else redirect
if( !isset( $_SESSION[ 'logged' ] )  || !( $_SESSION[ 'logged' ] ) ) { 
   gatekeeper();
}
?>