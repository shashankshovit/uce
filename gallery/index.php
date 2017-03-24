<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UCE, Kota - Photo Gallery</title>
<?php include("../shared/icon.php"); ?>
<meta name="keywords" content="University College of Engineering, Rajasthan Technical University, UCE, RTU, Engineering College Kota, ECK
								Govt. Engg. College, Kota, Govt Engg College, Kota, uce photos, uce rtu photos, UCE photos, uce gallery, uce photo gallery" />
<meta name="description" content="University College of Engineering, Rajasthan Technical University is also known as Engineering College Kota 
 in short as UCE, RTU, or ECK is Engineering College directly under University. University College of Engineering (UCE,RTU) is top ranked 
 Govt Engg College. Photos of uce are here which can be called as photos of University college of Engineering or photos of Engineering college kota" />

<link href="../css/shashank_style.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">
swfobject.embedSWF("flashmo_194_circular_gallery.swf", "flashmo_template", "940", "700", "9.0.0");
</script>
		<script language = "javascript">
			function require()
			{
				alert("You require adobe flash player to view this page.");
			}
			function up(event)
			{
				if(event.button==2)
					alert("Sorry user! Right click is not permitted.");
			}
			function down(event)
			{
				if(event.button == 2)
					alert("Sorry user! Right click is not permitted.");
			}
			window.oncontextmenu = function() {	return false; /* prevent context menu from popping up */
												};
</script>

</head>
<body onload="require()" onmouseup="up(event)" onmousedown="down(event)">

<?php include("../shared/initiateconnectionwithucedb.php"); ?>
<?php include("../shared/header.php"); ?>

<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title"><?php include("../shared/logo.php"); ?>UCE, Kota<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>
		
    <!--<div id="shashank_banner">-->
        <!--<div id="one" class="contentslider">-->
            <!--<div class="cs_wrapper">-->

				<div align="center">
					<div id="flashmo_template">
						<h1>UCE Photo Gallery</h1>
						<p>It seems that you dont have flash player installed on your system which is required to view this webpage. 
						<a href="http://www.adobe.com/go/getflashplayer">Click here</a>to install/upadate adobe flash player</p>
					</div>
					<br /><br />
				</div>


            <!--</div>--><!-- End cs_wrapper -->
        <!--</div>--><!-- End contentslider -->

	<!-- Site JavaScript -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
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
	<script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
	<script src="js/chili/recipes.js" type="text/javascript"></script>
    	
    <!--</div>--><!-- end ob banner -->
    
    <div id="shashank_content">
    	
                                

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