<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role=="deptadmin" || $role=="manager") { ?>

<?php

$useridnew=strtolower($_POST['id']);
$useridold=$_POST['olduser'];
$name=$_POST['name'];
$sessionid=$_SESSION['sessionid'];
$dept=$_POST['dept'];
$pass=$_POST['pass'];
$type=$_POST['type'];

if($type=="department admin") $type="deptadmin";
if($type=="manager of dept") $type="manager";


	$query="update login set email='".$useridnew."', name='".$name."', role='".$type."', password='".$pass."' where email='".$useridold."' and dept='".$dept."'";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/databaseerror.php?error=login_insertion");
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
			$query="update login_log set logout_date='update', logout_time='update' where sessionid=".$sessionid."";
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