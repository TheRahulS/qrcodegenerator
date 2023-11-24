<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeltaWeb</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/parsley.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="../css/new.style.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <!-- header.php -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light gradient-header border-bottom gradient-header">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../images/deltaweb.png" class="img-fluid" width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link contact-link active" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact-link" href="">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link contact-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item contact-link" href="card-digi.php">Create Digital Card</a>
                                </li>
                                <li><a class="dropdown-item contact-link" href="qr-gen.php">Create QR Code</a></li>
                                <li><a class="dropdown-item contact-link" href="qr-scanner.php">Scan QR Code</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="d-flex">
                        <!-- Conditionally display Sign In and Sign Up buttons if not logged in -->


                        <div class="row m-auto">
                            <a href="main.php" class="btn btn-b ">Dashboard</a>
                        </div>
                        <div class="row m-auto">
                            <div class="nav-item dropdown" id="profileDropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/profile.jpg" alt="Profile" class="rounded-circle" width="32"
                                        height="32">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" id="profileDropdownMenu">
                                    <li class="dropdown-item text-muted text-center">rahul soni</li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-center" href="Profile.php">Profile</a></li>
                                    <li><a class="dropdown-item text-center" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container tab-select mt-5 mb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="nav-gen">
                        <li>
                            <a href="card-digi.php" class="">
                                <div class="nav_icon_img"><i class="fa fa-id-card"></i></div>
                                <div class="nav_text"
                                    style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                    Digital Business Cards</div>
                            </a>
                        </li>

                        <li>
                            <a href="qr-gen.php" class="active">
                                <div class="nav_icon_img"><i class="fa fa-qrcode"></i></div>
                                <div class="nav_text"
                                    style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                    QR
                                    Generator</div>
                            </a>
                        </li>
                        <li>
                            <a href="qr-scanner.php" class="">
                                <div class="nav_icon_img"><i class="fa fa-qrcode"></i></div>
                                <div class="nav_text"
                                    style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                    QR
                                    Scan</div>
                            </a>
                        </li>

                        <li class="load_more_options">
                            <a href="">
                                <div class="nav_icon_img"><i class="fa fa-chevron-right"></i></div>
                                <div class="nav_text"
                                    style="overflow: hidden;white-space:nowrap;max-width:110px;text-overflow: ellipsis;">
                                    More</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>















    <div class="footer">
        <div class="footer-company-info">
            <div class="footer-img">
                <img src="../images/deltaweb.png" class="logo" alt="">
                <span>Delta Web Service</span>
            </div>
            <div class="infos">
                <span>© 2023 Delta Web Services. All Rights Reserved</span>
                <span>All rights reserved</span>
            </div>
            <div class="footer-icons">
                <i class="fa fa-instagram" href="https://www.instagram.com/deltawebservices/"></i>
                <i class="fa fa-facebook" href="https://www.facebook.com/DeltaWebServices"></i>
                <i class="fa fa-twitter" href="https://twitter.com/deltawebservice"></i>
                <i class="fa fa-youtube" href="https://www.youtube.com/DeltaWebServices"></i>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d48e697a0c.js" crossorigin="anonymous"></script>

    <script src="../js/biomp.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/template-1.js"></script>
    <script src="../js/all.query.js"></script>

</body>

</html>