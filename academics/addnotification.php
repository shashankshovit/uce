<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; $dept=$_SESSION['dept']; ?>

<?php

		//if(!isSet($_POST['notice'])) header("Location:../errors/fileerror.php?error=sizelimit");

$filepath="";

	$path="../notifications";
	if(file_exists($path)==1) {}
	else mkdir($path);
	
	$pathfrom="../admin/index.php";
	$pathto="../notifications/index.php";
	copy($pathfrom, $pathto);




if ($_FILES["file"]["error"] > 0)
  {	}//	header("Location:../errors/fileerror.php?error=upload");  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
	$file=$_FILES["file"]["name"];	$i=1;
	$filepath="../notifications/".$file;
    if ($exists=file_exists("../notifications/" . $_FILES["file"]["name"]))
      {
		//echo $_FILES["file"]["name"] . " already exists. ";
		while($exists==1)
		{ 	$exists=file_exists("../notifications/".$i."_".$file); 	$i++;	}
		$i--;
		$filepath="../notifications/".$i."_".$file;
      }
      move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
      echo "Stored in: ".$filepath;
  }
  
	//if(!isSet($_POST['notice'])) header("Location:../errors/fileerror.php?error=sizelimit");	



$notice=$_POST['notice'];
$date=$_POST['date'];
//$dept=$_POST['dept'];
$title=$_POST['title'];
$hlink=$filepath;
$description=$_POST['description'];
	$query="insert into notifications values ('".$notice."','".$date."','".$hlink."','".$title."','".$description."')";
	

	
	$result=mysql_query($query);
	if(!$result) header("Location:../errors/fileerror.php?error=sizelimit");	//header("Location:../errors/databaseerror.php?error=noticeboard_insertion");
	else{
			//if($role=="uceadmin") 
			header("Location:../academics/notifications.php?noticeinsert=true"); 
			//else  header("Location:../admin/deptmanagementportal.php?noticeinsert=true");
		} 
	
	}
	else header("Location:../errors/index.php");

?>