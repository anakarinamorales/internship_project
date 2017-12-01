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
		$client = $query->fetch();

		return $client;
	}

	function insert(Client $client) {
		require("db.php");
		require_once("../../src/models/Client.php");

		$sql = "INSERT INTO clients (first_name, surname, cpf_cnpj, phone, email, address, responsible) VALUES (:first_name, :surname, :cpf_cnpj, :phone, :email, :address, :responsible);";
		$query = $conn->prepare($sql);
		$query->bindValue(':first_name', $client->getFirstName(), $conn::PARAM_STR);
		$query->bindValue(':surname', $client->getSurname(), $conn::PARAM_STR);
		$query->bindValue(':cpf_cnpj', $client->getCpfCnpj(), $conn::PARAM_STR);			
		$query->bindValue(':phone', $client->getPhone(), $conn::PARAM_STR);
		$query->bindValue(':email', $client->getEmail(), $conn::PARAM_STR);
		$query->bindValue(':address', $client->getAddress()->getId(), $conn::PARAM_STR);
		$query->bindValue(':responsible', $client->getResponsible()->getId(), $conn::PARAM_STR);
		$query->execute();

		$client->setId($conn->lastInsertId());

		return $client;
	}

	function update(Client $client) {
		require("db.php");
		require_once("../../src/models/Client.php");

		$sql = "UPDATE clients SET first_name = :name , surname = :surname, cpf_cnpj = :cpf_cnpj, phone = :phone, email = :email WHERE id = :id;";

		$query = $conn->prepare($sql);
		$query->bindValue(':name', $client->getFirstName(), $conn::PARAM_STR);
		$query->bindValue(':surname', $client->getSurname(), $conn::PARAM_STR);
		$query->bindValue(':cpf_cnpj', $client->getCpfCnpj(), $conn::PARAM_STR);			
		$query->bindValue(':phone', $client->getPhone(), $conn::PARAM_STR);
		$query->bindValue(':email', $client->getEmail(), $conn::PARAM_STR);
		$query->bindValue(':id', $client->getId(), $conn::PARAM_INT);
		$query->execute();
		$countUpdate = $query->rowCount();

		return $countUpdate;
	}

	function delete(int $clientId) {
		require("db.php");
		require_once("../../src/models/Client.php");

		$sql = "DELETE FROM clients WHERE id = :id;";
		$query = $conn->prepare($sql);
		$query->bindParam(':id', $clientId, $conn::PARAM_INT);
		$query->execute();

		$countDel = $query->rowCount();

		return $countDel;
	}
}
?>