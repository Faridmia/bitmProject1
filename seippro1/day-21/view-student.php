
<?php
require_once 'vendor/autoload.php';

$deleteQuery = '';
    $student = new App\classes\Student;
    $queryResult = $student->getAllStudentInfo();
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $deleteQuery = $student->deleteStudentInfo($id);

    }




?>
<a href="add-student.php">Add Student</a>
<a href="view-student.php">View Student</a>

<?php echo "<h3 style='color:green'>".$deleteQuery."</h3>";?>



    <table border="1px" width="700px">
        <tr>
            <th>Sl-No</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        <?php
            $i = 0;
            while($studentData = mysqli_fetch_assoc($queryResult)){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $studentData['s_name']; ?></td>
            <td><?php echo $studentData['s_email']; ?></td>
            <td><?php echo $studentData['s_mobile']; ?></td>
            <td>
                <a href="edit-student.php?sid=<?php echo $studentData['st_id']; ?>">Edit</a> ||
                <a href="?delete=true&id=<?php echo $studentData['st_id']; ?>" onclick="return confirm('Are you sure want to delete this!!');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>