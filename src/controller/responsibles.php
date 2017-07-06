<?php
	// namespace PROJEst\controller;

	class ResponsibleController {
		function insert(Responsible $responsible) {
			require("db.php");
			require_once("../models/Responsible.php");

			$sql = "INSERT INTO responsibles (name, phone, email) VALUES (:name, :phone, :email);";
			$query = $conn->prepare($sql);
			$query->bindValue(':name', $responsible->getName(), $conn::PARAM_STR);
			$query->bindValue(':phone', $responsible->getPhone(), $conn::PARAM_STR);
			$query->bindValue(':email', $responsible->getEmail(), $conn::PARAM_STR);
			$query->execute();

			$responsible->setId($conn->lastInsertId());
			
			return $responsible;
		}
	}
?>