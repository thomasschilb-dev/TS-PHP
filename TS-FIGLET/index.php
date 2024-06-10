<head>
<style type="text/css">
a {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
a:hover {
	color: #31C8F9;
}
.auto-style1 {
	text-align: center;
	font-family: Monospace;
	font-size: 32px;
}
.auto-style2 {
	font-family: Monospace;
	font-size: 18px;
}
.auto-style3 {
	text-align: left;
}
.auto-style6 {
	font-family: Monospace;
	text-align: center;
}
.auto-style7 {
	text-align: center;
}
</style>
<meta content="fonts, figlet, ascii, ts, ts-figlet" name="keywords">
<meta content="My Figlet Fonts" name="description">
<html>
<head>
<meta content="en-us" http-equiv="Content-Language">
<meta content="torrent, tracker, list, trackerlist" name="keywords">
<meta content="My Trackerlist" name="description">
<LINK REL="ICON" TYPE="IMAGE/X-ICON" HREF="favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="shortcut icon" href="favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
<title>FIGLET</title>
<base target="_self">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
.share-tech-mono-regular {
  font-family: "Share Tech Mono", monospace;
  font-weight: 400;
  font-style: normal;
}
a {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	color: #FFFFFF;
}
a:active {
	color: #FFFFFF;
}
a:hover {
	color: #31C8F9;
}
</style>
<body style="color: #FFFFFF; background-color: #000000">
<hr>
<p class="auto-style1"><a target="_self" href="https://www.thomasschilb.com/figlet/"><img src="ts-figlet.png"> <br>
<strong><font color="#FFFFFF">TS-FIGLET</font></strong></a></p>
<p class="auto-style6"><em>Usage: </em> <a href="https://www.thomasschilb.com/figlet/?q=yourtext" target="_self">
<em>https://www.thomasschilb.com/figlet/?q=yourtext</em></a></p>
<hr><br>
<pre class="auto-style3">
<span class="auto-style2"><?php
require_once 'Figlet.php';
$dir= "fonts/";	
$fonts = array(

'fonts/alligator2.flf',
'fonts/bell.flf',
'fonts/big.flf',
'fonts/block.flf',
'fonts/chunky.flf',
'fonts/computer.flf',
'fonts/contessa.flf',
'fonts/cybermedium.flf',
'fonts/graffiti.flf',
'fonts/isometric1.flf',
'fonts/larry3d.flf',
'fonts/mini.flf',
'fonts/redphoenix.flf',
'fonts/univers.flf',
'fonts/script.flf',
'fonts/slant.flf',
'fonts/stop.flf',
'fonts/thin.flf'

);

if(isset($_GET['q'])) {
    $q = $_GET['q'];
} else {
    $q = 'FIGlet';
}

$figlet = new Text_Figlet();

foreach ($fonts as $font) {
	
	$fontname = pathinfo($font, PATHINFO_FILENAME);
	
    echo '<b><a href="' . $font . '">' . $fontname . '</a></b><br>' . "\n";
    $error  = $figlet->LoadFont($font);
    if (PEAR::isError($error)) {
        echo 'Error: ' . $error->getMessage() . "\n";
    } else {
        echo $figlet->LineEcho($q) . "\n";
		echo '<br>';
    }
}
?></span>
<hr>&nbsp;<p class="auto-style7">
<span class="auto-style6">&copy; 2024 TS. MIT. All Rights Reserved.</span></span></p>
<p class="auto-style7">&nbsp;</p>
