<?php
require_once "actions/db_connect.php";


$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $tbody .= "<tr class='table-light'>

          <td class='ps-5'><img class='img-thumbnail' src='" . (str_contains($row['image'], 'http') ? $row['image'] : "pictures/".$row['image']) . "'</td>
           <td>" . $row['name'] . "</td>
           <td>€ " . $row['price'] . "</td>
           <td>
           <a href='details.php?id=" . $row['dish_id'] . "'><button class='btn btn-info' type='button'>📷</button></a>
           <a href='update.php?id=" . $row['dish_id'] . "'><button class='btn btn-primary' type='button'>✏️</button></a>
           <a href='delete.php?id=" . $row['dish_id'] . "'><button class='btn btn-danger icon' type='button'>🗑</button></a>
           </td>

            </tr>";
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Á la Crud</title>
  <?php require_once "components/boot.php";?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Parisienne">
  <style type="text/css">
    .h1 {
      font-family: "Parisienne";
    }

    .manageProduct {
      margin: auto;
    }

    .img-thumbnail {
      width: 70px !important;
      height: 70px !important;
    }

    td {
      text-align: left;
      vertical-align: middle;

    }

    tr {
      text-align: center;
    }

    .icon {
      color: transparent;
      text-shadow: 0 0 white;
    }

    .rainbow {
      color: transparent;
      text-shadow: 0 0 blue;
      animation-name: example;
      animation-duration: 4s;
      animation-iteration-count: infinite;
    }
    @keyframes example {
        0%   {text-shadow: 0 0 red;}
        25%  {text-shadow: 0 0 yellow;}
        50%  {text-shadow: 0 0 blue;}
        75%  {text-shadow: 0 0 green;}
        100% {text-shadow: 0 0 red;}
    }
    
  </style>
</head>

<body class="bg-dark">
  <div class="manageProduct w-75 mt-5">
    <div class='mb-3'>
      <a href="create.php"><button class='btn btn-success' type="button">Add product</button></a>
    </div>
    <p class='h1 display-2 text-center text-white py-3'>Restaurante »á la Crud« <span class="rainbow">👌</span></p>

    <table class='table table-striped rounded overflow-hidden'>
      <thead class='table-success'>
        <tr>

          <th class="h4 text-start ps-5">Picture</th>
          <th class="h4 text-start">Name</th>
          <th class="h4 text-start">Price</th>
          <th class="h4 text-start">Action</th>
        </tr>
      </thead>
      <tbody>
        <?= $tbody; ?>

      </tbody>
    </table>
  </div>
</body>

</html>