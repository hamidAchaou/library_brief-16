<?php
include "header.php";
    $collectionId = $_GET["idCollection"];
    // echo $collectionId;

    include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";
    $deleteCollection = new AddItems();
    $deleteCollection->DeleteItems($collectionId);

    echo '
    <div class="w-100 bg-secondary d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="bg-light d-flex justify-content-center align-items-center flex-wrap" style="width: 50%; height: 200px;">
          <h1 class=" ">this items is delet!!</h1>
          <a href="items.admen.php" class="btn btn-primary d-flex justify-content-center w-75 animated slideInLeft">OK</a>
      </div>
    </div>
    ';

    include "footer.php";
?>