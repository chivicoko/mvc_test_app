<?php

abstract class Model {
    private $data;
    public $db;

    public function __construct($model) {
        $table = $model;

        $this->db = new Database();
        $this->db->table = $table;

        if(count($_POST) > 0) {
            foreach($_POST as $key => $value)  {
                if(empty($value)) dnd("$key must not be empty");
                $this->{$key} = $value;
                $this->data[$key] = $value;
            }
        }
    }

    public function insert() {
        return $this->db->insert($this->data);
    }

}