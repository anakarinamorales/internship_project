<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
 * @since 1.0.0
 */
class Client
{
    private $id;
    private $first_name;
    private $surname;
    private $phone;
    private $address;
    private $responsible;

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
        return $this->first_name;
    }

    public function setFirstName(string $firstName)
    {
        $this->first_name = $firstName;
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

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function getResponsible()
    {
        return $this->responsible;
    }

    public function setResponsible(Responsible $responsible)
    {
        $this->responsible = $responsible;
    }
}