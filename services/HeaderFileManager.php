<?php
$path = "../databases/";

if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        // do something with the file
        echo $file;
    }
    closedir($handle);
}
?>