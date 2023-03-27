
<?php
    include_once "../header.php";
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

        $uploads_dir = '../uploads/';
        $name = $_FILES['Cover_Image']['name'];
        $img_des = $uploads_dir.$name;

        if (is_uploaded_file($_FILES['Cover_Image']['tmp_name']))
        {
            //in case you want to move  the file in uploads directory
            move_uploaded_file($_FILES['Cover_Image']['tmp_name'], $img_des);
           // echo 'moved file to destination directory';

        }


        include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
        $UpdateItems = new AddItems();
        $UpdateItems->updateCollection($Title, $Author_Name, $img_des, $State, $Edition_Date, $Buy_Date, $Type, $Pages_Number, $collection_id);

        echo '
        <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
                <h1 class="w-100 d-flex justify-content-center">this Items is Confirme</h1><br>
                <h2 class="d-flex justify-content-center"><i class="fa-sharp fa-solid fa-check w-100"></i></h2>
                <a href="../items.admen.php" class="btn btn-info d-flex justify-content-center w-75 animated slideInLeft">OK</a>
            </div>
        </div>
        ';
    }
    // includ footer
    include_once "../footer.php";
?>