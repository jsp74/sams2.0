
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
            

            #delete1 {
                top: 280px;
                background-color: #f44336;
            }
            
            #delete2 {
                top: 450px;
                background-color: #f44336;
            }
            
            #delete3 {
                top: 600px;
                background-color: #f44336;
            }
            
            #mySidenav button {
                position: absolute;
                left: -50px;
                transition: 0.3s;
                padding: 10px;
                width: 100px;
                text-decoration: none;
                font-size: 16px;
                color: white;
                border-radius: 0 5px 5px 0;
            }
            #mySidenav button:hover {
                left: 0;
            }

            
            .navbar{
                border-radius: 0 !important;
                margin-bottom: 10;
            }
            
            .jumbotron{
                border-radius: 0 !important;
                background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
                margin-bottom: 0;
                color: white;
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

            #center{
                display: block;   
                margin: 25px;  
                clear:both;  
                width: 12%;
                height: 50px;
                font-size: 18px;
                margin-left: 44%;
            }
            
            .well{
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            
            hr{
                border: 1px solid #009BC1;
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
			.opt4 {
				float:left;
				text-align:left;
				font-size: 30px:
				font-family: "Times"
			}
			
			input[type="checkbox"]{
				cursor: pointer;
				position: relative;
				width: 13px;
				height: 13px;
			}
			
			input[type=submit], select {
				width: 25%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				font-size: 15px;
				background-color: lightgreen;
				cursor: pointer; 
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
                    <li class="active"><a href="./../SAMhome.html">Dashboard</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration Form <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">New Registration</a></li>
                            <li><a href="">Athlete Summary</a></li>
                            <li><a href="">Athlete Result</a></li>
                            <li><a href="">E-Mail Registration Informations</a></li>
                            <li><a href="">View E-Mail Data Sent</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venues <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="registration-venues/archery.html">Archery</a></li>
                            <li><a href="registration-venues/track.html">Track</a></li>
                            <li><a href="registration-venues/field.html">Field</a></li>
                            <li><a href="registration-venues/swimming.html">Swimming</a></li>
                            <li><a href="registration-venues/tabletennis.html">Table Tennies</a></li>
                            <li><a href="registration-venues/weighlifting.html">Weightlifting</a></li>
                            <li><a href="registration-venues/teamsports.html">Team Sports</a></li>
                            <li><a href="registration-venues/fencing.html">Fencing</a></li>
                            <li><a href="registration-venues/othersvenues.html">Other Venue</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Photos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Add Photo</a></li>
                            <li><a href="">Connect Photo By Name</a></li>
                            <li><a href="">Photo Database</a></li>
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
                </ui>
            </div>
        </nav> -->


        <div class = "jumbotron">
            <center><strong><h1>Registration Form</h1></strong></center>
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

        <div class = "container">
            <div class="col-sm-* well">

                <h3>Basic Information</h3>
                <hr>
                <form name="athregform" class="form1" action="regFormAction.php" method="POST">
                    <div class="col-sm-*">

                        <div class = "select_options">
                            <strong>Choose One</strong>
                            <label class="checkbox-inline">
                                <input name="radiolabel" type="radio" value="Athlete"> Athlete
                            </label>

                            <label class="checkbox-inline">
                                <input name="radiolabel" type="radio" value="Head_Coach"> Head Coach
                            </label>

                            <label class="checkbox-inline">
                                <input name="radiolabel" type="radio" value="Coach"> Coach
                            </label>

                            <label class="checkbox-inline">
                                <input name="radiolabel" type="radio" value="Support_Staff"> Support Staff
                            </label>

                            <label class="checkbox-inline">
                                <input name="radiolabel" type="radio" value="Official"> Official
                            </label>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname" pattern="[A-Za-z ,.'-]+" title="Use letters and ,.'- ONLY" required>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname" name="lname" pattern="[A-Za-z ,.'-]+" title="Use letters and ,.'- ONLY" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address line 1:</label>
                            <input type="text" class="form-control" id="address1" name="address1" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address line 2:</label>
                            <input type="text" class="form-control" id="address2" name="address2">
                        </div>

                        <div class = "row">
                            <div class="form-group col-sm-3">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" name="city" pattern="[A-Za-z ,.'-]+" title="Use letters and ,.'- ONLY" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="state"> State:</label>
                                <select name="state" class="form-control" required>
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

                            <div class="form-group col-sm-3">
                                <label for="zip">Zip / Mail Code:</label>
	                            <input type="number" class="form-control" id="zipcode" name="zipcode" pattern="[\d]{5}([\d]{4})?" title="5 or 9 digit zip code ONLY" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="country">Country:</label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="USA" disabled>
                            </div>
                        </div>

						<div class="row">
							<div class="form-group col-sm-6">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
							
							<div class="form-group col-sm-6">
                                <label for="cphone">Cell Phone:</label>
                                <input type="number" class="form-control" id="cphone" name="phone" pattern="[\d]{9}" title="10 digit phone number ONLY" required>
                            </div>
						</div>

						<div class="row">
                            <div class="form-group col-sm-3">
                                <label for="dob">DOB:</label>
                                <input type="date" name="dob" id="dob" class="form-control" onchange="test()" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="mm/dd/yyyy format" required>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="age">Age:</label>
                                <input type="number" name="age" id="age" class="form-control" onchange="test()" pattern="[\d]{1,3}" title="Age between 0 and 999 ONLY" required>
                            </div>
							
							<div class="form-group col-sm-3">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="tsize">T-Shirt Size:</label>
                                <select name="tsize" id="tsize" class="form-control" required>
                                    <option></option>
                                    <option value="cSmall">Ch. S</option>
                                    <option value="cMedium">Ch. M</option>
                                    <option value="cLarge">Ch. L</option>
                                    <option value="cXL">Ch. XL</option>
                                    <option value="small">S</option>
                                    <option value="medium">M</option>
									<option value="large">L</option>
                                    <option value="xl">XL</option>
                                    <option value="xxl">XXL</option>
                                    <option value="xxxl">XXXL</option>    
                                </select>
                            </div>
						</div>
						<h3>Additional Information</h3>
						<hr>
                        <div class = "row">
                            <div class="form-group col-sm-4">
                                <label for="dso">DSO: Select 2 character code</label>
                                <select id="dso" name="dso" class = "form-control">
                                    <option></option>
                                    <option disabled>Ambulatory</option>
                                    <option value="amb">AMB</option>
                                    <option disabled>Blind</option>
                                    <option value="ba">BA</option>
                                    <option disabled>Intelectually Disabled</option>
                                    <option value="id">ID</option>
                                    <option disabled>Cerebral Palsey</option>
                                    <option value="cp">CP</option>
                                    <option disabled>Amputees</option>
                                    <option value="ds">DS</option>
                                    <option disabled>Dwarf</option>
                                    <option value="da">DA</option>
                                    <option disabled>Wheelchair</option>
                                    <option value="wc">WC</option>
                                    <option disabled>USATIF</option>
                                    <option value="usatif">USATIF</option>
                                    <option disabled>Spinal Cord Injury</option>
                                    <option value="sci">SCI</option>
                                    <option disabled>Ocupational Therapist (Maybe)</option>
                                    <option value="ot">OT</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="rnumber">Registration Number:</label>
                                <input type="text" name="regNumber" id="regNumber" class="form-control" pattern="[A-Z]?[0-9]*">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="bnumber">Bib Number:</label>
                                <input type="text" name="bibNumber" id="bibNumber" class="form-control" pattern="[0-9]*">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-6">
                                <label for="member">Membership Number:</label>
                                <input type="text" name="memNumber" id="memNumber" class="form-control" pattern="[0-9]*">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="bnumber">IPC Number:</label>
                                <input type="text" name="ipcNumber" id="ipcNumber" class="form-control" pattern="[0-9]*">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-6">
                                <label for="tname">Team Name:</label>
                                <input type="text" class="form-control" id="teamName" name="teamName">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="hcname">Head Coach's Name:</label>
                                <input type="text" class="form-control" id="hcName" name="hcName" pattern="[A-Za-z ,.'-]+">
                            </div>
						</div>
						
						<div class="row">						
                            <div class="form-group col-sm-6">
                                <label for="chpname">Coach's Phone #:</label>
                                <input type="number" class="form-control" id="hcPhone" name="hcPhone" pattern="[1-9][0-9]{9}">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="cwpcname">Coach's Email:</label>
                                <input type="email" class="form-control" id="hcEmail" name="hcEmail">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-4" id = "ynradio">
                                <label>Needed to be Classified?</label><br>
                                <input name="classified" type="radio" value="1"> Yes
                                <input name="classified" type="radio" value="0"> No
                            </div>

                            <div class="form-group col-sm-4" id = "ynradio">
                                <label>Is Coach coming to meet?</label><br>
                                <input name="coachPresence" type="radio" value="1"> Yes
                                <input name="coachPresence" type="radio" value="0"> No
                            </div>
                        </div> 
						
						<h3>Select the Sports</h3>
						<hr>
						<div class = "opt3 row">  	
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type="checkbox" name="archery" value="1">&nbsp&nbspArchery</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type="checkbox" name="fencing" value="1">&nbsp&nbspFencing</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type="checkbox" name="field" value="1">&nbsp&nbspField</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type="checkbox" name="swim" value="1">&nbsp&nbspSwim</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type="checkbox" name="tableTennis" value="1">&nbsp&nbspTable Tennis</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type="checkbox" name="teams" value="1">&nbsp&nbspTeams</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type="checkbox" name="track" value="1">&nbsp&nbspTrack</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type="checkbox" name="weighlifting" value="1">&nbsp&nbspWeighlifting</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type="checkbox" name="other" value="1">&nbsp&nbspOther</label><br>
							</div>
						</div>
                        <div class="row">
                            <div class="form-group col-md-*">
                                <button id="center" type="submit" name="Submit" class="btn btn-primary">Submit</button>
                            </div>  
                        </div>					
                    </div>
                </form>	
            </div>
            <br><br>
        </div>
    </body>
</html> 
<script type="text/javascript">
    function test(){
        console.log(document.getElementById("dob").value);
        console.log(typeof(document.getElementById("age").value));
    }
</script>