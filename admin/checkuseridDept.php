<?php 

	include("../shared/initiateconnectionwithucedb.php");	
		$email=strtolower($_GET['userid']);	
		$dept=$_GET['dept'];	
		$query="select * from ".$dept."dept where email='".$email."'";
		$result=mysql_query($query);	
		$n=mysql_num_rows($result);
	
		if($n<1)
		{
			echo("<font color=\"#0f0\">* USER ID available.</font>");
			echo("<input type=\"hidden\" value=\"true\" id=\"useridstate\" name=\"useridstate\"/>");
		}
		else
		{
			echo("<font color=\"red\">* USER ID is already registered in database.</font>");
			echo("<input type=\"hidden\" value=\"false\" id=\"useridstate\" name=\"useridstate\"/>");
		}
			
?>