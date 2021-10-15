<?php

class Users extends Model{
    public $id;
    public $name;
    public $email_address;
    public $password;


    public function __construct()
    {
        parent::__construct('users');
    }

    


}