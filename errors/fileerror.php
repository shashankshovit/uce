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
<link href="../css/shashank_style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>




	
<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title"><?php include("../shared/logo.php"); ?>Error<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>		
    




			
	
	
	
	



    <div id="shashank_banner">
        <div id="one" class="contentslider">
            <div class="cs_wrapper">
                <div class="cs_slider">

					<?php $error=$_GET['error']; ?>
				
				
                    <div class="cs_article">
                        <a href="#">
							<img src="../images/errors/error6.png" alt="error image" width="200" height="200"/>
                        </a>				
                        <div class="text">
			<?php if($error=="upload")				{	?>
						<h2><font color="orange">File upload error </font></h2>
                            <p>         We are having some connectivity issues at this very moment and we are not able to UPLOAD the file requested by you and hence cant add the notice. Sorry for the inconvenience caused to you.       </p>

			<?php } else if($error=="delete")		{	?>
						<h2><font color="orange">File remove error </font></h2>
                            <p>         We are having some connectivity issues at this very moment and we are not able to DELETE the file requested by you and hence cant remove the notice. Sorry for the inconvenience caused to you.       </p>
							
			<?php } else if($error=="exists")		{	?>
						<h2><font color="orange">File already exists </font></h2>
                            <p>         Another file with same file name, as provided by you, EXISTS. Please try again, with a different file name .      </p>
							
			<?php } else if($error=="sizelimit")		{	?>
						<h2><font color="orange">File size limit exceeded </font></h2>
                            <p>         Sorry !! Any file more than 8 MB in size is not permitted for upload. Please try again either by compressing the file or by changing the format of file.      </p>
							
            <?php } else 								{	?>
						<h2><font color="orange">General Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to the server. Please try again after some time.       </p>
							
			<?php }	?>
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