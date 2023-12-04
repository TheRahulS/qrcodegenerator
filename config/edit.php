<?php

session_start();
include 'connection.php';



if (isset($_GET["id"])) {
    $id = $_GET["id"];
    // echo $id;

    $sql = "select * from register where id =$id";


    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            // print_r($row);
            // die();   
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
    <title>DeltaWeb</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
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
    <link rel="stylesheet" href="../css/iphone.css">
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
                            <!-- <a class="nav-link contact-link" href="">About Us</a> -->
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link contact-link  active" href="../about.php" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link contact-link  active" href="card-digi.php" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Digital Card
                            </a>

                        </li>

                    </ul>

                    <div class="d-flex">
                        <!-- Conditionally display Sign In and Sign Up buttons if not logged in -->


                        <div class="row m-auto">
                            <a href="../config/main.php" class="btn btn-b ">Dashboard</a>
                        </div>
                        <div class="row m-auto">
                            <div class="nav-item dropdown" id="profileDropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../images/profile.jpg" alt="Profile" class="rounded-circle" width="32"
                                        height="32">
                                </a>
                                <?php

                                $fname = $_SESSION['name'];
                                ?>
                                <ul class="dropdown-menu dropdown-menu-end" id="profileDropdownMenu">
                                    <li class="dropdown-item text-muted text-center">
                                        <?php echo $fname; ?>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <!-- <li><a class="dropdown-item text-center" href="Profile.php">Profile</a></li> -->
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
                            <a href="card-digi.php" class="active">
                                <div class="nav_icon_img"><i class="fa fa-id-card"></i></div>
                                <div class="nav_text"
                                    style="overflow: hidden;white-space:nowrap;max-width:180px;text-overflow: ellipsis;">
                                    Digital Business Cards</div>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="form-group form-control b-0 sh">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12 p-1 sh">
                    <form class="form-group form-text g-3" action="update.php" method="post"
                        enctype="multipart/form-data" data-parsley-validate data-parsley-errors-messages-enabled>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div>

                            <input type="text" name="selectedUserID" hidden>
                            <header>
                                <H1 class="bg-muted text-center t-d">𝕱𝖎𝖑𝖑 𝖙𝖍𝖊 𝕯𝖊𝖙𝖆𝖎𝖑𝖘
                                </H1>
                            </header>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Profile <small class="text-muted">(Image & Logo)</small>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body sh pa">
                                        <div class="row align-items-center">
                                            <div class="header">
                                                <h3>ENTER THE DETAILS</h3>
                                            </div>

                                            <!-- Images and Logo -->
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12 p-1">
                                                    <div class="mb-2">
                                                        <h6 class="t-d">Profile Photo: <small
                                                                class="text-danger">(.jpeg,.jpg,.png)*</small> <br>
                                                            <small class="text-muted"> </small>
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-12 p-1">
                                                            <label for="profileImageInput" class="custom-file-upload">
                                                                <i class="fa fa-upload"></i>
                                                            </label>
                                                            <input type="file" name="Profile" id="profileImageInput"
                                                                accept=".jpeg, .jpg, .png" onchange="previewImage()"
                                                                data-parsley-fileextension="jpeg,jpg,png" />
                                                        </div>
                                                        <!-- <div class="col-lg-12 col-md-12 col-12 p-1">
                                                            <div class="image-container">
                                                                <img id="profileImagePreview" src="#" alt="Profile Preview" style="display: none; max-width: 100%;">
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-12 p-1">
                                                    <div class="mb-2">
                                                        <h6 class="t-d">Logo: <small class="text-danger">(png)*</small>
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-12 p-1">
                                                            <label for="logoImageInput" class="custom-file-upload">
                                                                <i class="fa fa-upload"></i>
                                                            </label>
                                                            <input type="file" name="Logo" id="logoImageInput"
                                                                accept=" .png" onchange="previewLogoImage()"
                                                                data-parsley-fileextension="png" />
                                                        </div>
                                                        <!-- <div class="col-lg-12 col-md-12 col-12 p-1">
                                                            <div class="image-container">
                                                                <img id="logoImagePreview" src="#" alt="Logo Preview" style="display: none; max-width: 100%;">
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-4 align-items-center">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12 p-1">
                                                        <label class=" text-muted" for="name">Name:<small
                                                                class="text-danger">*</small></label>
                                                        <input type="text" id="name" onkeyup="updatePreview()"
                                                            class="form-group form-control" name="name"
                                                            placeholder="Enter Name" value="<?php echo $name; ?>"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-12 p-1 ">
                                                        <small class="text-muted">Designation:<small
                                                                class="text-danger">*</small></small>
                                                        <input type="text" id="designation"
                                                            onkeyup="updatedesignation()" class="form-control"
                                                            name="Designation" placeholder="Enter Designation/Position"
                                                            value="<?php echo $Designation; ?>" required>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12 p-1 ">
                                                        <small class="text-muted">Company:<small
                                                                class="text-danger">*</small></small>
                                                        <input type="text" id="company" onkeyup="updatecompany()"
                                                            class="form-control" name="CompanyName"
                                                            placeholder="Enter Company Name"
                                                            value="<?php echo $companyName; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-12 p-1">
                                                                <small class="text-muted">Label</small><br>
                                                                <span class="btn btn-label"
                                                                    style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fa fa-envelope"></i></span>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-8 col-md-8 col-12 p-1">
                                                                <small class="text-muted">Email address:<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="email" id="emailInput" class="form-control"
                                                                    name="emailicon" placeholder="email@domain.com"
                                                                    value="<?php echo $emailicon; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-12 p-1">
                                                                <small class="text-muted">Label</small><br>
                                                                <span class="btn btn-label"
                                                                    style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fa fa-phone"></i></span>
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-8 col-md-8 col-12 p-1">
                                                                <small class="text-muted">Phone no:-<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="tel" id="phoneInput"
                                                                    class="form-group form-control" name="callicon"
                                                                    value="<?php echo $callicon; ?>"
                                                                    placeholder="(+91) phone number"
                                                                    pattern="^[6-9]\d{9}$" minlength="10" maxlength="10"
                                                                    required
                                                                    data-parsley-error-message="Please enter a valid mobile number."
                                                                    data-parsley-trigger="keyup" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-12 p-1">
                                                                <small class="text-muted">Label</small><br>
                                                                <span class="btn btn-label"
                                                                    style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fa fa-whatsapp "></i></span>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-8 col-md-8 col-12 p-1">
                                                                <small class="text-muted">Whatsapp:<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="tel" class="form-group form-control"
                                                                    name="messageicon" id="message-no"
                                                                    placeholder="(+91) phone number "
                                                                    value="<?php echo $messageicon ?>"
                                                                    pattern="^[6-9]\d{9}$" minlength="10" maxlength="10"
                                                                    required
                                                                    data-parsley-error-message="Please enter a valid mobile number."
                                                                    data-parsley-trigger="keyup" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Address <small class="text-muted">(details)</small>
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body sh pa">
                                        <div class="row align-items-center">
                                            <div class="header bg-light">
                                                <h4>CONTACT US</h4>
                                            </div>
                                            <div class="row">
                                                <div><small class="text-muted">Email <small
                                                            class="text-danger">*</small></small></div>
                                                <div class="row" id="emailDivA">
                                                    <div class="col-lg-11 col-md-11 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-12 p-1">
                                                                <small class="text-muted">Label</small><br>
                                                                <span class="btn btn-label"
                                                                    style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fa fa-envelope"></i></span>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-8 col-md-8 col-12 p-1">
                                                                <small class="text-muted">Email address<small
                                                                        class="text-red">*</small></small>
                                                                <input type="email" id="emailaddress"
                                                                    onkeyup="emailpreview()" class="form-control"
                                                                    name="Email" placeholder="email@domain.com"
                                                                    value="<?php echo $Email; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div><small class="text-muted">Phone No.<small
                                                            class="text-danger">*</small></small></div>
                                                <div class="row" id="phoneDivA">
                                                    <div class="col-lg-11 col-md-11 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-12 p-1">
                                                                <small class="text-muted">Label</small><br>
                                                                <span class="btn btn-label"
                                                                    style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center; font-size:2rem;"><i
                                                                        class="fa fa-phone "></i></span>
                                                            </div>
                                                            <div class="col-lg-8 col-lg-8 col-md-8 col-12 p-1">
                                                                <small class="text-muted">Phone no.<small
                                                                        class="text-red">*</small></small>
                                                                <input type="tel" class="form-group form-control"
                                                                    name="phone" id="mobilephone"
                                                                    onkeyup="mobilepreview()"
                                                                    placeholder="(+91) phone number "
                                                                    pattern="^[6-9]\d{9}$" minlength="10" maxlength="10"
                                                                    value="<?php echo $phone; ?>" required
                                                                    data-parsley-error-message="Please enter a valid mobile number."
                                                                    data-parsley-trigger="keyup" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div><small class="text-muted">Address Detail</small></div>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-12 p-1">
                                                        <small class="text-muted">Label</small><br>
                                                        <span class="btn btn-label"
                                                            style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:3.2rem;">
                                                            <i class="fa fa-address-card"></i> </span>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-12 p-1">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Address Line 1<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-control" id="street-1"
                                                                    name="Address1" onkeyup="updateAddress()"
                                                                    placeholder="Enter Address"
                                                                    value="<?php echo $address1; ?>" required>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Address Line 2<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-control" id="street-2"
                                                                    name="Address2" onkeyup="updateAddress()"
                                                                    placeholder="Enter Address"
                                                                    value="<?php echo $address2; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Country<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-control" id="country"
                                                                    name="country" onkeyup="updateAddress()"
                                                                    placeholder="Enter Country"
                                                                    value="<?php echo $country; ?>" required>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">State<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-control" id="state"
                                                                    name="state" onkeyup="updateAddress()"
                                                                    placeholder="Enter State"
                                                                    value="<?php echo $state; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">City<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-control" id="city"
                                                                    name="city" onkeyup="updateAddress()"
                                                                    placeholder="Enter City"
                                                                    value="<?php echo $city; ?>" required>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Zip Code<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" class="form-group form-control"
                                                                    id="zip-code" name="zip"
                                                                    placeholder="Enter PIN code"
                                                                    data-parsley-zip-code="true" minlength="6"
                                                                    maxlength="6" value="<?php echo $zip; ?>" required
                                                                    data-parsley-error-message="Please enter a valid Indian ZIP code."
                                                                    data-parsley-trigger="keyup" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Action Button <i
                                                                        class="fa-regular fa-compass"></i><small
                                                                        class="text-danger">*</small></small>
                                                                <input type="text" id="action" onkeyup="actionpreview()"
                                                                    class="form-control" value="Get Direction"
                                                                    name="action" placeholder="Text" disabled
                                                                    maxlength="13">
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-12 p-1">
                                                                <small class="text-muted">Google Map URL<small
                                                                        class="text-danger">*</small></small>
                                                                <input type="url" class="form-group form-control"
                                                                    name="google" id="google-m-in"
                                                                    placeholder="Enter Google Maps link"
                                                                    value="<?php echo $google; ?>"
                                                                    data-parsley-pattern="^https:\/\/maps\.app\.goo\.gl\/[A-Za-z0-9]+$"
                                                                    data-parsley-pattern-message="Please enter a valid Google Maps link."
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Website <small class="text-muted"> &nbsp;(Links)</small>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body sh pa">
                                        <div class="row align-items-center">
                                            <div>
                                                <small class="text-muted"></small>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-12 p-1">
                                                    <small>Link</small>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-12 p-1">
                                                            <span class="btn btn-label"
                                                                style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                <i class="fa fa-link"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-12 p-1">
                                                            <small class="text-muted">Link<small
                                                                    class="text-danger">*</small></small>
                                                            <input type="text" class="form-control" name="URL"
                                                                id="web-link-input" value="<?php echo $URL; ?>" required
                                                                data-parsley-type-message="Please enter a valid URL">
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Title</small>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-12 p-1">
                                                            <span class="btn btn-label"
                                                                style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                <i class="fas fa-heading"></i>
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-12 p-1">
                                                            <small class="text-muted">Title<small
                                                                    class="text-danger">*</small></small>
                                                            <input type="text" class="form-control" name="title"
                                                                id="websitelink" onkeyup="preview()"
                                                                placeholder="web title" value="<?php echo $title; ?>"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div>
                                                            <h4 class="text-muted">Social Media:-</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-12 p-1">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-12 p-1">
                                                                        <i class="fa fa-linkedin-square"
                                                                            style="font-size:2.5rem;"></i>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-12 p-1">
                                                                        <input type="text" class="form-control"
                                                                            name="linkedin" id="linkedinInput"
                                                                            value="<?php echo $linkedln; ?>"
                                                                            placeholder=" usernameLinkedin">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-12 p-1">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-12 p-1">
                                                                        <i class="fa fa-instagram"
                                                                            style="font-size:2.5rem;"></i>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-12 p-1">
                                                                        <input type="text" id="instagramInput"
                                                                            class="form-control" name="instagram"
                                                                            placeholder="username-instagram"
                                                                            value="<?php echo $instagram; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-12 p-1">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-12 p-1">
                                                                        <i class="fa fa-twitter"
                                                                            style="font-size:2.5rem;"></i>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-12 p-1">
                                                                        <input type="text" id="twitterInput"
                                                                            class="form-control" name="twitter"
                                                                            placeholder="username-twitter"
                                                                            value="<?php echo $twitter; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-12 p-1">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-12 p-1">
                                                                        <i class="fa fa-facebook"
                                                                            style="font-size:2.5rem;"></i>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-12 p-1">
                                                                        <input type="text" class="form-control"
                                                                            name="facebook" id="facebookInput"
                                                                            placeholder="username-facebook"
                                                                            value="<?php echo $facebook; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Images &nbsp; <small class="text-muted">(Post)</small>
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body sh pa">
                                        <div class="row align-items-center">
                                            <small class="text-muted">Images</small>
                                            <div class="wrapper-u">
                                                <div class="container-u">
                                                    <h1 class="uploadh1">Upload a file</h1>
                                                    <div class="upload-container">
                                                        <div class="border-container">
                                                            <div class="icons fa-4x">
                                                                <i class="fas fa-file-image"
                                                                    data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                                                <i class="fas fa-file-image"
                                                                    data-fa-transform="shrink-2 up-4"></i>
                                                                <i class="fas fa-file-image"
                                                                    data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                                            </div>
                                                            <p>
                                                                <label for="file-post" class="btn btn-primary">browse
                                                                    your computer<small
                                                                        class="text-red">*</small></label>
                                                                <input type="file" name="imagepost" id="file-post"
                                                                    accept=".jpeg, .jpg, .png"
                                                                    data-parsley-fileextension="jpeg,jpg,png"
                                                                    data-parsley-trigger="change"
                                                                    data-parsley-errors-container="#filePostErrorContainer"
                                                                    data-parsley-max-file-size="5000"
                                                                    data-parsley-error-message="This file should not be larger than 5MB."
                                                                    data-parsley-max-file-size-message="This file should not be larger than %s mb." />

                                                                <!-- <input type="file" name="imagepost" id="file-post" accept=".jpeg, .jpg, .png" required data-parsley-fileextension="jpeg,jpg,png" > -->
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-12 p-1">
                                                    <div id="file-preview-post"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-12 col-md-12 col-12 p-1 text-center py-3">
                            <button type="submit" class="btn btn-b"> Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-12 p-1  sh">
                    <div class="form-group">
                        <header>
                            <H1 class="bg-muted text-center t-d">𝕮𝖆𝖗𝖉 𝕯𝖊𝖘𝖎𝖌𝖓
                            </H1>
                        </header>
                    </div>`
                    <div class="d-flex justify-content-center">
                        <div class="device-i">
                            <div class="status-i">
                                <div class="time-i">9:41</div>
                                <div class="blank-i"></div>
                                <div class="icons-i">
                                    <iconify-icon icon="ic:round-signal-cellular-alt" inline
                                        style="font-size:2rem;"></iconify-icon>
                                    <iconify-icon icon="ic:round-wifi" inline style="font-size:2rem;"></iconify-icon>
                                    <iconify-icon icon="gg:battery-full" inline style="font-size:2rem;"></iconify-icon>
                                </div>
                            </div>
                            <div class="floating-i">
                                <div class="camera-i">
                                    <div class="blob-i white-i"></div>
                                    <div class="blob-i bbg-i"></div>
                                    <div class="blob-i green-i"></div>
                                    <div class="blob-i red-i"></div>
                                </div>
                            </div>

                            <div id="preview">
                                <div class="">

                                    <div class="card-1 card-1-p"
                                        style=" background-image: url('<?php echo $imagepost; ?>');  background-size: cover;    background-repeat: no-repeat;    max-width:400px;    ">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-12">
                                                        <h2 class="">
                                                            <h2 id="nameplaceholder">NAME</h2>
                                                        </h2>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-12">
                                                        <h6 class="text-start">
                                                            <h5 id="designationplaceholder"> Desgination</h5>
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-12">
                                                        <h4 class="card-text">

                                                            <h4 id="companyplaceholder">Company
                                                            </h4>

                                                        </h4>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-12 ">
                                                        <div class="logo-container">
                                                            <img src="<?php echo $Logo; ?>" class="logo"
                                                                id="image-banner" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-1 ">

                                        <div class="card-footer b-t text-center">
                                            <div class="row  justify-content-center">
                                                <div class="col-lg-4 col-12 p-1 mb-2"><a href="#" id="callLink"
                                                        class="btn round-circle contact-link">
                                                        <iconify-icon icon="material-symbols:call" inline
                                                            style="font-size:2rem;"></iconify-icon>
                                                    </a>
                                                </div>
                                                <div class="col-lg-4 col-12 p-1 mb-2"><a href="#" id="emailLink"
                                                        class="btn round-circle contact-link">
                                                        <iconify-icon icon="material-symbols:mail-outline" inline
                                                            style="font-size:2rem;"></iconify-icon>

                                                    </a></div>
                                                <div class="col-lg-4 col-12 p-1"><a href="#" id="open-whatsapp"
                                                        class="btn round-circle contact-link">
                                                        <iconify-icon icon="ic:outline-whatsapp" inline
                                                            style="font-size:2rem;"></iconify-icon>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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
                                                        <div class="col-lg-2 col-12 p-1">
                                                            <a href="tel:+91-9999-99-0092" class="contact-link">
                                                                <span class="material-symbols-outlined">
                                                                    call
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10 col-12 p-1">
                                                            <h6 id="contactplaceholder">
                                                                <a href="tel:9999999999" class="contact-link">
                                                                    9999999999
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-12 p-1">
                                                            <a href="mailto:your.email@example.com"
                                                                class="contact-link">
                                                                <span class="material-symbols-outlined">
                                                                    mail
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-10 col-12 p-1">
                                                            <h6 id="emailplaceholder">
                                                                <a href="mailto:mail@domain.com" class="contact-link">
                                                                    mail@domain.com
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-12 p-1">
                                                            <span class="material-symbols-outlined contact-link">
                                                                distance
                                                            </span>
                                                        </div>
                                                        <div class="col-lg-10 col-12 p-1">
                                                            <h6>

                                                                <p class="add-p">Address</p>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="text-c ">
                                                <button class="btn btn-b ">
                                                    <a href="https://maps.app.goo.gl/414ux42d2Bgp83vb9" id="map-link"
                                                        class="btn d-flex " target="_blank">
                                                        <iconify-icon icon="entypo:direction" inline
                                                            style="font-size:2.5em;"></iconify-icon>&nbsp;<b>
                                                            <h5 id="actionplaceholder">Get Direction</h5>
                                                    </a>
                                                </button>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-1">
                                        <div class="card-header-3">
                                            <div class="card-header-4">
                                                <div class="col-3 text-center">
                                                    <iconify-icon icon="fluent-mdl2:website" inline
                                                        style="font-size:2rem;"></iconify-icon>
                                                </div>
                                                <div class="col-9 text-start">
                                                    <h4>&nbsp; Website</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-text">
                                                <a href="https://www.website.in/" class="contact-link" id="dynamic-link"
                                                    target="_blank">
                                                    <h5 id="previewplaceholder">
                                                        <iconify-icon icon="mdi:search-web" inline
                                                            style="font-size:2rem;"></iconify-icon>
                                                        &nbsp;Website
                                                    </h5>
                                                </a>
                                            </h4>
                                            <a href="#" id="linkedinLink"
                                                class="btn btn-error contact-link rounded-circle" target="_blank">
                                                <iconify-icon icon="ri:linkedin-line" inline
                                                    style="font-size:2rem;"></iconify-icon>
                                            </a>

                                            <a href="https://www.instagram.com/deltaview.in/" id="instagramLink"
                                                class="btn btn-error contact-link rounded-circle"
                                                target="_blank"><iconify-icon icon="line-md:instagram" inline
                                                    style="font-size:2rem;"></iconify-icon>
                                            </a>
                                            <a href="https://www.facebook.com/DeltaITNetwork/" id="facebookLink"
                                                class="btn btn-error contact-link rounded-circle" target="_blank">
                                                <iconify-icon
                                                    icon="streamline:computer-logo-facebook-2-media-facebook-social"
                                                    inline style="font-size:2rem;"></iconify-icon>
                                            </a>
                                            <a href="https://www.twitter.com/DeltaITNetwork/" id="twitterLink"
                                                class="btn btn-error contact-link rounded-circle" target="_blank">
                                                <iconify-icon
                                                    icon="streamline:computer-logo-twitter-media-twitter-social" inline
                                                    style="font-size:2rem;"></iconify-icon>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="card-1">
                                        <div class="card-header-3">
                                            <div class="card-header-4">
                                                <div class="col-3 text-center">
                                                    <i class="fa-solid fa-image " style="font-size:30px;"></i>
                                                </div>
                                                <div class="col-9 text-start">
                                                    <h4>&nbsp; Post</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <img src="<?php echo $Profile; ?>" id="image-preview" class="img-fluid"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="home-i"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">
        <div class="footer-company-info">
            <div class="footer-img text-start">
                <img src="../images/deltaweb.png" width="100" class="img-fluid logo" alt="logo">

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
    <script src="../js/parsley.min.js"></script>
    <script src="../js/all.query.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#emailInput').on('input', function () {
                $(this).val($(this).val().toLowerCase());
            });
        });
        $(document).ready(function () {
            $('#emailaddress').on('input', function () {
                $(this).val($(this).val().toLowerCase());
            });
        });
        $(document).ready(function () {
            $('#myForm').parsley();

            $('#myForm').on('submit', function (event) {
                if (!$('#myForm').parsley().validate()) {
                    alert("Please fill in all the required fields.");
                    event.preventDefault();
                }
            });
        });
        $(document).ready(function () {
            // Add a click event handler to the accordion buttons
            $('.accordion-button').on('click', function () {
                // Close all accordion sections
                $('#accordionExample .accordion-collapse').removeClass('show');

                // Open the clicked accordion section
                var target = $(this).attr('data-bs-target');
                $(target).addClass('show');
            });
        });
    </script>

</body>

</html>