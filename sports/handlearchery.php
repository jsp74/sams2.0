<?php
// Session to avoid entering invalid entries without signing in 
// include( "./../login/functions.php" );
// session_start();
// gatekeeper("./../login/samslogin.html");

if(isset($_POST['data'])){
	$rows = json_decode($_POST['data']);
	$sport = $_POST['sport'];
	
	// echo $sport;
	// print_r($rows);
	// echo '<script>console.log("Inside HandleArchery")</script>';
	
	// if the file doesnt exists, creates it. If it exists, truncates the data and put the pointer at the beginning of the file
	$file = fopen("../databases/archeryEvents.csv", 'w+') or errOccurred();
	// column headings
	if($sport = 'archery'){
		$labels = ["Event #","Event Name","Team Scoring","Event Date"];
	}
	fputcsv($file, $labels) or errOccurred(); //Formats $labels to csv and puts that into $file, or returns error

	foreach($rows as $row){
		echo $row or errOccurred();
		fputcsv($file, $row) or errOccurred();
	}
	fclose($file);
}
?>