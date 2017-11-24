<?php
	class ServiceClientController {
		function getByClientId($clientId) {
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

		function insert (int $clientId, int $serviceId, int $subcriptionTypeId, int $paymentMethod){
			require("db.php");
			require_once("../../src/models/ServiceClient.php");

			$sql = "INSERT INTO services_clients (subscription_date, client, service, subscription_type, payment_method) VALUES (NOW(), :clientId, :serviceId, :subcriptionTypeId, :paymentMethod);";
			$query = $conn->prepare($sql);
			$query->bindParam(':clientId', $clientId, $conn::PARAM_INT);
			$query->bindParam(':serviceId', $serviceId, $conn::PARAM_INT);
			$query->bindParam(':subcriptionTypeId', $subcriptionTypeId, $conn::PARAM_INT);
			$query->bindParam(':paymentMethod', $paymentMethod, $conn::PARAM_INT);
			$query->execute();

			$countDel = $query->rowCount();

			return $countDel;
		}
	}
?>