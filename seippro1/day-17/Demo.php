<?php
require_once 'Example.php';

class Demo extends Example{

    public $age = 22;
    protected $location = "Farmgate";
    private  $mobile = '018497075757';

    public function newOne(){
        //echo "In new one";
        $this->subtraction();

    }

    protected function newTwo(){
        echo "In new Two";

    }

    private function newThree(){
        echo "In new three";

    }

}