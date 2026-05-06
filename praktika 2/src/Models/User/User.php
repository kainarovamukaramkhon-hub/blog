<?php
        class User{
        public function __construct(private string $name){
            $this->name = $name;
        }

        public function setName(string $name){
            $this->name = $name;
        }

        public function getName() :string
        {
            return $this->name;
        }
    }