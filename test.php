<?php
session_start();
include "/xampp/htdocs/library_brief-16/classes/profile-view.classes.php";





?>
<div class="card-header"><?php  $profileInfo->fetchName($_SESSION['nickName']); ?></div>