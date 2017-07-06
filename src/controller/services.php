<?php
	class ServiceController {
		function getServiceById(integer $id) {
			require_once("db.php");
			require_once("../../src/models/Service.php");

			$sql = "SELECT * FROM services WHERE id = :id;";
			$query = $conn->prepare($sql);
			$query->bindParam(':id', $id, $conn::PARAM_INT);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Service');
			$services = $query->fetch();

			return $services;
		}
	}
?>