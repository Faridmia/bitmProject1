<?php


class Demo {

    public function calculation(){
        if(isset($_POST['btn'])){
            $first_num = $_POST['first_number'];
            $last_num = $_POST['last_number'];
            $choice = $_POST['check'];
            $res = "";
            if($first_num<$last_num) {
                for ($i = $first_num; $i <= $last_num; $i++) {
                    if ($i % 2 != 0 && $choice == 'odd') {
                        $res .= $i . " ";
                    }
                    if ($i % 2 == 0 && $choice == 'Even') {
                        $res .= $i . " ";
                    }

                }
                return $res;
            }

//            else{
//                for ($i = $first_num; $i >= $last_num; $i--) {
//                    if ($i % 2 != 0 && $choice == 'odd') {
//                        $res .= $i . " ";
//                    }
//
//                }
//                return $res;
//            }
        }

    }

}