
<?php
include "header.php";
include "/xampp/htdocs/library_brief-16/classes/borrowing.classes.php";
// Declaration Class Confirme Borrowing
$confirmeEmprunt = new confirmBorrowing();
$empruntCount = $confirmeEmprunt->getEmpruntCount();

              // Pagination
              $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
              $itemsPerPage = 1;
              $PageCount = ceil($empruntCount / $itemsPerPage);
              $beginning = ($page - 1) * $itemsPerPage;
              $confirmEmpruntData = $confirmeEmprunt->showEmprunt($beginning, $itemsPerPage);

            //   print_r($confirmEmpruntData);

            foreach ($confirmEmpruntData as $reservation) :
                echo $reservation['Title'] . "br";
            endforeach;
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






