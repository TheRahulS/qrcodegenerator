<html>

<head>
    <title>Password Reset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="cdnjs.cloudflare.com_ajax_libs_toastr.js_latest_js_toastr.min.js"></script>
    <link rel="stylesheet" href="cdnjs.cloudflare.com_ajax_libs_toastr.js_latest_css_toastr.min.css">
</head>
<style>

</style>
<?php
include '../config/connection.php';
if (isset($_REQUEST['pwdrst'])) {
    $psw = $_REQUEST['psw'];
    $psw_repeat = $_REQUEST['psw_repeat'];
    $email = $_POST['email'];
    $password = password_hash($psw, PASSWORD_BCRYPT);
    $cpassword = password_hash($psw_repeat, PASSWORD_BCRYPT);
    if ($psw == $psw_repeat) {
        $sql = "update users set password='$password' where email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result > 0) {
            $msg = 'your password updated successfullyto Login';
            header("refresh:1;URL=login.php");


        } else {
            $msg = 'error while updating password';
        }
    } else {
        $msg = "password and confirm password does not match";
    }
}
if ($_GET['secret']) {
    $email = base64_decode($_GET['secret']);
    $sql1 = "select email from users where email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    $count = mysqli_num_rows($result1);
    if ($count > 0) { ?>

        <body>
            <div class="container">
                <div class="table-responsive">
                    <h3 align="center">Reset Password</h3><br />
                    <div class="box">
                        <form id="validate_form" method="post">
                            <input type="hidden" name="email" value="<?php echo $email; ?>" />
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input type="password" name="psw" id="psw" placeholder="Enter Password" required
                                    data-parsley-type="pwd" data-parsley-trigg er="keyup" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="cpwd">Confirm Password</label>
                                <input type="password" name="psw_repeat" id="psw_repeat" placeholder="Enter Confirm Password"
                                    required data-parsley-type="cpwd" data-parsley-trigg er="keyup" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="submit" id="login" name="pwdrst" value="Reset Password" class="btn btn-success" />
                            </div>

                            <p class="error">
                                <?php if (!empty($msg)) {
                                    echo $msg;
                                } ?>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        <?php }
} ?>
</body>

</html>