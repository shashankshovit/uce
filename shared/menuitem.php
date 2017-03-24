<?php  if(isSet($_SESSION['username'])) $username=$_SESSION['username']; ?>
    <div id="shashank_menu">
	
        <ul><!-- id="nav" class="drop">-->
            <li><a href="../index/index.php" class="current"><img style="border:0;width:15px;height:15px"  src="../images/home3.png" />&nbsp;Home<br /><span>Being Technical</span></a></li>
			<li class="hide"><a href="#">Academics<br /><span>What We Are</span></a>
				<ul>

					<li><a href="../academics/admissions.php" title="Admission Procedure">Admissions</a></li>
					<li><a href="../academics/notifications.php" title="Notifications">Notifications</a></li>
					<li><a href="../academics/administration.php" title="The Administrative Staff">Administration</a></li>
					<li><a href="../academics/faculty.php" title="Our Faculty Team">Faculties</a></li>					

					
					<li><font color="white">__________________</font></li>
					
				</ul>
			</li>
            <li><a href="../index/departments.php" title="Various Departments of College">Departments<br /><span>Our Roots</span></a></li>
            
            <li><a href="http://www.rtu.ac.in/Anukriti2013" title="College's Annual Techno-Cultural Fest" target="_blank">Anukriti<br /><span>Annual Tech Fest</span></a></li>

			<li class="hide"><a href="#">Other Links<br /><span>Some Other Links</span></a>
				<ul>
					<?php if(isSet($_SESSION['username'])) echo("<li><a href=\"../admin/managementportal.php\">Manage Portal");		?>
					<li><a href="http://www.rtu.ac.in" title="The University Website" target="_blank">RTU</a></li>
					<li><a href="http://www.rtuexam.net" title="Results for B.Tech, M.Tech, MBA" target="_blank">Results</a></li>
					<li><a href="../others/consultancy.php" title="Various Consultancies">Consultancies</a></li>
					<li><a href="../gallery/index.php" title="The UCE Gallery">Gallery</a></li>
					<!--<li><a href="#" title=""></a></li>					-->
					<li><?php if(!isSet($_SESSION['username'])) echo("<a href=\"../login/login.php\" title=\"To add/remove notices, notifications, sub-administrators, edit department record; the administrator can login from here. \">Admin Login"); else echo("<a href=\"../login/logout.php\">Logout"); ?></a></li>
					
					<li><font color="white">__________________</font></li>
					
				</ul>
			</li>

            <li><a href="../index/contactus.php" class="last">Contact Us<br /><span>Get To Us</span></a></li>
        </ul>
    </div> <!-- end of menu -->
