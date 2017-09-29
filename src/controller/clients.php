<?php
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

		function getClientById(int $clientId) {
			require("db.php");
			require_once("../../src/models/Client.php");

			$sql = "SELECT * FROM clients c, addresses a, responsibles r WHERE c.id = :clientId AND c.address = a.id AND c.responsible = r.id;";
			$query = $conn->prepare($sql);
			$query->bindParam(':clientId', $clientId, $conn::PARAM_INT);
			$query->execute();
			//$query->setFetchMode($conn::FETCH_CLASS, 'Client');
			$client = $query->fetch();

			return $client;
		}

		function insert(Client $client) {
			require("db.php");
			require_once("../../src/models/Client.php");

			$sql = "INSERT INTO clients (first_name, surname, phone, email, address, responsible) VALUES (:first_name, :surname, :phone, :email, :address, :responsible);";
			$query = $conn->prepare($sql);
			$query->bindValue(':first_name', $client->getFirstName(), $conn::PARAM_STR);
			$query->bindValue(':surname', $client->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':phone', $client->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':email', $client->getEmail(), $conn::PARAM_STR);
			$query->bindValue(':address', $client->getAddress()->getId(), $conn::PARAM_STR);
			$query->bindValue(':responsible', $client->getResponsible()->getId(), $conn::PARAM_STR);
			$query->execute();

			$client->setId($conn->lastInsertId());

			return $client;
		}

		function updateClient(Client $client, int $clientId) {
			require("db.php");
			require_once("../../src/models/Client.php");

			$id = $client->getId();
			var_dump($id);exit;
			$sql = "UPDATE clients SET first_name = :name , surname = :surname, phone = :phone, email = :email, address = :address, responsible = :responsible WHERE id = :clientId;";
			$query = $conn->prepare($sql);
			$query->bindValue(':name', $client->getFirstName(), $conn::PARAM_STR);
			$query->bindValue(':surname', $client->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':phone', $client->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':email', $client->getEmail(), $conn::PARAM_STR);
			$query->bindValue(':address', $client->getAddress(), $conn::PARAM_INT);
			$query->bindValue(':responsible', $client->getResponsible(), $conn::PARAM_INT);
			$query->bindValue(':clientId', $client->getId(), $conn::PARAM_INT);
			$query->execute();
			$countUpdate = $query->rowCount();

			return $countUpdate;
		}
		
		function deleteClient(int $clientId) {
			require("db.php");
			require_once("../../src/models/Client.php");

			$sql = "DELETE FROM clients WHERE id = :clientId;";
			$query = $conn->prepare($sql);
			// var_dump($clientId);exit;
			$query->bindParam(':clientId', $clientId, $conn::PARAM_INT);
			$query->execute();
			$countDel = $query->rowCount();
			//var_dump($countDel);exit;
			return $countDel;
		}

	}
?>