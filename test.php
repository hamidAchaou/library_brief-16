<?php
session_start();
	include "header.php";


include "/xampp/htdocs/library_brief-16/classes/serchInItems.classes.php";
// include "/xampp/htdocs/library_brief-16/classes/SearchInItems.php";
$inpitemsSerch = "hhh";
$serch = new SearchInItems();
$serchData = $serch->itemsSearch($inpitemsSerch, $inpitemsSerch);

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$itemsPerPage = 6;
$pageCount = ceil($serchData / $itemsPerPage);
$beginning = ($page - 1) * $itemsPerPage;

echo "$pageCount";
// Get Data items limited to 6 rows
$collectionData = $serch->itemsSearchData($inpitemsSerch, $inpitemsSerch, $beginning, $itemsPerPage);

print_r($collectionData);
?>

<div id="pagination" aria-label="...">
    <ul class="pagination">
        <?php
        if ($page > 1) {
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">&laquo; Previous</a></li>';
        }
        for ($i = 1; $i <= $PageCount; $i++) {
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
            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next &raquo;</a></li>';
        }
        ?>
    </ul>
</div>
 
	<?php
		include "footer.php";
	?>