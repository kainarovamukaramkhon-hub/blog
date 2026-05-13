<?php

    namespace src\Controllers;
    use \src\View\View;
    use \src\Services\DB;
    use \src\Models\Articles\Article;

    class MainController{
        private $view;
        private $db;    

        public function __construct(){
            $this->view = new View(dirname(dirname(__DIR__)).'/tamplates');
            $this->db = new DB;
        }

        public function main(){
            $article = $this->db->query('SELECT * FROM `articles`', [], Article::class);
              //var_dump($article);
              $this->view->renderHtml('articles/article.php', ['articles'=>$article]);
        }
        public function sayHello(string $name){
            $this->view->renderHtml('main/hello.php', ['name'=>$name]);
        }
    }