<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeltaWeb|Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="images/icon/favicon.ico" /> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../login-vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--===============================================================================================-->
</head>

<body>
    <div id="message"></div>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('../images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" id="registration-form" method="POST"
                    action="../config/register.php">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <span class="login100-form-logo">
                        <img src="../images/deltaweb.png" width="100" class="img-fluid round-circle" alt="">
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter your name">
                        <input class="input100" autocomplete="off" type="text" name="name" id="name" placeholder="Name">
                        <span class="focus-input100" data-placeholder="&#xf2c0;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter your Username">
                        <input class="input100" autocomplete="off" type="text" name="username" id="username"
                            placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf2c0;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="email" autocomplete="off" name="email" id="email"
                            placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>


                    </div>



                    <div class="wrap-input100 validate-input" data-validate="Enter phone number">
                        <input class="input100" type="text" name="phone" autocomplete="off" id="phone"
                            placeholder="Phone Number">
                        <span class="focus-input100" data-placeholder="&#xf2b6;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" autocomplete="off" name="password" id="password"
                            placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <!-- <button class="login100-form-btn" value="register" name="register">
                            Sign Up
                        </button> -->
                        <input class="login100-form-btn" type="submit" value="register" name="submit">
                    </div>

                    <div class="text-center p-t-90">
                        <p class="txt1">
                            Already have an account? <a href="login.php">Log in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <!-- <div id="dropDownSelect1"></div> -->

    <!--===============================================================================================-->
    <script src="../login-vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login-vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login-vendor/bootstrap/js/popper.js"></script>
    <script src="../login-vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login-vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../login-vendor/daterangepicker/moment.min.js"></script>
    <script src="../login-vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../login-vendor/countdowntime/countdowntime.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--===============================================================================================-->
    <script src="../js/main.js"></script>
    <script>
        // $(document).ready(function () {
        //     $("#registration-form").submit(function (event) {
        //         event.preventDefault();

        //         // Collect form data
        //         var formData = {
        //             name: $("#name").val(),
        //             email: $("#email").val(),
        //             password: $("#password").val(),
        //             phone: $("#phone").val(),
        //             submit: true
        //         };

        //         // Send an AJAX request to your PHP script
        //         $.ajax({
        //             type: "POST",
        //             url: "register.php", // Replace with the actual URL of your PHP script
        //             data: formData,
        //             dataType: "json",
        //             success: function (response) {
        //                 // Handle the response from the server
        //                 if (response.status === "success") {
        //                     // $("#message").html(response.message);
        //                     toastr.success(response.message);
        //                 } else {
        //                     // $("#message").html(response.message);
        //                     toastr.error(response.message);
        //                 }
        //             }
        //         });
        //     });
        // });

        //     $(document).ready(function () {
        //     $("#registration-form").submit(function (event) {
        //         event.preventDefault();

        //         // Collect form data
        //         var name = $("#name").val();
        //         var email = $("#email").val().toLowerCase();
        //         var password = $("#password").val();
        //         var phone = $("#phone").val();
        //         var username = $("#username").val();


        //         // Check if any of the required fields are empty
        //         if (name.trim() === "" || email.trim() === "" || password.trim() === "" || phone.trim() === "") {
        //             toastr.error("Fill in the details");
        //             return; // Exit the function and prevent the AJAX request
        //         }

        //         var formData = {
        //             name: name,
        //             email: email,
        //             password: password,
        //             phone: phone,
        //             username: username,
        //             submit: true
        //         };

        //         // Send an AJAX request to your PHP script
        //         $.ajax({
        //             type: "POST",
        //             url: "../config/register.php", // Replace with the actual URL of your PHP script
        //             data: formData,
        //             dataType: "json",
        //             success: function (response) {
        //                 // Handle the response from the server
        //                 if (response.status === "success") {
        //                     toastr.success(response.message);
        //                 } else {
        //                     toastr.error(response.message);
        //                 }
        //             }
        //         });
        //     });
        // });
        // </script>
</body>

</html>