<?php
require_once("../../src/controller/clients.php");

//id do cliente que veio pela url
$clientId = $_GET['id'];

//cast pra int do id do cliente
$clientId = (int)$clientId;
//var_dump($clientId);exit;

//controller do cliente
$clientController = new ClientController();

$host = getallheaders()['Host'];
session_start();

$countDel = $clientController->deleteClient($clientId);

//var_dump($countDel);

if ($countDel==0) {
	header("Location: http://".$host."/public/pages/clients.php?msg=Erro ao excluir cliente!");
}else{
	header("Location: http://".$host."/public/pages/clients.php?msg=Cliente excluído com sucesso!");
}
?>