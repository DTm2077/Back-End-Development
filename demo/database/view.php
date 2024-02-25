<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>User Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>User Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="user-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sqlSelect = "SELECT * FROM `add` WHERE id=$id";
                $result = mysqli_query($conn, $sqlSelect);
                if ($result && mysqli_num_rows($result) > 0) {
                    $data = mysqli_fetch_assoc($result);
            ?>
                <h3>Photo:</h3>
                <img src="<?php echo $data["Photo"]; ?>" alt="User Photo" style="max-width: 300px;">
                <h3>FirstName:</h3>
                <p><?php echo $data["FirstName"]; ?></p>
                <h3>LastName:</h3>
                <p><?php echo $data["LastName"]; ?></p>
                <h3>Email:</h3>
                <p><?php echo $data["Email"]; ?></p>
            <?php
                } else {
                    echo "<h3>No user found</h3>";
                }
            } else {
                echo "<h3>No user ID provided</h3>";
            }
            ?>
        </div>
    </div>
</body>
</html>
