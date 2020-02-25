
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Redirecting...</title>
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
    .navbar{
      border-radius: 0 !important;
     }


  .jumbotron{
      background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
      box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.3);
      margin-bottom: 0 !important;
  }
          
  .heading{
      text-align: center;
      font-weight: bold;
      font-family: 'Do Hyeon', sans-serif; 
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
	<body>
		<div class = "jumbotron">
			<center><strong><h1>Setup Preferences</h1></strong></center>
		</div>
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand"  href="./../SAMShome.php"  style="color: #B3DA2E;">Dashboard</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
				</button>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">

				<!-- ALll nav-pages under this nav-bar is moved to masterpage folder -->
				<!-- Pages commeted out will be taken care og eventually as the project moves forward -->

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Master Page <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!-- <li><a id = "master_file" href="masterpage/masterfile.html">Master Help File</a></li>
							<li><a id = "how_to" href="masterpage/howto.html">How to do it</a></li> -->
							<li><a id = "register_form" href = "registrationform.php">Registration Form</a></li>
							<li><a id = "find_register" href = "findregistration.php">Find All Registration</a></li>
							<li><a id = "setup_pref" href = "setupmaster.php">Setup Master Preferences</a></li>
							<!-- <li><a id = "athlete_perform_record" href = "masterpage/athleteperform.html">Athlete Performance Records</a></li>
							<li><a id = "qualifying_std" href = "masterpage/qualifyingstand.html">Qualifying Standards</a></li>
							<li><a id = "set_relay" href = "masterpage/setrelay.html">Set Relay Points</a></li>
							<li><a id = "see_credit" href = "masterpage/seecreditscreen.html">See Credit Screen</a></li>
							<li><a id = "photo_database" href = "masterpage/photodatabase.html">Photo Database</a></li>
							<li><a id = "classification" href = "masterpage/classificationfile.html">Classification file</a></li>
							<li><a id = "Implements" href = "masterpage/implementsusedfile.html">Implements used file</a></li>
							<li><a id = "pentathion" href = "masterpage/performancepointssetup.html">Performance Points Setup</a></li> -->
						</ul>
					</li>

					<!-- ALll nav-pages under this nav-bar is moved to resultpage folder -->

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Result International Format <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a id = "extrackfield" href="./../resultpage/exporttrack.html">Export Track &amp; Field</a></li>
							<li><a id = "exswimming" href="./../resultpage/exportswimming.html">Export Swimming</a></li>
						</ul>
					</li>

					<!-- ALll nav-pages under this nav-bar is moved to preferences folder -->

					<!-- <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Preferences <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a id = "backup" href="preferences/backuppreferences.html">Backup Preferences</a></li>
							<li><a id = "restore" href="preferences/restorepreferences.html">Restore Preferences</a></li>
						</ul>
					</li> -->

					<!-- All the Sports -->

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a id = "archery" href="./../sports/sportsTable.php?sport=archery">Archery</a></li>
							<li><a id = "fencing" href="./../sports/sportsTable.php?sport=fencing">Fencing</a></li>
							<li><a id = "field" href="./../sports/sportsTable.php?sport=field">Field</a></li>
							<li><a id = "swimming" href="./../sports/sportsTable.php?sport=swim">Swimming</a></li>
							<li><a id = "tabletennis" href="./../sports/sportsTable.php?sport=tableTennis">Table Tennis</a></li>
							<li><a id = "teamsports" href="./../sports/sportsTable.php?sport=teams">Team Sports</a></li>
							<li><a id = "track" href="./../sports/sportsTable.php?sport=track">Track</a></li>
							<li><a id = "weightlifting" href="./../sports/sportsTable.php?sport=weightlifting">Weightlifting</a></li>
							<li><a id = "other" href="./../sports/sportsTable.php?sport=other">Other Sports</a></li>
						</ul>
					</li>	
				</ul>

				<ul class="nav navbar-nav navbar-right dropdown">
					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="./../login/logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</body>
</html>

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
$file = fopen("../databases/masterData.csv", 'w+') or errOccurred();
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
// success(); 

// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
$file = fopen("../databases/bibData.csv", 'w+') or errOccurred();
// column headings
$labels = ["bib","archery","fencing","field","swim","tableTennis","teams","track","weightlifting","other"];
fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error

// $data is an array of all the fields from the form
$data = [ $bib, $archery, $fencing, $field, $swim, $tableTennis, $teams, $track, $weightlifting, $other ];

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
	echo "<script LANGUAGE='javascript'>";
	echo "window.setTimeout(function() {window.location.href='setupmaster.php';}, 2000)";
	echo "</script>";
   }

// Check for return & newline and replace it with a comma
function checkComma($textData){
	$newText = str_replace("\r\n", ",", $textData);
	return $newText;
}

?>