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
		<title>RobsNest - Me and Linus Torvalds; Oakland, California 2002</title>
		<link rel="icon" type="image/png" href="img/bwTux.png" />	
		<link rel="stylesheet" href="css/cts.css">
		<link rel="stylesheet" href="css/modal.css">
		<script src="js/cts.js"></script>
<style>
div.fancy {
	width: fit-content;
	background-image: url("img/paper.jpg");
  	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  	text-align: center;
	padding: 4px;
	font-size: 12pt;
}
</style>

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
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>
<div class="rc_content">
<table align="center"><tr><td>
<div class="fancy">
<img  id="myImg" src="img/LinusAndMe.png" target="_top" alt="Me and Linus Torvalds; Oakland, California 2002" style="width:100%;max-width:300px" title="Me and Linus Torvalds; Oakland, Ca. 2002" />
</div>
</td></tr></table>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</div>
</script>
</body>
</html>

