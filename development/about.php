<?
session_start();

$today = date('l F jS Y');
$visitorIP = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$webpage = "About Me Page";
include("../includes/logit.inc.php");
writeLog($visitorIP, $webpage);
include("includes/notifyrob.inc.php");
NotifyRob($visitorIP, $webpage);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>I can start building your Website or Application <?php echo $today?>.</title>
  	
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

<center><a href="index.php" class="titletext">About Me</a></center>

<br />

<table align="center" width="40%"><tr valign="top">
<td align="left">
<center><b>Work Ethic</b></center>
<br />
I'm careful not to take on a project that I can't handle from start to finish. But once I begin, I am tenacious in completing a project that will meet or preferably exceed the client's request.
</td></tr></table>

<br /><br />

<table align="center" width=95%" border="0"><tr valign="top">
<td with="30%" align="left">
<center><b>Web Application Development</b></center>
<br />
Having nearly 18 years experience in developing Websites and Applications using 
a number of Programming Languages and Database backends, it is hard to imagine 
many Software Developers having more "Real World" experience to meet and exceed 
your expectations for successful project completion.
</td>
<td width=*30%" align="center"><a href="index.php" title="Some examples of my work"><img src="images/WorkingMan.png" alt="Some examples of my work" title="Some examples of my work" border="0" /></a><br /><a href="index.php" alt="Examples" title="Some examples of my work" class="tandt">Examples</a></td>
<td width="40%">
<center><b>Linux Server Administration</b></center>
<br />
With more then 18 years experience setting up and securly maintaining Linux Web and Database 
Servers, you will get the best of the many combinations available to fullfil the requirements 
of your project. Securly and well designed servers will give you the peace of mind you 
deserve while your project quietly runs in the background.
</td>
</tr></table>

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
