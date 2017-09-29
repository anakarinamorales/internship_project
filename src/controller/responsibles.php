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
	}
?>