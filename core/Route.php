<?php

class Route{
    private $defaultController = 'Home';
    private $defaultMethod = 'Index';
    private $params;

    public function parseUrl() {
        $url = $_GET['url'] ?? ''; // OR $url = $_GET['url'] ?? $new->controller;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $this->configUrl($url);
    }

    private function configUrl($url) {

        $controller = $url[0] == '' ? $this->defaultController : $url[0];
        $controller = ucwords($controller).'Controller';
         
        $method = $url[1] ?? $this->defaultMethod;
        array_shift($url);
        array_shift($url);
        
        $params = count($url) > 1 ? $url : $url[0] ?? null;
       
        if(!class_exists($controller)) {
            dnd("Controller - $controller Does not exist");

        } else if(!method_exists($controller, $method)){
            dnd("Method - $method Does not exist");

        } else {
            $classObj = new $controller;
            $classObj->$method($params);
        }
    }

}

?>
