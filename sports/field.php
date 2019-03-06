<?php
$file = fopen("../masterpage/data.csv", 'r') or die("Unable to open file!"); // Opens the file, or returns error
$out = <<<EOD
<table class="table">
  <thead>
    <tr>
      <th scope="col"><p class="text-center">First Name</p></th>
      <th scope="col"><p class="text-center">Last Name</p></th>
      <th scope="col"><p class="text-center">Sport</p></th>
      <th scope="col"><p class="text-center">Age</p></th>
      <th scope="col"><p class="text-center">Gender</p></th>
      <th scope="col"><p class="text-center">City</p></th>
      <th scope="col"><p class="text-center">More Info</p></th>
    </tr>
  </thead>
  <tbody>
EOD;
$headers = [];
$data = fgetcsv($file);
for ($i = 0;$i < count($data);$i++) {
    array_push($headers, $data[$i]);
}
while (($data = fgetcsv($file)) !== FALSE) {
    $inField=false;
    $fname = "";
    $lname = "";
    $sport = "<ul class=\"list-group\">";
    $age = "";
    $gender = "";
    $city = "";
    $id = "";
    for ($i = 0;$i < count($data);$i++) {
        if ($i == 0) {
            $id = $data[$i];
        }
        if ($headers[$i] == "fname") {
            $fname = $data[$i];
        }
        if ($headers[$i] == "lname") {
            $lname = $data[$i];
        }
        if ($headers[$i] == "age") {
            $age = $data[$i];
        }
        if ($headers[$i] == "gender") {
            $gender = $data[$i];
        }
        if ($headers[$i] == "city") {
            $city = $data[$i];
        }
        if ($headers[$i] == "archery" || $headers[$i] == "fencing" || $headers[$i] == "field" || $headers[$i] == "swim" || $headers[$i] == "tableTennis" || $headers[$i] == "teams" || $headers[$i] == "track" || $headers[$i] == "weightlifting" || $headers[$i] == "other") {
            if ($data[$i] == "1") {
                $sport.= "<li class=\"list-group-item\"><p class=\"text-center\">$headers[$i]</p></li>";
                if ($headers[$i] == "field") {
                    $inField=true;
                }
            }
        }
    }
    $sport.= "</ul>";
    if($inField){
        $row = <<<EOD
        <tr>
        <td><p class="text-center">$fname</p></td>
        <td><p class="text-center">$lname</p></td>
        <td>$sport</td>
        <td><p class="text-center">$age</p></td>
        <td><p class="text-center">$gender</p></td>
        <td><p class="text-center">$city</p></td>
        <td><p class="text-center"><a class="btn btn-info" href="../masterpage/athleteRecords.php?id=$id" role="button">Info</a></p></td>
      </tr>
EOD;

        $out.= $row;
    }
}
$out.= <<<EOD
    </tbody>
</table>
EOD;

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
        .col {
            border: 5px;
            border-color: black
            
        }

        .nopadding {
        padding: 1px !important;
        margin: 0 !important;
        }

        .list-group-item{
            padding: 0px;
        }

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


         

        
        
    </style>
    
    </head>
    <body>  

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
                            <li><a id = "register_form" href = "../masterpage/registrationform.php">Registration Form</a></li>
                            <li><a id = "find_register" href = "../masterpage/findregistration.html">Find All Registration</a></li>
                            <li><a id = "setup_pref" href = "../masterpage/setupmaster.php">Setup Master Preferences</a></li>
                            
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
                </ul>
            </div>
        </nav>


        <div>
            <p class="text-right" style="padding-right: 2em"><a class="btn btn-info" href="setupField.php" role="button">Set Preferences</a></p>
        </div>

        <?php
            echo $out;
        ?>
    </body>
</html>
<script>
