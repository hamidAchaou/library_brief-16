<?php 
include "../header.php";

    if (isset($_POST['AddItems'])) {

        $Title = $_POST['Title'];
        $Author_Name = $_POST['Author_Name'];
        $Cover_Image = $_FILES['Cover_Image'];
        $State = $_POST['State'];
        $Edition_Date = $_POST['Edition_Date']; 
        $Buy_Date = $_POST['Buy_Date'];
        $Status = $_POST['Status'];
        $Type  = $_POST['Type'];
        $Pages_Number  = $_POST['Pages_Number'];

        // print_r($Cover_Image);
        $fileName = $_FILES['Cover_Image']['name'];
        $fileTmpName = $_FILES['Cover_Image']['tmp_name'];
        $fileSize = $_FILES['Cover_Image']['size'];
        $fileError = $_FILES['Cover_Image']['error'];
        $fileType= $_FILES['Cover_Image']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = ['jpg', 'jpeg', 'png', 'pdf'];

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 2000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '/uploads'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
        
                    // instantiate AddItems class
                    include "../classes/dbh.classes.php";
                    include "../classes/addItems.classes.php";
                    include "../classes/addItems.contr.classes.php";
                    $addItems = new addItemsContr($Title, $Author_Name, $fileDestination, $State, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number);
        
                    // running error handlers and user signup
                    $addItems->AddItems();
        
                    echo '
                    <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
                      <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
                          <h1 class=" ">This item has been uploaded.</h1>
                          <a href="../add-items.admin.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
                      </div>
                    </div>
                    ';
        
                } else {
                    echo '
                    <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
                      <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
                          <h1 class=" ">This file is too big.</h1>
                          <a href="../add-items.admin.php" class="btn btn-danger d-flex justify-content-center w-75 animated slideInLeft">OK</a>
                      </div>
                    </div>
                    ';
                }
            } else {
                echo 'There was an error uploading your file.';
            }
        } else {
            echo 'You cannot upload files of this type.';
        }
        



        // $uploads_dir = '/uploads';
        // $name = $_FILES['Cover_Image']['name'];
        // if (is_uploaded_file($_FILES['Cover_Image']['tmp_name']))
        // {
        //     //in case you want to move  the file in uploads directory
        //     move_uploaded_file($_FILES['Cover_Image']['tmp_name'], $uploads_dir.$name);
        //    // echo 'moved file to destination directory';

        // }
        // $img_des = $uploads_dir.$name;

    }

    include "../footer.php";

?>