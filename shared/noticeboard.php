	<br/><br/>
            <div class="title" align="center"><img style="border:0;width:20px;height:20px"  src="../images/notice1.png" />&nbsp;Notice Board</div>
			<br/>
			<div>
			
			<?php 
				if(isSet($_SESSION['dept'])) $dept=$_SESSION['dept']; 
				
				$query="select * from noticeboard";
				$result=mysql_query($query);
				
				$num=mysql_num_rows($result);
				$num=$num*4+1;
//				while($row=mysql_fetch_array($result))
	//				$num=$row['noticeid'];
		//		$nid=$num+1;
				//echo("not=".$nid);
			?>
			
			<marquee height="500" direction="up" scrolldelay="100"  onmouseover="stop()" onmouseout="start()">
			<table width="75%" align="center">
			
            <?php
				if(isSet($_SESSION['role']))
				{	
					if($_SESSION['role']=="uceadmin")
					{
						$query="select * from noticeboard order by noticeid desc";
						$execute=mysql_query($query);
						if(!$execute) { echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available."); $num=0;}
						else
						{
							$num=mysql_num_rows($execute);
							if($num==0) echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available.");
							else
							{							
								while($row=mysql_fetch_array($execute))
								{
									$hyperlink=$row['hyperlink']; 
									echo("<tr> <td>Notice No : " . $row['noticeid'] . "</td> <td align=\"right\"> <a href=\"../admin/deletenotice.php?notice=".$row['noticeid']."\">Delete Notice</a></td> </tr>");
									echo("<tr> <td>Date : " . $row['date'] . "</td> <td align=\"right\">Office : " . $row['department'] . "</td> </tr>");
									if($hyperlink=="") {
														echo("<tr> <td colspan=2 align=\"center\">Title : ".$row['noticename']."</td> </tr>");
														echo("<tr> <td colspan=2> ".$row['description']."</td> </tr>");
														}
									else	{
												echo("<tr> <td colspan=2 align=\"center\">Title : <a href=\"".$hyperlink."\"  target=\"_blank\"title=\"Click here to know more\">".$row['noticename']."</a></td> </tr>");
												echo("<tr> <td colspan=2> <a href=\"".$hyperlink."\" title=\"Click here to know more\" target=\"_blank\">".$row['description']."</a></td> </tr>");
											}
									echo("<tr><td colspan=2><hr/></td></tr>");
								}							
							}
						}
					}
					else
					{
						$query="select * from noticeboard where department='".$dept."' order by noticeid desc";
						$execute=mysql_query($query);
						if(!$execute) { echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available."); $num=0;}
						else
						{
							$num=mysql_num_rows($execute);
							if($num==0) echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available.");
							else
							{							
								while($row=mysql_fetch_array($execute))
								{			
									$hyperlink=$row['hyperlink'];
									echo("<tr> <td>Notice No : " . $row['noticeid'] . "</td> <td align=\"right\"> <a href=\"../admin/deletenotice.php?notice=".$row['noticeid']."\">Delete Notice</a></td> </tr>");
									echo("<tr> <td>Date : " . $row['date'] . "</td> <td align=\"right\">Office : " . $row['department'] . "</td> </tr>");
									if($hyperlink=="") {
														echo("<tr> <td colspan=2 align=\"center\">Title : ".$row['noticename']."</td> </tr>");
														echo("<tr> <td colspan=2> ".$row['description']."</td> </tr>");
														}
									else	{
												echo("<tr> <td colspan=2 align=\"center\">Title : <a href=\"".$hyperlink."\"  target=\"_blank\"title=\"Click here to know more\">".$row['noticename']."</a></td> </tr>");
												echo("<tr> <td colspan=2> <a href=\"".$hyperlink."\" title=\"Click here to know more\" target=\"_blank\">".$row['description']."</a></td> </tr>");
											}
									echo("<tr><td colspan=2><hr/></td></tr>");
								}							
							}
						}					
					}
				}
				else
				{
					$query="select * from noticeboard order by noticeid desc";
					$execute=mysql_query($query);
					if(!$execute) { echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available."); $num=0;}
					else
					{
						$num=mysql_num_rows($execute);
						if($num==0) echo(" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; There are no notices currently available.");
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
				}
			?>
			</table>
			</marquee>
			
			</div>
