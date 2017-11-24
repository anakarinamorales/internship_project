<?php
require_once("serviceClients.php");

$host = getallheaders()['Host'];
session_start();

$clientId = (int)$_POST['clientId'];
$serviceId = (int)$_POST['serviceId'];
$subscriptionTypeId = (int)$_POST['subscriptionTypeId'];
$paymentMethod = 1;

$serviceClient = new ServiceClientController();

$try = $serviceClient->insert($clientId, $serviceId, $subscriptionTypeId, $paymentMethod);

if ($try==0) {
	echo "Erro!";
	header("Location: http://".$host."/public/pages/linkService.php?id=".$clientId."msg=Erro ao assinar serviço!");
}else{
	echo "Certo!";
	header("Location: http://".$host."/public/pages/linkService.php?id=".$clientId."msg=Assinatura realizada com sucesso");
}
?>