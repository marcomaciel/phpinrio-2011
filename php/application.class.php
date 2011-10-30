<?php

/* filename: class.Application.php        *
 * Application class, includes methods to *
 * get set application variables by       *
 * storing serialized values to tempfiles */

class Application
{
 function setVar($varname,$value)
  {
    //$temp_path = 'C:\TEMP\'; // for Windows server
    $temp_path = 'tmp/';      // for Unix server
    $strvalue = serialize($value);
    // generate a storeable representation of
    // the value, with it's type and structure
    $file_pointer = fopen($temp_path . $varname, 'w');
    if(!(fwrite($file_pointer,$strvalue)))
    {
       return false;  //success
    }
       else
    {
       return true;   //not able to write file
    }
  } //end function setVar

 function getVar($varname)
 {
    //$temp_path = 'C:\TEMP\'; // for Windows server
    $temp_path = 'tmp/';      // for Unix server
    // file(path) returns an array, so we implode it
    if(!($strvalue = implode("",file($temp_path . $varname))))
     {
        return false; //could not get file
     }
     else
     {
        $value =  unserialize($strvalue);
        return $value;  //here's the value of the variable
     }
  } //end function getVar
} //end class Application
?>
