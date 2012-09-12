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
        <link rel="stylesheet" media="screen" href="css/base.css">
        <link rel="stylesheet" media="all" href="css/Background_image_animate.css">
        
        <link rel="stylesheet" media="screen and (min-width: 801px) and (max-width: 1280px)" href="css/desktop.css">
        <link rel="stylesheet" media="screen and (min-width: 1280px)" href="css/widescreen.css">
        
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/background_image_animate_3.js"></script>
        <script src="js/expander.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-button.js"></script>

        
</head>
<body>
        <img id="bg_alpha">
        <img id="bg_bravo">
        <img id="bg_charlie" src="img/greenville1.jpg">
        
        <!-- page elements inside here -->
        <div class="container" id="header_container">
        <script>
        $(window).resize(function(e) {
           sizer(); 
        });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
            sizer();
        });
        </script>
            <div class="row">
            
                
                <div class="span12 header_content">
                <a class="span2" href="index.php"><img class="thumbnail header_logo" alt="Griffin Property Solutions" src="img/logo.png"></a>
                    <span class="pull-right header_links_section">
                    <a class="btn btn-primary mls_search" href="contact.php">Contact Us</a>
                    <a class="btn btn-primary mls_search" href="about.php">About Us</a>
                    <a class="btn btn-primary mls_search" href="mls.php">Search MLS</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="body_container">
            
            <div class="row-fluid">
        
                <ul class="span3 nav-tabs nav-stacked v_menu" id="v_menu">
                    <li class="v_menu_item_li"><img class="v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
                    <li class="v_menu_item_li"><img class="v_menu_item" id="office" src="http://placehold.it/100x100" /></li>
                    <li class="v_menu_item_li"><img class="v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
                    <li class="v_menu_item_li v_col2 v_col_top"><img class="v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
                    <li class="v_menu_item_li v_col2"><img class="v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
                    <li class="v_menu_item_li v_col2"><img class="v_menu_item" id="industrial" src="http://placehold.it/100x100" /></li>
                </ul>
                <script>
                $('body').on("click", 'img.v_menu_item', function(e) {
                //$('img.v_menu_item').on("click" function(e) {
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
            
        </div>
        <script>
        $('img.nav_item').click(function(e) {
            content_expansion_replace($(this).attr("id"), ".main_content");
        });
        
        </script>
        <script>
            $('img.nav_item').mouseover(function() {
                hover_menu($(this).attr("id"));
            }).mouseout(function (){
                      //hide_hover_menu($(this).attr("id")); 
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
        
 
