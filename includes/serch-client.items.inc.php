<!-- serch why click in btn search -->
<?php
include "/xampp/htdocs/library_brief-16/classes/serchInItems.classes.php";
// include "/xampp/htdocs/library_brief-16/classes/SearchInItems.php";
$inpitemsSerch = $_POST['inpitemsSerch'];
$serch = new SearchInItems();
$serchData = $serch->itemsSearch($inpitemsSerch, $inpitemsSerch);


// Display reservations
foreach ($serchData as $serchincollection) :
?>
    <!--============ start show cards items ==================-->
    <div class="wow slideInUp mb-5" data-wow-delay="0.3s" style="width: 19rem; height: 350px">
        <div class="blog-item bg-light rounded overflow-hidden">
            <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                <img class="img-fluid w-100" src="../library_brief-16/uploads/<?php echo $serchincollection["Cover_Image"] ?>" alt="">
                <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $serchincollection["Status"] ?></h6>
            </div>
            <div class="p-2">
                <h4 class="mb-1 text-center text-primary"><?php echo $serchincollection["Title"] ?></h4>
                <div class="d-flex flex-wrap pl-3">
                    <small class="me-3 w-100"><i class="far fa-user text-primary me-2"></i><?php echo $serchincollection["Author_Name"] ?></small>
                    <small class="me-3 w-100"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $serchincollection["Edition_Date"] ?></small>
                    <small class="me-3 w-100"><i class="far fa-user text-primary me-2"></i><?php echo $serchincollection["Author_Name"] ?></small>
                    <small class="me-3 w-100"><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $serchincollection["Edition_Date"] ?></small><br>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <?php
                if ($serchincollection["Status"] !== "Available") {
                    echo "<button type='button' class='btn btn-secondary w-75'>this Items is bokid up</button>";
                } else {
                ?>
                    <button type="button" class="btn btn-info w-75" data-bs-toggle="modal" data-bs-target="#reserv<?php echo $value['Collection_Code'] ?>">reservation</button>
                <?php
                };
                ?>
            </div>
        </div>
    </div>
    <!--============ start show cards items ==================-->

    <!--========== start modal reservation =============-->
    <div class="modal fade" id="reserv<?php echo $value['Collection_Code'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme Reservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>are you sure reserve this item!!</h1>
                    <!-- <p>are you sur reserv this?</p> -->
                    <button type="button" class="btn btn-success w-100"><a href="includes/reservation.client.classes.php?idcollection=<?php echo $value['Collection_Code'] ?>" class="btn">reserv</a></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--========== end modal reservation =============-->
<?php
endforeach;
?>
