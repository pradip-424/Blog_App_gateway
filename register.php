<!DOCTYPE html>
<html>

<head>
  <title>Registration Page</title>
</head>

<body>
  <h1>Registration Form</h1>

  <form method="post" action="_register.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required /><br /><br />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required /><br /><br />

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required /><br /><br />

    <label for="reenterPassword">Re-enter Password:</label>
    <input type="password" id="reenterPassword" name="reenterPassword" required /><br /><br />

    <input type="submit" value="Register" />
    <input type="text">
  </form>
</body>

</html>