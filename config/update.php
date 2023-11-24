<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $designation = mysqli_real_escape_string($conn, $_POST['Designation']);
    $company_name = mysqli_real_escape_string($conn, $_POST['CompanyName']);
    $email_icon = mysqli_real_escape_string($conn, $_POST['emailicon']);
    $call_icon = mysqli_real_escape_string($conn, $_POST['callicon']);
    $message_icon = mysqli_real_escape_string($conn, $_POST['messageicon']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address1 = mysqli_real_escape_string($conn, $_POST['Address1']);
    $address2 = mysqli_real_escape_string($conn, $_POST['Address2']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    // $action = mysqli_real_escape_string($conn, $_POST['action']);
    $google = mysqli_real_escape_string($conn, $_POST['google']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $url = mysqli_real_escape_string($conn, $_POST['URL']);
    // $video_link = mysqli_real_escape_string($conn, $_POST['videolink']);
    $instagram_link = mysqli_real_escape_string($conn, $_POST['instagram']);
    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
    $twitter_link = mysqli_real_escape_string($conn, $_POST['twitter']);
    $linkedin_link = mysqli_real_escape_string($conn, $_POST['linkedin']);





    $updateSql = "UPDATE register SET 
        name = '$name',
        Designation = '$designation',
        CompanyName = '$company_name',
        emailicon = '$email_icon',
        callicon = '$call_icon',
        messageicon = '$message_icon',
        Email = '$email',
        phone = '$phone',
        Address1 = '$address1',
        Address2 = '$address2',
        city = '$city',
        country = '$country',
        zip = '$zip',
        state = '$state',
        google = '$google',
        title = '$title',
        URL = '$url',
        instagram = '$instagram_link',
        facebook = '$facebook',
        twitter = '$twitter_link',
      
     
        linkedln = '$linkedin_link'
        WHERE id = $id";


    $updateQuery = mysqli_query($conn, $updateSql);




    if ($updateQuery) {
        echo "<script>alert('Data updated successfully'); window.location.href = 'main.php';</script>";
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}






?>