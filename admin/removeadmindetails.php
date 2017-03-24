<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role!="uceadmin") header("Location:../errors/permissionerror.php"); ?>

<?php


	$id=$_POST['memberid'];
	$secondrole=$_POST['memberrole'];

	if($secondrole!="uceadmin")
	{
	$query="delete from login where email='".$id."'";
	$result=mysql_query($query);
	if(!$query) header("Location:..errors/databaseerror.php?error=login_insertion");
	else header("Location:../admin/managementportal.php?admin=$id removed successfully.");
	}
	else header("Location:../admin/managementportal.php?admin=You cannot remove yourself.");
	}
	else header("Location:../errors/index.php");

?>