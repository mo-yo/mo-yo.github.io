<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Email', @$_POST['imObjectForm_1_1'], '', false);
	$form->setField('Object', @$_POST['imObjectForm_1_2'], '', false);
	$form->setField('Message', @$_POST['imObjectForm_1_3'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '545805B28FCF72D6DCAD8BE57562F7E9' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('info@example.com', '', 'example@example.com', '', "", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file