<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; ?>
<?php if($role!="uceadmin") header("Location:../errors/permissionerror.php"); ?>

<?php


	$noticeid=$_GET['notice'];
	$hyperlink="";

	if($role=="uceadmin")
	{
		$query="select hyperlink from noticeboard where noticeid='".$noticeid."'";
		$result=mysql_query($query);
		if(!$query) header("Location:..errors/databaseerror.php?error=select");
		while($row=mysql_fetch_array($result))
			$hyperlink=$row['hyperlink'];
		
		if($hyperlink!="")	{ if(!unlink($hyperlink)) header("Location:../errors/fileerror.php?error=delete"); }
		
		$query="delete from noticeboard where noticeid='".$noticeid."'";
		$result=mysql_query($query);
		if(!$query) header("Location:..errors/databaseerror.php?error=notice_deletion");
		else header("Location:../admin/managementportal.php?noticestate=true");
	}
	else 
	{
		$query="select hyperlink from noticeboard where noticeid='".$noticeid."'";
		$result=mysql_query($query);
		if(!$query) header("Location:..errors/databaseerror.php?error=select");
		while($row=mysql_fetch_array($result))
			$hyperlink=$row['hyperlink'];
		
		if($hyperlink!="")	{ if(!unlink($hyperlink)) header("Location:../errors/fileerror.php?error=delete"); }


			$query="delete from noticeboard where noticeid='".$noticeid."' and department='".$dept."'";
			$result=mysql_query($query);
			if(!$query) header("Location:..errors/databaseerror.php?error=notice_deletion");
			else	
			{ 
				//if($role=="uceadmin") 
					header("Location:../admin/managementportal.php?noticestate=true");		
				//else header("Location:../admin/deptmanagementportal.php?noticestate=true");		
			} 
	}
	}
	else header("Location:../errors/index.php");

?>