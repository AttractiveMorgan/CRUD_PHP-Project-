<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Book Details</title>
    <style>
        .book-details{
           background: #f5f5f5;
           padding: 50px;

        }
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details my-4">
            <?php
            if (isset($_GET["id"])){
                $id = $_GET["id"];
                   include("connect.php");
                   $sql = "SELECT * FROM BOOKS WHERE id=$id";
                   $result = mysqli_query($conn, $sql);
                   $row = mysqli_fetch_array($result);
                ?>
                <h2>Title</h2>
                <p><?php echo $row ["Title"]; ?></p>
                <h2>Description</h2>
                <p><?php echo $row ["Description"]; ?></p>
                <h2>Type</h2>
                <p><?php echo $row ["Type"]; ?></p>
                <h2>Author</h2>
                <p><?php echo $row ["Author"]; ?></p>
                <?php
            }
            ?>
        </div>
    </div>

</body>
</html>