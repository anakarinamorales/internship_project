<?php
require_once("users.php");

//id do usuário que veio pela url
$userId = $_GET['id'];

//cast pra int do id do usuário
$userId = (int)$userId;
//var_dump($userId);exit;

//controller do usuário
$userController = new UserController();

$host = getallheaders()['Host'];
session_start();

$countDel = $userController->deleteUser($userId);

//var_dump($countDel);

if ($countDel==0) {
	header("Location: http://".$host."/public/pages/showUsers.php?msg=Erro ao excluir usuário!");
}else{
	header("Location: http://".$host."/public/pages/showUsers.php?msg=Usuário excluído com sucesso!");
}
?>