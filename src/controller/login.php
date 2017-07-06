<?php
	// namespace PROJEst\controller;

	require_once("db.php");
	require_once("../models/User.php");

	session_start();

	//Variáveis
	$host = getallheaders()['Host'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Corpo
	$sql = "SELECT email, password FROM users WHERE email = :email";
	$query = $conn->prepare($sql);
	$query->bindParam(':email', $email, $conn::PARAM_STR);
	$query->execute();
	$query->setFetchMode($conn::FETCH_CLASS, 'User');
	$user = $query->fetch();

	if (empty($user)) {
		header("Location: http://".$host."/public/pages/login.php?msg=Usuário não existe.");
	} else if ($user->getPassword() == $password) {
		$_SESSION['user'] = $user;
		$_SESSION['password'] = $password;
		$_SESSION['host'] = $host;

		header("Location: http://".$host."/public/pages/index.php");
	} else {
		unset ($_SESSION['user']);
		unset ($_SESSION['password']);
		header("Location: http://".$host."/public/pages/login.php?msg=Password está incorreto");
	}
?>