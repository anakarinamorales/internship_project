<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class ServiceClient
{
	private $id;
	private $subscriptionDate;
	private $client;
	private $service;
	private $subscriptionType;
	private $paymentMethod;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getSubscriptionDate()
	{
		return $this->subscriptionDate;
	}

	public function setSubscriptionDate(date $subscriptionDate)
	{
		$this->subscriptionDate = $subscriptionDate;
	}

	public function getClient()
	{
		return $this->client;
	}

	public function setClient(Client $client)
	{
		$this->client = $client;
	}

	public function getService()
	{
		return $this->service;
	}

	public function setService(Service $service)
	{
		$this->service = $service;
	}

	public function getSubscriptionType()
	{
		return $this->subscriptionType;
	}

	public function setSubscriptionType(SubscriptionType $subscriptionType)
	{
		$this->subscriptionType = $subscriptionType;
	}

	public function getPaymentMethod()
	{
		return $this->paymentMethod;
	}

	public function setPaymentMethod(PaymentMethod $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}
}