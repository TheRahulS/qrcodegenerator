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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/parsley.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="../css/new.style.css">
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <!-- header.php -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light gradient-header border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/deltaweb.png" class="img-fluid" width="100" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link contact-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact-link active" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link contact-link" href="#">About Us</a> -->
                        </li>

                        <?php

                        if (isset($_SESSION['id'])) {
                            // Display the "Product" dropdown only if the user is logged in
                            echo '
                                   
                            <li class="nav-item ">
                                <a class="nav-link contact-link " href="pages/card-digi.php" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Digital Card
                                </a>

                               
                            </li>
                        ';
                        }
                        ?>
                    </ul>

                    <div class="d-flex">
                        <!-- Conditionally display Sign In and Sign Up buttons if not logged in -->
                        <?php
                        if (!isset($_SESSION['id'])) {
                            echo '<a href="pages/login.php" class="btn btn-b btn-light ms-3" id="signInButton">Sign In</a>';
                            echo '<a href="pages/signup.php" class="btn btn-b btn-light ms-3" id="signUpButton">Sign Up</a>';
                        } else {
                            $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';



                            // Display the profile dropdown if logged in
                            echo "
                            <div class='row m-auto'>
                            <a href='config/main.php' class='btn btn-b '>Dashboard</a>
                            </div>
                            <div class='row m-auto'>
                            <div class='nav-item dropdown' id='profileDropdown'>
                                <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownProfile' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    <img src='images/profile.jpg' alt='Profile' class='rounded-circle' width='32' height='32'>
                                </a>
                                <ul class='dropdown-menu dropdown-menu-end' id='profileDropdownMenu'>
                               
                                    <li class='dropdown-item text-muted text-center'>" . $name . "</li>
                                    <li>
                                        <hr class='dropdown-divider'>
                                    </li>
                                    
                                    <li><a class='dropdown-item text-center' href='pages/logout.php'>Logout</a></li>
                                </ul>
                            </div>
                            </div>
                        ";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>