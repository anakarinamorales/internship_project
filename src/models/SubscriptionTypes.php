<?php

namespace PROJEst;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class SubscriptionTypes
{
	private $id;
	private $email;
	private $password;

	public function getId()
	{
		return $this->id;
	}

	public function setId(integer $id)
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