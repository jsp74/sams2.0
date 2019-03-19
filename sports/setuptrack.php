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

          <!-- js for editting table functionality -->
          <script src="./../css/js/bootstable.js"></script>
          
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
               .half-right{
                    display: block;   
                    margin: 25px;  
                    clear: both;  
                    width: 24%;
                    height: 50px;
                    font-size: 18px;
                    float: right;
               }

               /* Update button */
               .half-left{
                    display: block;
                    background-color: #303639;
                    color: white; 
                    margin: 25px;  
                    clear: both;  
                    width: 24%;
                    height: 50px;
                    font-size: 18px;
                    float: left;
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
                         display: block;
                         margin: 0.4em auto;
                    }
               }

               /* edittable Table */
               .pt-3-half {
                    padding-top: 1.4rem;
               }
               /* edittable table */

               #submitChanges{
                    visibility: hidden;
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
               <strong class="text-center"><h1>Track Event Preferences</h1></strong>
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
                                   <li><a id = "register_form" href = "./../masterpage/registrationform.php">Registration Form</a></li>
                                   <li><a id = "find_register" href = "./../masterpage/findregistration.php">Find All Registration</a></li>
                                   <li><a id = "setup_pref" href = "./../masterpage/setupmaster.php">Setup Master Preferences</a></li>
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
                                   <li><a id = "archery" href="sportsTable.php?sport=archery">Archery</a></li>
                                   <li><a id = "fencing" href="sportsTable.php?sport=fencing">Fencing</a></li>
                                   <li><a id = "field" href="sportsTable.php?sport=field">Field</a></li>
                                   <li><a id = "swimming" href="sportsTable.php?sport=swim">Swimming</a></li>
                                   <li><a id = "tabletennis" href="sportsTable.php?sport=tableTennis">Table Tennis</a></li>
                                   <li><a id = "teamsports" href="sportsTable.php?sport=teams">Team Sports</a></li>
                                   <li><a id = "track" href="sportsTable.php?sport=track">Track</a></li>
                                   <li><a id = "weightlifting" href="sportsTable.php?sport=weightlifting">Weightlifting</a></li>
                                   <li><a id = "other" href="sportsTable.php?sport=other">Other Sports</a></li>
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

                    <form name = "athregform" class = "form1" action = "handleSetupTrack.php" method="POST">

                         <h3>Basic Information</h3><hr>
                         <div class="col-sm-12">
                              <div class="row">
                                   <div class="col-sm-6 form-group">
                                        <label>Venue Name:</label>
                                        <input type="text" class="form-control" id="venueName" name="venueName" required>
                                   </div>
                                   <div class="form-group col-md-4">
                                        <label>Venue Location:</label>
                                        <input type="text" class="form-control" id="locationName" name="locationName">
                                   </div>
                              </div>
                              <div class = "row">
                                   <div class="col-sm-2 form-group">
                                        <label>Total Active Events:</label>
                                        <input type="number" class="form-control" id="activeEvents" name="activeEvents" disabled>
                                   </div>
                                   <div class="col-sm-2 form-group">
                                        <label>Number of Lanes:</label>
                                        <input type="number" class="form-control" id="activeLanes" name="activeLanes" required>
                                   </div>
                                   <div class="col-sm-4 form-group">
                                        <label>Currect Record Level:</label>
                                        <input type="text" class="form-control" id="crl" name="crl" required>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-6">
                                        <button type="submit" id="submit" name="Submit" class="btn btn-primary half-right">Submit</button>
                                   </div>
                                   <div class="col-sm-6">
                                        <button type="button" id="update" onclick="enableSubmit()" class="btn btn-dark half-left">Update</button>
                                   </div>
                              </div>
                         </div>
                         <h3>Events</h3><hr>
                         <!-- Editable table -->
                         <div class="card">
                              <table class="table table-bordered" id="trackTable">
                                   <thead>
                                        <tr>
                                             <th class="text-center">Event #</th>
                                             <th class="text-center">Event Name</th>
                                             <th class="text-center">Max/heat</th>
                                             <th class="text-center">Timed finals</th>
                                             <th class="text-center">Promote only</th>
                                             <th class="text-center">Seed Method</th>
                                             <th class="text-center">Relay</th>
                                             <th class="text-center">Team scoring</th>
                                             <th class="text-center">Event Date</th>
                                        </tr>
                                   </thead>
                                   <!-- <tbody>
                                        <tr>
                                             <td id="#1">Event 1</td>
                                             <td id="#1name">Junior</td>
                                             <td id="#1mh">12</td>
                                             <td id="#1time">No</td>
                                             <td id="#1promote">No</td>
                                             <td id="#1seed">open/waterfall</td>
                                             <td id="#1relay">first</td>
                                             <td id="#1team">Yes</td>
                                             <td id="#1date">26-JUL-18</td>
                                        </tr>
                                        <tr>
                                             <td>Event 2</td>
                                             <td>5000 meters</td>
                                             <td>12</td>
                                             <td>No</td>
                                             <td>No</td>
                                             <td>lanes</td>
                                             <td></td>
                                             <td>Yes</td>
                                             <td>26-JUL-18</td>
                                        </tr>
                                   </tbody> -->
                              </table>
                         </div>
                         <!-- Editable table -->
                         <div class="row">
                              <div class="col-sm-12">
                                   <div class="text-center">
                                        <button type="button" class="btn btn-info" onclick="editTable(0)" id="addRow">Add Row</button>
                                        <button type="button" class="btn btn-info" onclick="editTable(1)" id="makeChanges">Make Changes</button>
                                        <button type="button" class="btn btn-info" onclick="saveChanges()" id="submitChanges">Save Changes</button>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </body>
     <script>
          var tableSize = 0;
          // jQuery library that makes the table edittable
          // $('table').SetEditable();

          // checks if data file exists, if success -> poppulate the form
          $(document).ready(function(){
               $.ajax({
                    type: "GET",
                    url: "trackData.csv",
                    dataType: "text",
                    success: function(data){populateForm(data);}
               });
          });

          function editTable(x){
               // x->0 for adding a row to the table;
               // x->1 for enabling jQuery library to make the table editable
               if(x == 0){
                    window.tableSize++; 
                    var size = window.tableSize; // global variable -> window.tableSize
                    var table = document.getElementById('trackTable');
                    table.innerHTML += ("<tbody><tr><td id='event"+size+"'>Event "+size+"</td><td id='name"+size+"'></td><td id='mh"+size+"'></td><td id='timed"+size+"'></td><td id='promote"+size+"'></td><td id='seed"+size+"'></td><td id='relay"+size+"'></td><td id='team"+size+"'></td><td id='date"+size+"'></td>");
                    table.innerHTML += ("</tr></tbody>");
               }

               if( x == 1){
                    // jQuery library that makes the table edittable
                    $('table').SetEditable();

                    var makeChanges = document.getElementById("makeChanges");
                    var submitChanges = document.getElementById("submitChanges");
                    var addRow = document.getElementById("addRow");
                    
                    // hiding makeChanges button
                    makeChanges.style.visibility = "hidden";
                    makeChanges.style.display = "none";

                    // hiding addRow button
                    addRow.style.visibility = "hidden";
                    addRow.style.display = "none";

                    // showing saveChanges button
                    submitChanges.style.visibility = "visible";
               }
          }

          function saveChanges(){
               var size = window.tableSize;
               console.log(size);
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
               for(var i = 0; i <= (colNames.length-1); i++){
                    var item = colNames[i];
                    var value = info[i];
                    var ele = document.getElementById(item);
                    value = removeQuotes(value);
                    ele.disabled = true;
                    ele.value = value;
               }

               // -------------------- disabling/enabling the buttons -------------------- //
               document.getElementById("submit").disabled = true; // submit button
               document.getElementById("update").disabled = false; // update button

          }

          // when triggered enables all the form field to make it editable
          function enableSubmit(){

               var enableArray = [ 'venueName', 'locationName', 'activeEvents', 'activeLanes', 'crl' ];

               // enabling all the attributes mentioned in the array,i.e., basic & addtional information and sports section
               for(var i = 0; i < enableArray.length; i++){
                    document.getElementById(enableArray[i]).disabled = false;
               }

               // enabling/disbaling buttons
               document.getElementById("submit").disabled = false; // submit button
               document.getElementById("update").disabled = true;   // update button
          }

          // removes all the double quotes from the string that is passed as an argument
          function removeQuotes(text){
               return text.replace(/["]+/g, '');
          }

     </script>
</html>
