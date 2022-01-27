<?
session_start();

$today = date('l F jS Y');
$visitorIP = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Pay Pal Thank You For Your Purchase <?php echo $today?>.</title>
  	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	

	<link rel="icon" type="image/png" href="images/WorkingMan.png" />
	<link rel="stylesheet" type="text/css" id="stylesheet" href="css/main.css" />

<style type="text/css">
div#header{
top: 0;
left: 0;
width: 100%;
height: 3cm;
}
@media screen{
	body>div#header{
	position: fixed;
	}
}
* html div#content{
    height: 100%;
    overflow: auto;
}
</style>

</head>

<body bgcolor="#FFFFFF" text="#000000" topmargin="0">

<center><a href="index.php" class="titletext">Rob's Freelance Service</a></center>

<br />

<table align="center" width="40%"><tr valign="top">
<td align="left">
<center><b>Thank You For Your Purchase</b></center>
<br />
</td></tr></table>

<div id="bottom">
<table align="center" width="100%"><tr valign="bottom">
<td align="center" width="*">
<a href="mailto: rob@robsnest.net"class="tandt">Email rob@robsnest.net</a><br />
<a href="https://robsnest.net" class="tandt"><?php echo $today?></a>&nbsp;&nbsp;<a href="https://robsnest.net" class="tandt"> <span class="tandt" id="myclock"></span></a>
<script type="text/javascript" src="../js/clock.js"></script>
<br />
</td>
</tr></table>
</div>
</body>
</html>
