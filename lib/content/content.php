<?php
	require_once '../logger/Log.php';
	require_once '../logger/XML_Log.php';
	
	$content_my_dir = getcwd();
	$content_log_dir = "../..";
	$content_log = new Log_XML($content_log_dir ."/log", "content");
	$my_tpl_dir = "../../tpl/";
	$content_fp;
 	$content_fpath; //$fp = file object, $fpath = full path for the file object
    //this->$fp;
	
	function Load_content ($content_selector) {
		/*
		Written 2012 by James Johnson of Excellent InGenuity LLC
		 Load a.tpl file based on the path set and the content_selector as file name
		
		*/
		//return "You clicked " . $content_selector[0];	
		global $content_log;
		global $content_fpath;
		global $content_fp;
		global $my_tpl_dir;
		$my_content = "";
			
		$content_log->Su_Write('0', $content_selector[0]);
		$content_fpath = $my_tpl_dir . $content_selector[0] . ".tpl";
                $content_log->Su_Write('0', $content_fpath);
		if (Open_content()){
		$my_content = fread($content_fp, filesize($content_fpath));
		return $my_content;
		}else {
			$content_log->Su_Write('2', "unable to do file open and read");
		}
	}
	function Open_content (){
	global $content_log;
	global $content_fpath;
	global $content_fp;	
	$my_bool = true;	
	$tstring = $content_fpath;
	if (file_exists($content_fpath)){
    	$content_fp = fopen("$tstring",'r') or exit("Unable to open file!");
		$my_bool = true;
		} else {
			$content_log->Su_Write('2', "Unable to open file at: $content_fpath");
			$my_bool = false;
		}
	return $my_bool;
	}
?>
