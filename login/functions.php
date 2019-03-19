<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  session_start();  
  
  //method to check the user and pass credentials
  function auth( $user, $pass ) {
    $pass = SHA1( $pass );
    return ( $user == "user" && $pass == SHA1( 'password' ) ); //sample username and password
  }
  
  // Checks if the username and password are correct with the database then redirects to new page based on the result
  function auth_red( $user, $pass ) {
    if( !auth( $user, $pass ) ) {
      $message = "<br><br><h2><center><font color= 'red' >LOGIN FAILED</font></center></h2><font color= 'black'><div class='loader'></div><br><center>Redirecting to Login Page</center><br>";
      
      $siteurl = "samslogin.html";
      redirect( $message, $siteurl, 1 );
    }
    else {
    //sets sessions for the duration of the logged in
      $_SESSION[ 'user' ] = $user;
      $_SESSION[ 'logged' ] = true;
      //$message = "<center><font color= 'green' > <br><h2>LOGIN PASSED</h2></font><div class='loader'></div><br>Redirecting to Main Page<br></center>"; 
      $message = "<br><br><h2><center><font color= 'green' >LOGIN PASSED</font></center></h2><div class='loader'></div><br><center><font color= 'black'>Redirecting to Main Page</font></center><br>";
      $siteurl = "./../SAMShome.php"; 
      redirect( $message, $siteurl, 1 );
    }
  }
  
  //method to get the data. The method trims any access white spaces
  function getdata ( $name ) {  
    return trim ( $_POST[ $name ] ) ;
  } 
  
  //method to redirect the user to main page or the login page
  function redirect ( $message, $siteurl, $delay ) {
    echo "$message";
    header( "refresh:$delay; url = $siteurl" );
    exit();
  }
  
  //method to see if the user is logged in the main page
  function gatekeeper($address = "login.php") {
    if( !isset( $_SESSION[ 'logged' ] )  || !( $_SESSION[ 'logged' ] ) ) { 
      $message = "";
      //$message = "<center><font color= 'red' ><br><br><h2>LOGIN FAILED</h2></font><br><font color= 'black'>Redirecting to Login Page</center>";
      //$address = "samslogin.html";
      redirect ($message, $address, 0); 
      return false;
    }
    else {  
      $user =  $_SESSION['user'];
      return true;
    }
  }
  
  //redirect to logout page
  function logout() {
    redirect ( "", "logout.php", 0 );
    
    
    /*
    //logs out if the user is inactive for TIMEOUT seconds
    echo "
    <script type = \"text/javascript\">
      \"use strict\"; 
      var TIMEOUT = 10; 
      var counter; 
      document.addEventListener( \"click\", slowdown );
      document.addEventListener( \"keypress\", slowdown );
      document.addEventListener( \"mousemove\", slowdown );
      
      slowdown();
      
      function slowdown() {
          window.clearTimeout( counter ); 
          counter = window.setTimeout( messenger, TIMEOUT );
      }
      
      function messenger() { 
        window.setTimeout( out, TIMEOUT ); 
      }
      function out() { 
        window.location.href = \"logout.php\"; 
      }
    
    </script>";
    */
}

?>