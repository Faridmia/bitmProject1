<?php

session_start();
if($_SESSION['id'] == null){
    header("Location:index.php");
}
require_once '../vendor/autoload.php';
use App\classes\Blog;

$blog = new Blog();
$getAllBlogData = $blog->getAllBlog();
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
                    <table class="table table-bordered">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">Sl-No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Blog Title</th>
                            <th scope="col">Blog Image </th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        while($result = mysqli_fetch_assoc($getAllBlogData)){
                            $i++;
                            $image = $result['blog_image'];
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $result['category_name'];?></td>
                                <td><?php echo $result['blog_title'];?></td>
                                <td><img src="../assets/upload/blog_image/<?php echo $image; ?>" width="100px" class="img-responsive"/> </td>
                                <td><?php echo $result['status'] == 1 ? 'published' : 'unpublished'; ?></td>
                                <td>
                                    <a href="view-blog.php?blogid=<?php echo $result['b_id'];?>">View</a> ||
                                    <a href="edit-blog.php?blogid=<?php echo $result['b_id'];?>">Edit</a> ||
                                    <a href="?delete=true&delId=<?php echo $result['b_id'];?>" onclick="return confirm('Are you sure want to Delete this Data..');">Delete</a>

                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
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
