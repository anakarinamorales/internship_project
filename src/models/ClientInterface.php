<?php

/**
 * Created by Ana Karina Morales Machado
 * Date: 24/05/2017
 */
class ClientInterface //extends Model
{
    public function getId():int;
    public function getFullname():string;
    public function getFirstName():string;
    public function getPhone():string;
    public function getAdress():Adress;
    public function getResponsible():Responsible;

}