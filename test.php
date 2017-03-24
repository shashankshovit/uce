	<?php
/*
$smtpinfo["host"] = "ssl://smtp.gmail.com";  
$smtpinfo["port"] = "465";  
$smtpinfo["auth"] = true;  
$smtpinfo["username"] = "shashankshovit@gmail.com";  
$smtpinfo["password"] = "Shash@nkSh0v1t";  

			//set SMTP php.ini
			ini_set("SMTP", "smtp.gmail.com");
			echo ini_get("SMTP");
			
			
			//setup variables
			$to = "shashankshovit@gmail.com";
			$subject = "Email from testcode";
			$headers="From: admin@uce.com";
			$body ="This email from test site of uce.";
			
			mail($to, $subject, $body, $headers);
			die();
	*/
	
		
	?> 
<?php session_start();
	echo("time exceeded. Now is: ".time()." screen: ".$_SESSION['width']);	
?>
