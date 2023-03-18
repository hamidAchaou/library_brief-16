<?php




// Show items as you search
    if(isset($_POST['itemsSerch'])) {
        $inpitemsSerch = $_POST['inpitemsSerch'];

        include "/xampp/htdocs/library_brief-16/classes/serchInItems.classes.php";

        $serch = new SerchInItems();
        $serch->itemsSerch($inpitemsSerch, $inpitemsSerch);
        print_r($serch);
    } else {
        // Show items
        include_once "showCollection.php";
    }



                //   get data width class addItems.classes
                $showItems = new AddItems();
                $collectionData = $showItems->getCollectionInfo();

                // print_r($collectionData);

                foreach ($collectionData as  $key => $value) :
                    $collection_code = $value["Collection_Code"];
                  
            ?>

                <!-- <div class="blog-item bg-light rounded overflow-hidden card" style="width: 19rem; height: 350px""> -->
                <div class="wow slideInUp mb-5" data-wow-delay="0.3s" style="width: 19rem; height: 350px">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                            <img class="img-fluid" src="/uploads/<?php echo $value["cover_image"] ?>" alt="">
                            <!-- <img class="img-fluid" src="/uploads/2.jpg" alt=""> -->
                            <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $value["Status"] ?></h6>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3"><?php echo $value["Title"] ?></h4>
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small><br>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small><br>
                            </div>
                            <div  class="d-flex justify-content-center mb-3">
                                <?php
                                  if ($value["Status"] !== "Available") {
                                    echo "<button type='button' class='btn btn-secondary w-75'>this Items is bokid up</button>";
                                  } else {
                                ?>
                                <button type="button" class="btn btn-info w-75" data-bs-toggle="modal" data-bs-target="#reserv<?php echo $Collection_Code ?>">reservation</button>
                                <?php
                                };
                                ?>
                            </div>
                    </div>
                </div>
                
                <!--========== start modal reservation =============-->
                <div class="modal fade" id="reserv<?php echo $Collection_Code ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">reservation</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>reservation</h1>
                            <p>are you sur reserv this?</p>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger"><a href="reserv.php?idcollection=<?php echo $Collection_Code ?>">reserv</a></button>
                        </div>
                        </div>
                    </div>
                </div>
                <!--========== end modal reservation =============-->

                <?php
                  endforeach;
                ?>



<?php
    function showCards($cover_image, $Title, $Author_Name, $Edition_Date, $Status, $Collection_Code) {
        echo " 
        <!-- <div class='blog-item bg-light rounded overflow-hidden card' style='width: 19rem; height: 350px''> -->
        <div class='wow slideInUp mb-5' data-wow-delay='0.3s' style='width: 19rem; height: 350px'>
            <div class='blog-item bg-light rounded overflow-hidden'>
                <div class='blog-img position-relative overflow-hidden' style='height: 200px;'>
                    <img class='img-fluid' src='upload-img/".$cover_image ."' alt=''>
                    <h6 class='position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4' href=''><?php echo $Status</h6>
                </div>
                <div class='p-4'>
                    <h4 class='mb-3'>".  $Title . "</h4>
                        <small class='me-3'><i class='far fa-user text-primary me-2'></i>". $Author_Name ."</small><br>
                        <small><i class='far fa-calendar-alt text-primary me-2'></i>". $Edition_Date."</small><br>
                    </div>
                    <div  class='d-flex justify-content-center mb-3'>
                        <?php
                          if (" .$Status."!== 'Available') {
                            echo '<button type='button' class='btn btn-secondary w-75'>this Items is bokid up</button>';
                          } else {
                        ?>
                        <button type='button' class='btn btn-info w-75' data-bs-toggle='modal' data-bs-target='#reserv". $Collection_Code."'>reservation</button>
                        <?php
                        };
                        ?>
                    </div>
            </div>
        </div>
        
        ";

}
?>