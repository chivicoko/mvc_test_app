<?php

class Controller {
    
    protected function render($page, array $data = null)
    {
        View::render($page, $data);
        exit();
    }

    protected function redirect($page) {
        $page = SR."/$page";
        header("location: $page");
        exit();
    }
}