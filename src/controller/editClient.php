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

	//Variáveis
	$client = new Client();
	$client->setId($_POST['id']);
	$client->setFirstName($_POST['firstName']);
	$client->setSurname($_POST['surname']);
	$client->setCpfCnpj($_POST['cpf_cnpj']);
	$client->setPhone($_POST['phone']);
	$client->setEmail($_POST['email']);

	$address = new Address();
	$address->setId($_POST['addressId']);
	$address->setStreet($_POST['street']);
	$address->setNumber($_POST['number']);
	$address->setOthers($_POST['others']);
	$address->setNeighborhood($_POST['neighborhood']);
	$address->setCity($_POST['city']);
	$address->setState($_POST['state']);
	$address->setCountry($_POST['country']);
	$address->setPostalCode($_POST['postalCode']);
	
	$responsible = new Responsible();
	$responsible->setId($_POST['responsibleId']);
	$responsible->setFirstName($_POST['responsibleName']);
	$responsible->setSurname($_POST['responsibleSurname']);
	$responsible->setPhone($_POST['responsiblePhone']);
	$responsible->setEmail($_POST['responsibleEmail']);

	$responsibleUpdateCount = $responsibleController->update($responsible);
	$addressUpdateCount = $addressController->update($address);

	$clientUpdateCount = $clientController->update($client);
	
	if ($clientUpdateCount + $responsibleUpdateCount + $addressUpdateCount == 3) {
		header("Location: http://".$host."/public/pages/clients.php?msg=Cliente editado com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newClient.php?msg=Erro ao salvar as alterações!");
	}
?>