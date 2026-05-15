<?php

    namespace src\Controllers;
    use \src\View\View;
    use \src\Models\Articles\Article;

    class MainController{
        private $view;  

        public function __construct(){
            $this->view = new View(dirname(dirname(__DIR__)).'/tamplates');
        }

        public function main(){
            $article = Article::findAll();
              //var_dump($article);
              $this->view->renderHtml('articles/article.php', ['articles'=>$article]);
        }
        public function sayHello(string $name){
            $this->view->renderHtml('main/hello.php', ['name'=>$name]);
        }
    }