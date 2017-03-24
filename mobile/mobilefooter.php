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
 <hr/>
<div align="center" id="contacts">
 <img style="border:0;width:15px;height:15px"  src="../images/hyper2.png" />&nbsp;Total hits till now : <b><?php echo($num); ?></b><br/>

 Copyright &#169; <a href="../mobile/mobileindex.php"><b>University College of Engineering</b></a><br/>
 Rajasthan Technical University, Akelgarh,<br/> Rawatbhata Road, Kota-324010<br/>
 Website hosted at: <a href="http://www.kappa.net.in">Kappa Internet Services Pvt. Ltd. Kota</a><br/>
 <b>Nodal Officer (IT)</b>: Deepak Bhatia (Webmaster, RTU) <br/> <b>Ph. No.</b>: 0744-2473952 ||  <b>Email</b>: <a href="mailto:nodalit.rtu@gmail.com">nodalit.rtu@gmail.com</a>
																																																																																										<font size="1"><?php include("../admin/databasecheck.php"); ?></font>
<br/>

</div>