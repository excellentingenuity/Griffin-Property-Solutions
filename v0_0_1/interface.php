<?php

ini_set('display_errors', 'On');
/*
PHP jquery interface 
Written 2012 by James Johnson of Excellent InGenuity LLC

*/


/*
Include all files with require_once that you want to have access to their functions

*/
require_once 'Log.php';
require_once 'XML_Log.php';
require_once 'content.php';
$my_log = new Log_XML(getcwd()."/log", "interface");
/*
Call function sent by POST method with any variables sent
*/
$my_function = $_POST["function"];
$my_log->Su_Write((string)$my_function);
$my_i = 1;
$my_vars [];
$count = count($_POST[]);
while ($my_i < count) {
	$my_vars[($my_i - 1)] = $_POST[$my_i];
	$my_i++;
}
$my_return = $my_function($my_vars);
$my_log->Su_Write((string)$my_return);
echo $my_return;
?>