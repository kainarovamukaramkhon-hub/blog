<?php

    namespace src\Controllers;
    use \src\View\View;
    use \src\Services\DB;

    class MainController{
        private $view;
        private $db;    

        public function __construct(){
            $this->view = new View(dirname(dirname(__DIR__)).'/tamplates');
            $this->db = new DB;
        }

        public function main(){
            $article = $this->db->query('SELECT * FROM `articles`');
              //var_dump($article);
              $this->view->renderHtml('articles/article.php', ['articles'=>$article]);
        }
        public function sayHello(string $name){
            $this->view->renderHtml('main/hello.php', ['name'=>$name]);
        }
    }