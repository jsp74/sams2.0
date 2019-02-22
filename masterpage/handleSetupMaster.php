<?php

/* !IMPORTANT!
to give permission to write to a file in AFS:
fs setacl ~/public_html/download/masterpage/ http write
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Session to avoid entering invalid entries without signing in 
include( "./../login/functions.php" );
session_start();
gatekeeper("./../login/samslogin.html");

// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
$file = fopen("masterData.csv", 'w+') or errOccurred();
// column headings
$labels = ["meetName","shortName","startDate","endDate","meetCity","meetState","country","meetDirector",
			"meetHotel","meetSponsors","meetLOC","jn_logo","bib","archery","fencing","field","swim",
			"tableTennis","teams","track","weightlifting","other"];
fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error

// Basic Information
$meetName = getdata("meetName");
$shortName = getdata("shortName");
$startDate = getdata("startDate");
$endDate = getdata("endDate");
$meetCity = getdata("meetCity");
$meetState = getdata("meetState");
$country = getdata("country"); if (empty($country)) $country = "USA"; //Default value of country is USA
// Additional Information
$meetDirector = getdata("meetDirector");
$meetHotel = getdata("meetHotel");
$meetSponsors = getdata("meetSponsors"); if(!empty($meetSponsors)) $modSponsors = checkComma($meetSponsors); 
$meetLOC = getdata("meetLOC"); if(!empty($meetLOC)) $modLOC = checkComma($meetLOC);
$logo_source = getdata("logo_source"); if (empty($logo_source)) $logo_source = "0";
// About Sports
$bib = getdata("bib");
$archery = getdata("archery"); if (empty($archery)) $archery = "0"; 
$fencing = getdata("fencing"); if (empty($fencing)) $fencing = "0"; 
$field = getdata("field"); if (empty($field)) $field = "0"; 
$swim = getdata("swim"); if (empty($swim)) $swim = "0"; 
$tableTennis = getdata("tableTennis"); if (empty($tableTennis)) $tableTennis = "0"; 
$teams = getdata("teams"); if (empty($teams)) $teams = "0"; 
$track = getdata("track"); if (empty($track)) $track = "0"; 
$weightlifting = getdata("weightlifting"); if (empty($weightlifting)) $weightlifting = "0"; 
$other = getdata("other"); if (empty($other)) $other = "0"; 

// $data is an array of all the fields from the form
$data = [ $meetName, $shortName, $startDate, $endDate, $meetCity, $meetState, $country, $meetDirector, $meetHotel, 
		$modSponsors, $modLOC, $logo_source, $bib, $archery, $fencing, $field, $swim, $tableTennis, $teams, $track, 
		$weightlifting, $other ];

fputcsv($file, $data) or errOccurred(); //Formats $data to csv and puts that into $file, or returns error
fclose($file) or errOccurred(); //Closes the file, or returns error
success(); 

exit();

//Displays an error alert and then redirects to the form
function errOccurred() {
  echo "<center><font color= 'red' ><br><br><h2>Error Occurred While Registering, Please Try Again...</h2></font><br><div class='loader'></div>";
  header( "refresh:3; url = setupmaster.php" );
  exit();
}

//Displays a successfully reigstered and then redirects to the form
function success() {
  echo "<center><font color= 'black' ><br><br><h2>Saving Preferences</h2></font><br><div class='loader'></div>";
  header( "refresh:3; url = setupmaster.php" );
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