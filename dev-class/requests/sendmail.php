<?php
function send_mail_to_student($course, $name, $to) {
	switch ($course) {
	  case 'web_dev':
	  	$course_name = "Web Development";
	  	$course_trainer = "Md. Al-Amin";
	  	$trainer_email = "alaminfirdows@gmail.com";
	  	$trainer_phone = "+88 01740450457";
	  	$course_routine = "
	  		<ul>
		        <li>SATURDAY | 2.30pm - 4.00pm | AB01 304</li>
		        <li>SUNDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>MONDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>TUESDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>WEDNESDAY | 4.00pm - 5.30pm | AB01 304</li>
		    </ul>";
	  	break;

	  case 'android':
	  	$course_name = "Android App Development";
	  	$course_trainer = "A.G.M. Khair";
	  	$trainer_email = "khair15-961@diu.edu.bd";
	  	$trainer_phone = "+88 01823585800";
	  	$course_routine = "
	  		<ul>
		        <li>TUESDAY | 2.30pm - 4.00pm | AB01 303</li>
		        <li>WEDNESDAY | 4.00pm - 5.30pm | AB01 303</li>
		    </ul>";
	  	break;
	  
	  default:
	  	$course_name = "Web Development";
	  	$course_trainer = "Md. Al-Amin";
	  	$trainer_email = "alaminfirdows@gmail.com";
	  	$trainer_phone = "+88 01740450457";
	  	$course_routine = "
	  		<ul>
		        <li>SATURDAY | 2.30pm - 4.00pm | AB01 304</li>
		        <li>SUNDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>MONDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>TUESDAY | 4.00pm - 5.30pm | AB01 304</li>
		        <li>WEDNESDAY | 4.00pm - 5.30pm | AB01 304</li>
		    </ul>";
	  	break;
	}

	// subject
	$subject = 'Course Registration Seccessful - DIU CPC PC';

	// message
	$message = '
	<html>
	<head>
		<title>Registration Seccessful for ('.$course_name.') Development Training</title>
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
	  <p>You have Seccessfully registered "'.$course_name.'" course for Development Training class that organized by DIU CPC PC.</p><br/>
	  <p>Registered Course info:</p>
	  <ul>
	    <li>Course Name: '.$course_name.'</li>
	    <li>Course Trainer: '.$course_trainer.'</li>
	    <li>Trainer Email: '.$trainer_email.'</li>
	    <li>Trainer Phone: '.$trainer_phone.'</li>
	    <li>Course Routine: '.$course_routine.'</li>
	  </ul>
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
	$headers .= 'From: DIU CPC PC <info@diucpc-pc.club>' . "\r\n";
	$headers .= 'Cc: info@diucpc-pc.club' . "\r\n";
	$headers .= 'Bcc: alaminfirdows@gmail.com' . "\r\n";

	// Mail it
	$send = mail($to, $subject, $message, $headers);
}
send_mail_to_student('web_dev', 'Al-Amin', 'amin15-1013@diu.edu.bd');


?>