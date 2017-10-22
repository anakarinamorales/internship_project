<?php
	// namespace PROJEst\controller;

	class ResponsibleController {
		function insert(Responsible $responsible) {
			require("db.php");
			require_once("../models/Responsible.php");

			$sql = "INSERT INTO responsibles (responsible_name, responsible_surname, responsible_phone, responsible_email) VALUES (:name, :surname, :phone, :email);";
			$query = $conn->prepare($sql);
			$query->bindValue(':name', $responsible->getFirstName(), $conn::PARAM_STR);
			$query->bindValue(':surname', $responsible->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':phone', $responsible->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':email', $responsible->getEmail(), $conn::PARAM_STR);
			$query->execute();

			$responsible->setId($conn->lastInsertId());
			
			return $responsible;
		}

		function update(Responsible $responsible){
			require("db.php");
			require_once("../models/Responsible.php");

			$sql = "UPDATE responsibles SET responsible_name = :name, responsible_surname = :surname, responsible_phone = :phone, responsible_email = :email, updated_at = NOW() WHERE id = :id;";

			$query = $conn->prepare($sql);
			$query->bindValue(':name', $responsible->getFirstName(), $conn::PARAM_STR);
			$query->bindValue(':surname', $responsible->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':phone', $responsible->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':email', $responsible->getEmail(), $conn::PARAM_STR);
			$query->bindValue(':id', $responsible->getId(), $conn::PARAM_INT);
			$query->execute();
			$countUpdate = $query->rowCount();

			return $countUpdate;
		}
	}
?>