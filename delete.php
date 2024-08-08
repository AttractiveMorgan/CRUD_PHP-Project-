<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM Books WHERE ID=$id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["delete"] = "Book Deleted Successfully";
        header("Location:index.php");

    }
}

?>