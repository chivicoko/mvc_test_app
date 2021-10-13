<?php

class Users {
    public $id;
    public $name;
    public $email_address;
    public $password;
    public static $con;


    public function __construct() {
        self::$con = new mysqli('localhost', 'root', '', 'mvc');
        if(count($_POST) > 0) {
            foreach($_POST as $key => $value)  {
                if(empty($value)) dnd("$key must not be empty");
                $this->{$key} = $value;
            }
        }
    }

    public function insert() {
        $sql = "INSERT INTO users (`name`, `email_address`, `password`) 
        VALUES('{$this->name}', '{$this->email_address}', '{$this->password}')";
        return $this->executeSql($sql);
    }

    private function executeSql($sql) {
        // mysqli_query(self::$con, $sql);
        return self::$con->query($sql);
    }

    


}