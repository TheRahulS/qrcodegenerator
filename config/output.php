<?php

include 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from register where id =$id";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);
    if ($result > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $name = $row['name'];
            $Designation = $row['Designation'];
            $companyName = $row['CompanyName'];
            $Logo = $row['Logo'];
            $callicon = $row['callicon'];
            $emailicon = $row['emailicon'];
            $messageicon = $row['messageicon'];
            $Email = $row['Email'];
            $phone = $row['phone'];
            $address1 = $row['Address1'];
            $address2 = $row['Address2'];
            $state = $row['state'];
            $country = $row['country'];
            $city = $row['city'];
            $zip = $row['zip'];
            $title = $row['title'];
            $URL = $row['URL'];
            $action = $row['action'];
            $google = $row['google'];
            $linkedln = $row['linkedln'];
            $instagram = $row['instagram'];
            $facebook = $row['facebook'];
            $twitter = $row['twitter'];
            $imagepost = $row['imagepost'];
            // $videolink=$row['videolink'];
            $qrcodeimage = $row['QRCodeImage'];
            $Profile = $row['Profile'];
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Cards</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="../css/new.style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .d-none {
            display: none !important;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="container-fluid">
            <!-- First Card with Background Image -->

            <div class="card-1 card-1-p " style=" background-image: url('<?php echo $Profile; ?>');
    background-size: cover;
    background-repeat: no-repeat;
    max-width:400px;">
                <div class="card-body">
                    <div class="card-content pr">
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <h1 class=" f-vh">
                                    <?php echo $name; ?>
                                </h1>
                            </div>
                            <div class="col-lg-8 col-12">
                                <h5 class="text-start">
                                    <?php echo $Designation; ?>
                                </h5>
                            </div>
                            <div class="col-lg-10 col-12">
                                <h4 class="card-text">
                                    <?php echo $companyName; ?>
                                </h4>
                            </div>
                            <div col-lg-12 col-12>
                                <div class="logo-container">
                                    <img src="<?php echo $Logo; ?>" class="logo" id="image-banner" alt="deltaview"
                                        style="transform:scale(1.5);padding:8px;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <!-- Second Card -->

            <div class="card-1 ">
                <!-- b-t transparent background -->
                <!-- <sdiv class="card-body"> -->
                <div class="card-footer b-t text-center">
                    <div class="row  justify-content-center">
                        <div class="col-lg-4 col-12 mb-2"><a href="tel:<?php echo $callicon; ?>"
                                class="btn round-circle contact-link">
                                <span class="material-symbols-outlined ">
                                    call
                                </span>
                            </a></div>
                        <div class="col-lg-4 col-12 mb-2"><a href="mailto:<?php echo $emailicon; ?>"
                                class="btn round-circle contact-link">
                                <span class="material-symbols-outlined ">
                                    mail
                                </span>
                            </a></div>
                        <div class="col-lg-4 col-12">
                            <a href="#" class="btn round-circle contact-link" id="open-whatsapp-1"
                                data-phone="<?php echo $messageicon; ?>">
                                <!-- Set the data-phone attribute with the phone number -->
                                <iconify-icon icon="ic:outline-whatsapp" inline style="font-size:2rem;"></iconify-icon>
                            </a>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

            </div>


            <!-- Third Card -->

            <div class="card-1">
                <div class="card-header-3">
                    <div class="card-header-4">
                        <div class="col-3 text-center">
                            <i class="fa fa-address-card fa-bounce" style="font-size:30px;"></i>
                        </div>
                        <div class="col-9 text-start">
                            <h4>Contact Details</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-g">
                        <li class="list-g-item">
                            <div class="row">
                                <div class="col-lg-2 col-12">
                                    <a href="tel:<?php echo $phone; ?>" class="contact-link">
                                        <span class="material-symbols-outlined">
                                            call
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-10 col-12">
                                    <h6>
                                        <a href="tel:<?php echo $phone; ?>" class="form-group contact-link">
                                            <?php echo $phone; ?>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-12">
                                    <a href="mailto:<?php echo $Email; ?>" class="form-group contact-link">
                                        <span class="material-symbols-outlined">
                                            mail
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-10 col-12">
                                    <h6>
                                        <a href="mailto:<?php echo $Email; ?>" class="d-flex contact-link">
                                            <?php echo $Email; ?>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-12">
                                    <span class="material-symbols-outlined contact-link">
                                        distance
                                    </span>
                                </div>
                                <div class="col-lg-10 col-12">
                                    <h6>
                                        <h6>
                                            <?php echo $companyName; ?>
                                        </h6>
                                        <p class="add-p">
                                            <?php echo $address1 . " " . $address2 . " " . $city . " " . $state . " " . $country . " " . $zip; ?>
                                        </p>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-c ">
                        <button class="btn btn-b">
                            <a href="<?php echo $google; ?>" class="d-flex" target="_blank">
                                <i class="fa-solid fa-location-arrow fa-beat"
                                    style="font-size:30px;color: #000000;"></i>&nbsp;<b>
                                    Get Direction
                                </b>
                            </a>
                        </button>

                    </div>
                </div>
            </div>
            <!-- Fourth Card -->
            <div class="card-1">
                <div class="card-header-3">
                    <div class="card-header-4">
                        <div class="col-3 text-center">
                            <i class="fa-solid fa-link fa-fade" style="font-size:30px;"></i>
                        </div>
                        <div class="col-9 text-start">
                            <h4>&nbsp; Website</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-text">
                        <a href="<?php echo $URL; ?>" class="contact-link" target="_blank">
                            <h5><i class="fa fa-link" style="font-size:36x"></i> &nbsp
                                <?php echo $title; ?>
                            </h5>
                        </a>
                    </h4>

                    <?php
                    if (!empty($linkedln)) {
                        echo '<a href="https://linkedin.com/in/' . $linkedln . '" class="btn btn-error contact-link rounded-circle" target="_blank">
                        <i class="fa fa-linkedin-square" style="font-size:36px"></i>
                    </a>';
                    }
                    if (!empty($instagram)) {
                        echo '<a href="https://www.instagram.com/' . $instagram . '/" class="btn btn-error contact-link rounded-circle" target="_blank">
                                <i class="fa fa-instagram" style="font-size:36px"></i>
                            </a>';
                    }
                    if (!empty($facebook)) {
                        echo '<a href="https://www.facebook.com/' . $facebook . '/" class="btn btn-error contact-link rounded-circle" target="_blank">
                                <i class="fa fa-facebook" style="font-size:36px"></i>
                            </a>';
                    }
                    if (!empty($twitter)) {
                        echo '<a href="https://www.twitter.com/' . $twitter . '/" class="btn btn-error contact-link rounded-circle" target="_blank">
                                <i class="fa fa-twitter" style="font-size:36px"></i>
                            </a>';
                    }
                    ?>


                </div>
            </div>
            <!-- Fourth Card -->

            <div class="card-1">
                <div class="card-header-3">
                    <div class="card-header-4">
                        <div class="col-3 text-center">
                            <i class="fa-solid fa-image" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-9 text-start">
                            <h4>&nbsp; Post</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center form-control">
                    <img src="<?php echo $imagepost; ?>" class="img-fluid" style="max-width: 100%;">
                </div>
            </div>


        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-lg-4 col-12" id="div">
                <a href="download.php?image=<?php echo $qrcodeimage; ?> " download class="transparent-l">
                    <div class="transparent_text-l">&nbsp; <b>Share QR</b> </div>
                    <div class="transparent_circle-l">
                        <span class="material-symbols-outlined">share</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-12">

                <a href="down.php?id=<?php echo $id; ?>" class="transparent">
                    <div class="transparent_text"> <b> Add to Contact</b></div>
                    <div class="transparent_circle">
                        <span class="material-symbols-outlined">add</span>
                    </div>
                </a>

            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/template-1.js"></script>
    <script src="https://kit.fontawesome.com/d48e697a0c.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>

    <script src="../js/parsley.min.js"></script>
    <script src="../js/all.query.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
        $(document).ready(function () {
            const openWhatsAppButton = $("#open-whatsapp-1");

            openWhatsAppButton.on("click", function (event) {
                event.preventDefault(); // Prevent the default link behavior

                // Get the phone number from the data-phone attribute
                const phoneNumber = openWhatsAppButton.data('phone');

                // Check if the phone number is not empty
                if ($.trim(phoneNumber) !== "") {
                    // Construct the WhatsApp URL with the phone number and pre-filled message
                    const message = "Hello, I want to send you a message.";
                    const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

                    // Open WhatsApp in a new tab or window
                    window.open(whatsappURL, "_blank");
                } else {
                    // Display an error message if the input is empty
                    alert("Please enter a phone number.");
                }
            });
        });
    </script>
</body>

</html>