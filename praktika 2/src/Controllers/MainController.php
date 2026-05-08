<?php

    namespace src\Controllers;

    class MainController{
        public function main(){
            $path = dirname(dirname(__DIR__));
            require $path.'/templates/main/main.php';
        }
        public function sayHello(string $name){
            echo "Hello, $name!";
        }
    }