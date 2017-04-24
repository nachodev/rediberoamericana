<?php
	session_start();
	if(!(isset($_SESSION['security']) && 
       isset($_SESSION['security_key']) && 
       !empty($_POST[$_SESSION['security_key']]) && 
       $_POST[$_SESSION['security_key']] == $_SESSION['security'])){
        /* forms post is from domain as session would 
           not have been started and security would not have been set */
        header('HTTP/1.0 403 Forbidden');
		echo 'You are forbidden!';
    }else{
		require 'PHPMailer/PHPMailerAutoload.php';	
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "rediberoamericanainvestigacion@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "redibero";
		//Set who the message is to be sent from
		$mail->setFrom('rediberoamericanainvestigacion@gmail.com', 'Red Iberoamericana');
		//Set an alternative reply-to address
		$mail->addReplyTo($_POST['email'], $_POST['name']);
		//Set who the message is to be sent to
		$mail->addAddress('info@rediberoamericana.com', $_POST['name']);		
		//Set the subject line
		$mail->Subject = '[Contacto web]: '. $_POST['name'] ;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->Body = $_POST['message']; 
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Message sent!";
		}
	}
?>
