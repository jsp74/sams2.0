<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Logout Page | SAMS</title>
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

<?php


// Session to avoid entering invalid entries without signing in 
include( "./../login/functions.php" );
session_start();     
gatekeeper("registrationform.php");


$file = fopen("data.csv", 'a+') or errOccurred(); // Opens the file, or returns error

//Getting the ID number for the next person
$ID = 1111;
while(!feof($file)) {
  $ar = fgetcsv($file);
  if (!empty($ar[0]))
    $ID = $ar[0] + 1;
}

//Gets Data from each Field of the Form
$type = getdata("radiolabel");
$first = getdata("fname");
$last = getdata("lname");
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
$classified = getdata("classified");
$coach_coming = getdata("coachPresence");
$archery = getdata("archery");
$fencing = getdata("fencing");
$field = getdata("field");
$swim = getdata("swim");
$tableTennis = getdata("tableTennis");
$teams = getdata("teams");
$track = getdata("track");
$weightlifting = getdata("weightlifting");
$other = getdata("other");

//Data is an array of all the elements from the form
$data = [$ID, $type, $first, $last, $add1, $add2, $city, $state, $zip, $country, $email, $cellphone, $dob, $age, $gender, $tshirt, $dso, $reg_num, $bib_num, $mem_num, $ipc_num, $team, $coach, $coach_phone, $coach_email, $classified, $coach_coming, $archery, $fencing, $field, $swim, $tableTennis, $teams, $track, $weightlifting, $other];

fputcsv($file, $data) or errOccurred(); //Formats $data to csv and puts that into $file, or returns error
fclose($file) or errOccurred(); //Closes the file, or returns error
success(); 

exit();

//Removes any white spaces from $name and returns the value
function getdata ( $name ) {  
  return trim ( $_POST[ $name ] ) ;
}

//Displays an error alert and then redirects to the form
function errOccurred() {
  echo "<center><font color= 'red' ><br><br><h2>Error Occurred While Registering, Please Try Again...</h2></font><br><div class='loader'></div>";
  header( "refresh:5; url = https://web.njit.edu/~jsp74/download/masterpage/regform.html" );
  exit();
}

//Displays a successfully reigstered and then redirects to the form
function success() {
  echo "<center><font color= 'black' ><br><br><h2>SUCCESSFULLY REGISTERED</h2></font><br><div class='loader'></div>";
  header( "refresh:5; url = https://web.njit.edu/~jsp74/download/masterpage/regform.html" );
  exit();
}


/*
to give permission to write to a file in AFS:
fs setacl ~/public_html/download/masterpage/ http write
*/

?>
 
