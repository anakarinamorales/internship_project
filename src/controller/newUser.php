<?php
	
	require_once("db.php");
	require_once("../models/User.php");
	require_once("userPasswordGenerator.php");
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
		header("Location: http://".$host."/public/pages/newUser.php?msg=Usuário cadastrado com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newUser.php?msg=Erro ao salvar usuário");
	}
?>