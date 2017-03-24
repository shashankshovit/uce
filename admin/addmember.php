<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; ?>
<?php if($role!="deptadmin" || $role!="manager") header("Location:../errors/permissionerror.php"); ?>
<?php

$userid=strtolower($_POST['id']);
$name=$_POST['name'];
$pass=$_POST['pass'];
$year=$_POST['year'];
$serial=$_POST['serial'];
$type=$_POST['type'];
$roll="".$year."/".$serial."";


	$query="insert into login values ('".$userid."','".$name."','".$dept."','".$type."','".$pass."')";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/databaseerror.php?error=login_insertion");
	else header("Location:../admin/managementportal.php?admin=$userid created successfully.");
	
	}
	else header("Location:../errors/index.php");

?>