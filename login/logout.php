<?php session_start(); 

	$username=$_SESSION['username'];
	$timedetail=$_SESSION['timedetail'];
	$sessionid=$_SESSION['sessionid'];
	session_destroy(); 
	
	include("../shared/initiateconnectionwithucedb.php");
	
	
	/*
		$time = gmstrftime("%X");
		$hh=$split=strtok($time, ":");		$mm=$split=strtok(":");
		$sec=$split=strtok(" ");			$part=$split=strtok("");
		
		$mm+=30;		if($mm>=60)	{ $mm-=60; $hh+=1; }
		
		$hh+=5;
		if($hh==12) { if($part=="PM") $hh=0; $part="AM"; }
		if($hh>12) { $hh-=12; if($part=="AM") $part="PM";	else $part="AM";	}
		
		$timing="".$hh.":".$mm.":".$sec." ".$part."";
	*/
	$time="".getmytime()."";
	$date="".getmydate()."";
	$query="update login_log set logout_date='$date', logout_time='$time' where sessionid=$sessionid and logout_date=''";
	echo($query);
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/generalerror.php?error=update_logout");
	
	
	
	if(isSet($_GET['attempt'])) 
		header("Location:../login/login.php?attempt=false"); 
	else if(isSet($_GET['state'])) 
		header("Location:../login/login.php?state=time_out"); 
	else 
		header("Location:../login/login.php?state=relogin"); 
		
	include("../shared/terminateconnectionwithucedb.php");
?>