<?php
    
    class Rectange{
        private $x;
        private $y;

        public function __construct(float $x, float $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function calculateSquare() :float
        {
            return $this->$x * $this->$y;
        }
        }

        class Squre(){
            public function __construct(private $x){}
            
            public function __calculateSquare() :float
            {
                return pow($this->x,2);
            }
        }

        class Circle {
            const pi = 3.14;
            public function __construct(private $r){}

            public function calculateSquare() :float 
            {
                return self::pi * ($r **2);
            } 
        }

        $circle = new Circle(5);
        echo $circle-> calculateSquare()
        echo "<BR>";
        $square - new Square(6);
        echo $square->calculateSquare();
        echo "<BR>";

        $arr = [new Circle(5), new Square(6), new Rectangle(4,5)];
        foreach($arr as $figule){
            if ($figule instanceof calculateSquare);
            echo $figule->calculateSquare()."<BR>";
            else echo "Class not instane calculateSquare<BR>";
        }
    

        interface calculateSquare{
            public function calculateSquare() :float;
        }