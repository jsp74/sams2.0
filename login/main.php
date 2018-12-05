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

//if cookies are set and the pass and the user in the cookies match then let them in without checking the gatekeeper?
if ( !isset( $_COOKIES[ 'user_name' ] ) || !isset( $_COOKIES[ 'user_password' ] )) {
	gatekeeper();
}
else {
	auth_red( $_COOKIES[ 'user_name' ], $_COOKIES[ 'user_password' ] );
}


?>