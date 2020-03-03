<?php 
include "errorFunctions.php";
class csvService{
    public $fileName;
    private $mode;
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
        print("<br>Constructer for : file: ".$fileName.", mode: ".$mode."<br>");
        $this->fileName = $fileName;
        echo $this->fileName;
        $this->mode = $mode;
        $file = fopen($this->fileName,'r');
        if($file == NULL && $file == false){
            throw new Exception("Problem occured when opening file");
        }
        fclose($file);
    }
    function writeDataWithHeader($data){
        echo "<br>writing<br>";
        // var_dump( $data);
        $file = fopen($this->fileName,$this->mode);
        var_dump($file);
        if($file == null || $file == false){
            throw new Exception("Problem occured when trying to write");
            return;
        }
        fputcsv($file,$data);
        // fwrite($this->file,$data);
        echo "<br>Done writing <br>";
        fclose($file);
    }
    function writeDataNoHeader($data){
        # TODO
        # Fetch Header -> during constructor? save from constructor?
        # Append Header
        # Write
    }
    function read(){
        $data = file_get_contents($this->fileName);
        //$data is just string dump
        $dataArray = explode("\n",preg_replace("/\r/","",$data));
        return $dataArray;
    }
    function getHeaderIndex($name){
        # TODO
        # have an arrray with name to index header?
        # 
    }
}
?>
<?php
try{
    $fileData = file_get_contents("../databases/data.csv");
    print_r($fileData);

    $valueArray = explode("\r\n",$fileData);
    echo "<br>===========================================================<br>";
    var_dump($valueArray);
    echo "<br>===========================================================<br>";
    $data = new csvService("../databases/data.csv",'w+');
    // $data->write($valueArray);
    print_r( $data->read()  );
    
}
catch(Exception $e){
    printError($e);
}
?>