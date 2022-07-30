<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('', @$_POST['imObjectForm_17_1'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'A04F3F332D8F0B12F0C5F8F277BE5975' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('info@example.com', '', 'example@example.com', '', "", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file