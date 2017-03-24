<?php 

	include("../shared/initiateconnectionwithucedb.php");	
	 if(isSet($_SESSION['username'])) { 

		$username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept'];

		
		$email=strtolower($_GET['userid']);	
		$query="select * from login where email='".$email."'";
		$result=mysql_query($query);	
		$n=mysql_num_rows($result);
	
		if($n<1)
		{
			echo("<font color=\"#0f0\">* USER ID available.</font>");
			echo("<input type=\"hidden\" value=\"true\" id=\"useridstate\" name=\"useridstate\"/>");
		}
		else
		{		echo("<font color=\"red\">* USER ID is already registered in database.</font>");
				echo("<input type=\"hidden\" value=\"false\" id=\"useridstate\" name=\"useridstate\"/>");
		
		}
		}
?>