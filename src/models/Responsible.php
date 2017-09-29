<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Responsible
{
	private $id;
	private $firstName;
	private $surname;
	private $phone;
	private $email;

	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName(string $name)
	{
		$this->name = $name;
	}

	public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

	public function getPhone()
	{
		return $this->phone;
	}

	public function setPhone(string $phone)
	{
		$this->phone = $phone;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}
}