<?php
// include Page addItems
include "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";

// Create Class collectionInfoContr for display collection info 
  class collectionInfoContr extends AddItems {

    // display Title Collection
    public function fetchTitle($Collection_Code) {
      $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Title"];
    }
    // display Auter Name Collection
    public function fetchAuthor_Name($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Author_Name"];
    }

    // display Cover Image Collection
    public function fetchCover_Image($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Cover_Image"];
    }

    // display State Of collection Collection
    public function fetchState($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["State"];
    }

    // display Edition Date Collection
    public function fetchEdition_Date($Collection_Code) {
      $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Edition_Date"];
    }

    // display Buy Date Collection
    public function fetchBuy_Date($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Buy_Date"];
    }

    // display Status Collection
    public function fetchStatus($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Status"];
    }

    // display Type Collection
    public function fetchType($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Type"];
    }

    // display Pages Number Collection
    public function fetcPages_Number($Collection_Code) {
        $AddItems = $this->selectCollectionInfo($Collection_Code);

      echo $AddItems[0]["Pages_Number"];
    }

  } // end class collectionInfoContr

  ?>
