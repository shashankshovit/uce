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
<script type="text/javascript" src="../js/validation.js"></script>
</head>
<body>

<?php include("../shared/initiateconnectionwithucedb.php"); ?>
<?php include("../shared/header.php"); ?>

<?php if(isSet($_SESSION['username'])) { ?>

<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; ?>
<?php if($role=="uceadmin")	{	?>

<div id="shashank_container">
<!--    -->
	<div id="shashank_title">
    	<div id="title">Visitors' Log Book<br/></div>
		
	</div> <!-- end of title -->

		
	<?php include("../shared/menuitem.php"); ?>


	
	
	
	
	
    <div id="shashank_content">
    		<br/>
	<div align="center">
	<?php
		$bytes=diskfreespace("../");
		$gb=$bytes/(1024*1024*1024);
		
		
		if($gb<10)	echo("<b><font color=\"red\">WARNING: The server has less than 10 GB free space (".$gb." GB) remaining on the hard disk. Please free up some memory.</font></b>");
	?>
			
			
	</div>

        
        

        	
			<?php if($role=="uceadmin") { ?>
			
			<br/>
			<div class="title" align="center">List of Visitors</div>

			
			<table align="center" width="80%" height="" border="0" cellpadding="10" cellspacing="0" class="table">
					<tr>
						<td height="42"><b>Serial No</b></td>
						
						<td ><b>IP</b></td>
						<td ><b>Login Date</b></td>
						<td ><b>Login Time</b></td>						
					</tr>

			
			<?php 
				
				$query="select * from visitors order by serial DESC";
				$result=mysql_query($query);
				if(!$result) header("Location: ../errors/databaseerror.php?error=visitor_read");
				while($row=mysql_fetch_array($result))
				{
			?>
			
			
              
					<tr>
						<td><?php echo($row['serial']); ?></td>						
						<td><?php echo($row['ip']); ?></td>
						<td><?php echo($row['date']); ?></td>
						<td><?php echo($row['time']); ?></td>
					</tr>
			<?php } ?>
			

			<?php	 					} ?>
			
			
			</table>
			<p>&nbsp;</p>

	
	


	
            <div class="cleaner" style="height: 40px">&nbsp;</div>
            
            <div class="testimonial_section">
                
            </div>
            
         <!-- end of content left -->
        
                                
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
	else  header("Location:../errors/permissionerror.php");
	}
		else
		{	header("Location:../errors/login.php");	}
	?>


</body>
</html>