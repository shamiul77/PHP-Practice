<?php
    class Shamiul{
        public $a, $b, $c;

        public function __construct($x, $y)
        {
            $this->b= $x;
            $this->c= $y;
        }

        public function sum(){
            $this->a = $this->b + $this->c;
            return $this->a;
        }
    }

    $value = new Shamiul(1000, 2000);


    echo $value->sum();

?>