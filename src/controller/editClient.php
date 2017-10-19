<?php
	require_once("db.php");

	$host = getallheaders()['Host'];
	session_start();

	//controller do endereço
	require_once("../models/Address.php");
	require_once("addresses.php");
	$addressController = new AddressController();
	
	//controller do responsável
	require_once("../models/Responsible.php");
	require_once("responsibles.php");
	$responsibleController = new ResponsibleController();
	
	//controller do cliente
	require_once("../models/Client.php");
	require_once("clients.php");
	$clientController = new ClientController();

	//id do cliente vindo do form
	$id = $_POST['id'];

	//Variáveis
	$client = new Client();
	$client->setFirstName($_POST['firstName']);
	$client->setSurname($_POST['surname']);
	$client->setPhone($_POST['phone']);

	
	// $address = new Address();
	// $address->setStreet($_POST['street']);
	// $address->setNumber($_POST['number']);
	// $address->setOthers($_POST['others']);
	// $address->setNeighborhood($_POST['neighborhood']);
	// $address->setCity($_POST['city']);
	// $address->setState($_POST['state']);
	// $address->setCountry($_POST['country']);
	// $address->setPostalCode($_POST['postalCode']);

	// $addressId = $address->getId();
	// print_r($addressId);exit;
	// $addressUpdateCount = $address->update($address, $addressId);
	// print_r($addressUpdateCount);
	
	// $responsible = new Responsible();
	// $responsible->setFirstName($_POST['responsibleName']);
	// $responsible->setSurname($_POST['responsibleSurname']);
	// $responsible->setPhone($_POST['responsiblePhone']);
	// $responsible->setEmail($_POST['responsibleEmail']);
	// $responsibleId = $responsible->getId();
	// $responsibleUpdateCount = $responsibleController->update($responsible, $responsibleId);
	// print_r($responsibleId);exit;
	
	// $client->setAddress($address);
	// $client->setResponsible($responsible);
	
	// $updateCount = $clientController->updateClient($client, $id);
	
	if ($updateCount==0) {
		header("Location: http://".$host."/public/pages/newClient.php?msg=Erro ao salvar as alterações!");
	} else {
		header("Location: http://".$host."/public/pages/clients.php?msg=Cliente editado com sucesso!");
	}
?>