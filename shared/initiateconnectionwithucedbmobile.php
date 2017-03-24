<?php		session_start();	

//		----------------------		Connection setup with UCE DB	--------------------------

	
			include("../shared/start_connection_with_UCE_database.php");
	
	
//		--------------------------------------------------------------------------------------

	
		
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
	
		



	//		entry for each user
	$str="select serial from visitors";		$qry=mysql_query($str);		$num=mysql_num_rows($qry);		$num+=1;
			$date="".getmydate()."";		$ip="".getmyip()."";		$time="".getmytime()."";

	$str="insert into visitors values (".$num.", '".$ip."', '".$date."', '".$time."')";
	$qry=mysql_query($str);
	if(!$qry) header("Location:../errors/generalerror.php?error=visitor_update");
	
	
	
	
//		FUNCTIONS

	
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
	
	

	
	
?>

