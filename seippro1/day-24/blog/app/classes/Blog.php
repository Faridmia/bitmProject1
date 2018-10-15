<?php


namespace App\classes;


class Blog {

    public function saveBlogData($data,$file){
        $category_name     = $data['category_name'];
        $blog_title        = $data['blog_title'];
        $short_description = $data['short_description'];
        $long_description  = $data['long_description'];
        $status            = $data['status'];


        if(isset($file['blog_image']['name'])){
            $file_name = $file['blog_image']['name'];
            $explode = explode(".", $file_name);
            $extension = end($explode);
            $tmp_name = $file['blog_image']['tmp_name'];
            $size = $file['blog_image']['size'];
            $type = $file['blog_image']['type'];

        }
        else{
            $file_name = '';
        }



        /* ...................................insert query...............................................................*/

        if(!empty(isset($file['blog_image']['name']) && !empty($file['blog_image']['name']))) {
            $newFile  = md5(uniqid(rand(), true)).'.'.$extension;
        }

        move_uploaded_file($tmp_name, '../assets/upload/blog_image/'.$newFile);
        $sql = "INSERT INTO blog(cat_id,blog_title,short_description,long_description	,blog_image,status)
                            VALUES('$category_name','$blog_title','$short_description','$long_description','$newFile','$status')";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $msg = "<span class='success'>Blog Added successfully</span>";
            return $msg;
        }

        else{
            $msg = "<span class='error'>Blog Not Added</span>";
            return $msg;
        }
        /* ...................................insert query...............................................................*/

    }

    public function getAllBlog(){
        $sql = "SELECT blog.*,category.category_name FROM blog INNER JOIN category ON blog.cat_id = category.cat_id ORDER BY blog.b_id DESC";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }

        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }


    public function getAllPublishedCategoryInfo(){
        $select = "SELECT * FROM category WHERE status = 1";
        if(mysqli_query(Database::dbConnection(),$select)){
            $data = mysqli_query(Database::dbConnection(),$select);
            return $data;
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function getAllBlogById($bid){
        $sql = "SELECT * FROM blog WHERE b_id = '$bid'";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $queryResult = mysqli_query(Database::dbConnection(),$sql);
            return $queryResult;
        }

        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }

    }


    public function updateBlogData($data,$file){
        $bid = $data['bid'];
        $category_name = $data['category_name'];
        $blog_title = $data['blog_title'];
        $short_description = $data['short_description'];
        $long_description = $data['long_description'];
        $status = $data['status'];
        if(isset($file['blog_image']['name'])){
            $file_name = $file['blog_image']['name'];
            $explode = explode(".", $file_name);
            $extension = end($explode);
            $tmp_name = $file['blog_image']['tmp_name'];
            $size = $file['blog_image']['size'];
            $type = $file['blog_image']['type'];

        }
        else{
            $file_name = '';
        }

        if(!empty(isset($file['blog_image']['name']) && !empty($file['blog_image']['name']))) {
            $newFile  = md5(uniqid(rand(), true)).'.'.$extension;
        }

        move_uploaded_file($tmp_name, '../assets/upload/blog_image/'.$newFile);

        $sql = "UPDATE blog SET
              cat_id = '$category_name',
              blog_title = '$blog_title',
              short_description = '$short_description',
              long_description = '$long_description',
              blog_image = '$newFile',
              status = '$status'
              WHERE b_id = '$bid'";


        if(mysqli_query(Database::dbConnection(),$sql)){
            header("Location:manage-blog.php");
        }

        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }
    }

    public function deleteBlog($id){
        $select = "SELECT * FROM blog WHERE b_id = '$id'";
        $delBlog = mysqli_query(Database::dbConnection(),$select);

        if($delBlog){
            while ($delimg = mysqli_fetch_assoc($delBlog)) {
                $dellinkimg = $delimg['blog_image'];
                unlink('../assets/upload/blog_image/'.$dellinkimg);
            }
        }

        $sql = "DELETE FROM blog WHERE b_id = '$id'";

        if(mysqli_query(Database::dbConnection(),$sql)){

            header("Location:manage-blog.php");
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }

    }


}