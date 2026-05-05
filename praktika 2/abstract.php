<?php
    
    abstract class AbstractClass{
        abstract public function getValue();
        public function printValue(){
            echo "Value ". $this->getValue;
        }

    }
     class ClassA extends AbstractClass{
      public function __construct(private $x){}
      public function getValue(){
        return $this->x;
      }
     }
     
      $a = new ClassA;
      $a->printValue();
      // $abstract = new AbstractClass; fatal error