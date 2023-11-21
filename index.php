<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container {
      display: flex;
      justify-content: space-between;
    }

    ul {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      position: fixed;
      right: 0;
      top: 50%;
      margin: 20px 10px;

    }

    footer {
      position: fixed;
      bottom: 0;

    }

    footer h1 {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <?php
  include_once("config.php");

  ?>
  <div class="container">
    <?php
    include_once("navbar.php");



    ?>



  </div>
  <div>
    <?php

   

    $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
    $result = $conn->query($sql);
    ?>
  
    <ul>
      <h1>Other blogs..</h1>
      <?php
      while ($row = $result->fetch_assoc()) {
        echo "<li><a href='crud_p/blog.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></li>   <a href='crud_p/delete.php?id=" . $row["id"] . "'>Delete </a> <a href='crud_p/_update.php?id=" . $row["id"] . "'>edit </a>";
      }
      ?>
    </ul>
    <div class="sample">
      <a href="index.php">

        <h1>Hello world</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quae a perspiciatis, iure nobis hic, voluptates quibusdam dolor qui dolorum incidunt quas inventore dolore. Maiores ipsa esse nulla deleniti id!</p>
      </a>
    </div>

    <footer>
      <h3>© 2023 All rights reserved.</h3>
    </footer>



  </div>



  </div>
  </div>
</body>

</html>
