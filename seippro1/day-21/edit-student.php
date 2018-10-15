
<?php
require_once 'vendor/autoload.php';
$s_id = $_GET['sid'];
$student = new App\classes\Student;
$queryResult = $student->getStudentInfoById($s_id);
$result = mysqli_fetch_assoc($queryResult);
$message = '';
if(isset($_POST['btn'])){
    $message = $student->updateStudentInfo($_POST);

}

?>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>
<?php echo $message;?>
<?php //echo "<h3 style='color:green'>".$message."</h3>";?>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="s_name" value="<?php echo $result['s_name']; ?>">
                <input type="hidden" name="id" value="<?php echo $result['st_id']; ?>">
            </td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="s_email" value="<?php echo $result['s_email']; ?>"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="number" name="s_mobile" value="<?php echo $result['s_mobile']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>