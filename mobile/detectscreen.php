<?php
session_start();
if(isset($_GET['width'])) {
$_SESSION['width']=$_GET['width'];
$_SESSION['time']=time();
header("Location: ../mobile/mobileindex.php");

} else header("Location: ../index/index.php");
?>