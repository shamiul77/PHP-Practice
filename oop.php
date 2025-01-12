<?php
    class Shamiul{
        public $a, $b, $c;

        public function sum(){
            $this->a = $this->b + $this->c;
            return $this->a;
        }
    }

    $value = new Shamiul();
    $value->b= 100;
    $value->c= 150;


    echo $value->sum();

?>