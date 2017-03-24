<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 
<!--<link rel="stylesheet" media="all" type="text/css" href="../style/dropdown.css" />-->
<!--
 <style>
/*---- CROSS BROWSER DROPDOWN MENU ----*/
ul#nav {margin: 0 0 0 200px;}
ul.drop a { display:block; color: #fff; }												/* font-size: 10px; text-decoration: none;}*/
ul.drop, ul.drop li, ul.drop ul { list-style: none; margin: 0; padding: 0; }			 /*  background: #; color: #fff;}*/
ul.drop { position: relative; z-index: 597; float: left;}
ul.drop li { float: left; line-height: 0.9em; vertical-align: middle; zoom: 1; } 		/* padding: 5px 10px; }*/
ul.drop li.hover, ul.drop li:hover { position: relative; z-index: 599; cursor: default; background: #1e7c9a; }
ul.drop ul { visibility: hidden; position: absolute; top: 100%; left: 0; z-index: 598; width: 190px; background: #556; border: 1px solid #fff; }
ul.drop ul li { float: none; font-size: 15px; }
ul.drop ul ul { top: -2px; left: 100%; }
ul.drop li:hover > ul { visibility: visible ; }
</style>
-->

<link href="../css/shashank_style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>

<?php include("../shared/initiateconnectionwithucedb.php"); ?>


<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title"><?php include("../shared/logo.php"); ?>UCE, Kota<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>
		
    <div id="shashank_banner">
        <div id="one" class="contentslider">
            <div class="cs_wrapper">
                <div class="cs_slider">
                
				
				
                    <div class="cs_article">
                        <a href="./indexx.php#blocks">
                        <img src="../images/LockAndKeys.jpg" alt="login image" />
                        </a>				
                        <div class="text">
                            <h2> <a href="#">Admin Login Panel</a> </h2>
                            
                            <p>
								<form action="./checklogin.php" method="post">
									<table>
										<tr>
											<td colspan=2>
												<?php if(isSet($_GET['state'])) 
														{
														if($_GET['state']=='relogin') 
															echo("<font color=\"limegreen\"> * You have been logged out successfully.<br/> Please re-login to continue. </font>"); 
														else if($_GET['state']=='time_out') 
															echo("<font color=\"yellow\"> * You have reached your <font color=\"red\">time out limit</font> for your session.<br/> Please re-login to continue.  </font>"); 
														}?>
												<?php if(isSet($_GET['attempt'])) echo("<font color=\"red\"> * You are trying to access other users' accounts illegally. Your machine's IP address has been noted down. Strict action will be taken against you for further attempts.  </font>"); ?>

											</td>
										</tr>
										<tr>
											<td><font color="orange">Username : </td>
											<td><input type="textbox" id="id" name="id"></td>
										</tr>
										<tr>
											<td><font color="orange">Password : </td>
											<td><input type="password" id="pass" name="pass"></td>
										</tr>
										<tr>
											<td colspan=2>
													<?php if(isSet($_GET['state'])) if($_GET['state']=='false') echo("<font color=\"red\"> * The username/password you provided dont match with our records. Please try again. </font>"); ?>
													
													
											</td>
										</tr>
										<tr>
											<td><input type="submit" value="Login"></td>
											<td></td>
										</tr>
									</table>
								</form>
                            </p>
                            

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
    	
        <div id="content_left">
        
        	<div class="title"></div>
            
            <div class="cleaner" style="height: 40px">&nbsp;</div>
            
            <div class="testimonial_section">
                
            </div>
            
        </div> <!-- end of content left -->
        
        <div id="content_right">
        	

			
        </div> <!-- end of content right -->
                                
    	<div id="bottom_bg"></div>
    </div> <!-- end of content -->
    
    <div id="shashank_bottom_panel">
    	
		<?php include("../shared/bottom.php"); ?>

  </div> <!-- end of bottom panel -->
    
    <div id="shashank_footer">
        <?php include("../shared/footer.php"); ?>
    </div> <!-- end of footer -->

</div> <!-- end of container -->

</body>
</html>