
<?php 
require "SamsJsonReader.class.php";
require "errorFunctions.php";
try{
    printError('1');
    $data = new SamsJsonReader("data");
    printError('2');
    $datacsv = new SamsJsonReader("data.csv");
    printError('3');
    echo $data->getIndex("lname");
    printError('4');
    echo $data->getIndex("something1");
    // echo $data->getIndex("lna2me");
    printError('5');
    echo $datacsv -> getIndex("something86");
    printError('6');
    
    echo $datacsv -> getIndex("some2thing86");
    printError('7');
    
}
catch(Exception $e){
    printError($e);
}
finally{
    echo "Last Code. Program Terminated";
}

    /**
 * @param resource can be anything, But Exception is prefered
 * @param additionalInfo (Optional) Place any additional information you want to add,
 *                        in this Variable
 */
// function printError($resource,$additionalInfo = null){
//     if(!isset($resource) || $resource == NULL || $resource == ""){
//         printError(new Exception("Invalid Resource Sent to Function `".__FUNCTION__."`"));
//         return;
//     }
//     if(get_class($resource) == 'Exception'){
//         echo '<br>
//         <h3 style = "color: red" >'."Error in Line: ".$resource->getLine()." in File: "
//                                                      .$resource->getFile().'</h3>
//         <h3 style = "color: red" >'."Message : "     .$resource->getMessage().'</h3>
//         <h3 style = "color: red;" >'."Stack Trace : ".$resource->getTraceAsString().'</h3>
//         ';
//     }
//     else{
//         echo '<br>
//         <h5 style = "color: red" >'.$resource.'</h5>
//         ';
//     }
//     if($additionalInfo != null && sizeof($additionalInfo) > 0){
//         echo '<br>
//         <h5 style = "color: red" >'."Additional Info: ".$additionalInfo.'</h5>
//         '; 
//     }
//     echo "<br>";
// }





?>