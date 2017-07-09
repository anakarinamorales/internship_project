<?php
	// namespace PROJEst\controller;

	class UserController {
		function getAllUsers() {
			require("db.php");
			require_once("../../src/models/User.php");

			$sql = "SELECT * FROM users;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'User');
			$Users = $query->fetchAll();

			return $users;
		}

		function insert(User $user) {
			require("db.php");
			require_once("../../src/models/User.php");

			$sql = "INSERT INTO users (name, surname, email, password, accountType) VALUES (:userName, :userSurname, :userEmail, :password, :accountType);";
			$query = $conn->prepare($sql);
			$query->bindValue(':userName', $user->getName(), $conn::PARAM_STR);
			$query->bindValue(':userSurname', $user->getSurname(), $conn::PARAM_STR);
			$query->bindValue(':userEmail', $user->getEmail(), $conn::PARAM_STR);
			$query->bindValue(':password', $user->getPassword(), $conn::PARAM_STR);
			$query->bindValue(':accountType', $user->getAccountType(), $conn::PARAM_STR);
			$query->execute();

			$user->setId($conn->lastInsertId());

			return $user;
		}
	}
?>