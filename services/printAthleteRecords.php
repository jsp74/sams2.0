<?php
include("../login/functions.php");
session_start();
#Gatekeeper will authenticate the user. 
# if User invalid -> redirect to loginPage
# if User valid   -> stay on this page
gatekeeper("../login/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <?php 
                $file = fopen("../masterpage/data.csv",'r') or die("unable to open file");
                $data = fgetcsv($file);
                for($i = 0; $i < count($data); $i++){
                    $out = '
                    <th scope = "col"> <p class="text-center">'.$data[$i].'</p></th>
                    ';
                    echo $out;
                }
                while(($data = fgetcsv($file)) !== false){
                    for($i = 0; $i < count($data); $i++){
                        $out = '
                        <td scope = "col"> <p class="text-center">'.$data[$i].'</p></td>
                        ';
                        echo $out;
                    }
                }
                fclose($file);
            ?>
        </tr>
    </table>
</body>
</html>