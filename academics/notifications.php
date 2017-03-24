<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>University College of Engineering, RTU, Kota</title>
<meta name="keywords" content="University College of Engineering, Rajasthan Technical University, UCE, RTU, Engineering College Kota, ECK
								Govt. Engg. College, Kota, Govt Engg College, Kota" />
<meta name="description" content="University College of Engineering, Rajasthan Technical University is also known as Engineering College Kota 
 in short as UCE, RTU, or ECK is Engineering College directly under University. University College of Engineering (UCE,RTU) is top ranked 
 Govt Engg College" />
<?php include("../shared/icon.php"); ?>
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
		
    <!---->	<div id="shashank_banner">
        <!--<div id="one" class="contentslider">-->
            <div class="cs_wrapper">
                
                
					<?php if(isset($_SESSION['username']) && $role=="uceadmin") { ?>
		

		
					<form action="../academics/addnotification.php" method="post" enctype="multipart/form-data">
					<br/><br/>
					<table width="80%" align="center">
								<tr><td colspan=2 align="center"><h3 align="center"><font color="white"> Add a Notification</font> </h3></td></tr>
								<tr>
									<td>
										<table >
											<tr>
												<td><font color="white">Notification No  </font> </td>
												<td> <font color="white">:</font> </td>
												<?php
														$query="select noticeid from notifications";
														$result=mysql_query($query);
														$nid=1;
														
														while($row=mysql_fetch_array($result))
														{
															if($row['noticeid']=="")	$nid=1;		
															else						$nid=$row['noticeid']+1;
														}
														//	if($nid=="") $nid=1;
														
												?>

												<td><input type="textbox" disabled value="<?php echo($nid); ?>"/><input type="hidden" id="notice" name="notice" value="<?php echo($nid); ?>"/></td>
											</tr>
											<tr>
												<td><font color="white">Date </font></td>
												<td><font color="white"> : </font></td>
												<td><input type="textbox" disabled value="<?php echo date("Y-m-d"); ?>"/><input type="hidden" id="date" name="date" value="<?php echo date("Y-m-d"); ?>"/></td>
											</tr>
											<tr>
												<td><font color="white">Title </font></td>
												<td><font color="white"> : </font></td>
												<td><input type="textbox" id="title" name="title" value="" maxlength="50"/></td>
											</tr>
											<tr>
												<td colspan="3"><font color="white"><label for="file">Filepath : </label>
												<input type="file" name="file" id="file" /></font></td>
												
											</tr>
										</table>
									</td>
									<td>
										<table>
											<tr><td><font color="white">Description : </font></td></tr>
											<tr><td><textarea id="description" name="description" maxlength="500" rows="6" cols="40"></textarea></td></tr>
											<tr><td align="center">  </td></tr>
										</table>
									</td>
								</tr>
								<tr><td colspan="2" align="center"><input type="submit" value="Add Notification"></td></tr>
								
					</table>
					</form>
		
				<div align="center">
					<h4><font color="#0f0"><?php if(isSet($_GET['noticeinsert'])) { if($_GET['noticeinsert']) { echo("# The notification has been inserted successfully."); } } ?></font></h4>
					<h4><font color="#f80"><?php if(isSet($_GET['noticestate'])) { if($_GET['noticestate']) { echo("# The notification has been deleted successfully."); } } ?></font></h4>			
				</div>


					<?php } else {  ?>

					<div align="center"><font color="orange"><h1>&nbsp;&nbsp;&nbsp; </h1></font></div>      <br/>          
				    <div align="center"><img src="../images/notifications.png" alt="notifications" height="200" width="940"/></div>
						
					<?php } ?>

            </div><!-- End cs_wrapper -->
        <!--</div>--><!-- End contentslider -->
		</div><!-- end ob banner -->
    <!-- -->
    
    <div id="shashank_content">
    	
        <!--<div id="content_left">-->


			<br/>
			<div class="title" align="center"><img style="border:0;width:20px;height:20px"  src="../images/notice2.jpg" />&nbsp;Notifications</div>        
			<table width="90%" align="center" height="" border="0" cellpadding="10" cellspacing="0" class="table">
					<tr>
						<td width="15%" height="42" align='center'><b>Notification No</b></td>
						<td width="15%" align='center'><b>Notification Date</b></td>
						<td width="50%" align="center"><b>Title</b></td>
						<?php if(isset($_SESSION['username']) && $role=="uceadmin") {  ?><td width="20%"><b>Action</b></td><?php } ?>
					
					</tr>
					<tr><td colspan=4><hr/></td></tr>
			
		
		<?php if(isset($_SESSION['username']) && $role=="uceadmin") {  ?>
			
					<?php
						$query="select * from notifications order by noticeid desc";
						$execute=mysql_query($query);
						if(!$execute) { echo("<tr><td colspan=4 align='center'>There are no notifications currently available.</td></tr>"); $num=0;}
						else
						{
							$num=mysql_num_rows($execute);
							if($num==0) echo("<tr><td colspan=4 align='center'>There are no notifications currently available.</td></tr>");
							else
							{							
								while($row=mysql_fetch_array($execute))
								{
									$hyperlink=$row['hyperlink']; 
									echo("<tr>");
										echo(" <td align='center'> " . $row['noticeid'] . "</td>  ");
										echo(" <td align='center'> " . $row['date'] . "</td> ");
										if($hyperlink=="") 	echo(" <td align='center'> ".$row['noticename']."</td> ");														
											else			echo(" <td  align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['noticename']."</a></td>");
										echo("<td align=\"right\"> <a href=\"../academics/deletenotification.php?notice=".$row['noticeid']."\">Delete Notification</a></td>");
									echo("</tr>");
									
									if($hyperlink=="") 	echo("<tr><td colspan=4 align='center'> ".$row['description']."</td></tr>");													
										else			echo("<tr> <td colspan=4 align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['description']."</a></td> </tr>");
									echo("<tr><td colspan=4><hr/></td></tr>");
										
								}							
							}
						}
					 ?>
					
		
			
			
            
            <div class="cleaner" style="height: 40px">&nbsp;</div>
				
            <!--<div class="testimonial_section">
                <p style="text-align:center">"Aliquam pretium porta odio. Fusce quis diam sit amet tortor luctus pellentesque. Donec accumsan urna non elit tristique mattis."</p>                
            </div>-->
		<?php } else { ?>
		
					<?php
						$query="select * from notifications order by noticeid desc";
						$execute=mysql_query($query);
						if(!$execute) { echo("<tr><td colspan=3 align='center'>There are no notifications currently available.</td></tr>"); $num=0;}
						else
						{
							$num=mysql_num_rows($execute);
							if($num==0) echo("<tr><td colspan=3 align='center'>There are no notifications currently available.</td></tr>");
							else
							{							
								while($row=mysql_fetch_array($execute))
								{
									$hyperlink=$row['hyperlink']; 
									echo("<tr>");
										echo(" <td align='center'> " . $row['noticeid'] . "</td>  ");
										echo(" <td align='center'> " . $row['date'] . "</td> ");
										if($hyperlink=="") 	echo(" <td  align='center'> ".$row['noticename']."</td> ");														
											else			echo(" <td  align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['noticename']."</a></td>");
										
									echo("</tr>");
									
									if($hyperlink=="") 	echo("<tr><td colspan=3 align='center'> ".$row['description']."</td></tr>");													
										else			echo("<tr> <td colspan=3 align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['description']."</a></td> </tr>");
									echo("<tr><td colspan=3><hr/></td></tr>");
										
								}							
							}
						}
					 ?>
		
		<?php } ?>
		
		</table>
            
        <!--</div>--> <!-- end of content left -->
        
                                
    	<div id="bottom_bg"></div>
    </div> <!-- end of content -->
    
    <div id="shashank_bottom_panel">
    	
			<?php include("../shared/bottom.php"); ?>
        
        <div class="cleaner">&nbsp;</div>

  </div> <!-- end of bottom panel -->
    
    <div id="shashank_footer">
        <?php include("../shared/footer.php"); ?>
    </div> <!-- end of footer -->

</div> <!-- end of container -->
</body>
</html>