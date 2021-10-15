<?php

class Controller {
    
    public function render($page, $data = null)
    {
        View::render($page, $data);
        exit();
    }

    public function redirect($page) {
        $page = SR."/$page";
        header("location: $page");
        exit();
    }
}