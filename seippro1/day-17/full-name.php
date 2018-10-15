<?php
require_once 'FullName.php';
//    echo "<pre>";
//        print_r($_POST);
//
//    echo "</pre>";
    $result = '';
    if(isset($_POST['btn'])){
        $firstName = $_POST['first_name'];
        $lastName  = $_POST['last_name'];

        $fullName = new FullName();
        $result = $fullName->makeFullName($firstName,$lastName);



    }






?>



    <form action="" method="post">
        <table>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="first_name"/></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="last_name"/></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><input type="text" name="fullName" value="<?php echo $result;?>"/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="btn" value="Submit"></td>
            </tr>
        </table>
    </form>