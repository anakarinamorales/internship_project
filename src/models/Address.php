<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Address
{
	private $id;
	private $street;
	private $number;
	private $others;
	private $neighborhood;
	private $city;
	private $state;
	private $country;
	private $postalCode;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getStreet()
	{
		return $this->street;
	}

	public function setStreet(string $street)
	{
		$this->street = $street;
	}

	public function getNumber()
	{
		return $this->number;
	}

	public function setNumber(string $number)
	{
		$this->number = $number;
	}

	public function getOthers()
	{
		return $this->others;
	}

	public function setOthers(string $others)
	{
		$this->others = $others;
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

	public function setPostalCode(string $postalCode)
	{
		$this->postalCode = $postalCode;
	}
}