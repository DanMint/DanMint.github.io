<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_form = 'danymintz@gmail.com';

	$email_subject = "New form submission";

	$email_body = "User Name: $name.\n". "User Email: $visitor_email\n". "User message: $message\n";

	$to = "dannymints@gmail.com";

	$headers = "From: $email_from\r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);
	header("Location: index.html");
?>