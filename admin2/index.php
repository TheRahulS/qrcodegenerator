<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 100px;
    }

    input {
      margin: 10px;
    }
  </style>
</head>

<body>
  <h2>Login</h2>

  <?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check admin credentials
    $sql = "SELECT * FROM users WHERE admin_email = '$email' AND admin_pass = '$password'";
    $result = $conn->query($sql);

    // Check if the query returned a row
    if ($result->num_rows > 0) {
      // Login successful
      $row = $result->fetch_assoc();


      echo "<script>alert('Login successful'); window.location.href = 'dashboard.php';</script>"; // You can redirect to a dashboard or perform other actions here.
    } else {
      echo "<script>alert('Login Failed'); window.location.href = 'index.php';</script>";
    }

    // Close the database connection
    $conn->close();
  }
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
  </form>
</body>

</html>