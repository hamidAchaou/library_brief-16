<?php 
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
                    $fileDestination = '../uploads'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    // instantiate AddItems class
                    include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";
                    include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
                    include "/xampp/htdocs/library_brief-16/classes/addItems.contr.classes.php";
                    $addItems = new addItemsContr($Title, $Author_Name, $fileDestination, $State, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number );

                    // running errore handlersand user signup
                    $addItems->AddItems();

                    header("location: ../home.page.admin.php?erer=none");


                } else {
                    echo 'your file is to big!';
                }
            } else {
                echo 'there was an error uploading your file!';
            }
        } else {
            echo 'you can not upload files of this Type';
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

?>