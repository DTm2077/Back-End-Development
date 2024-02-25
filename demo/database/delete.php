<?php
if (isset($_GET['id'])) {
    include("connect.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `add` WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["delete"] = "User has been deleted!";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
} else {
    echo "User not found";
}
?>
