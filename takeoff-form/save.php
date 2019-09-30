<?php
if (isset($_GET['info'])) {
	$info = ($_GET['info']);
	$color = ($_GET['color']);
} else {
	$info = "";
	$color = "";
}

if ($color == 'red') {
	$card_title = "Registration Failed!";
} else if ($color == 'green') {
	$card_title = "Registration Successful!";
	$info.=  "<br/> Please check your email for more details.";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Take Off Programming Contest by DIU CPC PC - Registration</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
  <link rel="stylesheet" href="styles/angular-material.min.css">
  <link rel="stylesheet" href="styles/app.css">
  <link rel="stylesheet" href="fonts/iconfont/material-icons.css">

  <meta property="og:url" content="http://takeoff.diucpc-pc.club/index.html" />
  <meta property="og:type"  content="article" />
  <meta property="og:title" content="Take Off Programming Contest by DIU CPC PC" />
  <meta property="og:description" content="Take Off Programming Contest by DIU CPC PC - Registration" />
  <meta property="og:image" content="http://takeoff.diucpc-pc.club/images/og.PNG" />
  <meta property="og:locale" content="bn_BD" />
  <meta property="og:site_name" content="DIU CPC PC" />
  <meta property="fb:app_id" content="157257711483979" />
  <link rel="shortcut icon" href="http://www.craftech.com/wp-uploads/2015/05/web1.png">
</head>

<style type="text/css">
	md-card-content.red {
    background: red;
    color: white;
	}
	md-card-content.green {
    background: green;
    color: white;
	}
</style>

<body ng-app="takeoff_registration" ng-cloak>
  <md-toolbar class="md-info">
    <h2 class="md-toolbar-tools">
      <span hide-xs>Take Off Programming Contest by DIU CPC PC - Registration</span>
      <span hide-gt-xs>Registration for Take Off</span>
    </h2>
  </md-toolbar>

  <md-content ng-controller="registration_form_controller" class="md-padding" layout-xs="column" layout="row">

    <md-card class="_md ">
      <md-card-content class="<?php echo $color ?>">
      	<h3><?php echo $card_title; ?></h3>
      	<p><?php echo $info; ?></p>
      </md-card-content>
	  </md-card>
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
