<?php
     
     
     class Post{
        protected $title;
        protected $text;

        public function __construct($title, $text){
            $this->title = $title;
            $this->text = $text;
        }
     }

     class Lesson extends Post{
        private $homeWork;

        public function __construct($title, $text, $homeWork){
            parent::__construct($title, $text);
            $this->homeWork = $homeWork;
        }
     }

      $post = new Post("Lomar ipsum", "abracadabra");
      var_dump($post);
      $lesson = new Lesson("New Lesson", "OOP", "self framework");
      var_dump($lesson);