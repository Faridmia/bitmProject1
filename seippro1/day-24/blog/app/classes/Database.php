<?php

namespace App\classes;


class Database {
    public static function dbConnection(){
        $hostName = 'localhost';
        $userName = 'root';
        $dbPass = '';
        $dbName = 'blog';
        $link = mysqli_connect($hostName,$userName,$dbPass,$dbName);
        return $link;
    }
}