<?php

session_start();
if($_SESSION['id'] == null){
    header("Location:index.php");
}
require_once '../vendor/autoload.php';
    use App\classes\Category;

    $category = new Category();
    $data = $category->CategoryAllProduct();
    $delCat = '';
   if(isset($_GET['delete'])){
       $id = $_GET['delId'];
       $delCat = $category->deleteCategory($id);
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
                    <h2 class="alert-success text-primary mb-4 text-center"><?php echo $delCat; ?></h2>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Sl-No</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Description</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 0;
                            while($result = mysqli_fetch_assoc($data)){
                                $i++;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $result['category_name'];?></td>
                            <td><?php echo $result['category_des'];?></td>
                            <td>
                                <?php
                                    if($result['status'] == 1){
                                        echo "published";
                                    }
                                    else{
                                        echo "unpublished";
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="edit-cat.php?catid=<?php echo $result['cat_id'];?>">Edit</a> ||
                                <a href="?delete=true&delId=<?php echo $result['cat_id'];?>" onclick="return confirm('Are you sure want to Delete this Data..');">Delete</a>

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
