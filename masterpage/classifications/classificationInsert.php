<?php

    $comments = array();
    $found = false;
    $error = false;
    $FN18 = $FN19 = $LN18 = $LN19 = '';//first/last name 2018/2019
    $DOB18 = $DOB19 = ''; //date of birth 
    $TRC18 = $TRC19 = $FC18 = $FC19 = '';// track class field class
      //get data from 2018 csv file
      $classifications2018 = array(); 
      $file = fopen("./2018_Jr_Nationals_registrations_only_TF (2).csv", 'r') or die("Unable to open file!");
      while (($temp = fgetcsv($file)) !== FALSE)
      {
        array_push($classifications2018, $temp);
      }
      
      //get data from 2019 csv file
      $classifications2019 = array();
      $file = fopen("./classification_table_2019.csv", 'r') or die("Unable to open file!");
      while (($temp = fgetcsv($file)) !== FALSE) //for full array
      {
        array_push($classifications2019, $temp);
      }
      

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
      //find indexes
      $FN18 = findHeader($classifications2018[0],"firstname","first name");
      $FN19 = findHeader($classifications2019[0],"firstname","first name");
      $LN18 = findHeader($classifications2018[0],"lastname","last name");
      $LN19 = findHeader($classifications2019[0],"lastname","last name");
      $DOB18 = findHeader($classifications2018[0],"dob","yob");
      $DOB19 = findHeader($classifications2019[0],"dob","yob");
      $TRC18 = findHeader($classifications2018[0],"trclass");
      $TRC19 = findHeader($classifications2019[0],"track class");
      $FC18 = findHeader($classifications2018[0],"fieldclass");
      $FC19 = findHeader($classifications2019[0],"fieldclass");
      
      $known = array();
      //check if person is in both
      for($i = 1; $i < count($classifications2018); $i++)
      {
        $comments[$i-1] = "";
        $found = false;
        $error = false;
        
        for($j = 1; $j < count($classifications2019); $j++)
        {
          $lname18 = strtolower(preg_split("/[\s,]+/",$classifications2018[$i][$LN18])[0]);
          $lname19 = strtolower(preg_split("/[\s,]+/",$classifications2019[$j][$LN19])[0]);
          //classifications2019[j][LN19].split(/[\s,]+/)[0].toLowerCase();
          if(strpos($lname18, $lname19) !== false || strpos($lname19, $lname18)!== false)//last name check
          {
            $fname18 = strtolower(preg_split("/[\s,]+/",$classifications2018[$i][$FN18])[0]);
            $fname19 = strtolower(preg_split("/[\s,]+/",$classifications2019[$j][$FN19])[0]);
            if(strpos($fname18, $fname19) !== false || strpos($fname19, $fname18)!== false)//first name check
            {
              if (in_array($fname18.$lname18, $known))
              {
                $byear18 = substr($classifications2018[$i][$DOB18], -1, 4);
                //$classifications2018[$i][$DOB18].substring(classifications2018[i][DOB18].length-4, classifications2018[i][DOB18].length);
                
                $byear19 = $classifications2019[$j][$DOB19];
                if($byear18 == $byear19)
                {
                  $found = true;
                  break;
                }
              }
              else
              {
                $found = true;
                array_push($known, $fname18.$lname18);
                break;
              }
            }
          }
        }
        if($found)
        {
          if($classifications2018[$i][$TRC18] != $classifications2019[$j][$TRC19])//track check
          {
            $comments[$i-1] = $comments[$i-1]."TRACK CLASS DOESN'T MATCH";
            $error = true;
          }
          if($classifications2018[$i][$FC18] != $classifications2019[$j][$FC19])//field check
          {
            if($error)
            {
              $comments[$i-1] = $comments[$i-1]."\n";
            }
            $comments[$i-1] = $comments[$i-1]."FIELD CLASS DOESN'T MATCH";
            $error = true;
          }
        }
        else
        {
          $comments[$i-1] = $comments[$i-1]."NOT FOUND";
        }
      }
      
    function findHeader($arr,$str1="adsafewdwg3412ewf",$str2="jde0wjr20")//two default garbage paramaters that will probably never be found in a header
      {
        for($i = 0; $i < count($arr); $i++)
        {
            $a = strtolower($arr[$i]);
            if(strpos($a, $str1) !== false || strpos($a, $str2)!== false)//default to something noone would ever put ex: a1ed94JF90QLS
            {
                return $i;
            }
        }
      }


/////////////////////////////////////////////////////////////////original classification insert . php//////////////////////////////////////////////////
$allathletes = array();  //a 2d array for all athletes
$athleteCount = 0;
$file = fopen("./2018_Jr_Nationals_registrations_only_TF (2).csv", 'r') or die("Unable to open file!");
$headers = fgetcsv($file);


//while loop will hold all data from original csv file with comments added in, should i put into new file or write in to original file
while (($temp = fgetcsv($file)) !== FALSE)//loop through all athletes
{
  $athleteInfo = array();
  for($i = 0; $i < count($headers); $i++)
  {
    if($i == 1)
    {
      array_push($athleteInfo,$comments[$athleteCount]);//if file doesnt have comments column, keep this for loop
    }
    array_push($athleteInfo,$temp[$i]);// if file does have comments column, wrap this statement in else statement
  }
  array_push($allathletes,$athleteInfo);
  $athleteCount++;
}

fclose($file);






////////////////////////////////////////////////////////file including all athletes and comments///////////////////////////////////////////////
$file = fopen('./2018_Jr_Nationals_registrations_with_errors.csv', 'w');
 
$headersWithComments = array();
for($i = 0; $i < count($headers); $i++)
{
  if($i==1 && $headers[1] != "comments")
  {
    array_push($headersWithComments,"comments");
  }
  array_push($headersWithComments, $headers[$i]);
}

fputcsv($file, $headersWithComments);

foreach ($allathletes as $row)
{
  fputcsv($file, $row);
}

fclose($file);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////file including only athletes with errors///////////////////////////////////////////////
$file = fopen('./2018_Jr_Nationals_registrations_errors_only.csv', 'w');
 
fputcsv($file, $headersWithComments);

foreach ($allathletes as $row)
{
  if($row[1] != "")
  {
    fputcsv($file, $row);
  }
}

fclose($file);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
