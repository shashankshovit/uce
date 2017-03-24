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
			<td align="center"><h2><img height="25" width="25"  src="../images/notice1.png" /> <u>Notice Board</u><h2></td>
			<td width="30px"></td>
		</tr>
		<tr>
			<td width="29px"></td>
			<td align="center"><table>
<?php

					$query="select * from noticeboard order by noticeid desc";
					$execute=mysql_query($query);
					if(!$execute) { echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available."); $num=0;}
					else
					{
						$num=mysql_num_rows($execute);
						if($num==0) echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available.");
						else
						{							
							while($row=mysql_fetch_array($execute))
							{
								$hyperlink=$row['hyperlink'];
								echo("<tr> <td><img style=\"border:0;width:10px;height:10px\"  src=\"../images/list.jpg\" />&nbsp;Notice No : " . $row['noticeid'] . "</td><td align=\"right\"> Date : " . $row['date'] . "</td>  </tr>");
									if($hyperlink=="")	{
															echo("<tr> <td>Office : <b>" . $row['department'] . "</b> </td><td align=\"right\"> <b>".$row['noticename']."</b></td> </tr>");								
															echo("<tr> <td colspan=2> ".$row['description']."</td> </tr>");
														}
									else	{
												echo("<tr> <td>Office : " . $row['department'] . " </td><td align=\"right\"> <a href=\"".$hyperlink."\" target=\"_blank\" title=\"Click here to know more\">".$row['noticename']."</a></td> </tr>");								
												echo("<tr> <td colspan=2> <a href=\"".$hyperlink."\" title=\"Click here to know more\" target=\"_blank\">".$row['description']."</a></td> </tr>");
											}								
								echo("<tr><td colspan=2><hr/></td></tr>");
								
							}							
						}
					}				
		
			
?>			
			</table></td>
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