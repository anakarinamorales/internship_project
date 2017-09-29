<?php
require_once("../../src/controller/clients.php");

$host = getallheaders()['Host'];
session_start();

//id do cliente que veio pela url
$clientId = $_GET['id'];

//cast pra int do id do cliente
$clientId = (int)$clientId;
//var_dump($clientId);exit;

//controller do cliente
$clientController = new ClientController();

$client = $clientController->getClientBtId($clientId);

$countUpdate = $clientController->updateClient($clientId);
?>