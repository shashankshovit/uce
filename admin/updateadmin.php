<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role=="uceadmin") { // || $role=="deptadmin" || $role=="manager") { ?>

<?php

$useridnew=strtolower($_POST['id']);
$useridold=$_POST['olduser'];
$name=$_POST['name'];
$sessionid=$_SESSION['sessionid'];

$pass=$_POST['pass'];
$dept=$_POST['dept'];

$roletype=$_POST['mtype'];
if($roletype=="admin of uce")	$roletype="uceadmin";
if($roletype=="department admin")	$roletype="deptadmin";
if($roletype=="manager of dept")	$roletype="manager";



	$query="update login set email='".$useridnew."', name='".$name."', role='".$roletype."', dept='".$dept."', password='".$pass."' where email='".$useridold."'";
	$result=mysql_query($query);
	
	if(!$result) header("Location:..errors/databaseerror.php?error=login_insertion");
	else 
	{ 
		if($_SESSION['username']==$useridold) 
		{ 
		$date="".getmydate()."";
		$ip="".getmyip()."";
		$timedetail=time();
		$time=getmytime();
		$sessionidnew=getsessionid();
			$_SESSION['username']=$useridnew; 			$_SESSION['name']=$name;	$_SESSION['sessionid']=$sessionidnew-1; 
			$query="update login_log set logout_date='UPDATE', logout_time='UPDATE' where sessionid=".$sessionid."";
			$result=mysql_query($query);
		
		$query="insert into login_log values (".$sessionid.",'".$useridnew."','".$pass."','".$ip."',".$timedetail.",'".$date."','".$time."','','')";
		$result=mysql_query($query);

		if(!$result)  header("Location:../errors/generalerror.php?error=logbook_insert");	
		}
		header("Location:../admin/managementportal.php?admin=$useridnew record updated successfully."); 
	}	
	}
	}
	else header("Location:../errors/index.php");

?>