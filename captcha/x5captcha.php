<?php
include("../res/x5engine.php");
$nameList = array("vsv","dwr","usw","p3p","c3p","rrh","tgr","red","4j2","54g");
$charList = array("G","6","6","U","H","P","8","G","4","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
