
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
                            <li><a id = "register_form" href = "masterpage/registrationform.html">Registration Form</a></li>
                            <li><a id = "find_register" href = "masterpage/findregistration.html">Find All Registration</a></li>
                            <li><a id = "setup_pref" href = "masterpage/setupmaster.html">Setup Master Preferences</a></li>
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
                            <li><a href="login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ui>
            </div>
        </nav>

        <div class = "container">
            <div class="col-sm-* well">

                <div class = "select_options">
                    <strong>Choose One</strong>
                    <label class="checkbox-inline">
                        <input name = "radiolabel" type="radio" value="Athlete"> Athlete
                    </label>

                    <label class="checkbox-inline">
                        <input name = "radiolabel" type="radio" value="Head_Coach"> Head Coach
                    </label>

                    <label class="checkbox-inline">
                        <input name = "radiolabel" type="radio" value="Coach"> Coach
                    </label>

                    <label class="checkbox-inline">
                        <input name = "radiolabel" type="radio" value="Support_Staff"> Support Staff
                    </label>

                    <label class="checkbox-inline">
                        <input name = "radiolabel" type="radio" value="Official"> Official
                    </label>
                </div>
                <br>
                <h3>Basic Information</h3>
                <hr>
                <form name = "athregform" class = "form1" action = "" method="POST">
                    <div class="col-sm-*">

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" id="fname">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" id="lname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address line 1:</label>
                            <input type="text" class="form-control" id="address1">
                        </div>

                        <div class="form-group">
                            <label for="address">Address line 2:</label>
                            <input type="text" class="form-control" id="address2">
                        </div>

                        <div class = "row">
                            <div class="form-group col-sm-3">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="state">State:</label>
                                <select id = "state" class = "form-control">
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
                                <input type="number" class="form-control" id="zipcode">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="country">Country:</label>
                                <input type="text" class="form-control" id="country" placeholder="USA" disabled>
                            </div>
                        </div>

						<div class="row">
							<div class="form-group col-sm-6">
								<label for="email">Email:</label>
								<input type="email" name="email" class="form-control" id="Email">
							</div>
							
							<div class="form-group col-sm-6">
                                <label for="cphone">Cell Phone:</label>
                                <input type="number" name="cell_phone" class="form-control" id="cphone">
                            </div>
						</div>

						<div class="row">
                            <div class="form-group col-sm-3">
                                <label for="dob">DOB:</label>
                                <input type="date" name="dob" class="form-control" id="dob">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="age">Age:</label>
                                <input type="number" name="age" class="form-control" id="age">
                            </div>
							
							<div class="form-group col-sm-3">
                                <label for="gender">Gender:</label>
                                <select id = "gender" name="gender" class = "form-control">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="tsize">T-Shirt Size:</label>
                                <select id = "tsize" name="tsize" class = "form-control">
                                    <option></option>
                                    <option>Ch. S</option>
                                    <option>Ch. M</option>
                                    <option>Ch. L</option>
                                    <option>Ch. XL</option>
                                    <option>S</option>
                                    <option>M</option>
									<option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                    <option>XXL</option>    
                                </select>
                            </div>
						</div>
						<h3>Additional Information</h3>
						<hr>
                        <div class = "row">
                            <div class="form-group col-sm-4">
                                <label for="dso">DSO: Select 2 character code</label>
                                <select id = "dso" name="dso" class = "form-control">
                                    <option></option>
                                    <option disabled>Ambulatory</option>
                                    <option>AMB</option>
                                    <option disabled>Blind</option>
                                    <option>BA</option>
                                    <option disabled>Intelectually Disabled</option>
                                    <option>ID</option>
                                    <option disabled>Cerebral Palsey</option>
                                    <option>CP</option>
                                    <option disabled>Amputees</option>
                                    <option>DS</option>
                                    <option disabled>Dwarf</option>
                                    <option>DA</option>
                                    <option disabled>Wheelchair</option>
                                    <option>WC</option>
                                    <option disabled>USATIF</option>
                                    <option>USATIF</option>
                                    <option></option>
                                    <option></option>
                                    <option>OT</option>
                                    <option>SCI</option>
                                    <option>Edit...</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="rnumber">Registration Number:</label>
                                <input type="text" name="rnumber" class="form-control" id="rnumber">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="bnumber">Bib Number:</label>
                                <input type="text" name="bnumber" class="form-control" id="bnumber">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-6">
                                <label for="member">Membership Number:</label>
                                <input type="text" name="membership_number" class="form-control" id="membernumber">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="bnumber">IPC Number:</label>
                                <input type="text" name="ipcnumber" class="form-control" id="bnumber">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-6">
                                <label for="tname">Team Name:</label>
                                <input type="text" class="form-control" id="tname">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="hcname">Head Coach's Name:</label>
                                <input type="text" class="form-control" id="hcname">
                            </div>
						</div>
						
						<div class="row">						
                            <div class="form-group col-sm-6">
                                <label for="chpname">Coach's Phone #:</label>
                                <input type="number" class="form-control" id="hcname">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="cwpcname">Coach's Email:</label>
                                <input type="email" class="form-control" id="hcname">
                            </div>
						</div>
						
						<div class="row">
                            <div class="form-group col-sm-4" id = "ynradio">
                                <label>Needed to be Classified?</label><br>
                                <input name = "yes" type="radio" value="Classified_Yes"> Yes
                                <input name = "no" type="radio" value="Classified_No"> No
                            </div>

                            <div class="form-group col-sm-4" id = "ynradio">
                                <label>Is Coach coming to meet?</label><br>
                                <input name = "yes" type="radio" value="Coach_Yes"> Yes
                                <input name = "no" type="radio" value="Coach_No"> No
                            </div>
                        </div> 
						
						<h3>Select the Sports</h3>
						<hr>
						<div class = "opt3 row">  	
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type = "checkbox" name="Archery" value = "Archery">&nbsp&nbspArchery</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type = "checkbox" name="Fencing" value = "Fencing">&nbsp&nbspFencing</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type = "checkbox" name="Field" value = "Field">&nbsp&nbspField</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type = "checkbox" name="Swim" value = "Swim">&nbsp&nbspSwim</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type = "checkbox" name="Table Tennis" value = "Table Tennis">&nbsp&nbspTable Tennis</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type = "checkbox" name="Teams" value = "Teams">&nbsp&nbspTeams</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-4">
								<label><input type = "checkbox" name="Track" value = "Track">&nbsp&nbspTrack</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-5">
								<label><input type = "checkbox" name="Weighlifting" value = "Weighlifting">&nbsp&nbspWeighlifting</label><br>
							</div>
							<div class="form-group col-sm-4 col-xs-3">
								<label><input type = "checkbox" name="Other" value = "Other">&nbsp&nbspOther</label><br>
							</div>
						</div>						
                    </div>
					 	
				<center><input type="submit" font="Helvetica" value="SUBMIT""><br><br>		
                </form>	
            </div>
            <br><br>
        </div>
    </body>
</html> 
