<?php

    namespace src\Models\Articles;
    use \src\Models\User\User;

    class Article{
        private $text;
        private $title;
        private $author;
    
    public function __construct(string $title, string $text, User $author){
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function setText(string $text){
        $this->text = $text;
    }
    public function setAuthor(string $author){
        $this->author = $author;
    }
    public function getTitle() :string
    {
        return $this->title;
    }
    public function getText() :string
    {
        return $this->text;
    }    
    public function getAuthor() :User
    {
        return $this->author;
    }
    }