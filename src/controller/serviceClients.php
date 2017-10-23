<?php
	class ServiceClientController {
		function getByClientId(int $clientId) {
			require("db.php");
			require_once("../../src/models/ServiceClient.php");

			$sql = "SELECT * FROM services_clients WHERE client = :client;";
			$query = $conn->prepare($sql);
			$query->bindParam(':client', $clientId, $conn::PARAM_INT);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'ServiceClient');
			$services = $query->fetchAll();

			return $services;
		}
	}
?>