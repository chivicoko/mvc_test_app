<?php

class LoginController {

    public function index() {
        require_once VIEW_PATH."login.php";
    }

    public function authenticate ($params) {
        dnd($params);
    }
}