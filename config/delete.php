<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "DELETE FROM register WHERE id='$id'";
   
    $result = mysqli_query($conn, $sql);
    if ($result) {
          echo "<script>alert('Record deleted successfully'); window.location.href = 'main.php';</script>";
           exit;  // Make sure to exit to prevent further script execution
    }
}

?>