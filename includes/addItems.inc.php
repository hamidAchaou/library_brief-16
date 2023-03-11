<?php 
    if (isset($_POST['AddItems'])) {

        $Title = $_POST['Title'];
        $Author_Name = $_POST['Author_Name'];
        $Cover_Image = $_POST['Cover_Image'];
        $State = $_POST['State'];
        $Edition_Date = $_POST['Edition_Date'];
        $Buy_Date = $_POST['Buy_Date'];
        $Status = $_POST['Status'];
        $Type  = $_POST['Type'];
        $Pages_Number  = $_POST['Pages_Number'];

        // instantiate AddItems class
        include "/xampp/htdocs/library_brief-16/classes/dbh.classes.php";
        include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
        include "/xampp/htdocs/library_brief-16/classes/addItems.contr.classes.php";
        $addItems = new addItemsContr($Title, $Author_Name, $Cover_Image, $State, $Edition_Date, $Buy_Date, $Status, $Type, $Pages_Number );

        // running errore handlersand user signup
        $addItems->AddItems();

        header("location: ../home.page.admin.php?erer=none");



    }

?>