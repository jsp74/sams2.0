<?php

/* !IMPORTANT!
to give permission to write to a file in AFS:
fs setacl ~/public_html/download/masterpage/ http write
*/

// Session to avoid entering invalid entries without signing in 
include( "./../login/functions.php" );
session_start();
gatekeeper("./../login/samslogin.html");

// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
$file = fopen("trackData.csv", 'w+') or errOccurred();
// column headings
$labels = ["venueName","locationName","activeEvents","activeLanes","crl"];
fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error

// Basic Information
$venueName = getdata("venueName");
$locationName = getdata("locationName");
$activeEvents = getdata("activeEvents");
$activeLanes = getdata("activeLanes");
$crl = getdata("crl");

// $data is an array of all the fields from the form
$data = [ $venueName, $locationName, $activeEvents, $activeLanes, $crl ];

fputcsv($file, $data) or errOccurred(); //Formats $data to csv and puts that into $file, or returns error
fclose($file) or errOccurred(); //Closes the file, or returns error
success(); 

exit();

//Displays an error alert and then redirects to the form
function errOccurred() {
  echo "<center><font color= 'red' ><br><br><h2>Error Occurred While Registering, Please Try Again...</h2></font><br><div class='loader'></div>";
  header( "refresh:3; url = setupTrack.html" );
  exit();
}

//Displays a successfully reigstered and then redirects to the form
function success() {
  echo "<center><font color= 'black' ><br><br><h2>Saving Preferences</h2></font><br><div class='loader'></div>";
  header( "refresh:3; url = setupTrack.html" );
  exit();
}

// Check for return & newline and replace it with a comma
function checkComma($textData){
	$newText = str_replace("\r\n", ",", $textData);
	return $newText;
}

?>

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
</html>