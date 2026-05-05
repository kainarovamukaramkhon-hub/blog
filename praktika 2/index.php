<?php

    class cat 
    {
      private $name;
      private $color;
      private $weight;

      public function _construct($name, $color, $weight){
        $this->weight = $weight;
        $this->name = $name;
        $this->color = $color;
      }
      public function setWeight($weight){
        if($weight > 4 || $weight < 0) echo "Неправильное значение веса кошки .";
        else $this->weight = $weight;
      }
      public function getWeight(){
        return $this->weight;
      }
      public function seyHello(){
        echo "Mau<BR>";
        echo "Меня зовут  $this->name <BR>";
      }
         
       public function setColor($color){
        if($color > "black" || $color < "pink") echo "Неправильное значение цвет кошки. Кошки бывают только черный";
        else $this->color = $color;
        } 
       public function getColor(){
         return $this->color;
      }

        public function setName($name){
            $this->name = $name; 
      }
     public function getName(){
     return $this->name;
     }
    }

     $cat = new Cat("Marki","black", 4);
     //$cat1 = new Cat;
     //$cat2 = new Cat;
     $cat->setWeight(4);
     //$cat1->setWeight(4);
     //$cat2->setWeight(4);
     $cat->setColor("black");
     $cat->setName("marki");
     echo $cat->getWeight();
     echo $cat->getColor();
     echo $cat->getName();
     //$cat->color = "black";
     //$cat->name = "marki";
     //$cat->$weight = 5;
     //var_dump($cat);
     
     $cat->seyHello();
     