<?php
session_start();

date_default_timezone_set('America/New_York');
$today = date('l F jS Y');
$visitorIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cumberland, Maryland weather forecast." />
        <meta name="author" content="Rob" />
		<title>RobsNest - Cumberland Weather</title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<script src="js/cts.js"></script>
</head>
<body>
<div class="hero-image">
  <div class="hero-text">
    <h2 style="font-size:3vw">RobsNest</h2>
	<a href="https://robsnest.net" border="0" title="Your IP Address is <?php echo $_SERVER['REMOTE_ADDR']?>"><img src="img/bwTux.png" /></a>
  </div>
</div>
<div class="rc_nav" id="centered_nav">
<a href="map.php" title="Cumberland, Maryland">Map</a>
<a href="linusandme.php" title="Linus & Me">Linus & Me</a>
<a href="https://connortechsolutions.com" title="Connor Technology Solutions">Connor Technology Solutions</a>
<a href="weather.php" title="Cumberland Area Weather">Weather</a>
<a href="xip.php" title="External IP Command">XIP</a>
<a href="chat/index.php" title="Chat Room">Chat</a>
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>
<div class="rc_content">
	<center><iframe id="display" style="background: #FFFFFF;" src="https://cumberlandcrier.com/forecast/display.php" name="display" width="80%" height="1800" frameborder="0" scrolling="auto">Your broswer does not support inline frames</iframe></center>
</div>
</body>
</html>

