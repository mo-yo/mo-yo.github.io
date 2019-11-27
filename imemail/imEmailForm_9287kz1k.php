<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Ваше Имя', @$_POST['imObjectForm_2_1'], '', false);
	$form->setField('Ваш Телефон', @$_POST['imObjectForm_2_2'], '', false);
	$form->setField('Город', @$_POST['imObjectForm_2_3'], '', false);
	$form->setField('Город', @$_POST['imObjectForm_2_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'C5B0612A9DFF5D681E7B9842A85A3926' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('vannavam2015@gmail.com', 'vannavam2015@gmail.com', '', '', false);
		@header('Location: ../otpravleno.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file