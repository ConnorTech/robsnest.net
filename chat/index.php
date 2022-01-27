<?php
session_start();

date_default_timezone_set('America/New_York');
$today = date('l F jS Y');
$visitorIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

function loginForm() {
    echo '
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Enter your chat name:</p>
        <label for="name">Handle:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Submit" />
    </form>
    </div>
    ';
}

if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $fp = fopen ( "chatlog.html", 'a' );
        fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i><br></div>" );
        fclose ( $fp );
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}

if (isset ( $_GET ['logout'] )) {
    
    // Simple exit message
    $fp = fopen ( "chatlog.html", 'a' );
    fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has left the chat session.</i><br></div>" );
    fclose ( $fp );
    
    session_destroy ();
    header ( "Location: index.php" ); // Redirect the user
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A simple Chat Room." />
        <meta name="author" content="Rob" />
		<title>RobsNest - A simple Chat Room</title>
		<link rel="icon" type="image/png" href="../img/bwTux.png" />	
		<link rel="stylesheet" href="../css/cts.css">
		<script src="../js/cts.js"></script>
<style> 
@import url('https://fonts.googleapis.com/css?family=Titillium+Web'); 

form,p,span {
    margin: 0;
    padding: 0;
}

input {
    font: 17px arial;
}

a {
    color: #0BCBD7;
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

#wrapper,#loginform {
    margin: 0 auto;
    padding-bottom: 25px;
    background: #000000;
    width: 100%;
}

#loginform {
    padding-top: 18px;
}

#loginform p {
    margin: 5px;
}

#chatbox {
    text-align: left;
    margin: 0 auto;
    margin-bottom: 25px;
    padding: 10px;
    background: #494949;
    height: 270px;
    width: 95%;
    border: 1px solid #0AC875;
    overflow: auto;
}

#usermsg {
    width: 80%;
    border: 1px solid #ACD8F0;
}

#submit {
    width: 60px;
}

.error {
    color: #ff0000;
}

#menu {
    padding: 12.5px 25px 12.5px 25px;
}

.welcome {
    float: left;
}

.logout {
    float: right;
}

.msgln {
    margin: 0 0 2px 0;
}
div.chatLimiter {
  margin: auto;
  width: 50%;
  text-align: left;
  padding: 10px;
}
@media screen and (max-width: 820px) {
  div.chatLimiter {
    width: 95%;
  }
}
</style>
</head>
<body>
<div class="hero-image">
<div class="hero-text">
<h2 style="font-size:3vw">RobsNest</h2>
<a href="https://robsnest.net" border="0" title="Your IP Address is <?php echo $_SERVER['REMOTE_ADDR']?>"><img src="../img/bwTux.png" /></a>
</div>
</div>
<div class="rc_nav" id="centered_nav">
<a href="../development/index.php" title="Project Examples">Ex.</a>
<a href="../map.php" title="Cumberland, Maryland">Map</a>
<a href="../linusandme.php" title="Linus & Me">Linus & Me</a>
<a href="https://connortechsolutions.com" title="Connor Technology Solutions">Connor Technology Solutions</a>
<a href="../weather.php" title="Cumberland Area Weather">Weather</a>
<a href="../xip.php" title="External IP Command">XIP</a>
<a href="index.php" title="Chat Room">Chat</a>
<a href="javascript:void(0);" title="Menu" style="font-size:18px;" class="icon" onclick="navChange()">&#9776;</a>
</div>
<div class="rc_content">
<div class="chatLimiter">
    <?php
    if (! isset ( $_SESSION ['name'] )) {
        loginForm ();
    } else {
        ?>
<div id="wrapper">
        <div id="menu">
            <p class="welcome">
                Welcome, <b><?php echo $_SESSION['name']; ?></b>
            </p>
            <p class="logout">
                <a id="exit" href="#">Log Out</a>
            </p>
            <div style="clear: both"></div>
        </div>
        <div id="chatbox"><?php
        if (file_exists ( "chatlog.html" ) && filesize ( "chatlog.html" ) > 0) {
            $handle = fopen ( "chatlog.html", "r" );
            $contents = fread ( $handle, filesize ( "chatlog.html" ) );
            fclose ( $handle );
            
            echo $contents;
        }
        ?></div>

        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg" size="63" /> <input
                name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </form>
    </div>
    <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});

//jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'index.php?logout=true';}       
    });
});

//If user submits the form
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});               
        $("#usermsg").attr("value", "");
        loadLog;
    return false;
});

function loadLog(){       
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "chatlog.html",
        cache: false,
        success: function(html){       
            $("#chatbox").html(html); //Insert chat log into the #chatbox div   
            
            //Auto-scroll           
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }               
          },
    });
}

setInterval (loadLog, 2500);
</script>
<?php
    }
    ?>
    <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
</script>
</div>
</div>
</body>
</html>

