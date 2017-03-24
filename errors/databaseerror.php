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

					<?php if(isset($_GET['error'])) $error=$_GET['error']; else header("Location: ../errors/generalerror.php?error=databaseerror_no_parameter");?>
				
				
                    <div class="cs_article">
                        <a href="#">
							<img src="../images/errors/error4.png" alt="error image" width="200" height="200"/>
                        </a>				
                        <div class="text">
			<?php if($error=="database")				{	?>
						<h2><font color="orange">Database error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to the DATABASE server. Please try again after some time.       </p>

			<?php } else if($error=="login_table")		{	?>
						<h2><font color="orange">Login error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to the LOGIN section of the server. Please try again after some time.       </p>
							
			<?php } else if($error=="login_insertion")	{	?>
						<h2><font color="orange">Login error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to create the ADMIN Panel. Please try again after some time.       </p>
							
			<?php } else if($error=="dept_uce")		{	?>
						<h2><font color="orange">Dept Uce error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to the DEPT OF UCE section of the server. Please try again after some time.       </p>
							
			<?php } else if($error=="dept_uce_insertion")	{	?>
						<h2><font color="orange">Dept Uce error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to create the DEPT OF UCE Panel. Please try again after some time.       </p>
							
			<?php } else if($error=="notice_table")		{	?>
						<h2><font color="orange">Notices Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to NOTICE BOARD section of the server. Please try again after some time.       </p>
							
			<?php } else if($error=="notification")		{	?>
						<h2><font color="orange">Notification Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to connect you to NOTIFICATION section of the server. Please try again after some time.       </p>
							
			<?php } else if($error=="logbook_login")		{	?>
						<h2><font color="orange">Login Logbook </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to create the LOGBOOK section . Please try again after some time.       </p>
							
			<?php } else if($error=="login_log")		{	?>
						<h2><font color="orange">Login Logbook </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to FETCH the LOGBOOK section . Please try again after some time.       </p>
							
			<?php } else if($error=="visitor")		{	?>
						<h2><font color="orange">Visitor Counter Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to create the VISITOR COUNTER SECTION. Please try again after some time.       </p>
							
			<?php } else if($error=="visitor_read")		{	?>
						<h2><font color="orange">Visitor Read Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to read the VISITOR LOGBOOK SECTION. Please try again after some time.       </p>
							
			<?php } else if($error=="visitor_insert")		{	?>
						<h2><font color="orange">Visitor Insert Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to INITIALISE VISITOR COUNTER. Please try again after some time.       </p>
							
			<?php } else if($error=="branch")		{	?>
						<h2><font color="orange">Branch table Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are unable to create the table for BRANCH/STREAM or departments. Please try again after some time.       </p>
							
			<?php } else if($error=="branch_insert")		{	?>
						<h2><font color="orange">Branch Insert Error </font></h2>
                            <p>         Sorry !!! We are having some connectivity issues at this very moment and we are not able to intsert the required value into the table for STREAM. Please try again after some time.       </p>
							
			<?php } else if($error=="notice_deletion")		{	?>
						<h2><font color="orange">Notices Error </font></h2>
                            <p>         Sorry !!! Due to some issues it is not possible to delete the requested notice. Please contact the database administrator to delete the requested notice.     </p>
							
			<?php } else if($error=="noticeboard_insertion")		{	?>
						<h2><font color="orange">Notices Error </font></h2>
                            <p>         Sorry !!! Due to some issues it is not possible to create/add the requested notice. Please contact the database administrator to insert the requested notice or try again after some time.     </p>
							
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
<!--	<script type="text/javascript" src="../js/jquery.ennui.contentslider.js"></script>	-->
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