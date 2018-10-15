<?php

class Example {

    public $name = "farid mia";
    protected  $city = "mirpur-10";
    private  $country = "Bangladesh";
    private $value;

    public function __construct(){
      // $this->value = $data;
    }

    public function addition(){
        //echo $this->value;
        echo "In additon";

    }

    protected function  subtraction(){
       // echo $this->value;
        echo "In subtraction";
    }
    private function division(){
        echo "division<br/>";
    }

}