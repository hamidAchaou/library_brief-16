
<?php
include "header.php";
include "/xampp/htdocs/library_brief-16/classes/reservation.classes.php";

      $confirme = new confirmReservation();
      $confirmeData = $confirme->getReservationInfo();

      // print_r(count($confirmeData));

      $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;;
      $itemsPerPage = 2;
      $PageCount = ceil(count($confirmeData)/$itemsPerPage);
      $beginning = ($page-1) * $itemsPerPage;

      // echo $beginning . "<br>";
      // echo $PageCount;
      foreach ($confirmeData as $key => $value) :  
            echo $value['Title'] . "<br>";
?>
<div id="pagination" aria-label="...">
  <ul class="pagination">
      <?php
          if ($page > 1) {
              echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).'">&laquo; Previous</a></li>';
          }
          for($i=1; $i<=$PageCount; $i++)  {
              if ($page == $i) {
                  echo "
                  <li class='page-item'>
                      <a class='page-link active' href='?page=$i'>$i</a>&nbsp;
                  </li>";
              } else {
                  echo "
                  <li class='page-item'>
                      <a class='page-link' href='?page=$i'>$i</a>&nbsp;
                  </li>";
              }
          }
          if ($page < $PageCount) {
              echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).'">Next &raquo;</a></li>';
          }
      ?>
  </ul>
</div>


<?php
include_once "footer.php";
?>









                    <!--=========== starts cards items =======-->
                    <div class="blog-item bg-light rounded overflow-hidden card" style="width: 19rem; height: 350px"">
                        <div class="blog-img position-relative overflow-hidden" style="height: 200px;">
                            <img class="img-fluid" src="../library_brief-16/uploads/<?php echo $value["Cover_Image"] ?>" alt="">
                            <h6 class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo $value["Status"] ?></h6>
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3"><?php echo $value["Title"] ?></h4>
                            <div class="mb-3 d-flex justify-content-between">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $value["Edition_Date"] ?></small>
                            </div>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <div class="mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $value["Author_Name"] ?></small><br>
                                <small><i class="far fa-calendar-alt"></i><?php echo $value["Edition_Date"] ?></small>
                            </div>
                            <div class="d-flex mb-3 justify-content-evenly">
                                <button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteItems?idCollection=<?php echo $value['Collection_Code'] ?>"> <i class="fa-solid fa-trash"></i> Delete</button>
                                <button type="button" class="btn btn-info"><a href="updateItems.php?idcollection=<?php echo $value['Collection_Code'] ?>" class="text-decoration-none text-light"><i class="fa-sharp fa-solid fa-pen-to-square text-light"></i> Edit</a></button>                            
                            </div>
                        </div>
                    </div>
                    <!--=========== end cards items =======-->