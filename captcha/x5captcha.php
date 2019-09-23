<?php
include("../res/x5engine.php");
$nameList = array("ycu","6f4","cva","kgc","dnp","n3y","d6f","5mz","2hn","3yl");
$charList = array("5","S","N","Y","Y","T","A","2","F","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
