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
			<td class="lefty" width="29px"></td>
			<td align="center" class="central"><a href="http://www.rtu.ac.in"><img class="icon"  src="../images/university.png" />&nbsp;RTU</a></td>
			<td class="righty" width="30px"></td>
		</tr>
		<tr>
			<td class="lefty" width="29px"></td>
			<td align="center" class="central"><a href="http://www.rtuexam.net"><img class="icon"  src="../mobimages/notice2.png" />&nbsp;Results</a></td>
			<td class="righty" width="30px"></td>
		</tr>
		<tr>
			<td class="lefty" width="29px"></td>
			<td align="center" class="central"><a href="../mobile/mobilecontactus.php"><img class="icon" style="width:38;height:26"  src="../mobimages/contact.png" />&nbsp;Contact Us</a></td>
			<td class="righty" width="30px"></td>
		</tr>
		<tr>
			<td class="lefty" width="29px"></td>
			<td align="center" class="central"><a href="../mobile/mobileindex.php"><img class="icon"  src="../mobimages/back.png" />&nbsp;Back</a></td>
			<td class="righty" width="30px"></td>
		</tr>

		<tr>
			<td width="29px" colspan=3><hr/></td>
			<td align="center"></td>
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