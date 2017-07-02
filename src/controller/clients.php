<?php
	// namespace PROJEst\controller;

	class ClientController {
		function getAllClients() {
			require_once("db.php");
			require_once("../../src/models/Client.php");

			$sql = "SELECT * FROM clients;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Client');
			$clients = $query->fetchAll();

			return $clients;
		}
	}
?>