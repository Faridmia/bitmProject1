
<?php
    require_once 'vendor/autoload.php';

    $message = '';
    if(isset($_POST['btn'])){
        $student = new App\classes\Student;
        $message = $student->saveStudentInfo($_POST);

    }

?>
    <a href="add-student.php">Add Student</a>
    <a href="view-student.php">View Student</a>

<?php echo "<h3 style='color:green'>".$message."</h3>";?>
  <form action="" method="post">
      <table>
          <tr>
              <td>Name</td>
              <td><input type="text" name="s_name"></td>
          </tr>
          <tr>
              <td>E-mail</td>
              <td><input type="email" name="s_email"></td>
          </tr>
          <tr>
              <td>Mobile</td>
              <td><input type="number" name="s_mobile"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" name="btn" value="SubmiT"></td>
          </tr>
      </table>
  </form>