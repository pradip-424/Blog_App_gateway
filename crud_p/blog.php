<?php
include_once("db_connection.php");

$id = $_GET["id"];




$sql = "SELECT * FROM blog_posts where id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<?php

echo "<h1>  " . $row["title"] . " </h1> <p> " . $row["content"] . "</p>";
?>
