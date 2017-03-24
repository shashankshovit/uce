<?php
include("../shared/initiateconnectionwithucedb.php");
?>
<?php if(isSet($_SESSION['username'])) { ?>
<?php $username=$_SESSION['username']; $role=$_SESSION['role']; ?>
<?php if($role=="deptadmin" || $role=="manager") { ?>

<?php

	$id=$_POST['memberid'];
	$secondrole=$_POST['memberrole'];

	if(($role=="deptadmin" && ($secondrole=="manager" || $secondrole=="student")) || ($role=="manager" && $secondrole=="student"))	
				{
					$query="delete from login where email='".$id."'";
					$result=mysql_query($query);
					if(!$query) header("Location:..errors/databaseerror.php?error=login_insertion");
					else header("Location:../admin/managementportal.php?admin=$id removed successfully.");
				}
	else 	{
				if(($role=="deptadmin" && $secondrole=="deptadmin") || ($role=="manager" && $secondrole=="manager"))	
					header("Location:../admin/managementportal.php?remove=no");
				else header("Location:../admin/managementportal.php?admin=You don't have the right to remove this user.");			
			} 
	
	} else header("Location:../errors/permissionerror.php");
	}
	else header("Location:../errors/index.php");

?>