<?php
include '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    $id = $_POST['id'];
    $newStatus = $_POST['status'];

    // Update the status in the database
    $updateQuery = "UPDATE `register` SET status='$newStatus' WHERE id='" . $id . "'";


    $updateResult = mysqli_query($conn, $updateQuery);


    if ($updateResult) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>