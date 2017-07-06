<?php
	// namespace PROJEst\controller;

	class ClientController {
		function getAllClients() {
			require("db.php");
			require_once("../../src/models/Client.php");

			$sql = "SELECT * FROM clients;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'Client');
			$clients = $query->fetchAll();

			return $clients;
		}

		function insert(Client $client) {
			require("db.php");
			require_once("../../src/models/Client.php");

			$sql = "INSERT INTO clients (first_name, surname, phone, address, responsible) VALUES (:first_name, :surname, :phone, :address, :responsible);";
			$query = $conn->prepare($sql);
			$query->bindValue(':first_name', $client->getFirstName(), $conn::PARAM_STR);
			$query->bindValue(':surname', $client->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':phone', $client->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':address', $client->getAddress()->getId(), $conn::PARAM_STR);
			$query->bindValue(':responsible', $client->getResponsible()->getId(), $conn::PARAM_STR);
			$query->execute();

			$client->setId($conn->lastInsertId());

			return $client;
		}
	}
?>