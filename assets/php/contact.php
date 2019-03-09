<?php

if(isset($_POST['message'])){
	
	echo "Here is the responseee!!!";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'cesarano2607@gmail.com';
	$subject = 'MAEESTRO - ' . $name . ' ti ha inviato un messaggio.' ;

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = '<strong> Success!</strong> Your message has been sent. Thank you!';
    }
	else{
		$res['message'] = '<strong>Failed to send mail.</strong> Please mail me to cesarano2607@gmail.com';
	}
	
	echo json_encode($res);
}

?>
