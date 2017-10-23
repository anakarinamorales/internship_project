<?php
	class ServiceSubscriptionTypesController {
		function getByServiceId(int $serviceId){
			//conexão com o banco
			require("db.php");
			require_once("../../src/models/SubscriptionType.php");

			//Seleciona todos os registros da tabela que contém o id do serviço
			$sql = "SELECT subscription_type FROM services_subscription_types WHERE service = :service;";
			$query = $conn->prepare($sql);
			$query->bindParam(':service', $serviceId, $conn::PARAM_INT);
			$query->execute();
			$query->setFetchMode($conn::FETCH_CLASS, 'ServiceSubscriptionTypes');
			$serviceSubscriptionType = $query->fetchAll();

			return $serviceSubscriptionType;
		}
	}
?>