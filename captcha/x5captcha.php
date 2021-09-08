<?php
include("../res/x5engine.php");
$nameList = array("8pr","jz8","276","cm4","xsu","zac","w8s","lsc","u73","gwz");
$charList = array("3","Z","2","X","S","7","8","7","X","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
