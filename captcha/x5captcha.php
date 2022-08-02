<?php
include("../res/x5engine.php");
$nameList = array("2zm","fyf","76j","kvt","dzn","7w3","nvn","lkv","cde","j8h");
$charList = array("Y","3","7","R","X","K","Z","V","C","6");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
