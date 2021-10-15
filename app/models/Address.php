<?php

class Address extends Model{
    public $id;
    public $street;
    public $state;
    public $city;


    public function __construct()
    {
        parent::__construct('address');
    }

    


}