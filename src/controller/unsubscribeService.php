<?php
require_once("serviceClients.php");

$host = getallheaders()['Host'];
session_start();

$serviceClientId = (int)$_POST['serviceClientId'];

$serviceClient = new ServiceClientController();

// var_dump($clientId);
// print_r($clientId);
$try = $serviceClient->delete($serviceClientId);

if ($try==0) {
	echo "Erro!";
	//header("Location: http://".$host."/public/pages/linkService.php?id=".(int)$clientId);
}else{
	echo "Certo!";
	// include '../../public/pages/modal.php';
	//header("Location: http://".$host."/public/pages/linkService.php?id=".(int)$clientId);
}
?>