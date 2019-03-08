
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
            <center><strong><h1>Registration Update</h1></strong></center>
        </div>


        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand"  href="../SAMShome.php"  style="color: #B3DA2E;">Dashboard</a>
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
                            <li><a id = "find_register" href = "findregistration.html">Find All Registration</a></li>
                            <li><a id = "setup_pref" href = "setupmaster.php">Setup Master Preferences</a></li>
                            
                        <!-- 
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
                            <li><a id = "extrackfield" href="../resultpage/exporttrack.html">Export Track &amp; Field</a></li>
                            <li><a id = "exswimming" href="../resultpage/exportswimming.html">Export Swimming</a></li>
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
                            <li><a id = "archery" href="#">Archery</a></li>
                            <li><a id = "fencing" href="#">Fencing</a></li>
                            <li><a id = "field" href="#">Field</a></li>
                            <li><a id = "swimming" href="#">Swimming</a></li>
                            <li><a id = "tabletennis" href="#">Table Tennis</a></li>
                            <li><a id = "teamsports" href="#">Team Sports</a></li>
                            <li><a id = "track" href="#">Track</a></li>
                            <li><a id = "other" href="#">Other Sports</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right dropdown">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ui>
            </div>
        </nav>
  </body>
</html>

<?php
	// ini_set('display_errors', 1);	
	// ini_set('display_startup_errors', 1);	
	// error_reporting(E_ALL);
	
	include( "./../login/functions.php" );
	session_start();     
	gatekeeper("./../login/login.php");

	$file = fopen("data.csv", 'a+') or errOccurred();
	$newfile = fopen("newdata.csv", 'w+') or errOccurred();

	$id = getdata("ID");
	$type = getdata("radiolabel");
	$first = getdata("fname"); if (empty($first)) errOccurred();
	$last = getdata("lname"); if (empty($last)) errOccurred();
	$add1 = getdata("address1");
	$add2 = getdata("address2");
	$city = getdata("city");
	$state = getdata("state");
	$zip = getdata("zipcode");
	$country = getdata("country"); if (empty($country)) $country = "USA"; //Default value of country is USA
	$email = getdata("email");
	$cellphone = getdata("phone");
	$dob = getdata("dob");
	$age = getdata("age");
	$gender = getdata("gender");
	$tshirt = getdata("tsize");
	$dso = getdata("dso");
	$reg_num = getdata("regNumber");
	$bib_num = getdata("bibNumber");
	$mem_num = getdata("memNumber");
	$ipc_num = getdata("ipcNumber");
	$team = getdata("teamName");
	$coach = getdata("hcName");
	$coach_phone = getdata("hcPhone");
	$coach_email = getdata("hcEmail");
	$classified = getdata("classified"); if (empty($classified) || $classified == '0') $classified = "No"; else $classified = "Yes";
	$coach_coming = getdata("coachPresence"); if (empty($coach_coming) || $coach_coming == '0') $coach_coming = "No"; else $coach_coming = "Yes";
	$archery = getdata("archery"); if (empty($archery)) $archery = 0;
	$fencing = getdata("fencing"); if (empty($fencing)) $fencing = 0;
	$field = getdata("field"); if (empty($field)) $field = 0;
	$swim = getdata("swim"); if (empty($swim)) $swim = 0;
	$tableTennis = getdata("tableTennis"); if (empty($tableTennis)) $tableTennis = 0;
	$teams = getdata("teams"); if (empty($teams)) $teams = 0;
	$track = getdata("track"); if (empty($track)) $track = 0;
	$weightlifting = getdata("weightlifting"); if (empty($weightlifting)) $weightlifting = 0;
	$other = getdata("other"); if (empty($other)) $other = 0;
	$delete = getdata("Delete"); if (empty($delete)) $delete = 0;
	$edit = getdata("Update"); if (empty($edit)) $edit = 0;
	echo "ID: $id, DELETE: $delete, EDIT: $edit";

	$data = [$id, $type, $first, $last, $add1, $add2, $city, $state, $zip, $country, $email, $cellphone, $dob, $age, $gender, $tshirt, $dso, $reg_num, $bib_num, $mem_num, $ipc_num, $team, $coach, $coach_phone, $coach_email, $classified, $coach_coming, $archery, $fencing, $field, $swim, $tableTennis, $teams, $track, $weightlifting, $other];

	while(!feof($file)) {
		$ar = fgetcsv($file);
		if(!empty($ar[0])) {
			if($ar[0] == $id && $edit == "1") {
				fputcsv($newfile, $data) or errOccurred();
			}
			elseif ($ar[0] == $id && $delete == "1") {
				continue;
			}
			else {
				fputcsv($newfile, $ar) or errOccurred();
			}
		}
	}

  fclose($file);
  fclose($newfile);

	copy("newdata.csv", "data.csv") or errOccurred();
	unlink("newdata.csv");

	function errOccurred() {
		echo "<center><font color= 'red' ><br><br><h2>Error Occurred While Registering, Please Try Again...</h2></font><br><div class='loader'></div>";
		echo "<script LANGUAGE='javascript'>";
		echo "window.setTimeout(function() {window.location.href='registrationform.php';}, 2000)";
		echo "</script>";
		exit();
	}
?>

