<?php
include "db_connection.php";

$id = $_GET["id"];
$sql = "DELETE FROM blog_posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location:../index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
