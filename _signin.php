<?php

include_once("config.php");

// include_once("navbar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "SELECT name, password FROM users WHERE name = '$username ' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $db_password = $row["password"];

        // Verify the password
        if ($db_password == $password) {
            session_start();
            $_SESSION['log'] = true;

            $_SESSION['name'] = $username;
            // Password is correct, user is authenticated
            header("Location:index.php");
        }
    }



    $conn->close();
}
