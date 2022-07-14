<?php
require_once "actions/db_connect.php";


$sql = "SELECT * FROM dishes WHERE dish_id=" . $_GET['id'];
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tbody = "
    <div class='bg-dark'>
      <div class='container-fluid text-center'>
        <img  class='img-fluid vh-100' src='".(str_contains($row['image'], 'http') ? $row['image'] : "pictures/".$row['image'])."' alt=''>
        <div class='position-absolute start-50 top-50 translate-middle'>
          <h1 class='display-1 fst-italic stroke'>{$row['name']}</h1>
          <p class='lead display-3 my-3 d-none d-sm-block stroke'>€ {$row['price']},–</p>
          </p>
        </div>
      </div>
    </div>";
  };
} else {
  $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once "components/boot.php"; ?>
  <title><?php ?></title>
  <style>
    .stroke {
      color: white;
      text-shadow: -2px 2px 2px #000,
        2px 2px 2px #000,
        2px -2px 2px #000,
        -2px -2px 2px #000;
    }
  </style>
</head>

<body>
  <?php
  echo $tbody;
  ?>

</body>

</html>