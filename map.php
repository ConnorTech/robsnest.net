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
        <meta name="description" content="Satellite view of Cumberland, Maryland." />
        <meta name="author" content="Rob" />
		<title>RobsNest - Cumberland, Maryland</title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<link rel="stylesheet" href="css/modal.css">
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
<div id="googleMap" style="width:100%;height:700px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(39.64965057650878,-78.75879448145614),
  zoom:14,
  mapTypeId: 'satellite',
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIi43NyV1BxrCfxX1b5YrvjMpkKCrOKlA&callback=myMap"></script>
</div>

</body>
</html>

