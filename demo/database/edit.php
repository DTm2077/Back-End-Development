<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit User</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM `add` WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                <div class="form-element my-4">
                <input type="text" class="form-control" name="photo" placeholder="Photo" value="<?php echo isset($row["Photo"]) ? $row["Photo"] : ''; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="FirstName" placeholder="First Name" value="<?php echo $row['FirstName']; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="LastName" placeholder="Last Name" value="<?php echo $row['LastName']; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="Email" placeholder="Email" value="<?php echo $row["Email"]; ?>">
            </div>
            <div class="form-element my-4">
                <textarea name="bio" class="form-control" placeholder="Bio"><?php echo $row["Bio"]; ?></textarea>
            </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <div class="form-element my-4">
                    <input type="submit" name="edit" value="Edit User" class="btn btn-primary">
                </div>
                <?php
            } else {
                echo "<h3>User Does Not Exist</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>
