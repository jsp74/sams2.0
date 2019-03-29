<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include( "./../login/functions.php" );
// $file = getdata("regFile");
// echo $file;

$file_result = "";
if($_FILES["regFile"]["error"] > 0){
     $file_result .= "Error Code: " . $_FILES["regFile"]["error"] . "<br>";
}
else{
     print_r($_FILES["regFile"]);
     move_uploaded_file($_FILES["regFile"]["tmp_name"], "/afs/cad.njit.edu/u/d/k/dk375/public_html/sams2.0/masterpage/imports/" . $_FILES["regFile"]["name"]);
}

// $row = 1;
// if (($handle = fopen($file, "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num fields in line $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }
// else{
//      echo "failed to open";
// }

?>