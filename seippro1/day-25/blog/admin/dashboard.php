<?php

    session_start();
    if($_SESSION['id'] == null){
        header("Location:index.php");
    }
    require_once '../vendor/autoload.php';
    use App\classes\Login;
    if(isset($_GET['logout'])){
        $login = new Login();
        $login->adminLogout();
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.js"></script>
    </body>

</html>