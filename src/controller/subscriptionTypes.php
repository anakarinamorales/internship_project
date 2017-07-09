<?php
	class SubscriptionTypeController {
		function getAllSubscriptionTypes() {
			require("db.php");
			require_once("../../src/models/SubscriptionType.php");

			$sql = "SELECT * FROM subscription_types;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'SubscriptionType');
			$subscriptionType = $query->fetchAll();

			return $subscriptionType;
		}
	}
?>