<head>

<?php include("../shared/icon.php"); ?>
<?php include("../mobile/variables.php"); ?>
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href="../css/mobile.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:url(../mobimages/bg.jpg);background-repeat:repeat-x;">
	<table width="98%" align="center" border="0" id="mobile_menu">		
	
		<?php include("../mobile/mobilemenu.php"); ?>

		<tr>
			<td width="29px" colspan=3 align="center"><div id="msg" align="center"><?php include("../shared/messages.php"); ?></div></td>
			<td align="center" ></td>
			<td width="30px"></td>
		</tr>
		
		
		
		
		
		
		<tr>
			<td width="29px" colspan=3><?php include("../mobile/mobilebottom.php"); ?></td>
			<td align="center"></td>
			<td width="30px"></td>
		</tr>
		<tr>
			<td width="29px" colspan=3><?php include("../mobile/mobilefooter.php"); ?></td>
			<td align="center"></td>
			<td width="30px"></td>
		</tr>

		
	</table>

	
<?php include("../shared/terminateconnectionwithucedb.php"); ?>
</body>