<?php

    namespace src\Models\Articles;
    use \src\Models\User\User;

    class Article{
        private $id;
        private $authorId;
        private $name;
        private $text;
        private $createdAt;
    
    public function __set($name, $value){
          $newProperty = $this->upperToCamel($name);
          $this->$newProperty = $value;
    }

    private function upperToCamel(string $name){
        return lcfirst(str_replace('_', '',ucwords($name,'_')));
    }

    public function getId() :int
    {
        return $this->id;
    }
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
    }