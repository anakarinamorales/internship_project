<?php
	
	require_once("db.php");
	require_once("../models/User.php");
	require_once("users.php");

	$userController = new UserController();

	$host = getallheaders()['Host'];
	session_start();

	$user = new User();
	$user->setName($_POST['userName']);
	$user->setSurname($_POST['userSurname']);
	$user->setEmail($_POST['userEmail']);
	$user->setPassword('123123');
	$user->setAccountType('USR');

	$userController->insert($user);

	//enviar informações de login para o email cadastrado

	if ($user->getId() > 0) {
		/*Notifica o usuário cadastrado que agora ele possui acesso ao painel*/
		$to = $user->getEmail();
		$subject = 'Bem vindo ao sistema 13 Bits Admin!';
		$message = 'Você foi cadastrado como usuário do sistema da 13 Bits.\nAcesse a conta usando esse endereço de e-mail.\nSua senha temporária é 123123. \nVocê pode redefinir a senha através do painel de usuário.';
		$headers = 'From: webmaster@13bitsadmin.com'."\r\n" .
    				'X-Mailer: PHP/' . phpversion();

		$email = mail($to, $subject, $message);
		print_r($email);

		header("Location: http://".$host."/public/pages/newUser.php?msg=Usuário cadastrado com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newUser.php?msg=Erro ao salvar usuário");
	}
?>