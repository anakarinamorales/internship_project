<?php
	require_once("db.php");
	require_once("../models/Service.php");

	require_once("../controller/services.php");
	$serviceController = new ServiceController();


	$host = getallheaders()['Host'];
	session_start();
	
	$service = new Service();
	$service->setDescription($_POST['serviceName']);
	$service->setValue($_POST['serviceValue']);

	$serviceController->insert($service);

	if ($service->getId() > 0) {
		header("Location: http://".$host."/public/pages/newService.php?msg=Serviço cadastrado com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newService.php?msg=Erro ao salvar novo serviço!");
	}
?>