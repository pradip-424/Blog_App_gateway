<?php
include "db_connection.php"; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "UPDATE blog_posts SET title='$title', content='$content' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location:../index.php"); // Redirect to the blog homepage
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
