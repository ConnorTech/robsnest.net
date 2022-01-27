<?
session_start();

$today = date('l F jS Y');
$visitorIP = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$webpage = "Examples Page";
include("../includes/logit.inc.php");
writeLog($visitorIP, $webpage);
include("includes/notifyrob.inc.php");
NotifyRob($visitorIP, $webpage);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Project Examples</title>
  	
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

<table align="center"><tr align="center" valign="middle">
<td align="center">
<a href="about.php" class="titletext">Project Examples</a></td>
</tr></table>

<br /><br />

<table align="center" width="70%" border="0"><tr>
<td align="center"><a href="https://www.cumberlandcrier.com" target="_blank" border="0"><img src="images/crier.png"></a></td>
<td align="center">&nbsp;</td>
<td align="center"><a href="https://www.cumberlandcrier.com/secrets" target="_blank" border="0"><img src="images/secrets.png"></a></td>
</tr><tr>
<td align="center">&nbsp;</td>
<td align="center"><a href="about.php" title="Project Examples"><img src="images/WorkingMan.png" alt="About Me"  border="0" /></a><br /><a href="about.php" alt="About Me" title="About Me" class="tandt">About Me</a></td>
<td align="center">&nbsp;</td>
</tr><tr valign="bottom">
<td align="center"><a href="https://www.cumberlandcrier.com/rgflyby" target="_blank" border="0"><img src="images/rgflyby.png"></a></td>
<td align="center"><a href="https://www.cumberlandcrier.com/sliderz" target="_blank"border="0"><img src="images/sliderz.png"></a></td>
<td align="center"><a href="https://robsnest.net/development/login" class="secLink" target="_blank"><img src="images/pwProtectedWebpage.png"></a></td>
</tr></table>

<div id="bottom">
<table align="center" width="100%"><tr valign="bottom">
<td align="center" width="*">
<a href="mailto: robsdigs@gmail.com"class="tandt">Email robsdigs@gmail.com</a><br />
<a href="https://robsnest.net" class="tandt"><?php echo $today?></a>&nbsp;&nbsp;<a href="https://robsnest.net" class="tandt"> <span class="tandt" id="myclock"></span></a>
<script type="text/javascript" src="../js/clock.js"></script>
<br />
</td>
</tr></table>
</div>
</body>
</html>
