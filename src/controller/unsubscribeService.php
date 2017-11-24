<?php
require_once("serviceClients.php");

$host = getallheaders()['Host'];
session_start();

$serviceClientId = (int)$_POST['serviceClientId'];
$clientId = (int)$_POST['clientId'];

$serviceClient = new ServiceClientController();

// var_dump($clientId);
// print_r($clientId);
$try = $serviceClient->delete($serviceClientId);

if ($try==0) {
	echo "Erro!";
	header("Location: http://".$host."/public/pages/linkService.php?id=".$clientId."msg=Erro ao desvincular serviço!");
}else{
	echo "Certo!";
	header("Location: http://".$host."/public/pages/linkService.php?id=".$clientId."msg=Serviço desvinculado com sucesso");
}
?>