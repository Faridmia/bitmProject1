<?php


class FullName {

    public function makeFullName($firstName,$lastName){
        $FullName = $firstName.' '.$lastName;

        return $FullName;

    }

    public function makecalculator($data){

        echo "<pre>";
            print_r($data);
        echo "</pre>";

        $btn = $data['btn'];

        switch($btn){
            case '+':
            $result = $data['first_number']+$data['second_number'];
            break;
            case '-':
                $result = $data['first_number']-$data['second_number'];
                break;
            case '*':
                $result = $data['first_number']*$data['second_number'];
                break;
            case '/':
                $result = $data['first_number']/$data['second_number'];
                break;
            case '%':
                $result = $data['first_number']%$data['second_number'];
                break;
        }
        return $result;
    }

}