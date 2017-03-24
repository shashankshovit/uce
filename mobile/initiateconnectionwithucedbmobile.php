<?php		session_start();	

//		----------------------		Connection setup with UCE DB	--------------------------

	
			include("../shared/connectwithdb.php");
	
	
//		--------------------------------------------------------------------------------------

	
//	UCE ADMIN DETAILS
	$uceadminuser="uceadminofuce";
	$uceadminname="Deepak Bhatia";
	$ucepass="passwordofuceadminuce";	
		
	if(!$cn)
	{
		header("Location:../errors/connectivity.php");
		die();
	}

	$db=mysql_select_db("uce",$cn);
	if(!$db)
	{
		//echo "Database doesn't exist";
		$dbcreate=mysql_query("create database uce;");
		$dbquery=mysql_query("show databases;");
		//die();
	}
	$db=mysql_select_db("uce",$cn);
	if(!$db)	header("Location:../errors/databaseerror.php?error=database");

	$str="describe login;";	
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table login (email varchar(50) not null primary key, name varchar(30), dept varchar(10), role varchar(10), password varchar(50))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating LOGIN table FAILED");
			if(!$qry)	header("Location:../errors/databaseerror.php?error=login_table");
		$str="describe login;";
		$qry=mysql_query($str);
		$str="insert into login values ('".$uceadminuser."','".$uceadminname."','uce','uceadmin','".$ucepass."')";
		$qry=mysql_query($str);
		if(!$qry)	header("Location:../errors/databaseerror.php?error=login_insertion");
	}

	$path="../uce";
	if(file_exists($path)==1) {}
	else mkdir($path);
	$pathfrom="../admin/index.php";
	$pathto="../uce/index.php";
	copy($pathfrom, $pathto);


/*
	$str="describe ucedept;";	
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table ucedept (email varchar(50) not null primary key, name varchar(30), roll varchar(10), role varchar(10), password varchar(50))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating DEPT OF UCE table FAILED");
			if(!$qry)	header("Location:../errors/databaseerror.php?error=dept_uce");
*/		/*
		$str="describe ucedept;";
		$qry=mysql_query($str);
		$str="insert into ucedept values ('".$uceadminuser."','".$uceadminname."','','uceadmin','".$ucepass."')";
		$qry=mysql_query($str);
		if(!$qry)	header("Location:../errors/databaseerror.php?error=dept_uce_insertion");
		*/
//	}


	$str="describe noticeboard;";
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table noticeboard (noticeid integer not null primary key, date date, department varchar(10), hyperlink varchar(100), noticename varchar(50), description varchar(500))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating NOTICE BOARD table FAILED");
		if(!$qry)	header("Location:../errors/databaseerror.php?error=notice_table");
	}



	$str="describe notifications;";
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table notifications (noticeid integer not null primary key, date date, hyperlink varchar(100), noticename varchar(50), description varchar(500))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating NOTICE BOARD table FAILED");
		if(!$qry)	header("Location:../errors/databaseerror.php?error=notification");
	}


	$str="describe login_log;";
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table login_log (sessionid integer, email varchar(50) , password varchar(50), ip varchar(16), detail_time integer, login_date varchar(10), login_time varchar(12), logout_date varchar(10), logout_time varchar(12))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating LOG BOOK LOGIN table FAILED");
		if(!$qry)	header("Location:../errors/databaseerror.php?error=logbook_login");
		$str="insert into login_log values (1,'demo_entry','demo_password','demo_ip',0,'01-01-2000','00:00:00 AM','01-01-2001','00:00:00 PM')";
		$qry=mysql_query($str);
	}


	$str="describe visitors;";
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table visitors (serial integer, ip varchar(16), date varchar(10), time varchar(12))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating VISITOR table FAILED");
		if(!$qry)	header("Location:../errors/databaseerror.php?error=visitor");
		
		$str="insert into visitors values (1,'000.000.000.000','00-00-0000','00:00:00 AM')";
		$qry=mysql_query($str);
		if(!$qry) header("Location:../errors/databaseerror.php?error=visitor_insert");
	}
	
		


	$str="describe branches;";
	$qry=mysql_query($str);
	if(!$qry)
	{
		$str="create table branches (branch varchar(5))";
		$qry=mysql_query($str);
		if(!$qry)
			echo("creating STREAM/BRANCH table FAILED");
		if(!$qry)	header("Location:../errors/databaseerror.php?error=branch");
		
	}
	


	//		entry for each user
	$str="select serial from visitors";		$qry=mysql_query($str);		$num=mysql_num_rows($qry);		$num+=1;
			$date="".getmydate()."";		$ip="".getmyip()."";		$time="".getmytime()."";

	$str="insert into visitors values (".$num.", '".$ip."', '".$date."', '".$time."')";
	$qry=mysql_query($str);
	if(!$qry) header("Location:../errors/generalerror.php?error=visitor_update");
	
	
	
	
//		FUNCTIONS


	function CheckLogin($uname,$pass)
	{
		$role="nothing";
		$sql="select role from login_data where email='$uname' and password='$pass'";
		$result=mysql_query($sql);
		if($row=mysql_fetch_array($result))
		{
			$role=$row["role"];
		}
		return $role;
	}
	function GetData($tabname,$email)
	{
		global $cn;
		$query="Select event from $tabname where email='$email'";
		$result=mysql_query($query,$cn);
		return $result;
	}
	
	function getmydate(){ return(date("d-m-Y")); }
	function getmytime(){ return(date('h:i:s a',time())); }
	function getmyip()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$ip1=$ip=strtok($ip, ".");		$ip2=$ip=strtok(".");
		$ip3=$ip=strtok(".");			$ip4=$ip=strtok(".");
		$ip="".$ip1.".".$ip2.".".$ip3.".".$ip4.".";
		return($ip);
	}
	function getsessionid()
	{
		$query="select sessionid from login_log";
		$result=mysql_query($query);
		$rows=mysql_num_rows($result);		
		return($rows+1);
	}
	/*
	$timing = ""; $totaltime = ""; $currenttime = "";
	function gettime()
	{
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
		$currenttime=$totaltime;
		//if($currenttime<=$timelimit) $currenttime+=86400;
	}
	*/
	
	
	
	
	
	
	
		//		check session period in limits of 20 minutes
	if(isset($_SESSION['username']))
	{
		$timelimit=1200;	//1200 sec = 20 min
		$logintime=$_SESSION['timedetail'];
		$currenttime=time();
		if($currenttime>$logintime+$timelimit)	header("Location:../login/logout.php?state=time_out");
		/*
		$query="select login_detail,date from login_log where email='".$_SESSION['username']."' and login_detail=".$_SESSION['timedetail']."";
		$result=mysql_query($query);
		while($row=mysql_fetch_array($result))
		{
			$logintime=$row['login_detail'];
			$logindate=$row['date'];
		}
		if($currentdate>$logindate || $currenttime>$logintime+$timelimit)	header("Location:../login/logout.php?state=time_out");
		*/	
	}
	
	

	
	
?>

