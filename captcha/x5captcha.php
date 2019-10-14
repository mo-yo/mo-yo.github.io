<?php
include("../res/x5engine.php");
$nameList = array("dc4","z3w","4em","un6","vfe","jta","f5t","amx","yyl","wln");
$charList = array("T","Z","R","K","P","K","M","4","N","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
