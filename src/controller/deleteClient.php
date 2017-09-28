<?php
	
	session_start();

	$client = $_GET["id"];

    require_once("db.php");

    //Corpo
	$sql = "DELETE FROM clients WHERE id = $id";
	$query = $conn->prepare($sql);
	$query->bindParam(':email', $email, $conn::PARAM_STR);
	$query->execute();

    $host = getallheaders()['Host'];

	if ($delete) {
		header("Location: http://".$host."/public/pages/clients.php?msg=Cliente excluído com sucesso!");
	} else {
		header("Location: http://".$host."/public/pages/newClient.php?msg=Erro ao excluir cliente.");
	}
?>