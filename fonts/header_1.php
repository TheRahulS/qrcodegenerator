<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Cards</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/parsley.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark gradient-header">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/deltaweb.png" width="100" alt="Logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link contact-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link contact-link" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link contact-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link contact-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item contact-link" href="#">Create</a></li>
                                <li><a class="dropdown-item contact-link" href="#">Create QR Code</a></li>
                                <li><a class="dropdown-item contact-link" href="#">Scan QR Code</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <!-- Sign Up and Sign In buttons initially visible -->
                        <a href="login.php" class="btn btn-b btn-light ms-3" id="signInButton">Sign In</a>
                        <a href="signup.php" class="btn btn-b btn-light ms-3" id="signUpButton">Sign Up</a>

                        <!-- Profile dropdown button initially hidden -->
                        <div class="nav-item dropdown" id="profileDropdown"" style=" display: none;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/profile.jpg" alt="Profile" class="rounded-circle" width="32"
                                    height="32">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" id="profileDropdownMenu">
                                <li class="dropdown-item text-muted text-center">Kuldeep</li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-center" href="Profile.php">Profile</a></li>

                                <li><a class="dropdown-item text-center" href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>