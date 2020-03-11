<?php 
include "errorFunctions.php";
class csvService{
    public $fileName;
    private $mode;
    private $headerString;
    private $headerArray = array();
    # private headers = ...
    # private HeadersArray = ...
    
    // private $file;
    /**
     * Constructor
     * @param filename file to open
     * @param mode mode that you want to open the file with. r, w, w+, a+, a, 
     * @
     */
    function csvService($fileName,$mode = 'r'){
        // print("<br>Constructer for : file: ".$fileName.", mode: ".$mode."<br>");
        $this->fileName = $fileName;
        // echo $this->fileName;
        $this->mode = $mode;
        $file = fopen($this->fileName,'r');
        if($file == NULL && $file == false){
            throw new Exception("Problem occured when opening file");
        }

        //strip headerstring of newLine characters before saving
        $this->headerString = str_replace("\n","",fgets($file));
        $tempArr = explode(',',$this->headerString);

        //Makes HeaderArray with Header Name to index relationship
        foreach( $tempArr as $key => $value) {
            $this->headerArray[strtolower($value)] = $key;
        } 
        fclose($file);
    }
    /**
     * @param data is an array of string lines
     *             **OR** a single string with all data
     *             string line is a csv line with delimiter ','
     * **First Line of input is a header**
     */
    function writeDataWithHeader($data){
       
        $file = fopen($this->fileName,$this->mode);
        // var_dump($file);
        if($file == null || $file == false){
            throw new Exception("Problem occured when trying to write");
            return;
        }    
        if(is_array($data)){
            $data = implode("\n",$data);
        }
        fwrite($file,$data);
        
        fclose($file);
    }

    /**
     * @param data is an array of string lines
     *             **OR** a single string with all data
     *             string line is a csv line with delimiter ','
     * **Input does not contain header**
     */
    function writeDataNoHeader($data){
    
        $file = fopen($this->fileName,$this->mode);
        // var_dump($file);
        if($file == null || $file == false){
            throw new Exception("Problem occured when trying to write");
            return;
        }    
        if(is_array($data)){
            array_unshift($data,$this->headerString);
            $data = implode("\n",$data);
            fwrite($file,$data);
        
        }
        else if(is_string($data)){
            $data = $this->headerString ."\n".$data;
            fwrite($file,$data);
        }
        
        fclose($file);
    }

    /**
     * Reads file and returns array of string lines
     */
    function read(){
        $data = file_get_contents($this->fileName);
        //$data is just string dump
        $dataArray = explode("\n",str_replace(["\r","\""],"",$data));
        return $dataArray;
    }
    function getHeaderIndex($name){
        # TODO
        # have an arrray with name to index header?
        
        $index = $this->headerArray[strtolower($name)];
        if(isset($index)){
            return $index;
        }
        else{
            return -1;
        }
    }

    /**
     * Append a new line to csv file 
     * @param string a csv string delimited by ','
     *  
     */
    function addLine($string){
        #TODO
        # Append new line to file
        // printError(1);
        $line = explode(",",$string);
        // printError(2);
        // echo count($line),"<br>";
        // echo count($this->headerArray);
        if(count($line) != count($this->headerArray)){
            // printError(3);
            throw new Exception("Parameters Given Does Not Match Parameters Needed");
        }
        // printError(4);
        $file = fopen($this->fileName,'a');
        // printError(5);
        // echo "putting in file";
        fputcsv($file,$line);
        fclose($file);
    }
}
?>
<?php
try{
    $fileData = file_get_contents("../databases/DummyDb.csv");
    print_r($fileData);

    $valueArray = explode("\n",$fileData);
    echo "<br>===========================================================<br>";
    // var_dump($valueArray);
    echo "<br>========================INITIAL DATA ARRAY===================================<br>";
    $data = new csvService("../databases/DummyDb.csv",'w+');
    // $data->write($valueArray);
    print_r( $data->read()  );
    echo "<br>========================POST DATA ARRAY=================<br>";
    // array_splice($valueArray,0,1);
    $data->writeDataWithHeader($valueArray);
    // $data->writeDataNoHeader($valueArray);
    // $data->addLine("1113,Support_Staff,Yuli Drake,Teagan Lynch,783 Old Parkway,Eius sit quasi beata,Sapiente tempora ame,WV,52485,USA,foqonira@mailinator.net,4,9/24/1985,94,male,large,ot,540,543,32,375,Griffith Stuart,Gannon Riggs,86,luxypute@mailinator.net,0,1,1,,,1,1,1,1,,1");
    // $data->addLine("1116,Athlete,RoseTillman,LuciusStone,25OldStreet,Etsedeumvoluptate,Duisitaqueloremdo,MT,15651,USA,besyji@mailinator.net,70,12/9/1982,38,female,cMedium,amb,766,358,360,499,WinifredFrench,ShaineHoffman,53,fequq@mailinator.net,No,No,0,1,1,1,1,1,0,0,0");

    print("<br><br>");
    print_r( $data->read() );

}
catch(Exception $e){
    printError($e);
}
?>