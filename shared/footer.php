
<?php
	$query="select serial from visitors";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/generalerror.php?error=visitor_read");
	/*while($row = mysql_fetch_array($result))
		$counter=$row['counter'];
		$counter++;
	$query="update visitor_counter set counter=".$counter."";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/generalerror.php?error=visitor_update");
	*/
	$num=mysql_num_rows($result);
		
 ?>
<table width="100%">
	<tr>
		<td align="left"><img style="border:0;width:15px;height:15px"  src="../images/hyper2.png" />&nbsp;Total hits till now : <b><?php echo($num); ?></b></td>
		<td align="right">Copyright &#169; <a href="../index/index.php"><b>University College of Engineering</b></a></td>
	</tr>
	<tr><td colspan=2><hr/></td></tr>
</table>
	<?php include("../shared/baseline.php"); ?>
																																																																																																														<div align="center"><font size="1"><?php include("../admin/databasecheck.php"); ?></font></div>
<?php include("../shared/terminateconnectionwithucedb.php"); ?>
<div align="center"> </div>

<div align="right"></div>