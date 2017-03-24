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
$oldabb=$_POST['oldabb'];

echo("".$streamname."++++ ".$streamabb."++++ ".$description."++++ ".$streamdetail."<br/>Errors: ".$_FILES["file"]["type"]." ");

if($_FILES["file"]["type"]=="") 		//	-------------	NO FILE SELECTED		--------------------
{
	$query="update branch_details set dept='".$streamabb."', fullbranch='".$streamname."', description='".$description."', detail='".$streamdetail."' where dept='".$oldabb."'";	
	$result=mysql_query($query);
	
}
else									//	------------------		IF FILE SELECTED	-------------------
{
$imagelinkold="";
$query="select imagelink from branch_details where dept='".$oldabb."'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{	$imagelinkold=$row['imagelink'];	}
if((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") 	|| ($_FILES["file"]["type"] == "image/jpg") 
			|| ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/bmp")) && ($_FILES["file"]["size"] < 3*1024*1024))
  {
	if ($_FILES["file"]["error"] > 0)
    {	header("../index/departments.php?insertbranch=file");	}
	else
    {
	$file=$_FILES["file"]["name"];	$i=1;
	$imagelink="../".$dept."/".$file;
		if ($exists=file_exists("../".$dept."/" . $_FILES["file"]["name"]))
		{
			while($exists==1)
				{ 	$exists=file_exists("../".$dept."/".$i."_".$file); 	$i++;	}
			$i--;
			$imagelink="../".$dept."/".$i."_".$file;
		}
      move_uploaded_file($_FILES["file"]["tmp_name"], $imagelink);
      echo "Stored in: ".$imagelink;
     
	 if(!unlink($imagelinkold));	 
    }
	
	$query="update branch_details set dept='".$newbranch."', fullbranch='".$streamname."', imagelink='".$imagelink."', description='".$description."', detail='".$streamdetail."' where dept='".$oldabb."'";
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/databaseerror.php?error=branch_insert");
	//else header("Location:../index/departments.php?insertbranch=update");
  }
  else header("location: ../index/departments.php?insertbranch=file");
}


	$query="delete from branches where branch='".$oldabb."'";
	$result=mysql_query($query);
	
	$query="insert into branches values (".$streamabb.")";
	$result=mysql_query($query);

	header("location:../index/departments.php?insertbranch=update");

/*
*/	
	}
	else header("Location:../errors/index.php");

?>