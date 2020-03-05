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
        $this->headerString = fgets($file);
        $tempArr = explode(',',$this->headerString);
        foreach( $tempArr as $key => $value) {
            $this->headerArray[$value] = $key;
        } 
        fclose($file);
    }
    function writeDataWithHeader($data){
        // echo "<br>writing<br>";
        // var_dump( $data);
        $file = fopen($this->fileName,$this->mode);
        var_dump($file);
        if($file == null || $file == false){
            throw new Exception("Problem occured when trying to write");
            return;
        }
        fputcsv($file,$data);
        // fwrite($this->file,$data);
        // echo "<br>Done writing <br>";
        fclose($file);
    }

    #PROBLEMS
        # Its writing on the same line. so csv file is only 1 line instead of many
    function writeDataNoHeader($data){
    
        $file = fopen($this->fileName,$this->mode);
        // var_dump($file);
        if($file == null || $file == false){
            throw new Exception("Problem occured when trying to write");
            return;
        }
        ### ADD HEADERS BEFORE WRITING
        ## TODO
        if(is_array($data)){
            array_unshift($data,$this->headerString);
            # Do a loop here to fix it
            // foreach($data as $key => $value){
            //     echo "<br>value $value";
            //     fputcsv($file,$value);
            // }
            $data = implode("\n",$data);
            fwrite($file,$data);
        
        }
        else if(is_string($data)){
            $data = $this->headerString ."\n".$data;
            fwrite($file,$data);
        }
        
        fclose($file);
    }
    function read(){
        $data = file_get_contents($this->fileName);
        //$data is just string dump
        $dataArray = explode("\n",str_replace(["\r","\""],"",$data));
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
    $data->writeDataNoHeader($valueArray);
    print("<br><br>");
    print_r( $data->read() );

}
catch(Exception $e){
    printError($e);
}
?>