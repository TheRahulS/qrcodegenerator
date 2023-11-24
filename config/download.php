<?php
// Ensure that the image parameter is provided in the URL
if (isset($_GET['image'])) {
    // Get the image URL from the query parameter
    $imageURL = $_GET['image'];

    // Set the appropriate headers for download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="qr_code.jpg"');

    // Read and output the image content
    readfile($imageURL);
    exit;
} else {
    // Handle the case when the image parameter is missing
    echo "Image not found.";
}
?>