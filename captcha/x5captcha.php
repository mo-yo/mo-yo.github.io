<?php
include("../res/x5engine.php");
$nameList = array("jne","fd4","u3u","euc","j3c","sx5","th3","vdw","s8n","wmj");
$charList = array("S","D","D","A","Z","K","W","E","Z","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
