<?php
	class SubscriptionTypeController {
		function getAllSubscriptionTypes() {
			require_once("db.php");
			require_once("../../src/models/SubscriptionType.php");

			$sql = "SELECT * FROM subscription_types;";
			$query = $conn->prepare($sql);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'SubscriptionType');
			$subscriptionTypes = $query->fetchAll();

			return $subscriptionTypes;
		}
	}
?>