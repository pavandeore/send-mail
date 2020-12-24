<?php

	if(count($_POST) > 0) {
        
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['comments'];
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";
		
		$body = 
		@"Email sent from ".$name." at ".date("d/m/Y H:i",time())."<br />
		<br />
		Name : $name
		<br/>
		Email is :  $email
		<br />
		Message is : $message
		<br /><br />
		Email end";
		
		if(mail("pavandeore90@gmail.com", "A user sent you an email", $body, $header)) {
			die("true");	
		} else {
			die("There was an error sending the email.");	
		}
	}
	
?>
