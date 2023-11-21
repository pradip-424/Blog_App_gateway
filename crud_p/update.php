<?php
include "db_connection.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "UPDATE blog_posts SET title='$title', content='$content' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location:../index.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
