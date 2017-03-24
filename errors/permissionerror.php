<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); session_destroy(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University College of Engineering, RTU, Kota</title>
<?php include("../shared/icon.php"); ?>
<meta name="keywords" content="University College of Engineering, Rajasthan Technical University, UCE, RTU, Engineering College Kota, ECK
								Govt. Engg. College, Kota, Govt Engg College, Kota" />
<meta name="description" content="University College of Engineering, Rajasthan Technical University is also known as Engineering College Kota 
 in short as UCE, RTU, or ECK is Engineering College directly under University. University College of Engineering (UCE,RTU) is top ranked 
 Govt Engg College" />
<link href="../css/shashank_style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>




<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title"><?php include("../shared/logo.php"); ?>Violation<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>		
    
    <div id="shashank_banner">
        <div id="one" class="contentslider">
            <div class="cs_wrapper">
                <div class="cs_slider">
                
				
				
                    <div class="cs_article">
                        <a href="#">
							<img src="../images/errors/error1.png" alt="error image" width="200" height="200"/>
                        </a>				
                        <div class="text">
                            <h2> <a href="#">Permission Violation</a> </h2>
                            
                            <p>
                            Sorry !!! You dont have enough permissions to view the web page. Due to permissions violation and security issues, you are being logged out. Please re-login to continue.
                            </p>
                            
                            <!--<a href="#">Read More</a>-->
                   		</div>
                	</div><!-- End cs_article -->
                







					
                </div><!-- End cs_slider -->
            </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->

	<!-- Site JavaScript -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<!--<script type="text/javascript" src="../js/jquery.ennui.contentslider.js"></script>-->
	<script type="text/javascript">
			$(function() {
				$('#one').ContentSlider({
					width : '940px',
					height : '300px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
		</script>
	<script src="../js/jquery.chili-2.2.js" type="text/javascript"></script>
	<script src="../js/chili/recipes.js" type="text/javascript"></script>
    	
    </div><!-- end ob banner -->
    
    <div id="shashank_content">
    	
        
        
        </div> <!-- end of content right -->
                                
    	<div id="bottom_bg"></div>
    </div> <!-- end of content -->
    
    
    <div id="shashank_footer">
        Copyright © 2013 <a href="../index.php"><strong>University College of Engineering</strong></a> 
    </div> <!-- end of footer -->

</div> <!-- end of container -->
</body>
</html>