<?php
require_once('lib/logger/Log.php');
require_once('lib/logger/XML_Log.php');
$my_dir = getcwd();
$my_log = new Log_XML($my_dir . "/log", "index");
$my_log->Su_Write('0', 'page ini');
?>
<html lang="en">
<head>

<!-- Page designed and coded by James Johnson  2012 under contract for ERF Marketing -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0, user-scalable=no">
<title>Griffin Property Solutions</title>

<link rel="shortcut icon" href="img/logo.png" />

<link rel="stylesheet" media="all" href="css/bootstrap.css">
<link rel="stylesheet" media="all" href="css/bootstrap-responsive.css">
<link rel="stylesheet" media="all" href="css/Background_image_animate.css">
<link rel="stylesheet" media="screen" href="css/base.css">
<link rel="stylesheet" media="screen" href="css/phone.css">
<link rel="stylesheet" media="screen and (min-width: 330px) and (max-width: 590px)" href="css/phone-hz.css"> 
<link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 800px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
<link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--javascript includes -->
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap-tab.js"></script>
  <script src="js/bootstrap-button.js"></script>
  <script src="js/background_image_animate_3.js"></script>
  <script src="js/expander.js"></script>
 
</head>
<body>
<!-- The container for the background-image -->

<img id="bg_alpha">
<img id="bg_bravo">

<!-- page elements inside here -->
<div class="container" id="header_container">
<script>
$(window).resize(function(e) {
   sizer(); 
});
</script>
	<div class="row">
    
    	
    	<div class="span12 header_content">
        <a class="span2" href="index.php"><img class="thumbnail header_logo" alt="Griffin Property Solutions" src="img/logo.png"></a>
        	<span class="pull-right header_links_section">
            <a class="btn btn-primary mls_search" href="contact.php">Contact Us</a>
            <a class="btn btn-primary mls_search" href="about.php">About Us</a>
            <button class="btn btn-primary mls_search">Search MLS</button>
            </span>
        </div>
    </div>
</div>
<div class="container-fluid" id="body_container">
 	
	<div class="row-fluid">

		<ul class="span3 nav-tabs nav-stacked v_menu" id="v_corp">
        	<li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
            <li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
            <li class="v_menu_item_li"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
            <li class="v_menu_item_li v_col2 v_col_top"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
            <li class="v_menu_item_li v_col2"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
            <li class="v_menu_item_li v_col2"><img class="thumbnail v_menu_item" id="industrial" src="http://dummyimage.com/100x100" /></li>
        </ul>
		<script>
		$('img.v_menu_item').click(function(e) {
		content_expansion_replace($(this).attr("id"), ".main_content");
		});
		</script>
        <div class="span7 offset2 main_content">
        
		</div>
        <div class="fluid_spacer"></div>
		
    </div>
    
	</div>
</div>
<div class="container" id="nav_container">

	<div class="row" id="nav_row">
    		
        	<img class="span3 thumbnail nav_item nav_item_first" id="nav_corp" src="http://placehold.it/350x175" />
          
        	<img class="span3 thumbnail nav_item" id="nav_residential" src="http://placehold.it/350x175" />
        
        	<img class="span3  thumbnail nav_item nav_item_last" id="nav_brockerage" src="http://placehold.it/350x175" />
        

        	
    </div>
</div>
<script>
$('img.nav_item').click(function(e) {
	content_expansion_replace($(this).attr("id"), ".main_content");
});

</script>

<div class="container" id="footer_container">
	<footer class="row">
    	<div class="footer">
        	<div class="copyright">
            	Copyright 2012 Griffin Property Solutions - <a id="copyright" href="http://www.erfmarketing.com">ERF</a>
            </div>
        </div>
    </footer>
</div>








</div>
</body>
</html>