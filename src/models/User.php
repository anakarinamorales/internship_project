<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class User {

	private $id;
	private $name;
	private $surname;
	private $email;
	private $password;
	private $accountType;

	public function getId() {
		return $this->id;
	}

	public function setId(int $id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function setSurname(string $surname) {
		$this->surname = $surname;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword(string $password) {
		$this->password = $password;
	}

	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType(string $accountType) {
		$this->accountType = $accountType;
	}
}