<?php

session_start();
if($_SESSION['id'] == null){
    header("Location:index.php");
}
require_once '../vendor/autoload.php';
use App\classes\Category;
$category = new Category();
$id = $_GET['catid'];
$getCategoryData = $category->getCategoryById($id);
$result = mysqli_fetch_assoc($getCategoryData);

$message = "";
if(isset($_POST['btn'])){

    $message = $category->updateCategoryData($_POST);
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
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2 class="alert-success text-primary mb-4 text-center"><?php echo $message; ?></h2>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="category_name" value="<?php echo $result['category_name'];?>" class="form-control">
                                <input type="hidden" name="id" value="<?php echo $result['cat_id'];?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="category_des" > <?php echo $result['category_des'];?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" <?php if($result['status']==1){ echo 'checked';} ?> name="status" value="1">Published
                                <?php ?>
                                <input type="radio" <?php if($result['status']==0){ echo 'checked';} ?> name="status" value="0">Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
                            </div>
                        </div>
                    </form>
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

