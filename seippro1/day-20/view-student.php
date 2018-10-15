
<?php
require_once 'vendor/autoload.php';

    $message = '';
    $student = new App\classes\Student;
    $queryResult = $student->getAllStudentInfo();


?>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>

<?php echo "<h3 style='color:green'>".$message."</h3>";?>



    <table border="1px" width="700px">
        <tr>
            <th>Sl-No</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Mobile</th>
        </tr>
        <?php
            $i = 0;
            while($studentData = mysqli_fetch_assoc($queryResult)){
                $i++;
        ?>
        <tr>
            <th><?php echo $i; ?></th>
            <th><?php echo $studentData['s_name']; ?></th>
            <th><?php echo $studentData['s_email']; ?></th>
            <th><?php echo $studentData['s_mobile']; ?></th>
        </tr>
        <?php } ?>
    </table>