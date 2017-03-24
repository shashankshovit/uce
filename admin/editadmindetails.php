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
<?php include("../shared/header.php"); ?>
<?php if(isSet($_SESSION['username'])) { ?>

<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role=="uceadmin" || $role=="deptadmin" || $role=="manager") { ?>

<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title">Edit Record<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>
	
	
	<?php 
		//if(!isSet($_GET['id'])) header("Location:../admin/managementportal.php?");
		$memberid=$_POST['memberid'];
		$query="select * from login where email='".$memberid."'";
		$result=mysql_query($query);
		if(!$result) header("Location:../errors/databaseerror.php?error=login_table");
		
		while($row=mysql_fetch_array($result))
		{
			$membername=$row['name'];
			$memberpass=$row['password'];
			$memberdept=$row['dept'];
			$memberrole=$row['role'];
		}
		
	?>


    <div id="shashank_banner">
       
            <div class="cs_wrapper">
                <!--<div class="cs_slider">-->
                
				
				
                    <!--<div class="cs_article">-->
					
		
						<?php if($role=="uceadmin" ) { ?>
					<!--		-------------------------------			-->
					<!--				COLLEGE ADMIN PART				-->
							
							<h3 align="center"><font color="orange" size>Welcome <?php if(isSet($_SESSION['username'])) echo($_SESSION['name']); ?></font></h3>
							                            <h3 align="center"><font color="white" size> Edit Admin/Member Record</font> </h3>
                            
                            <p>
								<form action="../admin/updateadmin.php" method="post" onsubmit="return validation()" enctype="multipart/form-data">
								<table width="40%" align="center">
									<tr>
										<td><font color="white">User Id  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" value="<?php echo($memberid); ?>" id="id" name="id" maxlength="50" onblur="checkUsername(this.value)"/></td>
										<td><input type="hidden" value="<?php echo($memberid); ?>" id="olduser" name="olduser"></td>
									</tr>
									<tr>
										<td colspan="3"><span id="check" name="check"><!--	--></span></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Name  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" id="name" name="name" value="<?php echo($membername); ?>" maxlength="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="pass" name="pass" value="<?php echo($memberpass); ?>" maxlength="50"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Verify Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="verify" name="verify" value="<?php echo($memberpass); ?>" maxlength="50" onblur="return passwordcheck()"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Member Type  </font></td>
										<td><font color="white">:</font></td>
										<td><select id="mtype" name="mtype">
											<?php if($memberrole=="uceadmin") { ?>
													<option value="admin of uce" selected>admin of uce</option>
												<?php } else { ?>
													<option value="department admin" <?php if($memberrole=="deptadmin") echo("selected"); ?>>department admin</option>
													<option value="manager of dept" <?php if($memberrole=="manager") echo("selected"); ?>>manager of dept</option>
													<option value="student" <?php if($memberrole=="student") echo("selected"); ?>>student</option>
												<?php }?>
											</select>
										</td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Department</font></td>
										<td><font color="white">:</font></td>
										<td><select id="dept" name="dept">
														<?php if($memberdept=="uce") { ?><option value="uce">uce</option><?php } ?>
													<?php
														if($memberdept!="uce")	{	
													?>
														<?php 
														$query="select * from branches";
														$result=mysql_query($query);
														while($row=mysql_fetch_array($result))
														{
															?>
																<option <?php if($memberdept=="".$row['branch']."") echo("selected"); ?> value="<?php echo($row['branch']); ?>"><?php echo($row['branch']); ?></option>
															<?php
														}
													?>
													
													<?php } ?>
											</select>
											&nbsp;&nbsp;
											<input type="submit" value="Save Details">
										</td>
										<td></td>
									</tr>
									

								</table>
								</form>
								<form action="../admin/removeadmindetails.php" method="post" onsubmit="return confirmdelete()">
									<table align='center'><tr><td colspan=3 align='center'>
										<input type='hidden' id='memberid' name='memberid' value='<?php echo($memberid); ?>'/>
										<input type='hidden' id='memberrole' name='memberrole' value='<?php echo($memberrole); ?>'/>										
										<input type='submit' value="Remove this member"/>
									</td></tr></table>
								</form>
                            </p>
                            

						<?php } else if(($role=="deptadmin" && ($_POST['userrole']=='deptadmin' || $_POST['userrole']=='manager' || $_POST['userrole']=='student')) 
												|| ($role=="manager" && ($_POST['userrole']=='manager' || $_POST['userrole']=='student'))) { ?>
							<!--		---------------------------------------		-->
							<!--				DEPARTMENT ADMIN PART				-->
							
							<h2 align="center"><font color="orange" size>Welcome <?php if(isSet($_SESSION['username'])) echo($_SESSION['name']); ?></font></h2>
							                            <h3 align="center"><font color="white" size> Edit Admin/Member Record</font> </h3>
                            
                            <p>
								<form action="../admin/updatebydeptadmin.php" method="post" onsubmit="return validationfordept()" enctype="multipart/form-data">
								<table width="40%" align="center">
									<tr>
										<td><font color="white">User Id  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" value="<?php echo($memberid); ?>" id="id" name="id" maxlength="50" onblur="checkUsername(this.value)"/></td>
										<td><input type="hidden" value="<?php echo($memberid); ?>" id="olduser" name="olduser"></td>
									</tr>
									<tr>
										<td colspan="3"><span id="check" name="check"><!--	--></span></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Name  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="textbox" id="name" name="name" value="<?php echo($membername); ?>" maxlength="30"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="pass" name="pass" value="<?php echo($memberpass); ?>" maxlength="50"/></td>
										<td></td>
									</tr>
									<tr>
										<td><font color="white">Verify Password  </font></td>
										<td><font color="white">:</font></td>
										<td><input type="password" id="verify" name="verify" value="<?php echo($memberpass); ?>" maxlength="50" onblur="return passwordcheck()"/></td>
										<td></td>
									</tr>
									<tr>
										
										<td><font color="white">Member Type</font></td>
										<td><font color="white">:</font></td>
										<td><select id="type" name="type">
											<?php if($role=="deptadmin") { ?>
												<?php if($_POST['userrole']=="deptadmin") { ?>
														<option selected value="department admin">department admin</option>
												<?php } else { ?>
														<option <?php if($_POST['userrole']=="manager") echo("selected"); ?> value="manager of dept">manager of dept</option>
														<option <?php if($_POST['userrole']=="student") echo("selected"); ?> value="student"> student </option>
														<?php } 		} 
													else if($role=="manager") { ?>
																<?php if($_POST['userrole']=="manager") { ?>
																			<option selected value="manager of dept">manager of dept</option>
																									
																<?php } else { ?>
																			<option <?php if($_POST['userrole']=="student") echo("selected"); ?> value="student"> student </option>
																	<?php  } ?>
													
																		<?php } ?>
											</select>
											&nbsp;&nbsp;
											<input type="hidden" id="dept" name="dept" value="<?php echo($_SESSION['dept']); ?>"/>
											<input type="submit" value="Save Details">
										</td>
										<td></td>
									</tr>
									

								</table>
								</form>
								<form action="../admin/removemember.php" method="post" onsubmit="return confirmdelete()">
									<table align='center'><tr><td colspan=3 align='center'>
										<input type='hidden' id='memberid' name='memberid' value='<?php echo($memberid); ?>'/>
										<input type='hidden' id='memberrole' name='memberrole' value='<?php echo($memberrole); ?>'/>										
										<input type='submit' value="Remove this member"/>
									</td></tr></table>
								</form>
                            </p>
							
                        <?php } else header('location: ../admin/managementportal.php?editpermission=no'); ?>
                   	
                	<!--</div>--><!-- End cs_article -->
                







					
                <!--</div>--><!-- End cs_slider -->
            </div><!-- End cs_wrapper -->
       

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
        
			
        	<br/>
<!--		COLLEGE ADMIN SECTION			-->
        	
			<?php if($role=="uceadmin") { ?>
			<div class="title">Departments' Administrators</div>

			
			<table width="100%" height="" border="0" cellpadding="10" cellspacing="0" class="table">
					<tr>
						<td width="20%" height="42"><b>User-id</b></td>
						<td width="40%"><b>Name</b></td>
						<td width="5%"><b>Office</b></td>
						<td width="10%"><b>Type</b></td>						
						<td width="25%"><b>Manage</b></td>
					</tr>

			
			<?php 
			
				$query="select * from login order by role,dept";
				$result=mysql_query($query);
				if(!$result) header("Location: ../errors/databaseerror.php?error=login_table");
				while($row=mysql_fetch_array($result))
				{
			?>
			
			
					<form action="../admin/editadmindetails.php" method="post" enctype="multipart/form-data">
					<tr>
						<td><?php echo($row['email']); ?><input type="hidden" id="memberid" name="memberid" value="<?php echo($row['email']); ?>"></td>
						<td><?php echo($row['name']); ?></td>
						<td><?php echo($row['dept']); ?></td>
						<td><?php echo($row['role']); ?><input type="hidden" id="userrole" name="userrole" value="<?php echo($row['role']); ?>"></td>						
						<td><a href="../admin/editadmindetails.php?id=<?php echo($row['email']); ?>"><input type="submit" value="Edit"/> </td>
					</tr>
					</form>
			<?php } ?>
			
					<tr><td colspan=6 align="center"><h2><a href="../admin/logbook.php">Click here to see login attempts</a></h2></td></tr>
				
			
			
			</table>
			<?php 	} ?>
			<p>&nbsp;</p>

			
			
			<!--		DEPARTMENT ADMIN SECTION		-->
			
			<?php if($role=="deptadmin" || $role=="manager") { ?>
			
			<br/>
			<div class="title">Departments' Members</div>

			
			<table width="100%" height="" border="0" cellpadding="10" cellspacing="0" class="table">
					<tr>
						<td width="20%" height="42"><b>User-id</b></td>
						<td width="40%"><b>Name</b></td>
						<td width="5%"><b>Office</b></td>
						<td width="10%"><b>Type</b></td>						
						<td width="25%"><b>Manage</b></td>
					</tr>

			
			<?php 
			
				$query="select * from login where dept='".$dept."' order by role";
				$result=mysql_query($query);
				if(!$result) header("Location: ../errors/databaseerror.php?error=login_table");
				while($row=mysql_fetch_array($result))
				{
			?>
			
					<form action="../admin/editadmindetails.php" method="post" enctype="multipart/form-data">
					<tr>
						<td><?php echo($row['email']); ?><input type="hidden" id="memberid" name="memberid" value="<?php echo($row['email']); ?>"></td>
						<td><?php echo($row['name']); ?></td>
						<td><?php echo($row['dept']); ?></td>
						<td><?php echo($row['role']); ?><input type="hidden" id="userrole" name="userrole" value="<?php echo($row['role']); ?>"></td>						
						<td><a href="../admin/editadmindetails.php?id=<?php echo($row['email']); ?>"><input type="submit" value="Edit"/> </td>
					</tr>
					</form>
			<?php } ?>
			
			
			</table>
			<?php 	} ?>
			<p>&nbsp;</p>

	



	
            <div class="cleaner" style="height: 40px">&nbsp;</div>
            
            <div class="testimonial_section">
                
            </div>
            
        </div> <!-- end of content left -->
        
        <div id="content_right">        	
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

<?php 
		} else header("Location:../errors/permissionerror.php");
		} 
		else
		{	header("Location:../errors/login.php");	}
	?>


</body>
</html>