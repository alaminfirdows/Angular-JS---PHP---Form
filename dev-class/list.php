<?php

//$db = new mysqli("localhost", "diucpcpc_main", "DTR#XGzMORKP", "diucpcpc_DevClass181");
$db = new mysqli("localhost", "alamin", "alamin", "devclass181");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");

$get = $db->query("SELECT * FROM `web_dev`");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Development Training by DIU CPC PC - Registration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel="stylesheet" href="styles/angular-material.min.css">
  <link rel="stylesheet" href="styles/app.css">
  <link rel="stylesheet" href="fonts/iconfont/material-icons.css">

  <meta property="og:url" content="https://goo.gl/EA3F3N" />
  <meta property="og:type"  content="article" />
  <meta property="og:title" content="Development Training by DIU CPC PC - Registration" />
  <meta property="og:description" content="Development Training by DIU CPC PC - Registration" />
  <meta property="og:image" content="https://goo.gl/EA3F3N/images/og.PNG" />
  <meta property="og:locale" content="bn_BD" />
  <meta property="og:site_name" content="DIU CPC PC" />
  <meta property="fb:app_id" content="157257711483979" />
  <link rel="shortcut icon" href="https://goo.gl/EA3F3N/icon.png">
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
<body ng-app="cpc_class_registration" ng-cloak>
  <md-toolbar class="md-info">
    <h2 class="md-toolbar-tools">
      <span hide-xs><?php echo 'Total Registrations: ('.$get->num_rows.')'; ?></span>
      <span hide-gt-xs><?php echo 'Total Registrations: ('.$get->num_rows.')'; ?></span>
    </h2>
  </md-toolbar>

  <md-content ng-controller="registration_form_controller" class="md-padding" layout-xs="column" layout="row">
    <table width="100%">
      <thead>
        <tr>
          <td>Name</td>
          <td>ID</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Depertment</td>
          <td>Semester</td>
        </tr>
      </thead>
      <tbody>
      <?php
      if ($get->num_rows > 0) {
        while ($row = $get->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['student_id']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['department']; ?></td>
          <td><?php echo $row['semester']; ?></td>
        </tr>
      <?php }
      }
      ?>
      </tbody>
    </table>
  </md-content>

  <md-footer>
    <p align="center" style="margin-bottom: 15px">Developed by Al-Amin Firdows & Powered by DeVerse!</p>
  </md-footer>

  <script src="scripts/angular.min.js"></script>
  <script src="scripts/angular-animate.min.js"></script>
  <script src="scripts/angular-aria.min.js"></script>
  <script src="scripts/angular-messages.min.js"></script>
  <script src="scripts/angular-material.min.js"></script>
  
  <script src="scripts/app.js"></script>
  
</body>

</html>
