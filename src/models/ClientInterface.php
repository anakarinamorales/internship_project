<?php

/**
 * Created by Ana Karina Morales Machado
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