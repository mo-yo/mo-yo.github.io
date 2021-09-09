<?php
include("../res/x5engine.php");
$nameList = array("hx8","ve7","xdp","swf","5hk","tt4","xrg","vfc","sp4","ums");
$charList = array("Z","J","C","P","H","5","D","R","3","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
