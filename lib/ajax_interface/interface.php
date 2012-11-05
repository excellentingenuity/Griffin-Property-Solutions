<?php

ini_set('display_errors', 'On');
/*
PHP jquery interface 
Written 2012 by James Johnson of Excellent InGenuity LLC

*/


/*
Include all files with require_once that you want to have access to their functions

*/
require_once '../logger/Log.php';
require_once '../logger/XML_Log.php';
require_once '../content/content.php';

$my_dir = getcwd();
$log_dir = "../..";
$my_log = new Log_XML($log_dir ."/log", "interface");
/*
Call function sent by POST method with any variables sent
*/

$my_function = $_POST['my_function'];
$my_log->Su_Write('0', 'function variable: '.(string)$my_function);
$my_i = 0;
$my_vars;
$my_post;
foreach($_POST as $key => $value) {

$my_log->Su_Write('1', "$key: $value \n");
$my_post[$my_i] = $value;
$my_i++;

}
$my_i = 1;

$count = count($my_post);
while ($my_i < $count) {
	$my_vars[($my_i - 1)] = $my_post[$my_i];
	$my_i++;
}
$my_return = $my_function($my_vars);
$my_log->Su_Write('0',(string)$my_return);
echo $my_return;


function test_log() {
	global $my_log;
	$my_log->Su_Write('0', 'log test');	
}
?>