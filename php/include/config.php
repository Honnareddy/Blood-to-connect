<!-- <?php 

// $connection = mysqli_connect("localhost","root","","donatetheblood") or die("Database is not connected.".mysqli_connect_error());

?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "donatetheblood";

$connection = new mysqli("localhost", "root", "", "donatetheblood");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
