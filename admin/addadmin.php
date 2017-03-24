<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role!="uceadmin") header("Location:../errors/permissionerror.php"); ?>
<?php

$userid=strtolower($_POST['id']);
$name=$_POST['name'];
$pass=$_POST['pass'];
$role="deptadmin";
$dept=$_POST['dept'];

	$path="../".$dept."";
	if(file_exists($path)==1) {}
	else mkdir($path);
	
	$pathfrom="../admin/index.php";
	$pathto="../".$dept."/index.php";
	copy($pathfrom, $pathto);
	
	/*
	$query="describe ".$dept."dept";
	$result=mysql_query($query);
	if(!$result) 
		{
			$query="create table ".$dept."dept (email varchar(50) not null primary key, name varchar(30), roll varchar(10), role varchar(10), password varchar(50))";
			$result=mysql_query($query);
			if(!$result) header("Location:../errors/databaseerror.php?error=login_table");
		}
	*/

	$query="insert into login values ('".$userid."','".$name."','".$dept."','".$role."','".$pass."')";
	$result=mysql_query($query);
	if(!$query) header("Location:..errors/databaseerror.php?error=login_insertion");
	else header("Location:../admin/managementportal.php?admin=$userid created successfully.");
	
	}
	else header("Location:../errors/index.php");

?>