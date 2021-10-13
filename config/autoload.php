<?php

include 'config/app.php';


function autoload($class) {
    
    $paths = [CORE_PATH, CONTROLLER_PATH, VIEW_PATH, MODEL_PATH];
    
    foreach($paths as $path) {
        $file = $path.'\\'.$class.'.php';
        if(file_exists($file)) {
            require_once $file;
            break;
        }
    }
}

spl_autoload_register('autoload');
