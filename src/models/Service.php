<?php

namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Service
{
	private $id;
	private $description;
	private $value;

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

	public function getValue()
	{
		return $this->value;
	}

	public function setValue(float $value)
	{
		$this->value = $value;
	}
}