<?php
	// namespace PROJEst\controller;

	require_once("db.php");
	require_once("../models/Client.php");
	require_once("../models/Address.php");
	require_once("../models/Responsible.php");

	require_once("../controller/addresses.php");
	$addressController = new AddressController();

	require_once("../controller/responsibles.php");
	$responsibleController = new ResponsibleController();

	require_once("../controller/clients.php");
	$clientController = new ClientController();

	$host = getallheaders()['Host'];
	session_start();

	//Variáveis
	$client = new Client();
	$client->setFirstName($_POST['name']);
	$client->setSurname($_POST['surname']);
	$client->setPhone($_POST['phone']);

	$address = new Address();
	$address->setStreet($_POST['street']);
	$address->setNumber($_POST['number']);
	$address->setNeighborhood($_POST['neighborhood']);
	$address->setCity($_POST['city']);
	$address->setState($_POST['state']);
	$address->setCountry($_POST['country']);
	$address->setPostalCode($_POST['postalCode']);
	$addressController->insert($address);

	$responsible = new Responsible();
	$responsible->setName($_POST['responsibleName'].' '.$_POST['responsibleSurname']);
	$responsible->setPhone($_POST['responsiblePhone']);
	$responsible->setEmail($_POST['responsibleEmail']);
	$responsibleController->insert($responsible);

	$client->setAddress($address);
	$client->setResponsible($responsible);

	$clientController->insert($client);

	if ($client->getId() > 0) {
		header("Location: http://".$host."/public/pages/clients.php?msg=Cliente cadastrado com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newClient.php?msg=Erro ao salvar cliente");
	}
?>