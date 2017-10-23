<?php
	require_once("db.php");
	require_once("../models/ServiceClient.php");

	$host = getallheaders()['Host'];
	session_start();

	$clientId = $_POST['clientId'];
	$serviceId = $_POST['serviceId'];
	$subscriptionTypeId = $_POST['subscriptionTypeId'];

	//Inserir essas informações na tabela service_clients
?>