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
        <meta name="description" content="Project Examples" />
        <meta name="author" content="Rob" />
		<title>Project Examples</title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<script src="js/cts.js"></script>
</head>
<body>
<div class="hero-image">
<div class="hero-text">
<h2 style="font-size:3vw">Project</h2>
<a href="https://robsnest.net/development" border="0" title="Your IP Address is <?php echo $_SERVER['REMOTE_ADDR']?>"><img src="img/Examples.png" /></a>
</div>
</div>

<div class="rc_content">
	<a href="https://www.cumberlandcrier.com" target="_blank" border="0"><img src="images/crier.png"></a>
	<a href="https://www.cumberlandcrier.com/rgflyby" target="_blank" border="0"><img src="images/rgflyby.png"></a>
	<a href="https://www.cumberlandcrier.com/sliderz" target="_blank"border="0"><img src="images/sliderz.png"></a>
	<a href="https://www.cumberlandcrier.com/secrets" target="_blank" border="0"><img src="images/secrets.png"></a>
	<a href="https://robsnest.net/development/login" class="secLink" target="_blank"><img src="images/pwProtectedWebpage.png"></a>
</div>
</body>
</html>

