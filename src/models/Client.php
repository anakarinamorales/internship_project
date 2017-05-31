<?php

declare(strict_types=1);
namespace GERSERV\models;

use Illuminate\Database\Eloquent\Model;



class Client extends \ClientInterface
{
    public function getId()
    {
        //return an int;
    }
    public function getFullname()
    {
        //return a string;
    }
    public function getFirstName()
    {
        //return a string;
    }
    public function getPhone()
    {
        //return a string;
    }
    public function getAdress()
    {
        //return an Adress;
    }
    public function getResponsible()
    {
        //return a Responsible;
    }
}