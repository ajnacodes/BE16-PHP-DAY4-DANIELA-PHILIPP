<?php 
require_once "actions/db_connect.php";


$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$tbody ="";
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

    $tbody .= "
    
    <div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='pictures/".$row['img']."' alt='Car image'>
  <div class='card-body'>
    <h5 class='card-title'>".$row['name']."</h5>
    <p class='card-text'><b>Price </b>".$row['price']." </p>
    <h5 class='card-title text-muted'>".$row['description']."</h5>
    <a href='#' class='btn btn-outline-dark m-2 p-2'>Buy now</a>
  </div>
</div>
</div>

    ";
    
 
} }
else{
  $tbody= "<h5 class='card-title'>No data available</h5>";
}
?>



<!-- 

<?php 



echo "<div class='myContainercenter'>";

echo "<div class='myContainer'>

";

echo "<div class='row gap-1 p-0'>";


foreach ($cars as $car => $attribute){
    echo "
<div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='{$attribute["image"]}' alt='Car image'>
  <div class='card-body'>
    <h5 class='card-title'>$car</h5>
    <p class='card-text'><b>Model: </b>{$attribute["model"]} \n</p>
    <p class='card-text'><b>Year: </b>{$attribute["year"]}\n</p>
    <p class='card-text'><b>Location: </b> {$attribute["location"]}\n</p>
    <p class='card-text'><b>Price: </b> {$attribute["price"]}\n</p>
    <a href='#' class='btn btn-outline-dark'>Buy now</a>
  </div>
</div>
</div>
";

};

echo "</div>
";

echo "</div>
";

echo "
</div>";
?>
 -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php require_once "components/boot.php";  ?>
    <link rel="stylesheet" href="style.css">

    <title>Challenge</title>
</head>
<body>


<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
   
  &nbsp;  Challenge Exercise 
  </a>
</nav>



<h1 class="display-4 text-center p-5 m-5">Our soups</h1>







<div class='myContainer'>
<div class='row gap-1 p-0'>
    

<?php echo $tbody; ?>




<!-- 
<div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='pictures/soup1.jpg' alt='Car image'>
  <div class='card-body'>
    <h5 class='card-title'>Carrot Ginger Soup</h5>
    <p class='card-text'><b>Price </b> 7</p>
    <a href='#' class='btn btn-outline-dark'>Buy now</a>
  </div>
</div>
</div>

<div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='pictures/soup2.jpg' alt='Car image'>
  <div class='card-body'>
  <h5 class='card-title'>Broccoli Cheddar Soup</h5>
    <p class='card-text'><b>Price </b> 9</p>
    <a href='#' class='btn btn-outline-dark'>Buy now</a>
  </div>
</div>
</div>

<div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='pictures/soup3.jpg' alt='Car image'>
  <div class='card-body'>
  <h5 class='card-title'>Creamy Mushroom Soup</h5>
    <p class='card-text'><b>Price </b> 12</p>
    <a href='#' class='btn btn-outline-dark'>Buy now</a>
  </div>
</div>
</div> -->


</div>
</div>

    
</body>
</html>