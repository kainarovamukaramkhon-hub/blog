<?php

    namespace src\View;

    class View{
        private $tamplatesPath;

        public function __construct(string $tamplatesPath){
            $this->tamplatesPath = $tamplatesPath;
        }
        public function renderHtml(string $tamplatesPath, array $vars=[]){
            extract($vars);
            include $this->tamplatesPath.'/'.$tamplatesPath;
        }
    }