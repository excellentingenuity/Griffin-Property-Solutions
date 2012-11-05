<?php
require_once('lib/logger/Log.php');
require_once('lib/logger/XML_Log.php');
$my_dir = getcwd();
$my_log = new Log_XML($my_dir . "/log", "about");
$my_log->Su_Write('0', 'page ini');
?>
<html lang="en">
    <head>
    
        <!-- Page designed and coded by James Johnson  2012 under contract for ERF Marketing -->
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0, user-scalable=no">
        <title>About Us |Griffin Property Solutions</title>
        
        <link rel="shortcut icon" href="img/logo.png" />
        
        
         <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/incudes.js"></script>
        <script type="text/javascript">//detect screen size determine by screen size which page and headers to load via the php ajax interface
            //var myheight = $(window).height();
            var mywidth = $(window).width();
            screen_loads(mywidth, "about"); //TODO: add ability to select the page 
                
        </script>
    </head>
    <body>
        
    </body>
</html>