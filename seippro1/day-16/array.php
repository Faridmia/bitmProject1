<?php

//
//    $data = [];
//
//    $data[1] = 10;
//    $data[2] = 20;
//    $data[3] = 30;
//
//
//
//    $data['name'] = "farid";
//    $data['city'] = "Mirpur-10";
//    $data['country'] = "Bangladesh";
//
//    echo $data['country'];


//    $data = [10,20,30,'farid','mirpur-10','Bangladesh'];
//
//    echo $data[4];

//    $data = [
//        'name' => 'farid',
//        'city' => 'mirpur-10',
//        'country' => 'Bangladesh'
//    ];

   // echo $data['city'];

//    foreach($data as $value){
//        echo $value."<br/>";
//    }



//    echo '<pre>';
//
//        print_r($data);
//
//    echo '</pre>';

//    var_dump($data);
//
//
//    $data = [];
//
//
//        $data[0][0] = 10;
//        $data[0][1] = 20;
//        $data[0][2] = 30;
//
//        $data[1][0] = 40;
//        $data[1][1] = 50;
//        $data[1][2] = 60;
//
//        $data[2][0] = 70;
//        $data[2][1] = 80;
//        $data[2][2] = 90;
//
//        $data[3][0] = 100;
//        $data[3][1] = 110;
//        $data[3][2] = 120;
//
//        foreach($data as $value){
//            //echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
//
//            foreach($value as $v_value){
//                echo $v_value." ";
//
//            }
//
//            echo "<br/>";
//        }


//
//        function demo($firstName = null,$lastName = null){
//            $fullName = $firstName.' '.$lastName;
//            //echo $fullName;
//            return $fullName;
//        }
//
//
//        echo "<br/>................................<br/>";
//        echo demo("farid","mia");
//
//        echo "<br/>................................<br/>";
//        echo demo("farid");
//
//        echo "<br/>................................<br/>";
//        echo demo("alamin","sheikh");


        class demoTwo{

            public $name = "kamal akon";
            public $city = "mirpur-10";

            function add(){
                echo "in add";
            }

            function hello(){
                echo "in hello";
            }
        }

        $demo = new demoTwo;
        //$demo->add();

        echo $demo->name;
        echo "<br/>";
        echo $demo->city;
?>