<?php
include("../res/x5engine.php");
$nameList = array("ejs","k27","yat","che","vxv","eru","7xz","3hz","chs","vde");
$charList = array("C","W","J","S","G","T","6","L","S","N");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
