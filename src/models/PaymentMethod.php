<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class PaymentMethod
{
	private $id;
	private $description;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
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
}