<?php
require "SamsJsonReader.class.php";
require "errorFunctions.php";
try{
$path = "../databases/";

if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        // do something with the file
        echo "File name: ".$path.$file . "<BR>";
        $f = fopen($path.$file, "r");
        $header = fgets($f);
        printError($header);
        $newFile = new SamsJsonReader($file);
        $newFile->updateHeaders($header);
    }
    closedir($handle);
}
}
catch(Exception $e){
    printError($e);
}
finally{

}
?>