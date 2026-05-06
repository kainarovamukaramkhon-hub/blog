<?php
    
    class A{
        public function seyHello(){
            return "Helo, I am A";
        }
    }

    class B extends A{
      public function seyHello(){
        return parent::seyHello(). "It was joke. I am B";
      }
    }

    $a = new A;
    $b = new B;
    echo $a->seyHello(). "<BR>";
    var_dump($a instanceof A);
    echo "<BR>";
    echo $b->seyHello();