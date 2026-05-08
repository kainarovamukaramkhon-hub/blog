<?php

    
    spl_autoload_register(function(string $className){
        require_once dirname(__DIR__).'\\'.$className.'.php';
    });
    
    
    
    $route = $_GET['route'] ?? '';
    $routes = require 'routes.php';
    
    foreach($routes as $pattern=>$value){
        $controller = new $value[0];
        $method = $value[1];
        preg_match($pattern, $route, $matches);
        if ($matches){
            unset($matches[0]);
            $controller->$method(...$matches);
            return;
        }
    }
   
    echo "Такая страница не найдена!";

     
