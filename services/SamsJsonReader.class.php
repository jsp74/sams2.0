<?php

require "JsonReader.class.php";
/**
 *  Built on top of JsonReader class php.
 *  This is an application specific implementation
 */
class SamsJsonReader{
    private static $jr;
    private static $headersFile;
    private $filename;
    private $indexPrefix;
    private $headerKey;
    private $indexKey;
    private $arr;
    
    
    function __construct($filename){
        echo __CLASS__." for file:".$filename." created";
        $jr = JsonReader::getInstance();
        var_dump($jr);
        self::$headersFile = "csvHeaders.json";
        $this->filename = $filename;
        $this->indexPrefix = $filename.";indexes;";
        $this->headerKey = $filename.";_headers";
        echo "End constuctor";
        $this->indexKey = $filename.";indexes";
        var_dump(self::$headersFile);
        $this->arr = $jr->getJsonMapforPhp(self::$headersFile);
        echo "End constuctor";
      
    }
    //function getJsonMapforPhp($filename);
    //function fetchFromJsonMap(&$arr,$key);
    function getIndex($name){
        $key = $this->indexPrefix.$name;
        $v = JsonReader::fetchFromJsonMap($this->arr,$key);
        return $v;
    }
    /**
     * @param filename
     * @param Value
     */
    function updateHeaders($value)
    {
        $jr          = self::$jr;
        $filename    = $this->filename;
        $headerKey   = $this->headerKey;
        $indexKey    = $this->indexKey;
        $indexPrefix = $this->indexPrefix;
        print_r($this->arr);
        try{
            
            // When adding, we want to update the variable _last_Modified to current timestamp
            // We have to also prevent abuse of json structure, Maintain It.
            // echo "<br>addingToJsonMap<br>";
            // var_dump($value);
            JsonReader::addToJsonMap($this->arr,$headerKey,$value);
            // echo "addedToJsonMap";
            // After adding to Json Map we need to update indexes.
            $headerArray = split(",",$value);
            // echo "Initial Json: <br> <pre>";
            // var_dump($this->arr);
            // echo "</pre>";
            JsonReader::deleteFromJsonMap($this->arr,$indexKey);
            JsonReader:: addtoJsonMap($this->arr,$indexKey,array());
            // echo "After Delete index: Json: <br> <pre>";
            // var_dump($this->arr);
            // echo "</pre>";        
            $preIndex = $indexPrefix; 
            for( $i = 0; $i < sizeof($headerArray); $i++){
                $key = $headerArray[$i];
                // echo "loop".$i."<br>";
                JsonReader:: addToJsonMap($this->arr,$preIndex.$key,$i);
                // echo "Addinng in Loop Json: <br> <pre>";
                // print_r($this->arr);
                // echo "</pre>";
            }
            self::commit();
        }
        catch( Exception $e) {
            printError( $e );
        }
    //   return $arr;  
    }
    function commit(){
        //We will make this function save json object to file 
        if(file_exists(self::$headersFile)){
            echo "File Exists";
        }
        else{
            throw new Exception("File Not Found ". self::$headersFile);
        }
        var_dump($this->arr);
        file_put_contents(self::$headersFile,json_encode($this->arr));
        

    }
}
?>
