<?php
/**
 *  This is a General JsonReader
 *  It has the ability to:
 *      Read .json ext files and return json Object
 *      Performs Basic -> get/add-set/delete functions On Json Object
 *
 *  To get variable of this class use  -> JsonReader::getInstance();
 *  To Call a method from this class   -> $jr = ^^^^^^^^^^^^^^^; $jr -> ClassFunction();
 *
 */
class JsonReader
{
    /**
     * Json Object Example for Reference
     *   {
     *       "data": {
     *           "_headers": "lname,fname,something1,something2,something3",
     *           "_last_Modified": "TIMESTAMP",
     *           "indexes": {
     *               "lname": 1,
     *               "fname": 2,
     *               "something1": 3,
     *               "something2": 4,
     *               "something3": 5
     *           },
     *           "_last_calculated": "TIMESTAMP"
     *       }
     *   }
     */
    /**
     * @param _instance null if class never initilized. Class instance if was before initilized
     *                  Purpose: To only have one instance of this object no matter how many places it is called.
     */
    private static $_instance;
    //verbose
    private static $v = false;
    public function getInstance()
    {
        if (self::$_instance == null)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * This Constructor is PRIVATE. To get class instance call getInstance method
     */
    private function __construct()
    {
        if (self::$v)
        {
            print "<br>" . __CLASS__ . " Constructed<br>";
        };
    }

    /**
     * This function takes any object and converts to Array
     */
    function objectToArray($d)
    {
        global $v;
        if ($v)
        {
            echo "<br><b>START Inside ObjectToArray</b><br>";
        }

        if (is_object($d))
        {
            if ($v)
            {
                echo "<br><b>Is object</b><br>";
            }
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }

        if (is_array($d))
        {
            if ($v)
            {
                echo "<br><b>IS array</b><br>";
            }
            if ($v)
            {
                echo "<br><b>";
                var_dump($d);
                echo "</b><br>";
            }
            /*
             * Return array converted to object
             * Using __FUNCTION__ (Magic constant)
             * for recursive call
            */
            return array_map($this->__FUNCTION__, $d);
        }
        else
        {
            if ($v)
            {
                echo "<br><b>else</b><br>";
            }
            // Return array
            return $d;
        }
    }
    /**
     * This reads any file and attempts to convert it to PHP Array which is like JSON Object
     *
     * @param filename  [Json File Name]
     * @param v  [Verbose:  outputs all debugger information]
     *
     * @return arr An Map Array Object obtained from Json file input
     */
    function getJsonMapforPhp($filename)
    {
        global $v;
        $eson = file_get_contents($filename);
        if ($v)
        {
            echo "<br><b>START VARDUMP</b><br>";
        }
        if ($v)
        {
            var_dump($eson);
        }
        if ($v)
        {
            echo "<br><b>START DECODE</b><br>";
        }
        $json = json_decode($eson);
        if ($v)
        {
            echo "<br><b>DONE DECODE, START Object2Array</b><br>";
        }
        $arr = $this->objectToArray($json);
        if ($v)
        {
            echo "<br><b>End, O2A, VAR DUMP O2A START</b><br>";
        }
        if ($v)
        {
            var_dump($arr);
        }
        if ($v)
        {
            echo "<br><b>VAR DUMP O2A DONE</b><br>";
        }
        // echo "<br><b>VAR DUMP O2A=> 'DATA' START</b><br>";
        if ($v)
        {
            var_dump($arr);
        }
        // echo "<br><b>VAR DUMP O2A=> 'DATA' End</b><br>";
        

        return $arr;
    }

    /**
     * Function: add to $arr or set to $arr
     * @param arr Object that is being added to or being manipulated
     *
     * @param key prefix + keyName sperated by dilimiter ';'
     *        @param prefix the path of the object you want to put `keyName` under
     *            Ex using the Json Reference object above
     *               if you want to add ['phoneNumber'] => ['2020020202'] under `indexes`
     *               prefix = `data;indexes;' and key = `phoneNumber`
     *              * Notice Prefix end has ;
     *            Ex adding to the main object
     *              prefix =  "" key = "phoneNumber"
     *
     * @param value ['key'] => ['value']
     */
    function addToJsonMap(&$arr, $key, $value)
    {
 
        global $v;
        $pathArray = explode(";", $key);
        $size = sizeof($pathArray); 
        if ($v)
        {
            echo "<br>";
            print ("Size of Key '" . $key . "' is " . $size . "\n");
            var_dump($pathArray);
        }
        if (sizeof($pathArray) == 1)
        {
            // No need to traverse
            settype($arr, "array");
            $arr[$key] = $value;
            return;
        }
        else
        {
            if ($v)
            {
                print ("<br>MultiLine Key<br>");
            }

            $subKey = $pathArray[0];
            $val = $arr[$subKey];
            // echo "<br>Full Path";
            // var_dump(implode("->" , $pathArray));
            // echo "<br>";
            // echo "<br>SubKey";
            // var_dump($subKey);
            // echo "<br>";
            // echo "<br>Val";
            // var_dump($val);
            // echo "<br>";
            // echo "<br>Arr";
            // var_dump($arr);
            // echo "<br>";
            //Prevent people from adding to a Key Value pair into a non array type
            // Example from Json Reference Object in Comments above
            // $key = "data;_headers;newKey"
            // This is not allowed because the Type of _header is a string,
            // and you cannot have multiple key value objects in non array types such as int, string
            

            /*
                if(isset($val)){
                    // Check if whatever the value is: is it a multivalue object or just a single primitive type.                 
                    if($v){echo"<br>Dumping count<br>";var_dump(count((array)$val ));
                                var_dump(count((array)$val ) == 1);}
                    if(count((array)$val ) == 1){
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        throw new Exception("Cannot Add Multiple Objects To Non-Array Type ".get_class ($val).var_dump($val));
                    }
                }
                **/
            array_splice($pathArray, 0, 1);
            $newKey = implode(";", $pathArray);
            self::addToJsonMap($arr[$subKey], $newKey, $value);

        }
    }

    /**
     * Function: delete an Key -> Value from @param arr
     * @param arr The Object we are deleting from.
     * @param key prefix + keyName sperated by dilimiter ';'
     *        @param prefix the path of the object you want to put `keyName` under
     *            Ex using the Json Reference object above
     *               if you want to add ['phoneNumber'] => ['2020020202'] under `indexes`
     *               prefix = `data;indexes;' and key = `phoneNumber`
     *              * Notice Prefix end has ;
     *            Ex adding to the main object
     *              prefix =  "" key = "phoneNumber"
     *
     */
    function deleteFromJsonMap(&$arr, $key)
    {
        $pathArray = explode(";", $key);
        $size = sizeof($pathArray);
        print ("Size of Key to delete is: '" . $key . "' is " . $size . "\n");
        var_dump($pathArray);
        if (sizeof($pathArray) == 1)
        {
            // No need to traverse
            settype($arr, "array");

            if (!isset($arr[$key]))
            {
                echo "4";
                return new Exception("Trying To Delete Something That Does Not Exist");
                echo "3";
            }
            echo "2";
            //Not sure if this is working
            unset($arr[$key]);
            var_dump($arr);
            return;
        }
        else
        {
            print ("<br>MultiLine Key<br>");
            $subKey = $pathArray[0];
            $val = $arr[$subKey];
            //if val not set, it means the FULL path does not exist
            if (!isset($val))
            {
                throw new Exception("Invalid Path to delete");
            }
            array_splice($pathArray, 0, 1);
            $newKey = implode(";", $pathArray);
            self::deleteFromJsonMap($arr[$subKey], $newKey);
        }
    }

    /**
     * Function: retrive a Value based on Key from @param arr
     * @param arr Object that is being added to or being manipulated
     *
     * @param key prefix + keyName sperated by dilimiter ';'
     *        @param prefix the path of the object you want to put `keyName` under
     *            Ex using the Json Reference object above
     *               if you want to add ['phoneNumber'] => ['2020020202'] under `indexes`
     *               prefix = `data;indexes;' and key = `phoneNumber`
     *              * Notice Prefix end has ;
     *            Ex adding to the main object
     *              prefix =  "" key = "phoneNumber"
     */
    function fetchFromJsonMap($arr, $key)
    {
        $pathArray = explode(";", $key);
        $size = sizeof($pathArray);
        if (sizeof($pathArray) == 1)
        {
            // No need to traverse
            if (!isset($arr[$key]))
            {
                throw new Exception("Trying To Fetch Something That Does Not Exist");
            }
            return $arr[$key];
        }
        else
        {
            $subKey = $pathArray[0];
            $val = $arr[$subKey];
            //if val not set, it means the FULL path does not exist
            if (!isset($val))
            {
                throw new Exception("Invalid Path to Fetch Key");
            }
            //remove index 0
            array_splice($pathArray, 0, 1);
            $newKey = implode(";", $pathArray);
            settype($val, 'array');
            return JsonReader::fetchFromJsonMap($val, $newKey);
        }
    }
    function testFunction(){
        echo "hi";
        return "hi";
    }
}

?>
