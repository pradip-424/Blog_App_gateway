<?php
include_once("config.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $reenterPassword = $_POST["reenterPassword"];

   
    if (empty($name) || empty($email) || empty($password) || empty($reenterPassword)) {
        echo "All fields are required. Please fill in all the fields.";
    } elseif ($password !== $reenterPassword) {
        echo "Passwords do not match. Please try again.";
    } else {


     

       
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            echo "Registration Successful<br>";
            header("Location:signin.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
