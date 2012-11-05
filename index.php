<?php
require_once('lib/logger/Log.php');
require_once('lib/logger/XML_Log.php');
$my_dir = getcwd();
$my_log = new Log_XML($my_dir . "/log", "index");
$my_log->Su_Write('0', 'page ini');
?>
<!DOCTYPE html>
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
        
        <!--[if lt IE 10]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
       <!-- [if lt IE 10]<script src="http://ie.microsoft.com/testdrive/HTML5/CompatInspector/inspector.js"></script>![endif] -->
        <script src="•http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.0.6-development-only.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
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
        <div class="container-fluid" id="header-container">
            <div class="row-fluid header">
                
                <div class="span12 header_content">
                	<div class="row-fluid">
		                <a class="header_logo-a span2" href="http://www.griffinpropertysolutions.com"><img class="header_logo" alt="Griffin Property Solutions" src="img/logo.png"></a>
		                <div class="header-text span6">
		                	
		                	<b><i>Real Estate Brockerage and Consulting</i></b>
		                </div>
						
		              <div class="span4 header_links_section pull-right">
		                    <a class="btn btn-primary header-btn" id="join">Join Our Team</a>
		                    <a class="btn btn-primary header-btn" id="about">About GPS</a>
		                    <a class="btn btn-primary header-btn" id="contact">Contact GPS</a>
		                    <a class="btn btn-primary mls-btn hidden" id="mls" href="mls.php">Search MLS</a>
		                    <div class="pull-right header-phone">
		                    	<b>(877) 477.1407</b>
		                    	
		                    </div>
		                    </div>
		                    
		            </div>
                </div>
                    <script type="text/javascript">
                        $(".header-btn").click(function(e) {
                            content_expansion_replace($(this).attr("id"), ".main-content");
                            
                        });
                    </script>
                    
       
            </div>
        </div>
        <div class="container-fluid" id="body-container">
            <div class="row-fluid">
                
                <div class="span11 main-content">
					<p class="static-content-p">
						<h2>In real estate, they say only three things matter:
							<br /><span class="span5">&nbsp;</span>Location, Location, and Location.</h2>
							<h2>Fortunately, you&#39;ve come to the right place... </h2>
					</p>
					<p class="static-content-p">
					
						We are Griffin Property Solutions - a diverse, boutique firm with a big commitment to your success. From the Upstate of South Carolina, to Western North Carolina and beyond, GPS can help you find your way through a confusing and volatile market. Our roots are local, but our experience and reach are global.
					</p>
					<p class="static-content-p">
						To learn more about our services in commercial real estate, residential real estate, and business brokerage, please select a link below.
					</p>
                </div>
                
                <div class="span1 media pull-right">
                    <ul class="media-icons-ul">
                        <li><a class="media-a" href="http://www.facebook.com/pages/Griffin-Property-Solutions/106531942823369" id="facebook"></a></li>
                        <li><a class="media-a" href="#" id="twitter"></a></li>
                        <li><a class="media-a" href="http://www.linkedin.com/profile/view?trk=pp_profile_name_link&srchtotal=1102&authType=NAME_SEARCH&srchindex=1&pvs=ps&goback=%2Efps_PBCK_mark+griffin_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_*1_*51_*1_*51_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&srchid=fa6a2e9f-2d27-4532-8779-c3a1bd7623ab-0&locale=en_US&id=31468442&authToken=NH74" id="linkedin"></a></li>
                        <li><a class="media-a" href="https://plus.google.com/u/0/b/113013262226818138307/113013262226818138307/posts" id="googleplus"></a></li>
                    </ul>
                </div>
             </div>
                
            </div>
            <div class="row-fluid"><div class="fluid_spacer"></div></div>
            <div class="row-fluid">
                <div class="nav-container span12">
                    
                    <div class="row-fluid" id="submenu">
                        <ul class="sub-menu span12 row-fluid"></ul>
                        <script>
                        $('body').on("click", '.sub-menu-img', function(e) {
                       
                        content_expansion_replace($(this).attr("id"), ".main-content");
                        });
                        </script>
                    </div>
                    <div class="row-fluid" id="mainmenu">
                        <div class="span3 main-nav-item" id="nav_corp">
                            <img class="main-nav-item-img" src="img/Commercial.png"/>
                        </div>
                        <div class="span3 main-nav-item" id="nav_residential">
                            <img class="main-nav-item-img" src="img/Residential.png"/>
                        </div>
                        <div class="span3 main-nav-item" id="nav_consulting">
                            <img class="main-nav-item-img" src="img/Consulting.png"/>
                        </div>
                        <div class="span3 main-nav-item" id="nav_brockerage">
                            <img class="main-nav-item-img" src="img/BusinessBrokerage.png"/>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <script>
        $('.main-nav-item').click(function(e) {
            content_expansion_replace($(this).attr("id"), ".main-content");
        });
        </script>
       <script>
           $('body').on("mouseover", '.sub-menu-img', function() {
              //change src of child img to glow image by substringing off the last part of the src url also do for submenu item 
           var me = $(this);   
           var mysrc = me.attr("src");
           var small = mysrc.substring(0, mysrc.length - 4);
           small += "_glow.png";
           var mysrc = me.attr("src", small);
           });
       </script>
       <script>
           $('body').on("mouseleave", '.sub-menu-img', function() {
              //change src of child img to glow image by substringing off the last part of the src url also do for submenu item 
           var me = $(this);   
           var mysrc = me.attr("src");
           var small = mysrc.substring(0, mysrc.length - 9);
           small += ".png";
           var mysrc = me.attr("src", small);
           });
       </script>
        <div class="container-fluid" id="footer-container">
            <footer class="row-fluid">
                <div class="sidespacer1 span1">&nbsp;</div>
                <div class="footer span10">
                    <div class="copyright">
                    <div class="header-min-logos">
		                    	<img class="span1 header-min-logos-img" src="/img/mls.png"/>
		                    	<img class="span1 header-min-logos-img smaller-logos" src="/img/costar-loopnet.png"/>
		                    	<img class="span1 header-min-logos-img" src="/img/bizbuysell.png"/>
	                   </div><br /><br /><br />
                        Copyright 2012 Griffin Property Solutions - <a id="copyright" href="http://www.erfmarketing.com">ERF</a>
                        
                    </div>
                </div>
                <div class="sidespacer1 span1">&nbsp;</div>
            </footer>
        </div>
</body>
</html>