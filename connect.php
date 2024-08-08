<?php
$dbhost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "CRUD";

$conn = mysqli_connect($dbhost, $dbUser, $dbPass, $dbName);
if (!$conn) {
     die("Something went wrong");
}
?>
