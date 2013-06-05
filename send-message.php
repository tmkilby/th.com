<?php 

	$email = 'traceyheckler@gmail.com';
	$subject = 'You\'ve received a message from traceyheckler.com';
	$message = 'This email was sent from: ' + $_POST["name"];
	$message += '\nFrom the address: ' + $_POST["email"];
	$message += '\nWith the following message: \n' + $_POST["message"];
	$headers = 'From: traceyheckler@gmail.com' . "\r\n" .
    'Reply-To: traceyheckler@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	if (mail($email, $subject, $message, $headers)) {
		echo "An email has been sent to Tracey Heckler.";
	} else {
		echo "Sorry, but your message could not be sent at this time.";
	}
	
?> 
