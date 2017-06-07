<?php
namespace PROJEst;
/**
 * Created by Ana Karina Morales Machado
 */
class ClientsInterface //extends Model
{
    public function getId():int;
    public function getFullname():string;
    public function getFirstName():string;
    public function getPhone():string;
    public function getAdress():Adress;
    public function getResponsible():Responsible;

}