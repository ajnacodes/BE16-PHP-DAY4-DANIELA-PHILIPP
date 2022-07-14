<?php 
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// $connect = mysqli_connect($localhost, $username, $password, $dbname);

try {
    $connect = mysqli_connect($localhost, $username, $password, $dbname);
    // echo "connection successfully";
} catch (mysqli_sql_exception $e) {
     die("failed to connect to database".mysqli_connect_error());
    };
   
