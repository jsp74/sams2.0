<?php

    include( "login/functions.php" );
    session_start();     
    gatekeeper("login/login.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>USA</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    
    <style>
        
        /******************************* Page GRID LAYOUT FORMATE CSS *******************************/
        
        .item1 { 
            grid-area: header; 
        }
        
        .item2 { 
            grid-area: menu; 
        }
        
        .item3 { 
            grid-area: main; 
        }
        
        .item4 { 
            grid-area: right; 
        }
        
        .item5 { 
            grid-area: footer; 
        }

        .grid-container {
            display: grid;
            grid-template-areas:
            'header header header header header header'
            'menu main main main right right'
            'menu footer footer footer footer footer';
            grid-gap: 10px;
            padding: 10px;
        }
        
        .grid-container > div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }
        
        /******************************* Page Title Start Here *******************************/
        
        body{
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        }
        
        .jumbotron{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.3);
            margin-bottom: 0;
        }
        
        .heading{
            text-align: center;
            font-weight: bold;
            font-family: 'Do Hyeon', sans-serif;
            
        }
        
        .navbar{
            border-radius: 0 !important;
        }
        
        /******************************* DropDown Menu Start Here *******************************/
        
        .btn{
            width: 280px;
            height: 60px;
            font-size: 16px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .row .btn a{
            color: white;
            text-decoration: none;
        }

    </style>
    
    </head>
    
    <body>
        
        <div class = "jumbotron">
            <div class = "heading">
                <h2 id = "title1">Sports Available Management Software</h2>
                <h3 id = "title2">Adaptive Sports USA 2017 Junior Nationals</h3>
            </div>
        </div>
        
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand"  href="SAMShome.php"  style="color: #B3DA2E;">Dashboard</a>
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
                            <li><a id = "register_form" href = "masterpage/registrationform.php">Registration Form</a></li>
                            <li><a id = "find_register" href = "masterpage/findregistration.php">Find All Registration</a></li>
                            <li><a id = "setup_pref" href = "masterpage/setupmaster.php">Setup Master Preferences</a></li>
                            <li><a id = "athlete_perform_record" href = "masterpage/athleteRecords.php">Athlete Records</a></li>
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
                            <li><a id = "extrackfield" href="resultpage/exporttrack.html">Export Track &amp; Field</a></li>
                            <li><a id = "exswimming" href="resultpage/exportswimming.html">Export Swimming</a></li>
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
                            <li><a id = "archery" href="sports/sportsTable.php?sport=archery">Archery</a></li>
                            <li><a id = "fencing" href="sports/sportsTable.php?sport=fencing">Fencing</a></li>
                            <li><a id = "field" href="sports/sportsTable.php?sport=field">Field</a></li>
                            <li><a id = "swimming" href="sports/sportsTable.php?sport=swim">Swimming</a></li>
                            <li><a id = "tabletennis" href="sports/sportsTable.php?sport=tableTennis">Table Tennis</a></li>
                            <li><a id = "teamsports" href="sports/sportsTable.php?sport=teams">Team Sports</a></li>
                            <li><a id = "track" href="sports/sportsTable.php?sport=track">Track</a></li>
                            <li><a id = "weightlifting" href="sports/sportsTable.php?sport=weightlifting">Weightlifting</a></li>
                            <li><a id = "other" href="sports/sportsTable.php?sport=other">Other Sports</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports Preferences<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="sports/setuparchery.php">Archery Preferences</a></li>
                            <li><a href="sports/setupfencing.php">Fencing Preferences</a></li>
                            <li><a href="sports/setupfield.php">Field Preferences</a></li>
                            <li><a href="sports/setupswim.php">Swimming Preferences</a></li>
                            <li><a href="sports/setuptableTennis.php">Table Tennis Preferences</a></li>
                            <li><a href="sports/setupteams.php">Team Sports Preferences</a></li>
                            <li><a href="sports/setuptrack.php">Track Preferences</a></li>
                            <li><a href="sports/setupweightlifting.php">Weightlifting Preferences</a></li>
                            <li><a href="sports/setupother.php">Other Sports Preferences</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right dropdown">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">

            <!-- ALll nav-pages under this section is moved to dashboard folder -->
            
            <div class="row">
                
                <div class="col-sm-6">
                    <button id = "assignbib" class="btn btn-info"><a href = "dashboard/assignbib.html">Assign Bib Numbers</a></button>
                    <button id = "goreport" class="btn btn-info"><a href = "dashboard/goreportpg.html">Go To Report Page</a></button>
                    <br><br>
                    <button id = "airgun" class="btn btn-warning"><a href = "dashboard/airgun.html">Air Guns</a></button>
                    <button id = "Paratristhion" class="btn btn-warning"><a href = "dashboard/paratristhion.html">Paratristhion</a></button>
                    <button id = "Paratristhion300" class="btn btn-warning"><a href = "dashboard/paratristhion300.html">Paratristhion - 300</a></button>
                    <button id = "othervenue" class="btn btn-warning"><a href = "dashboard/othervenuename.html">Other Venue Name</a></button>
                </div>

                <div class="col-sm-6">
<!--                    <h5>Move data to<br>or get data from<br>other meets</h5>-->
                    <button id = "createfilesbackup" class="btn btn-danger" style="height: 100px;"><a href = "dashboard/backupfiles.html">Create files for backup or to<br>send to National or<br>Next Higher Level Games</a></button>
                    <button id = "importrecord" class="btn btn-primary"><a href = "dashboard/importrecords.html">Import Records</a></button>
                    <button id = "viewimportrecord" class="btn btn-primary"><a href = "dashboard/viewimportrecord.html">View Import Records</a></button>
                    <button id = "exportselrecord" class="btn btn-primary" onclick="downloadReg()">Export Registration Records</button>
                    <iframe id="regFrame" style="display: none;"></iframe>
                    <br><br>
                    <button id = "deleterecords" class="btn btn-danger"><a href = "">Delete All Records<br> Start New Game</a></button>
                </div>
            </div>
        </div>
    </body>
    <script>
        
        function downloadReg(){
            document.getElementById('regFrame').src = "./masterpage/data.csv";
        }
    
    </script>
</html>