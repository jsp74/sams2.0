<?php
//Session to avoid entering invalid entries without signing in 
// include("./../login/functions.php");
// session_start();
// gatekeeper("./../login/samslogin.html");
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);
$fileName = "log.txt";
if (!file_exists($fileName)) {
	echo "Cannot find file. 111 \n";
} else {
	echo "File Exists \n";
}
$a = "Check";
echo "writing to file:  " . $fileName;
$myfile = file_put_contents($fileName, $a/* . PHP_EOL, FILE_APPEND*/);
//$file = fopen($fileName, "wra") or die("File open issue");
//fwrite($file, $a) or die("write issue");
// fclose($file) or die("closing issue");
if ($myfile == false) {
	die("\nFailed to write\n");
}
echo "Done writing";


if (isset($_POST['data'])) {
	$rows = $_POST['data'];
	$sport = $_POST['sport'];
	echo $sport;
	print_r($rows);
	//echo (is_array(unserialize($rows)));
	// print_r(unserialize($rows, $new));
	// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
	$file = fopen("archeryEvents_copy.csv", 'w+') or errOccurred();
	// column headings
	if ($sport = 'achery') {
		$labels = ["Event #", "Event Name", "Team Scoring", "Event Date"];
	}

	fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error
	//$fileBuffer = fopen("php://memory", "w+");

	foreach ($rows as &$row) {

		echo $row or errOccurred();
		//fputcsv($fileBuffer, $row) or errOccurred();
	}
	// rewind($fileBuffer);
	// fwrite($file, stream_get_contents($fileBuffer));

	// fclose($fileBuffer);
	fclose($file);
}