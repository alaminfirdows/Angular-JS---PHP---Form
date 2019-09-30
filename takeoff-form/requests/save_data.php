<?php

$db = new mysqli("localhost", "diucpcpc_main", "DTR#XGzMORKP", "diucpcpc_takeoff");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");

//include sendmail
include 'sendmail.php';

$data = json_decode(file_get_contents("php://input")); 


if (isset($data->submit) == 'ok') {
  $name = $data->name;
  $student_id = $data->student_id;
  $email = $data->email;
  $phone = $data->phone;
  $department = $data->department;
  $semester = $data->semester;
  $tshirt_size = $data->tshirt_size;


  $course_name = "Take Off Programming Contest, Fall-2017";

  $check = $db->query("SELECT * FROM `student_list` WHERE email = '$email' OR student_id = '$student_id'");

  if (empty($name) or empty($student_id) or empty($email) or empty($phone) or empty($department) or empty($semester)) {
    $result =  'requred_fields';
  } elseif ($check->num_rows > 0) {
    $result =  'already_registered';
  } else {
    $insert = $db->query("INSERT INTO `student_list` (name, student_id, email, phone, department, semester,tshirt_size) VALUES ('$name', '$student_id', '$email', '$phone', '$department', '$semester', '$tshirt_size')");
    
    if ($insert) {
      $result =  'successfully_registered';
    } else {
      $result =  "can't_accept";
    }
  }
  //send_mail_to_student('Al-Amin', 'amin15-1013@diu.edu.bd');
  send_mail_to_student($name, $email);
  echo $result;
}
?>