<?php
include "db_connection.php"; // Include the database connection script

$id = $_GET["id"];
$sql = "DELETE FROM blog_posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location:../index.php"); // Redirect to the blog homepage
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
