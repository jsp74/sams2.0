var comment = [];
    var found = false;
    var FN18, FN19, LN18, LN19;//first/last name 2018/2019
    var DOB18,DOB19; //date of birth 
    var TRC18,TRC19,FC18,FC19;// track class field class
    var error = false;
    function checkClassifications()
    { 
      //get data from 2018 csv file
      classifications2018 = 
      <?php 
      $file = fopen("./2018_Jr_Nationals_registrations_only_TF (2).csv", 'r') or die("Unable to open file!");
      $data = array();
      while (($temp = fgetcsv($file)) !== FALSE)
      {
        array_push($data, $temp);
      }
      
      echo json_encode($data); ?>;
      
      //get data from 2019 csv file
      classifications2019 = 
      <?php 
      $file = fopen("./classification_table_2019.csv", 'r') or die("Unable to open file!");
      $data = array();
      while (($temp = fgetcsv($file)) !== FALSE) //for full array
      {
        array_push($data, $temp);
      }
      
      echo json_encode($data); ?>;
      
      
      //find indexes
      

      FN18 = findHeader(classifications2018[0],"firstname","first name");
      FN19 = findHeader(classifications2019[0],"firstname","first name");
      LN18 = findHeader(classifications2018[0],"lastname","last name");
      LN19 = findHeader(classifications2019[0],"lastname","last name");
      DOB18 = findHeader(classifications2018[0],"dob","yob");
      DOB19 = findHeader(classifications2019[0],"dob","yob");
      TRC18 = findHeader(classifications2018[0],"trclass");
      TRC19 = findHeader(classifications2019[0],"track class");
      FC18 = findHeader(classifications2018[0],"fieldclass");
      FC19 = findHeader(classifications2019[0],"fieldclass");
      
      var known = [];
      //check if person is in both
      for(var i = 1; i < classifications2018.length; i++)
      {
        comment[i-1] = "";
        found = false;
        error = false;
        for(var j = 1; j < classifications2019.length; j++)
        {
          var lname18 = classifications2018[i][LN18].split(/[\s,]+/)[0].toLowerCase();
          var lname19 = classifications2019[j][LN19].split(/[\s,]+/)[0].toLowerCase();
          if(lname18.includes(lname19)||lname19.includes(lname18))//last name check
          {
            var fname18 = classifications2018[i][FN18].split(/[\s,]+/)[0].toLowerCase();
            var fname19 = classifications2019[j][FN19].split(/[\s,]+/)[0].toLowerCase();
            if(fname18.includes(fname19)||fname19.includes(fname18))//first name check
            {
              if(known.includes(fname18 + lname18))
              {
                var byear18 = classifications2018[i][DOB18].substring(classifications2018[i][DOB18].length-4, classifications2018[i][DOB18].length);
                var byear19 = classifications2019[j][DOB19];
                if(byear18 == byear19)
                {
                  found = true;
                  break;
                }
              }
              else
              {
                found = true;
                known.push(fname18 + lname18);
                break;
              }
            }
          }
        }
        if(found)
        {
          if(classifications2018[i][TRC18] != classifications2019[j][TRC19])//track check
          {
            comment[i-1] += "TRACK CLASS DOESN'T MATCH";
            error = true;
          }
          if(classifications2018[i][FC18] != classifications2019[j][FC19])//field check
          {
            if(error)
            {
              comment[i-1] += "\n"
            }
            comment[i-1] += "FIELD CLASS DOESN'T MATCH";
            error = true;
          }
        }
        else
        {
          comment[i-1] += "NOT FOUND";
        }
      }
      //console.log(comment);    /// to see all comments
      $.post('classificationInsert.php', { comments: comment }, function(result) { alert(result); });
      
    }
    
    
    function findHeader(arr,str1="adsafewdwg3412ewf",str2="jde0wjr20")//two default garbage paramaters that will probably never be found in a header
      {
        for(var i = 0; i < arr.length; i++)
        {
            var a = arr[i].toLowerCase();
            if(a.includes(str1) || a.includes(str2))//default to something noone would ever put ex: a1ed94JF90QLS
            {
                return i;
            }
        }
      }
    
    