
    <?php
    $link = mysqli_connect('localhost','root','','image_upload');
    if(isset($_POST['btn'])){


        $fileName = $_FILES['file_upload']['name'];
        $imageSize = $_FILES['file_upload']['size'];
        $directory = 'images/';
        $imageUrl = $directory.$fileName;
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['file_upload']['tmp_name']);

        if($check){
            if(file_exists($imageUrl)){
                die("This file already exits..! Please select another one.Thanks..");
            }
            else{
                if($imageSize > 500000){
                    die("Your image size is too large.Please select with in 10kb");

                }
                else{

                    if($fileType != 'jpg' && $fileType != 'png' && $fileType != 'JPG' && $fileType != 'jpeg'){
                        die("Image type is not supported.please use jpg or png format..!");

                    }
                    else{
                        move_uploaded_file($_FILES['file_upload']['tmp_name'],$imageUrl);

                        $sql = "INSERT INTO images(file_upload)VALUES('$imageUrl')";
                        mysqli_query($link,$sql);
                        echo "Image upload & save successfully";

                    }
                }
            }

        }
        else{
            die("please chose a image file....");
        }

    }





    ?>


     <form action="" method="post" enctype="multipart/form-data">
         <table>
             <tr>
                 <td>Select File</td>
                 <td><input type="file" name="file_upload"></td>
             </tr>
             <tr>
                 <td></td>
                 <td><input type="submit" name="btn" value="SubmiT"></td>
             </tr>
         </table>

     </form>


    <hr/>
    <?php
        $query = "SELECT * FROM images";
        $result = mysqli_query($link,$query);
    ?>

    <table>
        <?php while($row = mysqli_fetch_array($result)){ ?>
        <tr>
            <td>
                <img src="<?php echo $row['file_upload'];?>" alt="This is image" width="100px" height="100px"/>
            </td>
        </tr>
        <?php } ?>
    </table>