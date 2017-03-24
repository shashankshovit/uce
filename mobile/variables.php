<?php
	//session_start();
	include("../shared/initiateconnectionwithucedbmobile.php");
	
	if(isset($_SESSION['time'])) {
	$time=$_SESSION['time'];
	$width=$_SESSION['width'];
	
	if(time()-$time > 216010)	{ session_destroy(); header("Location: ../index.php"); }
	
	} else header("Location: ../index.php");
?>