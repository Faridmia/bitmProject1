<?php
namespace App\classes;
use App\classes\Database;

class Category {
    public function categoryByData($data){
        $cat_name = $data['category_name'];
        $cat_des  = $data['category_des'];
        $status   = $data['status'];
        $sql      = "INSERT INTO category (category_name,category_des,status) VALUES ('$cat_name','$cat_des','$status')";

        if(mysqli_query(Database::dbConnection(),$sql)){


                $message = "Category Adderd successfully.....";
                return $message;

        }
        else
        {
            die("Query problem".mysqli_error(Database::dbConnection()));

        }


    }

    public function CategoryAllProduct(){
        $sql = "SELECT * FROM category";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $data = mysqli_query(Database::dbConnection(),$sql);
            return $data;
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getCategoryById($catid){
        $sql = "SELECT * FROM category WHERE cat_id = '$catid'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $result = mysqli_query(Database::dbConnection(),$sql);
            return $result;
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }

    }


    public function updateCategoryData($data){
        $id = $data['id'];
        $category_name  = $data['category_name'];
        $category_des   = $data['category_des'];
        $status         = $data['status'];
        $sql = "UPDATE category SET

                  category_name = '$category_name',
                  category_des  = '$category_des',
                  status        = '$status'
                  WHERE cat_id = '$id'";


        if(mysqli_query(Database::dbConnection(),$sql)){
            header("Location:manage-category.php");
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteCategory($id){
        $sql = "DELETE FROM category WHERE cat_id = '$id'";

        if(mysqli_query(Database::dbConnection(),$sql)){
            header("Location:manage-category.php");
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }


    }





}