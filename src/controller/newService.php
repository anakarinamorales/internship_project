<?php
require_once("db.php");
require_once("../models/Service.php");
require_once("../controller/services.php");
require_once("../controller/serviceSubscriptionTypes.php");

$serviceController = new ServiceController();

$host = getallheaders()['Host'];
session_start();

$mensalSubscription = $_POST['mensalSubscription'];
$semestralSubscription = $_POST['semestralSubscription'];
$anualSubscription = $_POST['anualSubscription'];


$service = new Service();
$service->setDescription($_POST['serviceName']);
$service->setValue(str_replace(',', '.', $_POST['serviceValue']));

$serviceController->insert($service);

$serviceSubscriptionType = new ServiceSubscriptionTypesController();

/*Verifica se as checkboxes foram marcadas e seta no banco
* a ligação entre o plano e o serviço
* ID 1 = mensal
* ID 2 = semestral
* ID 3 = anual
* No caso de alteração dos IDs, alterar as condições de inserção
*/
if (isset($mensalSubscription)) {
	$serviceSubscriptionType->insert($service->getId(), 1);
}

if (isset($semestralSubscription)) {
	$serviceSubscriptionType->insert($service->getId(), 2);
}

if (isset($anualSubscription)) {
	$serviceSubscriptionType->insert($service->getId(), 3);
}


if ($service->getId() > 0) {
	header("Location: http://".$host."/public/pages/services.php?msg=Serviço cadastrado com sucesso!");
} else {
	header("Location: http://".$host."/public/pages/newService.php?msg=Erro ao salvar novo serviço!");
}
?>