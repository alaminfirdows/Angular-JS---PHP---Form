<?php

$db = new mysqli("localhost", "alamin", "alamin", "devclass181");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");
include 'sendmail.php';

$data = json_decode(file_get_contents("php://input")); 


if (isset($data->submit) == 'ok') {
  $name = $data->name;
  $student_id = $data->student_id;
  $email = $data->email;
  $phone = $data->phone;
  $department = $data->department;
  $semester = $data->semester;
  $course = $data->course;
  $why_learn = $data->why_learn;

  $dev_time_sun = $data->dev_time_sun;
  $dev_time_mon = $data->dev_time_mon;
  $dev_time_tue = $data->dev_time_tue;
  $dev_time_wed = $data->dev_time_wed;

  $skill_html = $data->skill_html;
  $skill_css = $data->skill_css;
  $skill_js = $data->skill_js;
  $skill_c = $data->skill_c;
  $skill_cpp = $data->skill_cpp;
  $skill_java = $data->skill_java;
  $skill_php = $data->skill_php;
  $skill_python = $data->skill_python;

  switch ($course) {
    case 'web_dev':
      $course_name = "Web Development";
      break;
    case 'android':
      $course_name = "Android Development";
      break;
    
    default:
      $course_name = "Web Development";
      break;
  }

  $check = $db->query("SELECT * FROM `$course` WHERE email = '$email' OR student_id = '$student_id'");

  if (empty($name) or empty($student_id) or empty($email) or empty($phone) or empty($department) or empty($semester) or empty($course)) {
    $result =  'requred_fields';
  } elseif ($check->num_rows > 0) {
    $result =  'already_registered';
  } 
  else {
    if ($course == 'web_dev') {
      $insert = $db->query("INSERT INTO `web_dev`(`name`, `student_id`, `email`, `phone`, `department`, `semester`, `why_learn`, `dev_time_sun`, `dev_time_mon`, `dev_time_tue`, `dev_time_wed`, `skill_html`, `skill_css`, `skill_js`, `skill_c`, `skill_cpp`, `skill_java`, `skill_php`, `skill_python`) VALUES ('$name', '$student_id', '$email', '$phone', '$department', '$semester', '$why_learn', '$dev_time_sun', '$dev_time_mon', '$dev_time_tue', '$dev_time_wed', '$skill_html', '$skill_css', '$skill_js', '$skill_c', '$skill_cpp', '$skill_java', '$skill_php', '$skill_python')");
    } else {
      $insert = $db->query("INSERT INTO `android` (name, student_id, email, phone, department, semester, why_learn, skill_html, skill_css, skill_js, skill_c, skill_cpp, skill_java, skill_php, skill_python) VALUES ('$name', '$student_id', '$email', '$phone', '$department', '$semester', '$why_learn', '$skill_html', '$skill_css', '$skill_js', '$skill_c', '$skill_cpp', '$skill_java', '$skill_php', '$skill_python')");
    }
    
    
    if ($insert) {
      $result =  'successfully_registered';
      send_mail_to_student($course, $name, $email);
    } else {
      $result =  "can't_accept";
    }
  }

  echo $result;
}
?>