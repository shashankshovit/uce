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
			<td width="29px" colspan=3><hr/></td>
			<td align="center"></td>
			<td width="30px"></td>
		</tr>
		<tr>
			<td width="29px"></td>
			<td align="center"><h3><img height="25" width="25"  src="../mobimages/notice2.png" /> Notifications<h3></td>
			<td width="30px"></td>
		</tr>
		<tr>
			
			<td colspan=3><table>
					<?php
						$query="select * from notifications order by noticeid desc";
						$execute=mysql_query($query);
						if(!$execute) { echo("<tr><td colspan=3 align='center'>There are no notifications currently available.</td></tr>"); $num=0;}
						else
						{
							$num=mysql_num_rows($execute);
							if($num==0) echo("<tr><td colspan=3 align='center'>There are no notifications currently available.</td></tr>");
							else
							{							
								while($row=mysql_fetch_array($execute))
								{
									$hyperlink=$row['hyperlink']; 
									echo("<tr>");
										echo(" <td align='center'> " . $row['noticeid'] . "</td>  ");
										echo(" <td align='center'> " . $row['date'] . "</td> ");
										if($hyperlink=="") 	echo(" <td  align='center'> ".$row['noticename']."</td> ");														
											else			echo(" <td  align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['noticename']."</a></td>");
										
									echo("</tr>");
									
									if($hyperlink=="") 	echo("<tr><td colspan=3 align='center'> ".$row['description']."</td></tr>");													
										else			echo("<tr> <td colspan=3 align='center'> <a href=\"".$hyperlink."\" title='Click here to know more' target='_blank'>".$row['description']."</a></td> </tr>");
									echo("<tr><td colspan=3><hr/></td></tr>");
										
								}							
							}
						}
					 ?>
			</table></td>
			<td ></td>
			<td ></td>
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