<?php

    namespace src\Controllers;
    use \src\View\View;
    use \src\Services\DB;

    class ArticleController{
        private $view;
        private $db;    

        public function __construct(){
            $this->view = new View(dirname(dirname(__DIR__)).'/tamplates');
            $this->db = new DB;
        }

        public function show(int $id){
            $sql = 'SELECT * FROM `articles` WHERE id=:id;';
            $article = $this->db->query($sql,['id'=>$id]);

            if($article == []){
                $this->view->renderHtml('errors/404.php', [], 404);
                return;
            }

            $sql = 'SELECT * FROM `users` WHERE id=:id';
            $user = $this->db->query($sql, ['id'=>$article[0]['author_id']]);
            $this->view->renderHtml('articles/show.php', ['article'=>$article[0], 'user'=>$user[0]]);
            //var_dump($article[0]);
        }

       // public function main(){
         //   $article = $this->db->query('SELECT * FROM `articles`');
              //var_dump($article);
           //   $this->view->renderHtml('articles/article.php', ['articles'=>$article]);
        //}
        //public function sayHello(string $name){
          //  $this->view->renderHtml('main/hello.php', ['name'=>$name]);
        //}
    }