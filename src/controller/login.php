<?php

namespace PROJEst;



require_once("db.php");
require_once("../models/User.php");

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
	header("Location: http://".$host."/public/pages/login.html?msg=Usuário não existe.");
} else if ($user['password'] == $password) {
	header("Location: http://".$host."/public/pages/index.html");
} else {
	header("Location: http://".$host."/public/pages/login.html?msg=Password está incorreto");
}