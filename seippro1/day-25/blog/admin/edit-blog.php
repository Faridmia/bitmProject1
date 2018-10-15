<?php

session_start();
if($_SESSION['id'] == null){
    header("Location:index.php");
}
require_once '../vendor/autoload.php';
use App\classes\Blog;
$blog = new Blog();
$bid = $_GET['blogid'];
$getAllBlog = $blog->getAllBlogById($bid);
$getAllBlogById = mysqli_fetch_assoc($getAllBlog);

$updateBlog = "";
if(isset($_POST['btn'])){

    $updateBlog = $blog->updateBlogData($_POST,$_FILES);

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
                    <h2 class="alert-success text-primary mb-4 text-center"><?php echo $updateBlog; ?></h2>
                    <form action="" method="post" enctype="multipart/form-data" name="editBlogForm">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <select name="category_name" class="form-control">
                                    <option value="">---select Category---</option>
                              <?php
                                    $catAllData = $blog->getAllPublishedCategoryInfo();

                                         while($result = mysqli_fetch_assoc($catAllData)){



                              ?>
                                            <option value="<?php echo $result['cat_id']; ?>"><?php echo $result['category_name']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Blog Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="blog_title" value="<?php echo $getAllBlogById['blog_title']; ?>" class="form-control"/>
                                <input type="hidden" name="bid" value="<?php echo $getAllBlogById['b_id']; ?>" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description"><?php echo $getAllBlogById['short_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea" name="long_description" rows="10"><?php echo $getAllBlogById['long_description']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Blog Image</label>
                            <div class="col-sm-9">
                                <h2><img src="../assets/upload/blog_image/<?php echo $getAllBlogById['blog_image']; ?>" width="100px" class="img-responsive"/></h2>
                                <input type="file" name="blog_image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" <?php if($getAllBlogById['status'] == 1){echo "checked"; }?> name="status" value="1">Published
                                <input type="radio" <?php if($getAllBlogById['status'] == 0){echo "checked"; }?> name="status" value="0">Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Update Blog Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>




<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.textarea' });</script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>

<script>
    document.forms['editBlogForm'].elements['category_name'].value = '<?php echo $getAllBlogById['cat_id']; ?>';
</script>
</body>

</html>
