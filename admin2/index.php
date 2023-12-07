<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

    body {
      background-color: #F0ECE5;
    }

    .container {
      width: 466px;
      height: 190px;
      border: 1px solid black;
      margin-left: 450px;
      margin-top: 100px;

    }
  </style>
</head>

<body>
  <h2>Login</h2>

  <?php
  include '../config/connection.php';
  // Check if the form is submitted
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
  

    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check admin credentials
    $sql = "SELECT * FROM users WHERE admin_email = '$email' AND admin_pass = '$password'";
    $result = $conn->query($sql);

    // Check if the query returned a row
    if($result->num_rows > 0) {
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

  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <input class="btn btn-primary" type="submit" value="Login">
    </form>
  </div>
</body>

</html>