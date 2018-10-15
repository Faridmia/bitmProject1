<?php
//    require_once 'App/classes/Example.php';
//    require_once 'App/classes/Student.php';
    require_once 'vendor/autoload.php';

$student = new \App\classes\Student();
$student->addition();
//   use App\classes\Student;
//Student::addition();
    //    $result = [];
    //    $result['string_length'] = '';
    //    $result['word_length'] = '';

    //    if(isset($_POST['btn'])){
    //
    //
    //        $example = new App\classes\Example();
    //        $result = $example->wordCharacterCount($_POST);
    //    }
        use App\classes\Example;
        if(isset($_POST['btn'])){

            $result = Example::wordCharacterCount($_POST);
        }


?>




<form action="" method="post">

    <table>
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>
        <tr>
            <th>Total Number Character</th>
            <td><input type="text" value="<?php echo isset($result['string_length'])?$result['string_length']:''; ?>"></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td><input type="text" value="<?php echo isset($result['word_length'])?$result['word_length']:''; ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="SubmiT"></td>
        </tr>
    </table>



</form>