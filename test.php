<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Hello, world!</h1>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<?php
session_start();
// include_once "/xampp/htdocs/library_brief-16/classes/addItems.classes.php";


  $current_time = date('Y-m-d H:i:s'); // Get the current time in the format of "YYYY-MM-DD HH:MM:SS"
  $incremented_time = date('Y-m-d H:i:s', strtotime($current_time . ' +24 hours')); // Add 24 hours to the current time
  // echo $incremented_time; // Output the incremented time

  
// $dataCollection = new AddItems();
// $idCollection = $dataCollection->getExpriationDate($_SESSION['nickName'], $current_time,  $incremented_time);
// // echo $idCollection;

// $dataCollection = date('Y-m-d H:i:s');
// // echo $dataCollection;

$current_time = time(); // Get the current Unix timestamp
$future_time = strtotime("+15 days", $current_time); // Add 15 days to the current timestamp

$Borrowing_Return_Date = date("Y-m-d H:i:s", $future_time); // Format the future timestamp as a date and time string and output it
echo $Borrowing_Return_Date;
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...

        <?php
       
        ?>


      <div class="w-100 bg-secondary d-flex" style="height: 100vh;">
        <div class="bg-light" style="width: 50%; height: 300px;">
          <h1>You have reserved 3 items</h1>
          <button type="button" class="btn btn-secondary"><a href="items.php">OK</a></button>
        </div>
      </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </body>
</html>