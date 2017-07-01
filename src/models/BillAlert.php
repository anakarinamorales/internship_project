<?php

namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class BillAlert
{
	private $id;
	private $status;
	private $bill;

    public function getId()
	{
		return $this->id;
	}

	public function setId(integer $id)
	{
		$this->id = $id;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus(string $status)
	{
		$this->status = $status;
	}

	public function getBill()
	{
		return $this->bill;
	}

	public function setBill(Bill $bill)
	{
		$this->bill = $bill;
	}
}