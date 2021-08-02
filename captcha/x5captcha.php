<?php
include("../res/x5engine.php");
$nameList = array("cn7","2z3","6um","pvk","uru","sd3","chf","sfv","nth","wev");
$charList = array("N","4","U","G","A","3","K","D","V","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
