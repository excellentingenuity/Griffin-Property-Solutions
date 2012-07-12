<?php
/*functions to open, close, and write code log files 
All rights Reserved Created by James Johnson of Custom To Customer.com / WebFace and Digital Builders Divisions 2008 */

class Log_XML extends Log_File
{
 public function Open()
// Opens the log file 
  {
    //this->$fpath = "$curdir/$codename";
    //printf($this->fpath . "pre fopen <br/>");
    $tstring = $this->fpath;
    if (file_exists($tstring)){
    	 $this->fp = fopen("$tstring",'ab') or exit("Unable to open file!");
    	//printf($this->fp . "<br/>");
    	//return $fp;
    } else {
    	$this->fp = fopen("$tstring",'ab') or exit("Unable to open file!");
    	$header = "<?xml version=\"1.0\"?>" . "\n";
    	fwrite($this->fp, $header);
    	$header = "<Log xsi:schemaLocation=\"Log.xsd\">" . "\n";
    	fwrite($this->fp, $header);
    	$header = "<!DOCTYPE log \"Log.xsd\">" . "\n";
    	fwrite($this->fp, $header);
    	
    }
  }
 
   public function Write($errid, $logstr)//change for xml
//appends the log file with $logstr, $logstr = the string output from the calling function
  {
  	//printf($this->fpath);
    //printf("<br/>" .$logstr . "<br/>");
    $str = "<Log>" . "\n";
    fwrite($this->fp, $str);
    $str = "<errorid>" . $errid . "</errorid>" . "\n";
    fwrite($this->fp, $str);
	$str = "<date>" . date('c') . "</date>" . "\n";
	fwrite($this->fp, $str);
	$str = "<errormsg>" . $logstr . "</errormsg>" . "\n";
    fwrite($this->fp, $str);
    $str = "</Log>" . "\n";
    fwrite($this->fp, $str);
  } 

 public function Su_Write($errid, $logstr)
/* function that opens writes to and closes a log file in one function call
$logstr = the string output from the calling function */
  {
    $this->Open();
    $this->Write($errid,$logstr);
    $this->Close();
  }
}