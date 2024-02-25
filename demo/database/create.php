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
            <h1>Add User</h1>
            <div>
            <a href="process.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post" enctype="multipart/form-data">
            <div class="form-elemnt my-4">
                <input type="file" class="form-control" name="photo" accept="image/*">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="FirstName" placeholder="First Name">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="LastName" placeholder="Last Name">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="Email" placeholder="Email">
            </div>
            <div class="form-element my-4">
                <textarea name="Bio" id="" class="form-control" placeholder="Bio"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add User" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
