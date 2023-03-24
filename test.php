<?php
session_start();
	include "header.php";

    include_once "/xampp/htdocs/library_brief-16/classes/myreservation.classes.php";
    $myreserve = new myReservation();

    
  $getMyReservationCount = $myreserve->getMyReservationCount($_SESSION['nickName']);

$dataMyreservation = $myreserve->getMyReservation($_SESSION['nickName'], 0, 3);
  print_r($dataMyreservation);
?>

    <!--=================== show Items Start =====================================-->

    <!--=================== show Items end =====================================-->

	<?php
		include "footer.php";
	?>