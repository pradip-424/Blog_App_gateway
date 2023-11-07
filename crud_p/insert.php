<?php
include "db_connection.php"; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO blog_posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php"); // Redirect to the blog homepage
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
