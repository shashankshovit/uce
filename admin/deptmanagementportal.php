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
<script type="text/javascript" src="../js/validationedit.js"></script>
</head>
<body>

<?php include("../shared/initiateconnectionwithucedb.php"); ?>

<?php if(isSet($_SESSION['username'])) { ?>

<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; $name=$_SESSION['name']; ?>


<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title">Admin Panel<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>
	
	<?php 
		
		$query="select * from login where email='".$username."'";
		$result=mysql_query($query);
		if(!$result) header("Location:../errors/databaseerror.php?error=login_table");
		
		while($row=mysql_fetch_array($result))
		{
			$name=$row['name'];
			$pass=$row['password'];
			$dept=$row['dept'];
			
		}
		
	?>



    <div id="shashank_banner">
       <!-- <div id="one" class="contentslider">	-->
            <div class="cs_wrapper">
                <!--<div class="cs_slider">-->
				<table width="90%" align="center">
					<tr><td align="center" colspan=2><h2 align="center"><font color="orange" size>Welcome <?php if(isSet($_SESSION['username'])) echo($_SESSION['name']); ?></font></h2></td></tr>
					<tr>
						<td>
                            <h3 align="center"><font color="white" size> Update Record</font> </h3>
                            
                            <p>
								<form action="../admin/updatedeptadmin.php?userid=<?php echo($username); ?>" method="post" onsubmit="return validation()">
								<table width="40%" align="center">
									<tr>
										<td><font color="white">User Id  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" value="<?php echo($username); ?>" id="id" name="id" maxlength="50" onblur="checkUsername(this.value)"/></td>
										<td></td>
									</tr>
									<tr>
										<td colspan="3"><span id="check" name="check"><!--	--></span></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Name  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" id="name" name="name" value="<?php echo($name); ?>" maxlength="30"/></td>
										<td></td>
									</tr>
									<!--<tr>
										<td><font color="white">Role  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" id="role" name="role" maxlength="10"/></td>
										<td></td>
									</tr>-->
									<tr>
										<td><font color="white">Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="pass" name="pass" value="<?php echo($pass); ?>" maxlength="50"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Verify Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="verify" name="verify" value="" maxlength="50" onblur="return passwordcheck()"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Department</font></td>
										<td><font color="white">:</font></td>
										<td><select id="dept" name="dept">
														<option><?php echo($dept); ?></option>
											</select>
											&nbsp;&nbsp;
											<input type="submit" value="Save Details">
										</td>
										<td></td>
									</tr>

								</table>
								</form>

							</p>

						</td>
						<td>
							<form action="../admin/addnotice.php" method="post" enctype="multipart/form-data">
							<table width="90%" align="right">
								<tr><td colspan=2 align="center"><h3 align="center"><font color="white"> Add a Notice</font> </h3></td></tr>
								<tr>
									<td>
										<table>
											<!--<tr>

												<!--<td><font color="white">Notice No  </font> </td>
												<td> <font color="white">:</font> </td>
												<?php
														$query="select * from noticeboard";
														$result=mysql_query($query);
														while($row=mysql_fetch_array($result))
															$num=$row['noticeid'];
														$nid=$num+1;
												?>

												<td></td>
											</tr>-->
											<tr>											
												<td><input type="hidden" id="notice" name="notice" value="<?php echo($nid); ?>"/><font color="white">Date </font></td>
												<td><font color="white"> : </font></td>
												<td><input type="textbox" disabled value="<?php echo date("Y-m-d"); ?>"/><input type="hidden" id="date" name="date" value="<?php echo date("Y-m-d"); ?>"/></td>
											</tr>
											<tr>
												<td><font color="white">Department </font></td>
												<td><font color="white"> : </font></td>
												<td><input type="textbox" disabled value="<?php echo($dept); ?>"/><input type="hidden" id="dept" name="dept" value="<?php echo($dept); ?>"/></td>
											</tr>
											<tr>
												<td><font color="white">Title </font></td>
												<td><font color="white"> : </font></td>
												<td><input type="textbox" id="title" name="title" value="" maxlength="50"/></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</table>
									</td>
									<td>
										<table>
											<tr><td><font color="white">Description : </font></td></tr>
											<tr><td><textarea id="description" name="description" maxlength="500" rows="6" cols="25"></textarea></td></tr>
											
											
											<tr><td align="center">  </td></tr>
										</table>
									</td>
								</tr>
								<tr><td colspan="2"><font color="white"><label for="file">Filepath : </label>
												<input type="file" name="file" id="file" /></font>
												<input type="submit" value="Add Notice">
									</td>
								</tr>
							</table>
							</form>
						</td>
					</tr>
				</table>
		<div align="center">
			<h4><font color="#0f0"><?php if(isSet($_GET['admin'])) echo("# ".$_GET['admin']." "); ?></font></h4>
			<h4><font color="#0f0"><?php if(isSet($_GET['noticestate'])) { if($_GET['noticestate']) { echo("# The notice has been deleted successfully."); } } ?></font></h4>
			<h4><font color="#0f0"><?php if(isSet($_GET['noticeinsert'])) { if($_GET['noticeinsert']) { echo("# The notice has been inserted successfully."); } } ?></font></h4>
		</div>		

					
               <!-- </div><!-- End cs_slider -->
            </div><!-- End cs_wrapper -->
        <!-- </div><!-- End contentslider -->

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
	<br/>
	<div align="center">
	<?php
		$bytes=diskfreespace("../");
		$gb=$bytes/(1024*1024*1024);
		
		
		if($gb<10)	echo("<b><font color=\"#f00\">WARNING: The server has less than 10 GB free space (".$gb." GB) remaining on the hard disk. Please free up some memory.</font></b>");
	?>
			
			
	</div>

	

        <div id="content_left">
        
        	<br/><br/>
			
			
			
            <?php include("../shared/noticeboarddept.php"); ?>     			
			<p>&nbsp;</p>

	
	


	
            <div class="cleaner" style="height: 40px">&nbsp;</div>
            
            <div class="testimonial_section">
                
            </div>
            
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
<!--  CSS Templates Free Download from www.shashank.com  -->
</div> <!-- end of container -->

<?php } 
		else
		{	header("Location:../errors/login.php");	}
	?>


</body>
</html>