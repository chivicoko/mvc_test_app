<?php

class View {
    
    public static function render($page, $data = null)
    {
        if(is_array($data)) {
            foreach ($data ?? [] as $key => $value) {
                ${$key} = $value;
            }
        }
        require_once VIEW_PATH . "$page.php";
    }
}