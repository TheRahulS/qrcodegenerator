<?php



session_start();

include 'connection.php'; // Include your database connection parameters

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];

    // Check if the email is already registered
    $checkEmailSql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $checkEmailResult = mysqli_query($conn, $checkEmailSql);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "<script>alert('Username already exists'); window.location.href = '../pages/signup.php';</script>";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $insertUserSql = "INSERT INTO users (name, email, username, password, phone) VALUES ('$name', '$email', '$username', '$hashedPassword', '$phone')";

        if (mysqli_query($conn, $insertUserSql)) {
            // Retrieve the user ID after successful registration
            $user_id = mysqli_insert_id($conn);
            $_SESSION['id'] = $user_id;

            echo "<script>alert('Data inserted successfully'); window.location.href = '../pages/login.php';</script>";
        } else {
            echo "<script>alert('Data not inserted successfully'); window.location.href = '../pages/signup.php';</script>";
        }
    }
}

?>