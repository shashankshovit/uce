<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role!="uceadmin") header("Location:../errors/permissionerror.php"); ?>
<?php

$streamname=ucwords(strtolower($_POST['streamname']));
$streamabb=strtoupper($_POST['streamabb']);
$dept=$streamabb;
$newbranch=$streamabb;
$description=$_POST['description'];
$streamdetail=$_POST['streamdetail'];

	$path="../".$dept."";
	if(file_exists($path)==1) {}
	else mkdir($path);
	
	$pathfrom="../admin/index.php";
	$pathto="../".$dept."/index.php";
	copy($pathfrom, $pathto);



if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") 	|| ($_FILES["file"]["type"] == "image/jpg") 
			|| ($_FILES["file"]["type"] == "image/png") 	|| ($_FILES["file"]["type"] == "image/pjpeg") 
			|| ($_FILES["file"]["type"] == "image/bmp")) && ($_FILES["file"]["size"] < 3*1024*1024))
  {
  if ($_FILES["file"]["error"] > 0)
    {
		//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	$file=$_FILES["file"]["name"];	$i=1;
	$imagelink="../".$dept."/".$file;
    if ($exists=file_exists("../".$dept."/" . $_FILES["file"]["name"]))
      {
		//echo $_FILES["file"]["name"] . " already exists. ";
		while($exists==1)
		{ 	$exists=file_exists("../".$dept."/".$i."_".$file); 	$i++;	}
		$i--;
		$imagelink="../".$dept."/".$i."_".$file;
      }
      move_uploaded_file($_FILES["file"]["tmp_name"], $imagelink);
      echo "Stored in: ".$imagelink;
     
    }
	
	
	
	

	
	$query="describe branches";
	$result=mysql_query($query);
	if(!$result) 
		{
			$query="create table branches (branch varchar(5) primary key)";
			$result=mysql_query($query);
			if(!$result) header("Location:../errors/databaseerror.php?error=branch");
		}

	$query="select branch from branches where branch='".$newbranch."'";
	$result=mysql_query($query);
	if(mysql_num_rows($result)!=1)
		{
			$query="insert into branches values ('".$newbranch."')";
			$result=mysql_query($query);
			if(!$result) header("Location:../errors/databaseerror.php?error=branch_insert");
		}
	//else header("Location:../admin/managementportal.php?admin=$newbranch created successfully.");
	
	$query="describe branch_details";
	$result=mysql_query($query);
	if(!$result) 
		{
			$query="create table branch_details (dept varchar(5) primary key, fullbranch varchar(60), imagelink varchar(50), description varchar(50), detail varchar(1000))";
			$result=mysql_query($query);
			if(!$result) header("Location:../errors/databaseerror.php?error=branch");
		}
	$query="insert into branch_details values ('".$newbranch."','".$streamname."','".$imagelink."','".$description."','".$streamdetail."')";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/databaseerror.php?error=branch_insert");
	else header("Location:../index/departments.php?insertbranch=true");

  }
/*	if not an image file remove coment marks to check file details
	echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
*/
  else header("location: ../index/departments.php?insertbranch=file");
	
	}
	else header("Location:../errors/index.php");

?>