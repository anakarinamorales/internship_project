<?php
	class SubscriptionTypeController {
		function getAllSubscriptionTypes() {
			require("db.php");
			require_once("../../src/models/SubscriptionType.php");

			$sql = "SELECT * FROM subscription_types;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'SubscriptionType');
			$subscriptionTypes = $query->fetchAll();

			return $subscriptionTypes;
		}

		function getSubscriptionTypeById(int $id) {
			require("db.php");
			require_once("../../src/models/SubscriptionType.php");

			$sql = "SELECT * FROM subscription_types WHERE id = :id;";
			$query = $conn->prepare($sql);
			$query->bindParam(':id', $id, $conn::PARAM_INT);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'SubscriptionType');
			$subscriptionType = $query->fetch();

			return $subscriptionType;
		}
	}
?>