<?php

    namespace src\Models\Comments;
    use \src\Models\User\User;
    use \src\Models\AcrtiveRecordEntity;

    class Comment extends AcrtiveRecordEntity{
        protected $idUser;
        protected $idArticle;
        protected $text;
        protected $dataPost;


        public function getText() :string
        {
            return $this->text;
        }    

        public function setIdUser(User $user){
            $this->idUser = $user->id;
        }
        public function setIdArticle(Article $article){
            $this->idArticle = $article->id;
        }
    }