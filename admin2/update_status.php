<?php
include '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $newStatus = $_POST['status'];

    // Update the status in the database
    $updateQuery = "UPDATE `register` SET status='$newStatus' WHERE user_id='$user_id'";

    $updateResult = mysqli_query($conn, $updateQuery);
    echo $updateResult;
    die();

    if ($updateResult) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>