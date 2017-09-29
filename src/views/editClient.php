<?php
	require_once("../controller/db.php");
	require_once("../models/Client.php");
	require_once("../models/Address.php");
	require_once("../models/Responsible.php");
	
	require_once("../controller/addresses.php");
	$addressController = new AddressController();
	
	require_once("../controller/responsibles.php");
	$responsibleController = new ResponsibleController();
	
	require_once("../controller/clients.php");
	$clientController = new ClientController();

	$id = $_POST['id'];
	var_dump($id);exit;
	
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
	$address->setOthers($_POST['others']);
	$address->setNeighborhood($_POST['neighborhood']);
	$address->setCity($_POST['city']);
	$address->setState($_POST['state']);
	$address->setCountry($_POST['country']);
	$address->setPostalCode($_POST['postalCode']);
	$addressController->insert($address);
	
	$responsible = new Responsible();
	$responsible->setFirstName($_POST['responsibleName']);
	$responsible->setSurname($_POST['responsibleSurname']);
	$responsible->setPhone($_POST['responsiblePhone']);
	$responsible->setEmail($_POST['responsibleEmail']);
	$responsibleController->insert($responsible);
	
	$client->setAddress($address);
	$client->setResponsible($responsible);
	
	$updateCount = $clientController->updateClient($client, $id);
	//var_dump($count);exit;
	
	if ($updateCount==0) {
		header("Location: http://".$host."/public/pages/newClient.php?msg=Erro ao salvar as alterações!");
	} else {
		header("Location: http://".$host."/public/pages/clients.php?msg=Cliente editado com sucesso!");
	}
?>