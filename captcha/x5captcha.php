<?php
include("../res/x5engine.php");
$nameList = array("33n","kpv","yyf","tge","hrn","yte","8j4","zma","3xm","2dr");
$charList = array("6","R","Y","M","3","G","R","M","A","L");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
