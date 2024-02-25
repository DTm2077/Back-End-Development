<?php 
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test_db', 3307);
    if($conn->connect_error){
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM login WHERE Email = ? AND Password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            header("Location: database/index.php");
            exit(); 
        } else {
            echo "<h2>Invalid Email or Password. Try Again.</h2>";
        }
    }
} 
?>