<?php

    namespace src\Models\Articles;
    use \src\Models\User\User;
    use \src\Models\AcrtiveRecordEntity;

    class Article extends AcrtiveRecordEntity{
        protected $authorId;
        protected $name;
        protected $text;
        protected $createdAt;
    
   
    public function getName() :string
    {
        return $this->name;
    }    
    public function getText() :string
    {
        return $this->text;
    }
    public function getAuthorId()
    {
        return $this->authorId;
    }
    public static function getTableName(){
        return 'articles';
    }
    public function setAuthorId(User $user){
        $this->authorId = $user->id;
    }
    }