<?php
include("../res/x5engine.php");
$nameList = array("v3w","nnc","ksp","3tu","yyu","s6j","t4w","nhz","8tz","4s7");
$charList = array("W","T","L","X","K","J","Z","K","A","W");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
