<?php
	// namespace PROJEst\controller;

	class AddressController {
		function insert(Address $address) {
			require("db.php");
			require_once("../models/Address.php");

			$sql = "INSERT INTO addresses (street, number, others, neighborhood, city, state, country, postal_code) VALUES (:street, :number, :others, :neighborhood, :city, :state, :country, :postal_code);";
			$query = $conn->prepare($sql);
			$query->bindValue(':street', $address->getStreet(), $conn::PARAM_STR);
			$query->bindValue(':number', $address->getNumber(), $conn::PARAM_STR);
			$query->bindValue(':others', $address->getOthers(), $conn::PARAM_STR);
			$query->bindValue(':neighborhood', $address->getNeighborhood(), $conn::PARAM_STR);
			$query->bindValue(':city', $address->getCity(), $conn::PARAM_STR);
			$query->bindValue(':state', $address->getState(), $conn::PARAM_STR);
			$query->bindValue(':country', $address->getCountry(), $conn::PARAM_STR);
			$query->bindValue(':postal_code', $address->getPostalCode(), $conn::PARAM_STR);
			$query->execute();

			$address->setId($conn->lastInsertId());

			return $address;
		}
	}
?>