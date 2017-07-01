<?php

namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Adress
{
	private $id;
	private $neighborhood;
	private $number;
	private $neighborhood;
	private $city;
	private $state;
	private $country;
	private $postalCode;

	public function getId()
	{
		return $this->id;
	}

	public function setId(integer $id)
	{
		$this->id = $id;
	}

	public function getStreet()
	{
		return $this->neighborhood;
	}

	public function setStreet(string $neighborhood)
	{
		$this->neighborhood = $neighborhood;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setNumber(integer $number)
	{
		$this->number = $number;
	}

	public function getNeighborhood()
	{
		return $this->neighborhood;
	}

	public function setNeighborhood(string $neighborhood)
	{
		$this->neighborhood = $neighborhood;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCity(string $city)
	{
		$this->city = $city;
	}

	public function getState()
	{
		return $this->state;
	}

	public function setState(string $state)
	{
		$this->state = $state;
	}

	public function getCountry()
	{
		return $this->country;
	}

	public function setCountry(string $country)
	{
		$this->country = $country;
	}

	public function getPostalCode()
	{
		return $this->postalCode;
	}

	public function setPostalCode(integer $postalCode)
	{
		$this->postalCode = $postalCode;
	}
}