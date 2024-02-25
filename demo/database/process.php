<?php
include('connect.php');

if (isset($_POST["create"])) {
    $FirstName = mysqli_real_escape_string($conn, $_POST["FirstName"]);
    $LastName = mysqli_real_escape_string($conn, $_POST["LastName"]);
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $Bio = mysqli_real_escape_string($conn, $_POST["Bio"]);

    $sqlInsert = "INSERT INTO `add` (FirstName, LastName, Email, Bio) VALUES ('$FirstName', '$LastName', '$Email', '$Bio')";

    if(mysqli_query($conn, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "User Added Successful!";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) {
    $FirstName = mysqli_real_escape_string($conn, $_POST["FirstName"]);
    $LastName = mysqli_real_escape_string($conn, $_POST["LastName"]);
    $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $Bio = mysqli_real_escape_string($conn, $_POST["Bio"]);
    $sqlUpdate = "UPDATE `add` SET FirstName = '$FirstName', LastName = '$LastName', Email = '$Email', Bio = '$Bio' WHERE id='$id'";
    if(mysqli_query($conn, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "User Updated Successful!";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
}
?>
