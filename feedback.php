<?php
	//if(isset($_POST["emman"])){
	if( isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ){
	// Checking For Blank Fields..
	if($_POST["sender"]==""||$_POST["senderEmail"]==""||$_POST["subject"]==""||$_POST["message"]==""){
	echo "Fill All Fields..";
	}else{
	// Check if the "Sender's Email" input field is filled out
	$email=$_POST['senderEmail'];
	// Sanitize E-mail Address
	$email =filter_var($email, FILTER_SANITIZE_EMAIL);
	// Validate E-mail Address
	$email= filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$email){
	echo "Invalid Sender's Email";
	}
	else{
	$recipient="emmanuel@xsysys.com";
	$subject=$_POST["subject"];
	$sender=$_POST["sender"];
	$senderEmail=$_POST["senderEmail"];
	$message=$_POST["message"];
	$content=$_POST["content"];
	$design=$_POST["design"];
	$usability=$_POST["usability"];
	$overall=$_POST["overall"];
	$expectation=$_POST["expectation"];
	$improveMessage=$_POST["improveMessage"];
	$headers = 'From:'. $email . "\r\n"; // Sender's Email
	// Message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
	// Send Mail By PHP Mail Function
	$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message\n\nratings:\nContent:$content  Design:$design Usability:$usability Overall:$overall Expectation:$expectation\n\nImprovement Message: $improveMessage";
	mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
	echo "Your mail has been sent successfuly ! Thank you for your feedback";
	}
	}
	}
?>
