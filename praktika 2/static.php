<?php

    class A{
        public static function test(int $x){
            echo "x = $x";
        }
    }
    A::test(5);


    class User{
        private $role;
        private $name;
        public function __construct($role, $name){
            $this->name = $name;
            $this->role = $role;
        }
        public static function createAdmin($name){
            return new self($name, 'admin');
        }
    }

    $admin = new User('Ivan', 'admin');
    $stAdmin = User::createAdmin('Admin')
    var_dump($admin);