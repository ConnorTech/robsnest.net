<?php
session_start();

#Check the session var, if not set send to index
$valid = $_SESSION["ValidLogin"];
if($valid != "Logged In") {
	header('Location: warning.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Reminder SMS Text Message</title>
  	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	<link rel="icon" type="image/png" href="images/go.png" />
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
<table height="20" width="100%" border="0"><tr><td></td></tr></table>
<center>
<div class="displayBlk">
<center><iframe width="560" height="315" src="https://www.youtube.com/embed/HG0AsTOxI5g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
<br />
<center><a href="validuser.php" class="formtext"><font color="#0000FF">Secured Page</font></a></center>
<br />
<center><a href="validuser.php" class="formtext">User is Authorized</a></center>
<br />
<center><a href="logout.php" class="emlink">Logout</a></center>
<br />
</div>
</center>
</body>
</html>
