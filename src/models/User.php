<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class User
{
	private $id;
	private $email;
	private $password;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword(string $password)
	{
		$this->password = $password;
	}
}