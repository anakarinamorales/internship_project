<?php
	require_once("db.php");
	require_once("../models/ServiceClient.php");

	$host = getallheaders()['Host'];
	session_start();

	$serviceClientId = $_POST['serviceClientId'];

	//Fazer deletar esse ID da tabela service_clients
?>