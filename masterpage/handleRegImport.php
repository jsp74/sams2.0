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
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);
     include( "./../login/functions.php" );
     // $file = getdata("regFile");
     // echo $file;

     $file_result = "";
     $destination_path = "/afs/cad.njit.edu/u/d/k/dk375/public_html/sams2.0/masterpage/imports/";

     if($_FILES["regFile"]["error"] > 0){
          $file_result .= "Error Code: " . $_FILES["regFile"]["error"] . "<br>";
          echo $file_result;
          errOccurred();
     }
     else{
          print_r($_FILES["regFile"]);
          move_uploaded_file($_FILES["regFile"]["tmp_name"], $destination_path . $_FILES["regFile"]["name"]);
          success();
     }

     //Displays an error alert and then redirects to the form
     function errOccurred() {
          echo "<center><font color= 'red' ><br><br><h2>Error Occurred While Importing, Please Try Again...</h2></font><br><div class='loader'></div>";
          header( "refresh:3; url = registrationform.php" );
          exit();
     }

     //Displays a successfully reigstered and then redirects to the form
     function success() {
          echo "<center><font color= 'black' ><br><br><h2>Importing..</h2></font><br><div class='loader'></div>";
          echo "<script LANGUAGE='javascript'>";
          echo "window.setTimeout(function() {window.location.href='registrationform.php';}, 2000)";
          echo "</script>";
          exit();
     }


?>