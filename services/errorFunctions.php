<?php
/**
 * 
 *  This is a Error Functions File
 *  ONLY Put Error Functions in this FILE
 * 
 **/


/**
 * @param resource can be anything, But Exception is prefered
 * @param additionalInfo (Optional) Place any additional information you want to add,
 *                        in this Variable
 */
function printError($resource,$additionalInfo = null){
    if(!isset($resource) || $resource == NULL || $resource == ""){
        printError(new Exception("Invalid Resource Sent to Function `".__FUNCTION__."`"));
        return;
    }
    if(get_class($resource) == 'Exception'){
        echo '<br>
        <h3 style = "color: red" >'."Error in Line: ".$resource->getLine()." in File: "
                                                     .$resource->getFile().'</h3>
        <h3 style = "color: red" >'."Message : "     .$resource->getMessage().'</h3>
        <h3 style = "color: red;" >'."Stack Trace : ".$resource->getTraceAsString().'</h3>
        ';
    }
    else{
        echo '<br>
        <h5 style = "color: red" >'.$resource.'</h5>
        ';
    }
    if($additionalInfo != null && sizeof($additionalInfo) > 0){
        echo '<br>
        <h5 style = "color: red" >'."Additional Info: ".$additionalInfo.'</h5>
        '; 
    }
    echo "<br>";
    }

?>