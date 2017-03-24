<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; ?>

<?php

		//if(!isSet($_POST['notice'])) header("Location:../errors/fileerror.php?error=sizelimit");

$filename="";



if ($_FILES["file"]["error"] > 0)
  {	}//	header("Location:../errors/fileerror.php?error=upload");  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
  if (file_exists("../".$dept."/" . $_FILES["file"]["name"]))
      {		header("Location:../errors/fileerror.php?error=exists");  }
    else
      {
		move_uploaded_file($_FILES["file"]["tmp_name"],
		"../".$dept."/" . $_FILES["file"]["name"]);
		echo "Stored in: " . "../".$dept."/" . $_FILES["file"]["name"];
		$filename="../".$dept."/" . $_FILES["file"]["name"];
      }
  }
  
	//if(!isSet($_POST['notice'])) header("Location:../errors/fileerror.php?error=sizelimit");	



$notice=$_POST['notice'];
$date=$_POST['date'];
$dept=$_POST['dept'];
$title=$_POST['title'];
$hlink=$filename;
$description=$_POST['description'];
	$query="insert into noticeboard values ('".$notice."','".$date."','".$dept."','".$hlink."','".$title."','".$description."')";
	

	
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/fileerror.php?error=sizelimit");	//header("Location:../errors/databaseerror.php?error=noticeboard_insertion");
	else{
			//if($role=="uceadmin") 
			header("Location:../admin/managementportal.php?noticeinsert=true"); 
			//else  header("Location:../admin/deptmanagementportal.php?noticeinsert=true");
		} 
	
	}
	else header("Location:../errors/index.php");

?>