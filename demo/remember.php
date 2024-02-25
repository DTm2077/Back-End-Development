<?php 
session_start();
if(isset($_POST['email']) && isset($_POST['pass'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Hash the password before comparing
    $hashed_password = hash('sha256', $password);

    $conn = new mysqli('localhost', 'root', '', 'test_db', 3307);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Regenerate session ID
        session_regenerate_id(true);

        $_SESSION['u'] = $email;

        if(isset($_POST['c'])) {
            // Generate a random token for 'Remember Me' functionality
            $token = bin2hex(random_bytes(16));
            // Store the token in the database
            $sql = "UPDATE user SET remember_token = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $token, $email);
            $stmt->execute();
            // Set the token as a cookie
            setcookie('remember_token', $token, time()+86400*30, '/', '', true, true);
        }

        header("Location: database/index.php");
        exit();
    } else {
        include "index1.php";
    }

    $stmt->close();
    $conn->close();
} else {
    // Handle case when email and/or password are not provided
    // Redirect or show an error message
}
?>
