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

<?php include("../shared/initiateconnectionwithucedb.php"); ?>
<?php include("../shared/header.php"); ?>
<?php if(isset($_SESSION['username'])) {$username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; } ?>

<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title"><?php include("../shared/logo.php"); ?>UCE, Kota<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>
		
    <div id="shashank_banner">
        <div id="one" class="contentslider">
            <div class="cs_wrapper">
                
                
					<?php if(isset($_SESSION['username']) && $role=="uceadmin") { ?>
					
					<form action="../index/addstream.php" method="post" enctype="multipart/form-data">
					<table width="80%" align="center">
						<tr>
							<td colspan=4 align="center"><h2><font color="orange">Welcome <?php echo($_SESSION['name']); ?></font></h2></td>
						</tr>						
						<tr>
							<td colspan=4 align="center"><h3><font color="white">Add new stream to college database</font></h3></td>
						</tr>
						<tr>
							<td><font color="white"></font></td>
							<td> <font color="white"></font> </td>
							<td></td>
							<td><font color="white">Add Detail :</font></td>							
							
						</tr>
						<tr>
							<td colspan=3>
								<table width="100%">
									<tr>
										<td><font color="white"><label for="file">Full Stream Name </label></font></td>
										<td> <font color="white">:</font> </td>
										<td><input type="textbox" id="streamname" name="streamname" maxlength="60"/></td>							
									</tr>
									<tr>
										<td><font color="white"><label for="file">Abbrebiation for stream (max 5) </label></font></td>
										<td> <font color="white">:</font> </td>
										<td><input type="textbox" id="streamabb" name="streamabb" maxlength="5"/></td>							
									</tr>
									<tr>
										<td><font color="white"><label for="file">Select Image </label></font></td>
										<td> <font color="white">:</font> </td>
										<td><input type="file" name="file" id="file" /></td>							
									</tr>
									<tr>
										<td><font color="white">Image Description</font></td>
										<td> <font color="white">:</font> </td>
										<td><input type="textbox" id="description" name="description"  maxlength="50"/></td>							
									</tr>
									
								</table>
							</td>
							<!--<td></td>
							<td></td>-->
							<td><textarea rowspan=4 id="streamdetail" name="streamdetail" maxlength="1000" rows="6" cols="40"></textarea></td>
						</tr>
						<tr>
							<td colspan=4 align="center"><input type="submit" value="Add this new branch to the college database !"/></td>
						</tr>
									
						<tr><td colspan=4 align="center"><span><?php if(isset($_GET['insertbranch'])) { ?>
																	<?php if($_GET['insertbranch']=="true") { ?> <font color="#0f0">The new branch was created successfully.</font><?php } ?>
																	<?php if($_GET['insertbranch']=="file") { ?> <font color="#f00">Either the file format is not supported or the file is too large. Kindly upload only jpg,png,gif,bmp images less than 3 MB.</font><?php } ?>
																	<?php if($_GET['insertbranch']=="update") { ?> <font color="#0f0">The details have been updated successfully.</font><?php } ?>
																<?php  } ?>
														</span></td></tr>
					</table>
					</form>
										
					<?php }  else { ?>
					
					
						<div class="cs_slider">
					


						<?php $query="select * from branch_details";
								$result=mysql_query($query);
								if(!$result) echo("<h2><font color='red	'>&nbsp;&nbsp;The administrator is required to add the branches to the college database.</font></h2>");
								else while($row=mysql_fetch_array($result)) 
								{ ?>
									<div class="cs_article">
									<img src="<?php echo($row['imagelink']); ?>" alt="<?php echo($row['description']); ?>" height="230" width="350"/>
									<div class="text">
										<h2><a href="#"><?php echo($row['fullbranch']); ?></a></h2>
										<p><?php echo($row['detail']); ?></p>
									</div>
									</div><!-- End cs_article -->
						<?php   } ?>
						
						
						</div><!-- End cs_slider -->
						
						
						<?php 	 } ?>

            </div><!-- End cs_wrapper -->
        </div><!-- End contentslider -->

	<!-- Site JavaScript -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery.ennui.contentslider.js"></script>
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
        
		
		<?php if(isset($_SESSION['username']) && $role=="uceadmin") {  ?>
		
			
        	<div class="title" align="center">List of branches</div>
				<hr/>
			
			<?php 
			
				$query="select * from branch_details";
				$result=mysql_query($query);
				//if(!$result) header("Location: ../errors/databaseerror.php?error=login_table");
				if(!$result){} else while($row=mysql_fetch_array($result))
				{
			?>
			
			
					<form action="../index/updatestream.php" method="post" enctype="multipart/form-data">
					<table align="center" width="90%" height="" border="0" cellpadding="10" cellspacing="0" class="table" >
					<tr>
						<td><img src="<?php echo($row['imagelink']); ?>" height="100" width="150"/><input type="hidden" id="oldabb" name="oldabb" value="<?php echo($row['dept']); ?>"/></td>
						<td>
						<table width="90%">
							<tr><td><input type="textbox" id="streamabb" name="streamabb" maxlength="5" value="<?php echo($row['dept']); ?>"/></td></tr>
							<tr><td><input type="textbox" id="streamname" name="streamname" maxlength="60" value="<?php echo($row['fullbranch']); ?>"/></td></tr>
							<tr><td><input type="textbox" id="description" name="description" maxlength="50" value="<?php echo($row['description']); ?>"/></td></tr>
						</table>
						</td>
					</tr>
					<tr>
						<td colspan="2"><textarea id="streamdetail" name="streamdetail" maxlength="1000" rows="6" cols="45"><?php echo($row['detail']); ?></textarea></td>
					</tr>
					<tr>						
						<td colspan='2' align="center"><label for="file">Change Image : </label><input type="file" id="file" name="file"/>
						<input type="submit" value="Update"/> </td>
					</tr>
					</table>
					</form>
					<hr/>
			<?php } ?>
			
					
			
			
            
            <div class="cleaner" style="height: 40px">&nbsp;</div>
				
            <!--<div class="testimonial_section">
                
            </div>-->
		<?php } else { ?>
		
		<div class="title" align="center">About Them</div>
		
		<p>The college has a number of departments. Each department has highly qualified and experienced faculties. 
		The qualfication of faculty members include P.G.D.I.E., Ph.D, M.Tech., M.E., M.Phil., M.A., B.Tech, B.E. The faculties have been teaching since establishment of the college.
		New faculty members have been recruited in place of the retired ones. Guest faculties are always available whenever a permanent faculty
		is not available or at leave. Students have a wide range of choices to clear their doubts. </p>
		
		<p>The departments organize various events such as workshops, seminars, guest lectures, festivals from time to time. 
		Both students and professors actively take part in all the events. Some of the workshops include 
		'Cloud Computing and its Applications in Engineering & Sciences' (CCAES-13) which was organised by Mr. R.K.Bayal (Computer Engineering Department) in 2013. 
		Some of the festivals include Luminere (organised by Electrical Department), Pinnacle (organised by Production & Industrial Department) each year.</p>
		
		<p>The departments work independently of each other, however at major events such as Anukriti (annual Tech. Fest. of college) and Convocation 
		the departments work together as a single unit to make the event a grand success. </p>
		<hr/><br/><div align="center"><img src="../images/ucetimes.jpg" height="220" width="300"/></div>
		
		<?php } ?>
            
        </div> <!-- end of content left -->
        
        <div id="content_right">
			<br/>
            <?php include("../shared/noticeboard.php"); ?>     
				
            <div class="cleaner" style="height: 40px;">&nbsp;</div>                       
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