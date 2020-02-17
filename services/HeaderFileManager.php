<?php
# Execute this file to update csvHeaders.json
# Automatically updates json based on all csv files in ../Databases/

require "SamsJsonReader.class.php";
require "errorFunctions.php";
try{
$path = "../databases/";

if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        # Want to add more regexes?
        # https://www.phpliveregex.com/
        if(preg_match('/.*\.csv/', $file)){
            echo "File name: ".$path.$file . "<BR>";
            $f = fopen($path.$file, "r");
            $header = fgets($f);
            printError($header);
            $newFile = new SamsJsonReader($file);
            $newFile->updateHeaders($header);
        }
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