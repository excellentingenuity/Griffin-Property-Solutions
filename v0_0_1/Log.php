<?php
/*functions to open, close, and write code log files 
All rights Reserved Created by James Johnson of Custom To Customer.com / WebFace and Digital Builders Divisions 2008 */
class Log_File
{
 public function __construct($curdir, $codename)
   /*Constructor for the log object that recieves parameters $curdir and $codename
    $curdir = the current directory
    $codename = the code that is calling the log object */
  {
  	$fp;
 	$fpath; //$fp = file object, $fpath = full path for the file object
    //this->$fp;
    $codename = $codename . '_php_code.log';
    $this->fpath = $curdir . "/" .$codename;
    //printf($this->fpath);
  }
 public function Open()
// Opens the log file 
  {
    //this->$fpath = "$curdir/$codename";
    //printf($this->fpath . "pre fopen <br/>");
    $tstring = $this->fpath;
    $this->fp = fopen("$tstring",'ab') or exit("Unable to open file!");
    //printf($this->fp . "<br/>");
    //return $fp;
  }
 public function Close()
//closes the log file
  {
    fclose($this->fp);
  }
 public function Write($logstr)
//appends the log file with $logstr, $logstr = the string output from the calling function
  {
    //printf("<br/>" .$logstr . "<br/>");
    $str = date('c') . ": " . $logstr . "\n";
    //printf($str . "<br/>");
    fwrite($this->fp, $str);
  }
 public function Su_Write($logstr)
/* function that opens writes to and closes a log file in one function call
$logstr = the string output from the calling function */
  {
    $this->Open();
    $this->Write($logstr);
    $this->Close();
  }
 public function Name_Overide($curdir, $Nname)
  //Overides the file name for the log file
   {
     $tname = $Nname . '_php_code.log';
     $this->fpath =  "$curdir/$tname";
   }

}

?>