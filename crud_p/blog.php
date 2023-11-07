<?php
include_once("db_connection.php");

$id = $_GET["id"];


// Include the database connection script

$sql = "SELECT * FROM blog_posts where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!-- HTML for displaying the list of blog posts -->

<?php

echo "<h1>  " . $row["title"] . " </h1> <p> " . $row["content"] . "</p>";
?>