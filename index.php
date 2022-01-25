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
		<meta name="description" content="A hacker is just a person who uses computer programming or technical skills to overcome a challenge or problem. As with most labels, there are good, evil and many that are in between. We are T3n4ci0us!" />
        <meta name="author" content="Rob" />
		<title>RobsNest - <?php echo $today?></title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<script src="js/cts.js"></script>
</head>
<body onLoad="typeWriter()">
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
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>
<div class="rc_content">
	<div class="typeArea"><p id="typearea"></p></div>

	<div id="phoneDiv">
	`En Passant
	</div>
</div>
<script>
var i = 0;
var speed = 50;
var txt = 'A hacker is just a person who uses computer programming or technical skills to overcome a challenge or problem. As with most labels, there are good, evil and many that are in between. We are T3n4ci0us!';
function typeWriter() {
  if (i < txt.length) {
    phone = 'no';
    document.getElementById("typearea").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }else{
    phone = 'yes';
  }
  if(phone === 'yes'){
	showPhone();
  }
}
</script>
</body>
</html>

