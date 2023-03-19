
<?php
    if (isset($_POST['moreDetails'])) {
        // declaration Items input
        $collection_id = $_GET['collection_id'];
        $Title = $_POST['Title'];
        $Author_Name = $_POST['Author_Name'];
        $Cover_Image = $_FILES['Cover_Image'];
        $State = $_POST['state'];
        $Edition_Date = $_POST['Edition_Date'];
        $Buy_Date = $_POST['Buy_Date'];
        $Type = $_POST['Type'];
        $Pages_Number = $_POST['Pages_Number'];

        $uploads_dir = '/uploads';
        $name = $_FILES['Cover_Image']['name'];
        if (is_uploaded_file($_FILES['Cover_Image']['tmp_name']))
        {
            //in case you want to move  the file in uploads directory
            move_uploaded_file($_FILES['Cover_Image']['tmp_name'], $uploads_dir.$name);
           // echo 'moved file to destination directory';

        }
        $img_des = $uploads_dir.$name;


        include_once "/xampp/htdocs/library_brief-16/classes/update-items.classes.php";
        $UpdateItems = new UpdateItems();
        $UpdateItems->updateCollection($Title, $Author_Name, $img_des, $State, $Edition_Date, $Buy_Date, $Type, $Pages_Number, $collection_id);
    }
?>