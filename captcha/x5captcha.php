<?php
include("../res/x5engine.php");
$nameList = array("5aa","524","lye","hed","sfa","fxn","7tt","6d2","e27","a73");
$charList = array("D","8","L","2","N","W","G","R","H","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
