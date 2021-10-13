<?php

class RegisterController {

    public function index() {
        require_once VIEW_PATH."register.php";
    }

    public function createUser  ($params) {
       $user = new Users();
       $insert = $user->insert();
       if($insert) {
        header('location: '.SR.'login');
       } else {
           dnd('Failed to register');
       }
    }
}