<?php
    require_once 'Demo.php';

    $demo = new Demo();
    $result = $demo->calculation();




?>


    <form action="" method="post">
            <table border="1px">
                <tr>
                    <th>First Number</th>
                    <td><input type="text" name="first_number"/></td>
                </tr>
                <tr>
                    <th>Last Number</th>
                    <td><input type="text" name="last_number"/></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="radio" name="check" value="odd"/>Odd
                        <input type="radio" name="check" value="Even"/>Even
                    </td>
                </tr>
                <tr>
                    <th>Result</th>
                    <td>
                        <textarea rows="5" cols="30">
                            <?php echo $result; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" name="btn" value="Submit"/>
                     </td>
                </tr>

            </table>

    </form>