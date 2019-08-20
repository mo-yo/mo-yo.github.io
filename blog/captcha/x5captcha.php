<?php
include("../res/x5engine.php");
$nameList = array("y62","wpk","r3a","vh5","cps","vc4","e53","acl","4ke","efc");
$charList = array("3","8","7","K","N","3","L","6","7","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
