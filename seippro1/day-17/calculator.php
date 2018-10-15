
<?php
    $result = '';
    if(isset($_POST['btn'])){
        require_once 'FullName.php';

        $calculator = new FullName();
        $result = $calculator->makecalculator($_POST);

    }



?>







<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="text" name="first_number" value="<?php if(isset($_POST['first_number'])){echo $_POST['first_number'];}?>"/></td>
        </tr>
        <tr>
            <th>Second number</th>
            <td><input type="text" name="second_number"  value="<?php if(isset($_POST['first_number'])){echo $_POST['second_number'];}?>" /></td>
        </tr>
        <tr>
            <th>Result</th>
            <td><input type="text" name="result" value="<?php echo $result;?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>