<?php 
	$userid=$_POST['id'];
	$pass=$_POST['pass'];
	//echo("".$username);
	
	$passstate=stristr($pass," or ");
	if($passstate==""); else $pass="ATTEMPT TO CRACK WITH OR";
	
	
	include("../shared/initiateconnectionwithucedb.php");
	
		$date="".getmydate()."";
		$ip="".getmyip()."";
		$time="".getmytime()."";
		$detailtime=time();
		$sessionid=getsessionid();
/*		
		$ip = $_SERVER['REMOTE_ADDR'];
		$ip1=$ip=strtok($ip, ".");		$ip2=$ip=strtok(".");
		$ip3=$ip=strtok(".");			$ip4=$ip=strtok(".");
		$ip="".$ip1.".".$ip2.".".$ip3.".".$ip4.".";
*/
		/*
		$time = gmstrftime("%X");
		$hh=$split=strtok($time, ":");		$mm=$split=strtok(":");
		$sec=$split=strtok(" ");			$part=$split=strtok("");
		
		$mm+=30;		if($mm>=60)	{ $mm-=60; $hh+=1; }
		
		$hh+=5;
		if($hh==12) { if($part=="PM") $hh=0; $part="AM"; }
		if($hh>12) { $hh-=12; if($part=="AM") $part="PM";	else $part="AM";	}
		
		$timing="".$hh.":".$mm.":".$sec." ".$part."";
		
		if($part=="PM") $totaltime = 12*60*60; else $totaltime=0;
		$totaltime += $hh*60*60 + $mm*60 + $sec;
		*/
	
	
	$query="insert into login_log values ($sessionid,'$userid','$pass','$ip',$detailtime,'$date','$time','','')";
	echo($query);
	$result=mysql_query($query);
	if(!$result)  header("Location:../errors/generalerror.php?error=logbook_insert");
	
	if($pass=="ATTEMPT TO CRACK WITH OR") header("Location:../login/login.php?attempt=false");
	else {
	
	$query="select * from login where email='".$userid."' and password='".$pass."'";
	$result=mysql_query($query);
	if(!$result) header("Location:../error/databaseerror.php?error=login_table");
	
	
	while($row=mysql_fetch_array($result))
		{	$username=$row['email'];	$role=$row['role'];		$dept=$row['dept'];		$name=$row['name'];	}
	
	if($username=='zzzzz') { session_destroy();	header("Location:../login/logout.php?attempt=false"); }
	else if($username=="")	header("Location:../login/login.php?state=false");
	else
		{
			ini_set('session.gc_maxlifetime', 10);
			session_start();	
			$_SESSION['username']=$username;
			$_SESSION['role']=$role;
			$_SESSION['dept']=$dept;
			$_SESSION['name']=$name;
			$_SESSION['timedetail']=$detailtime;
			$_SESSION['sessionid']=$sessionid;
			
	
			
			//$string="select "
			if($role=="uceadmin" || $role=="deptadmin" || $role=="manager")	header("Location:../admin/managementportal.php");
			//else if($role="deptadmin")		header("Location:../admin/deptmanagementportal.php");
			else header("Location:../errors/index.php");

		}
	}


?>