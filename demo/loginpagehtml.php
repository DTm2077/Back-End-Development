<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <form class="form" action="login.php" method="post">
            <h1 class="form__title">Login</h1>
            <div class="form_message form_message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="email" name="email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" placeholder="password" name="password" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass']; } ?>" required>
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="checkbox" id="rememberme" name="rememberme" <?php if(isset($_COOKIE['email'])){ echo "checked"; } ?>>
                <label for="rememberme">Remember Me</label>
            </div>
            <button class="form__button" type="submit">Continue</button> 
        </form>
    </div>
</body>
</html>
