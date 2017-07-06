<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Bill
{
	private $id;
	private $billingDate;
	private $dueDate;
	private $value;
	private $paid;
	private $client;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getBillingDate()
	{
		return $this->billingDate;
	}

	public function setBillingDate(date $billingDate)
	{
		$this->billingDate = $billingDate;
	}

	public function getDueDate()
	{
		return $this->dueDate;
	}

	public function setDueDate(date $dueDate)
	{
		$this->dueDate = $dueDate;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setValue(float $value)
	{
		$this->value = $value;
	}

	public function getPaid()
	{
		return $this->paid;
	}

	public function setPaid(boolean $paid)
	{
		$this->paid = $paid;
	}

	public function getClient()
	{
		return $this->client;
	}

	public function setClient(Client $client)
	{
		$this->client = $client;
	}
}