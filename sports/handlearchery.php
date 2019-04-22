<?php
// Session to avoid entering invalid entries without signing in 
// include( "./../login/functions.php" );
// session_start();
// gatekeeper("./../login/samslogin.html");

if(isset($_POST['data'])){
	$rows = $_POST['data'];
	$sport = $_POST['sport'];
	echo $sport;
	print_r($rows);
	// echo (is_array(unserialize($rows)));
	// print_r(unserialize($rows, $new));
	// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
	$file = fopen("archeryEvents_copy.csv", 'w+') or errOccurred();
	// column headings
	if($sport = 'achery'){
		$labels = ["Event #","Event Name","Team Scoring","Event Date"];
	}
	fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error
	// $fileBuffer = fopen("php://memory", "w+");

	foreach($rows as $row){
		echo $row or errOccurred();
		// fputcsv($fileBuffer, $row) or errOccurred();
	}
	// rewind($fileBuffer);
	// fwrite($file, stream_get_contents($fileBuffer));

	// fclose($fileBuffer);
	fclose($file);
}
?>