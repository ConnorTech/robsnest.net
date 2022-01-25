<?php
session_start();

date_default_timezone_set('America/New_York');
$today = date('l F jS Y');
$visitorIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="An information security professional who penetrates a computer system, network, application or other computing resource on behalf of its owners — and with their authorization." />
        <meta name="author" content="Rob" />
		<title>RobsNest - External IP Command</title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<link rel="stylesheet" href="css/modal.css">
		<script src="js/cts.js"></script>
<style>
div.codescreen {
  background-color: #151B24;
  font-size: 12pt;
  margin: auto;
  width: 25%;
  text-align: left;
  padding: 10px;
}
@media screen and (max-width: 820px) {
  div.codescreen {
    width: 80%;
  }
}
</style>

</head>
<body onLoad="typeWriter()">
<div class="hero-image">
<div class="hero-text">
<h2 style="font-size:3vw">RobsNest</h2>
<a href="https://robsnest.net" border="0" title="Your IP Address is <?php echo $_SERVER['REMOTE_ADDR']?>"><img src="img/bwTux.png" /></a>
</div>
</div>
<div class="rc_nav" id="centered_nav">
<a href="map.php" title="Fun With Maps">Map</a>
<a href="linusandme.php" title="Linus & Me">Linus & Me</a>
<a href="https://connortechsolutions.com" title="Connor Technology Solutions">Connor Technology Solutions</a>
<a href="weather.php" title="Cumberland Area Weather">Weather</a>
<a href="xip.php" title="External IP Command">XIP</a>
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>

<div class="rc_content">
	Create a bash script called xip with the following content:
	<div class="codescreen">
		#!/bin/bash
		<br /><br />
		curl https://robsnest.net/ip.php
	</div>
	Make it executable:<br />
	<div class="codescreen">
		chmod +x xip<br />
	</div>
	Move it to a directory in your $PATH such as:<br />
	<div class="codescreen">
		sudo mv xip /usr/local/bin<br />
	</div>
	Now, just type xip at the command prompt:<br />
	<div class="codescreen">
		xip<br />
		Your External IP Address is <?php echo $visitorIp?>
	</div>
</div>

</body>
</html>

