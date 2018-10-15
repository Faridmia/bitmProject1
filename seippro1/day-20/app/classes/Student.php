<?php
    namespace App\classes;

class Student {

    public function saveStudentInfo($data){
        $link = mysqli_connect('localhost','root','','bitm-basic');
        $sql = "INSERT INTO student (s_name,s_email,s_mobile) VALUES ('$data[s_name]','$data[s_email]','$data[s_mobile]')";
        if( mysqli_query($link,$sql)){
            $message = "Student Info save successfully.....";
            return $message;

        }else{
            die('Query problem'.mysqli_error($link));
        }
    }

    public function getAllStudentInfo(){
        $link = mysqli_connect('localhost','root','','bitm-basic');
        $sql = "SELECT * FROM student";
        if( mysqli_query($link,$sql)){
            $queryResult = mysqli_query($link,$sql);
            return $queryResult;

        }else{
            die('Query problem'.mysqli_error($link));
        }

    }

}