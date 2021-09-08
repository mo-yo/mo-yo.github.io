<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Ваше имя (обязательно)', @$_POST['imObjectForm_35_2'], '', false);
	$form->setField('Ваш e-mail (обязательно)', @$_POST['imObjectForm_35_3'], '', false);
	$form->setField('Сообщение', @$_POST['imObjectForm_35_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'B183AD6D1B50C0F50100C98CB1D10DCC' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('mixa@mixa.com', 'mixa@mixa.com', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file