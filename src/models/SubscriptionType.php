<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class SubscriptionType
{
	private $id;
	private $description;
	private $discount;

	public function getId()
	{
		return $this->id;
	}

	public function setId(integer $id)
	{
		$this->id = $id;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription(string $description)
	{
		$this->description = $description;
	}

	public function getDiscount()
	{
		return $this->discount;
	}

	public function setDiscount(integer $discount)
	{
		$this->discount = $discount;
	}
}