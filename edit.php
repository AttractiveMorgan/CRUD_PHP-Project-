<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM Books WHERE id=$id  ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result );

            ?>
        <form action="process.php" method="post">
            <div class="div form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row["Title"];?>"placeholder="Book Title:">
            </div>
            <div class="div form-element my-4">
                <input type="text" class="form-control" value="<?php echo $row["Author"];?>" name="author" placeholder="Author Name:">
            </div>
            <div class="div form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Adventure" <?php if($row['Type']=="Adventure"){echo "selected";} ?> >Adventure</option>
                    <option value="Fantasy" <?php if($row['Type']=="Fantasy"){echo "selected";} ?> >Fantasy</option>
                    <option value="Sci-Fi" <?php if($row['Type']=="Sci-Fi"){echo "selected";} ?> >Sci-Fi</option>
                    <option value="Horror" <?php if($row['Type']=="Horror"){echo "selected";} ?> >Horror</option>
                </select>
            </div>
            <div class="div form-element my-4">
                <input type="text" value="<?php echo $row["Description"];?>" class="form-control" name="description" placeholder="Book Description:">
            </div>
            <input type="hidden" name="id" value='<?php  echo $row['ID'];?>'>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="Edit Book">
            </div>
        </form>
           
        <?php
        }
        ?>
        
    </div>
      
</body>
</html>
