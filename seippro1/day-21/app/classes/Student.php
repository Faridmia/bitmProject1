<?php
    namespace App\classes;

class Student {
    protected $link;
    private function dbConnection(){
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bitm-basic';
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;

    }
//    public function __construct(){
//        $hostName = 'localhost';
//        $userName = 'root';
//        $password = '';
//        $dbName = 'bitm-basic';
//        $this->link = mysqli_connect($hostName,$userName,$password,$dbName);
//    }

    public function saveStudentInfo($data){
        $sql = "INSERT INTO student (s_name,s_email,s_mobile) VALUES ('$data[s_name]','$data[s_email]','$data[s_mobile]')";
        if( mysqli_query(Student::dbConnection(),$sql)){
            $message = "Student Info save successfully.....";
            return $message;

        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }
    }

    public function getAllStudentInfo(){
        $sql = "SELECT * FROM student";
        if( mysqli_query(Student::dbConnection(),$sql)){
            $queryResult = mysqli_query(Student::dbConnection(),$sql);
            return $queryResult;

        }else{
            die('Query problem'.mysqli_error(Student::dbConnection()));
        }

    }

        public function getStudentInfoById($s_id){

            $sql = "SELECT * FROM student WHERE st_id = '$s_id'";
            if( mysqli_query(Student::dbConnection(),$sql)){
                $queryResult = mysqli_query(Student::dbConnection(),$sql);
                return $queryResult;


            }else{
                die('Query problem'.mysqli_error(Student::dbConnection()));
            }
        }

        public function updateStudentInfo($data){
            $sql = "UPDATE student SET
               s_name = '$data[s_name]',
               s_email = '$data[s_email]',
               s_mobile = '$data[s_mobile]'
              WHERE st_id = '$data[id]'";
            if( mysqli_query(Student::dbConnection(),$sql)){
                header("Location:view-student.php");


            }else{
                die('Query problem'.mysqli_error(Student::dbConnection()));
            }
        }

        public function deleteStudentInfo($sid){
            $sql = "DELETE FROM student WHERE st_id = '$sid'";

            if( mysqli_query(Student::dbConnection(),$sql)){
               $message = "Student Info deleted successfully";
                return $message;


            }else{
                die('Query problem'.mysqli_error(Student::dbConnection()));
            }
        }

}