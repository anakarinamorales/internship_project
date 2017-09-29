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
			$users = $query->fetchAll();

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

		function deleteUser(int $userId) {
			require("db.php");
			require_once("../../src/models/User.php");

			$sql = "DELETE FROM users WHERE id = :userId;";
			$query = $conn->prepare($sql);
			// var_dump($userId);exit;
			$query->bindParam(':userId', $userId, $conn::PARAM_INT);
			$query->execute();
			$countDel = $query->rowCount();
			//var_dump($countDel);exit;
			return $countDel;

		}
	}
?>