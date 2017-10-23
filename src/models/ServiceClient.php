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
	private $subscription_date;
	private $client;
	private $service;
	private $subscription_type;
	private $payment_method;

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
		return $this->subscription_date;
	}

	public function setSubscriptionDate(date $subscriptionDate)
	{
		$this->subscription_date = $subscriptionDate;
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
		return $this->subscription_type;
	}

	public function setSubscriptionType(SubscriptionType $subscriptionType)
	{
		$this->subscription_type = $subscriptionType;
	}

	public function getPaymentMethod()
	{
		return $this->payment_method;
	}

	public function setPaymentMethod(PaymentMethod $paymentMethod)
	{
		$this->payment_method = $paymentMethod;
	}
}