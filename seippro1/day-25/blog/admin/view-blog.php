<?php

session_start();
if($_SESSION['id'] == null){
    header("Location:index.php");
}
require_once '../vendor/autoload.php';
use App\classes\Blog;

$blog = new Blog();
$catbloginfo = $blog->getAllBlog();
$data = mysqli_fetch_assoc($catbloginfo);
$id = $_GET['blogid'];
$queryResult = $blog->getAllBlogById($id);
$blogInfo = mysqli_fetch_assoc($queryResult);
$delBlog = '';
if(isset($_GET['delete'])){
    $id = $_GET['delId'];
    $delBlog = $blog->deleteBlog($id);
}



?>


<!doctype html>
<html>
<head>
    <title>Dashboard page</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php  include 'includes/menu.php'; ?>
<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="alert-success text-primary mb-4 text-center"><?php echo $delBlog; ?></h2>
                   <table class="table table-bordered table-responsive">
                       <tr>
                           <th>Blog Id</th>
                           <th><?php echo $blogInfo['b_id'];?></th>
                       </tr>
                       <tr>
                           <th>Blog Title</th>
                           <th><?php echo $blogInfo['blog_title'];?></th>
                       </tr>
                       <tr>
                           <th>Category Name</th>
                           <th><?php echo $data['category_name'];?></th>
                       </tr>
                       <tr>
                           <th>Blog Short Description</th>
                           <th><?php echo $blogInfo['short_description'];?></th>
                       </tr>
                       <tr>
                           <th>Blog Long Description</th>
                           <th><?php echo $blogInfo['long_description'];?></th>
                       </tr>
                       <tr>
                           <th>Blog Image</th>
                           <th><img src="../assets/upload/blog_image/<?php echo $blogInfo['blog_image'];?>" width="100px" class="img-responsive"/></th>
                       </tr>
                       <tr>
                           <th>Publication Status</th>
                           <th><?php echo $blogInfo['status'] == 1 ? 'published' : 'unpublished'; ?></th>
                       </tr>
                   </table>
                    <a href="manage-blog.php">Previous</a>
                </div>
            </div>

        </div>
    </div>
</div>




<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>
