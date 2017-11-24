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

		function delete (int $serviceClientId){
			require("db.php");
			require_once("../../src/models/ServiceClient.php");

			$sql = "DELETE FROM services_clients WHERE id = :id;";
			$query = $conn->prepare($sql);
			$query->bindParam(':id', $serviceClientId, $conn::PARAM_INT);
			$query->execute();

			$countDel = $query->rowCount();

			return $countDel;
		}

		function insert (int $clientId, int $serviceId, int $subcriptionTypeId){

		}
	}
?>