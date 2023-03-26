<?php
session_start();
	include "header.php";

?>

    <!--=================== show Items Start =====================================-->
    <form class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start" action="" method="post">
                            <label for="">
                                <input class="px-4 me-sm-3" name="inpitemsSerch" style="height: 46px; width: 300px;" type="text">
                                <button class="btn btn-primary btn-lg px-4 me-sm-3" type="submit" name="itemsSerch">Serch</button>

                            </label>
                        </form>
    <!--=================== show Items end =====================================-->
    <?php
      
    ?>

	<?php
		include "footer.php";
	?>