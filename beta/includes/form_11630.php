<?php	
	if (empty($_POST['name_11630']) && strlen($_POST['name_11630']) == 0 || empty($_POST['email_11630']) && strlen($_POST['email_11630']) == 0 || empty($_POST['message_11630']) && strlen($_POST['message_11630']) == 0)
	{
		return false;
	}
	
	$name_11630 = $_POST['name_11630'];
	$email_11630 = $_POST['email_11630'];
	$message_11630 = $_POST['message_11630'];
	$optin_11630 = $_POST['optin_11630'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_11630: $name_11630 \nEmail_11630: $email_11630 \nMessage_11630: $message_11630 \nOptin_11630: $optin_11630 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_11630";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>