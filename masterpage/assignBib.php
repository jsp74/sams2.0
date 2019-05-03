<?php
/*

assignBib.php

Purpose:
- Assign Bib to athletes in data.csv based on sports selected in master preferences page
- Gets the preference info from bibData.csv
- Currently Works for Track and Field

*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("./../login/functions.php");

$bib_file = fopen("bibData.csv", 'a+');
$bibHeader = fgetcsv($bib_file); //Gets the header line
$bibData = fgetcsv($bib_file); //gets the line with all the information

$bib = $bibData[0]; //Gets the Next bib number
// $archery = $bibData[1];
// $fencing = $bibData[2];
$field = $bibData[3];
// $swim = $bibData[4];
// $tableTennis = $bibData[5];
// $teams = $bibData[6];
$track = $bibData[7];
// $weightlifing = $bibData[8];
// $other = $bibDatap[9];
fclose($bib_file);

$data_file = fopen("data.csv", 'a+');
$temp = fopen("tempData9876.csv", 'a+');

$data = fgetcsv($data_file); //gets the title line
fputcsv($temp, $data); //puts the title line in the temp file
$data = fgetcsv($data_file);
while(!feof($data_file) && $data != NULL && $data != false ) {
	if((!empty($data[17]) && $track == 1) || (!empty($data[34]) && $field == 1 ) ) {
		array_push($data, $bib); //places the bib number in the file
		$bib++;
	}
	else {
		array_push($data, "");
	}
	fputcsv($temp, $data); //Adds the data with bib or empty field
	$data = fgetcsv($data_file); //Gets the next line
}

fclose("data.csv");
fclose("tempData9876.csv");

copy("tempData9876.csv", "data.csv"); //Copies the content of temp file into data.csv
unlink("tempData9876.csv"); //Deletes the temp file


//Changes the bib in bibData.csv to the next starting bib
$bib_file = fopen("bibData.csv", 'w+');
$bibData[0] = $bib;
fputcsv($bib_file, $bibHeader);
fputcsv($bib_file, $bibData);
fclose($bib_file);

?>