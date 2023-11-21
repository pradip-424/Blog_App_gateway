<!DOCTYPE html>
<html lang="en">
<?php
include "db_connection.php"; 

$id = $_GET["id"];

$sql = "SELECT * FROM blog_posts where id=$id";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$title = $row['title'];
$content = $row['content'];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">
        <input type="number" name="id" value="<?php echo $row["id"]; ?>">
        <label for="title">title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>">
        <label for="content">Content:</label>
        <input type="text" name="content" value="<?php echo $content; ?>">
        <button type="submit">Sub</button>
    </form>

</body>

</html>
