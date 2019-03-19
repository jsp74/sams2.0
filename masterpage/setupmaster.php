<?php
    include( "./../login/functions.php" );
    session_start();     
    gatekeeper("./../login/login.php");
?>

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
        
        <style>
            
            .navbar{
                margin-bottom: 10;
                border-radius: 0 !important;
            }
            
            .jumbotron{
                border-radius: 0 !important;
                background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
                color: white;
                margin-bottom: 0;
            }
            
            #subbtn{
                width: 150px;
                height: 40px;
                background-color: #00C229;
                color: white;
                border-radius: 5px;
                font-size: 25px;
                font-weight: bold;
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            #resetbtn{
                width: 150px;
                height: 40px;
                background-color: #C24400;
                color: white;
                border-radius: 5px;
                font-size: 25px;
                font-weight: bold;
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            .well{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            hr{
                border: 1px solid #009BC1;
            }

            #center{
                display: block;   
                margin: 25px;  
                clear: both;  
                width: 12%;
                height: 50px;
                font-size: 18px;
                margin-left: 44%;
            }

            /* Submit button */
            #half-right{
                display: block;   
                margin: 25px;  
                clear: both;  
                width: 24%;
                height: 50px;
                font-size: 18px;
                float: right
            }

            /* Update button */
            #half-left{
                display: block;
                background-color: #303639;
                color: white; 
                margin: 25px;  
                clear: both;  
                width: 24%;
                height: 50px;
                font-size: 18px;
                float: left
            }

            .selectbox {  
                float:left;  
                text-align: center;
            } 

            .opt2 {  
                float:left;  
                text-align: center;  
                margin: 70px;  
            }

            .opt3 {
                float:center;
                text-align:left;
                padding: 10px;
                font-size: 15px;
                border-radius: 8px;
                /*border: 1px solid black;*/
                margin:1%;
                position:center;

            }

            .selectbox select {  
                width: 260px;  
                height: 260px;
                padding: 10px;
                font-size: 20px;
                border-radius: 8px;
                border: 1px solid black;
                margin-left: 70px;
            }

            .container{
                align-self: center !important;
            }

            #form1_submit{
                 display:inline-block;
                 padding:0.7em 1.7em;
                 margin:0 0.3em 0.3em 0;
                 border-radius:0.2em;
                 box-sizing: border-box;
                 text-decoration:none;
                 font-family:'Roboto',sans-serif;
                 font-weight:400;
                 color:#FFFFFF;
                 background-color:#3369ff;
                 box-shadow:inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
                 text-align:center;
                 position:relative;
                }
                #form1_submit:active{
                 box-shadow:inset 0 0.6em 2em -0.3em rgba(0,0,0,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
                }
                @media all and (max-width:30em){
                 #form1_submit{
                  display:block;
                  margin:0.4em auto;
                 }
            }
            
        </style>
        
    </head>
    
    <body>
        <!-- <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="./../SAMShome.php">Dashboard</a></li>
                </ul>
            </div>
        </nav> -->

        <div class = "jumbotron">
            <div class="form-group col-md-3">
                <img src="images/asusa_logo.png" alt="Asusa Logo">
            </div>
            <strong><h1>Meet/Event Preferences</h1></strong>
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

        <div class = "container">
            <div class="col-sm-12 well">

                <form name = "athregform" class = "form1" action = "./handleSetupMaster.php" method="POST">

                    <h3>Basic Information</h3><hr>
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname">Meet Name:</label>
                                <input type="text" class="form-control" id="meetName" name="meetName" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lname">Short Meet Name:</label>
                                <input type="text" class="form-control" id="shortName" name="shortName">
                            </div>
                        </div>

                        <div class = "row">
                            <div class="form-group col-md-3">
                                <label for="lname">Start Date:</label>
                                <input type="date" class="form-control" id="startDate" name="startDate" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lname">End Date:</label>
                                <input type="date" class="form-control" id="endDate" name="endDate" required>
                            </div>
                        </div>

                        <div class = "row">
                            <div class="form-group col-md-3">
                                <label for="city">Meet City:</label>
                                <input type="text" class="form-control" id="meetCity" name="meetCity" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="state">Meet State:</label>
                                <select id="meetState" name="meetState" class = "form-control" required>
                                    <option></option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="country">Meet Country:</label>
                                <input type="text" class="form-control" id="country" name="country" value="USA" disabled>
                            </div>
                        </div>
                    </div>

                    <h3>Additional Information</h3><hr>
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="member">Meet Director:</label>
                                <input type="text" id="meetDirector" name="meetDirector" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="member">Host Hotel:</label>
                                <input type="text" id="meetHotel" name="meetHotel" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="member">Event Sponsors (max 7):</label>
                                <textarea class="form-control" id="meetSponsors" name="meetSponsors" rows="8"></textarea>
                             </div>
                             <div class="form-group col-md-4">
                                 <label>Local Organizaing Committees:</label>
                                 <textarea class="form-control" id="meetLOC" name="meetLOC" rows="8"></textarea>
                             </div>
                             <div class="form-group col-md-4">
                                <input type='file' name="meetLogo" />
                                <img id="jn_logo" name="jn_logo" src="images/junior_nationals.png" alt="logo" />
                                <!-- <input type="text" id="logo_source" name="logo_source" width="100%" disabled> -->
                            </div>
                        </div>
                    </div>

                    <h3>Select the Sports</h3><hr>
                    <div class="col-sm-12">
                        <div class = "opt3 row checkbox-group required">    
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="archery" name="archery" value = "1">&nbsp&nbspArchery</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="fencing" name="fencing" value = "1">&nbsp&nbspFencing</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="field" name="field" value = "1">&nbsp&nbspField</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="swim" name="swim" value = "1">&nbsp&nbspSwim</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="tableTennis" name="tableTennis" value = "1">&nbsp&nbspTable Tennis</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="teams" name="teams" value = "1">&nbsp&nbspTeams</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="track" name="track" value = "1">&nbsp&nbspTrack</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="weightlifting" name="weightlifting" value = "1">&nbsp&nbspWeighlifting</label><br>
                            </div>
                            <div class="form-group col-sm-4 col-xs-4">
                                <label><input type = "checkbox" id="other" name="other" value = "1">&nbsp&nbspOther</label><br>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Assign Bib Numbers:</label><br>
                                <input type="radio" id="bibYes" name="bib" value="1" required> Yes<br>
                                <input type="radio" id="bibNo" name="bib" value="0"> No<br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button id="half-right" type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" id="half-left" onclick="enableSubmit()" class="btn btn-dark" disabled>Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
        
    <script>

        // function imageFunction(){
        //     console.log("reacehd")
        // 	var source = document.getElementById("jn_logo").src;
        // 	var n = source.search("images");
        // 	var src = source.substring(n);
        // 	console.log(src);
        // 	document.getElementById("logo_source").value = src;
        // }

        // checks if data file exists, if success -> poppulate the form
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "masterData.csv",
                dataType: "text",
                success: function(data){populateForm(data);}
            });
        });

        // removes all the double quotes from the string that is passed as an argument
        function removeQuotes(text){
            return text.replace(/["]+/g, '');
        }

        function replaceComma(text){
            return text.replace(/[,]+/g, '\r\n')
        }

        // Function is triggered if there is an existing excel file,
        // the function takes all the data from the excel file and populates the form with respection values
        // and disables the fields
        function populateForm(data){
            var cols = 22;
            var lines = data.split(/\r\n|\n/);
            var colNames = lines[0].split(',');
            var info = lines[1].split(/,+(?=(?:(?:[^"]*"){2})*[^"]*$)/g);
            console.log(colNames);  // title of the columns
            console.log(info);      // corresponding value of the columns

            // -------------------- populating basic & additional information and disabling the attributes -------------------- //
            for(var i = 0; i <= 10; i++){
                var item = colNames[i];
                var value = info[i];
                var ele = document.getElementById(item);
                if(item == "meetSponsors" || item == "meetLOC"){
                    value = replaceComma(value);
                }
                value = removeQuotes(value);
                ele.disabled = true;
                ele.value = value;
            }

            // ------------------- checking either bib is selected or not and disabling both -------------------- //
            var value12 = info[12];
            document.getElementById('bibYes').disabled = true;
            document.getElementById('bibNo').disabled = true;
            if(value12 == 1){
                document.getElementById('bibYes').checked = true;
            }
            else{
                document.getElementById('bibNo').checked = true;
            }

            // -------------------- populating sports sections and disabling the attributes -------------------- //
            for(var i = 13; i <= 21; i++){
                var item = colNames[i];
                var value = info[i];
                var ele = document.getElementById(item);
                ele.disabled = true;
                if(value == 1){
                    ele.checked = true;
                }
            }

            // -------------------- disabling/enabling the buttons -------------------- //
            document.getElementById("half-right").disabled = true; // submit button
            document.getElementById("half-left").disabled = false; // update button

        }

        // when triggered enables all the form field to make it editable
        function enableSubmit(){

            var enableArray = [ 'meetName', 'shortName', 'startDate', 'endDate', 'meetCity', 'meetState', 
                                'meetDirector', 'meetHotel', 'meetSponsors', 'meetLOC', 'bibYes', 'bibNo',
                                'archery', 'fencing', 'field','swim', 'tableTennis', 'teams', 'track', 'weightlifting', 'other' ]

            // enabling all the attributes mentioned in the array,i.e., basic & addtional information and sports section
            for(var i = 0; i < enableArray.length; i++){
                document.getElementById(enableArray[i]).disabled = false;
            }

            // enabling/disbaling buttons
            document.getElementById("half-right").disabled = false; // submit button
            document.getElementById("half-left").disabled = true;   // update button
        }

        // function imageIsLoaded(e) {
        //     $('#jn_logo').attr('src', e.target.result);
        // };

    </script> 

</html> 
