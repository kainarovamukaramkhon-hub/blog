<?php

    namespace src\Controllers;
    use \src\View\View;
    use \src\Models\Articles\Article;
    use \src\Models\User\User;

    class ArticleController{
        private $view;   

        public function __construct(){
            $this->view = new View(dirname(dirname(__DIR__)).'/tamplates');
        }

        public function show(int $id){
            $article = Article::getById($id);
          

            if($article == []){
                $this->view->renderHtml('errors/404.php', [], 404);
                return;
            }

            $sql = 'SELECT * FROM `users` WHERE id=:id';
            $user = User::getBYId($article->getAuthorId());
            $this->view->renderHtml('articles/show.php', ['article'=>$article, 'user'=>$user]);            
        }

        public function create(){
            return $this->view->renderHtml('articles/create.php');
        }
        public function store(){
            $user = User::getById(1);
            $article = new Article;
            $article->setAuthorId($user);
            $article->text = $_POST['text'];
            $article->name = $_POST['name'];
            $article->save();
        }
    }