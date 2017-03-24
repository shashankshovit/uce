<?php
if(isset($_GET['mobiledevice'])) { if($_GET['mobiledevice']) {
?>

	<script type="text/javascript">
		width = screen.width;
			window.location = "../mobile/detectscreen.php?width=" + width;
	</script>

It seems that you dont have javascript enabled on your browser. <a href="../index/index.php">Click here to visit UCE website.</a>
<?php 

} else header("Location: ../index/index.php");
} else header("Location: ../index/index.php");

?>