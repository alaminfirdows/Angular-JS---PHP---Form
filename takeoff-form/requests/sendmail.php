<?php
function send_mail_to_student($name, $to) {

	// subject
	$subject = 'Registration Seccessful for Take Off Programming Contest';

	// message
	$message = '
	<html>
	<head>
		<title>Registration Seccessful for Take Off Programming Contest</title>
	</head>
	<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #f3f3f3;
	}
	</style>
	<body style="font-family: sans-serif;">
	  <p>Hi '.$name.'!</p>
	  <p>You have Seccessfully registered for Take Off Programming Contest organized by Computer and Programming Club (CPC), Daffodil International University - Permanent Campus.</p><br/>
	  <br/>
	  <p>Thanks</p>
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Additional headers
	$headers .= 'To: '.$name.' <'.$to.'>' . "\r\n";
	$headers .= 'From:  ACM Team - CPC, DIUPC <acm@diucpc-pc.club>' . "\r\n";
	$headers .= 'Cc: admin@diucpc-pc.club' . "\r\n";
	//$headers .= 'Bcc: alaminfirdows@gmail.com' . "\r\n";

	// Mail it
	$send = mail($to, $subject, $message, $headers);
}
?>