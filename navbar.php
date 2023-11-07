<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .logo {
            position: relative;
            left: 0;
        }

        .right {
            position: fixed;
            right: 0;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['log']) && $_SESSION['log'] == true) {

        echo '<div class="right">
        <div >' . $_SESSION['name'] . '</div>
    <a href="logout.php">Logout </a>
    </div>';
    } else {
        echo ' <div class="right">
    <button><a href="signin.php">Sign </a></button>
    <button><a href="register.php">Register </a></button>
</div>';
    }
    ?>
    <h1 class="logo">Sample Blog application</h1>
</body>

</html>