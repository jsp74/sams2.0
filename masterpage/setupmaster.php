<?php
    include( "./../login/functions.php" );
    session_start();     
    gatekeeper();
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
                margin-bottom: 0;
                border-radius: 0 !important;
            }
            
            .jumbotron{
                border-radius: 0 !important;
                background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
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

            #center{
                display: block;   
                margin: 50px;  
                clear:both;  
                width: 12%;
                height: 50px;
                font-size: 18px;
                margin-left: 44%;
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
        <nav class="navbar navbar-inverse">
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
        </nav>

        <div class = "jumbotron">
            <div class="form-group col-md-3">
                <img src="./../asusa_logo.png" alt="Asusa Logo">
            </div>
            <strong><h1>Meet/Event Preferences</h1></strong>
        </div>

        <div class = "container">
            <div class="col-sm-12 well">

                <form name = "athregform" class = "form1" action = "./handleSetupMaster.php" method="get">

                    <h3>Basic Information</h3><hr>
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname">Meet Name:</label>
                                <input type="text" class="form-control" name="meetName" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lname">Short Meet Name:</label>
                                <input type="text" class="form-control" name="shortName">
                            </div>
                        </div>

                        <div class = "row">
                            <div class="form-group col-md-3">
                                <label for="lname">Start Date:</label>
                                <input type="datetime-local" class="form-control" name="startDate" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lname">End Date:</label>
                                <input type="datetime-local" class="form-control" name="endDate" required>
                            </div>
                        </div>

                        <div class = "row">
                            <div class="form-group col-md-3">
                                <label for="city">Meet City:</label>
                                <input type="text" class="form-control" name="meetCity" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="state">Meet State:</label>
                                <select name="meetState" class = "form-control" required>
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
                                <input type="text" class="form-control" name="country" value="USA" disabled>
                            </div>
                        </div>
                    </div>

                    <h3>Additional Information</h3><hr>
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="member">Meet Director:</label>
                                <input type="text" name="meetDirector" class="form-control" id="director">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="member">Host Hotel:</label>
                                <input type="text" name="meetHotel" class="form-control" id="hotel">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="member">Event Sponsors (max 7):</label>
                                <textarea class="form-control" name="meetSponsors" rows="8"></textarea>
                             </div>
                             <div class="form-group col-md-4">
                                 <label>Local Organizaing Committees:</label>
                                 <textarea class="form-control" name="meetLOC" rows="8"></textarea>
                             </div>
                             <div class="form-group col-md-4">
                                <input type='file' name="meetLogo" />
                                <img id="jn_logo" src="./../junior_nationals.png" alt="logo" />
                            </div>
                        </div>
                    </div>

                    <h3>Others</h3><hr>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Select the Sports:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <div class = "selectbox">  
                                    <select multiple id="list" name="list">  
                                        <option value="1">Archery</option>  
                                        <option value="2">Fencing</option>  
                                        <option value="3">Field</option>  
                                        <option value="4">Swim</option>
                                        <option value="5">Table Tennis</option> 
                                        <option value="6">Team</option> 
                                        <option value="7">Track</option> 
                                        <option value="8">Weightlifting</option> 
                                        <option value="9">Other</option> 
                                    </select> 
                                    <button id="add" class = "btn btn-success"><a href="#" style="text-decoration: none; color: white;">Add</a></button>  
                                </div>  
                            </div>
                            <div class="form-group col-md-4">
                                <div class = "selectbox">  
                                    <select multiple id="selected" name="selected"></select>  
                                    <button id="remove" class = "btn btn-danger"><a href="#" style="text-decoration: none; color: white;">Remove</a></button>    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Assign Bib Numbers:</label><br>
                                <input type="radio" name="bib" value="1" required> Yes<br>
                                <input type="radio" name="bib" value="0"> No<br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button id="center" type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

<!--
            <input id = "subbtn" type = "submit" value = "Submit" onclick = "athregform()">

            <input id = "resetbtn" type = "reset" value = "Reset">
-->
        
    <script>

        /********************* Multiple Options JS Start Here ******************/

        $(document).ready(function() {  
            $('#add').click(function() {  
                return !$('#list option:selected').remove().appendTo('#selected');  
            });  

            $('#remove').click(function() {  
                return !$('#selected option:selected').remove().appendTo('#list');  
            });  
        });

        function addFields(){
            // Number of inputs to create
            var number = document.getElementById("sponsorsNumber").value;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("listSponsors");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }

            for (i=0;i<number;i++){
                // Append a node with a random text
                var label = document.createElement("LABEL");
                var text = document.createTextNode("Sponsor " + (i+1));
                label.appendChild(text);
                container.appendChild(label);
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.className = "form-control"
                input.name = "sponsor" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }

        $(function () {
            $(":file").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function imageIsLoaded(e) {
            $('#jn_logo').attr('src', e.target.result);
        };
    </script> 

</html> 