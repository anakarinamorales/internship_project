<?php
	class ServiceController {
		function getServiceById(int $id) {
			require("db.php");
			require_once("../../src/models/Service.php");

			$sql = "SELECT * FROM services WHERE id = :id;";
			$query = $conn->prepare($sql);
			$query->bindParam(':id', $id, $conn::PARAM_INT);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Service');
			$services = $query->fetch();

			return $services;
		}

		function getServiceByName($service)
		{
			require("db.php");
			require_once("../../src/models/Service.php");
			$sql = "SELECT * FROM services WHERE description = :description;";
			$query = $conn->prepare($sql);
			$query->bindParam(':description', $id, $conn::PARAM_STR);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Service');
			$services = $query->fetch();
		}

		function getAllServices() {
			require("db.php");
			require_once("../../src/models/Service.php");

			$sql = "SELECT * FROM services;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Service');
			$services = $query->fetchAll();

			return $services;
		}

		function insert(Service $service){
			require("db.php");
			require_once("../../src/models/Service.php");

			$sql = "INSERT INTO services (description, value) VALUES (:serviceName, :serviceValue);";
			$query = $conn->prepare($sql);
			$query->bindValue(':serviceName', $service->getDescription(), $conn::PARAM_STR);
			$query->bindValue(':serviceValue', $service->getValue(), $conn::PARAM_STR) ;
			$query->execute();

			$service->setId($conn->lastInsertId());

			return $service;
		}
	}
?>