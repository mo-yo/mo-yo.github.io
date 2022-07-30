<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Name:', @$_POST['imObjectForm_62_1'], '', false);
	$form->setField('Surname:', @$_POST['imObjectForm_62_2'], '', false);
	$form->setField('Email:', @$_POST['imObjectForm_62_3'], '', false);
	$form->setField('Who is the giftcard for?', @$_POST['imObjectForm_62_4'], '', false);
	$form->setField('Email:', @$_POST['imObjectForm_62_5'], '', false);
	$form->setField('Want to customize it? Add a message!', @$_POST['imObjectForm_62_6'], '', false);
	$fileResult = $form->setFile('Add a picture', $_FILES['imObjectForm_62_7'], $imSettings['general']['public_folder'], '', '');
	if ($fileResult == -1) {
		$msgFileResult = 'Cannot send file: Add a picture';		die(imPrintError($msgFileResult));
}
	if ($fileResult < -1) {
		$msgFileResult = 'В поле "Add a picture" указан неверный формат.';		die(imPrintError($msgFileResult));
}

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'A60FC5BAB1ECF599D25EB0B86FC7F473' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('info@example.com', '', 'example@example.com', '', "", false);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file