<?php

#This function uses PHPMailer to send Rob 
#notifications of events that have taken 
#place within the scripts that make up
#The Cumberland Crier website.

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


function NotifyRob($visitorIP, $webpage) {
	$toAddress = "robsdigs@gmail.com"; //To whom you are sending the mail.
	#$toAddress = "2406097379@txt.att.net"; //To send as a text message.
	$fromAddress = "rob@robsnest.net";
	$subject = "$webpage Viewed";
	$now = date('l F jS Y H:i:s');
	$message   = <<<EOT
    	<html>
       	<body>
        	<h>$webpage has been viewd by $visitorIP on $now..</h>
    	</body>
		</html>
EOT;

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth    = true;
	$mail->Host        = "smtp.gmail.com";
	$mail->Port        = 587;
	$mail->SMTPOptions = array(
    	'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    	)
	);
	$mail->IsHTML(true);
	$mail->Username = "robsdigs@gmail.com"; // your gmail address
	$mail->Password = "dfoqsakhyxlyfnhb"; // password
	$mail->SetFrom("$fromAddress");
	$mail->Subject = $subject; // Mail subject
	$mail->Body    = $message;
	$mail->AddAddress($toAddress);
	$mail->send();
	#if (!$mail->Send()) {
    #	echo "Failed to send mail";
	#} else {
    #	echo "Mail sent succesfully";
	#}
}

?>
