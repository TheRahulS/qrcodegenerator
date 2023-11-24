<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Business Cards</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/parsley.css">
    <!-- <link rel="stylesheet" href="css/qrchp.css"> -->
    <link rel="stylesheet" href="../css/side/sidebar.css">
    <!-- datatable -->
    <!-- <link
        href="https://cdn.datatables.net/v/ju/dt-1.13.6/af-2.6.0/b-2.4.2/date-1.5.1/r-2.5.0/sc-2.2.0/sb-1.6.0/sl-1.7.0/datatables.css"
        rel="stylesheet"> -->
    <style>
        .profile-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar-->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom gradient-header">
                <img src="../images/deltaweb.png" class="img-fluid" width="150" alt="">
            </div>

            <!-- Profile section -->
            <div class="profile-circle mx-auto mt-3">
                <img src="../images/profile.jpg" alt="Profile" class="rounded-circle">
            </div>
            <div class="text-center mt-2">
                <!-- <a href="#" class="text-dark"><i class="fas fa-user"></i> Profile</a> | -->
                <a href="../pages/logout.php" class="text-dark"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>

            <!-- Sidebar navigation links -->
            <div class="list-group list-group-flush mt-3">
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active"
                    href="#!">Dashboard</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light gradient-header border-bottom">
                <div class="container-fluid">
                    <button class="btn gradient-header" id="sidebar-toggle"> <i class="fa fa-bars"></i> </button>
                </div>
            </nav>
            <!-- Page content-->
            <section class="p-1">
                <div class="container">
                    <div class="row">
                        <div class="content">
                            <div class="col-lg-12 col-md-12 col-12 p-1">
                                <div class="row p-1">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <h4> Overview</h4>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 text-end">
                                        <a class="btn btn-b" href="../pages/card-digi.php"> <i class="fa fa-qrcode"></i>
                                            &nbsp;
                                            Create Digital
                                            card</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card bg-danger">
                                            <div class="card-body">
                                                <div class="title">
                                                    <h6 class="">Total Card</h6>
                                                </div>
                                                <!-- Content for Card 1 -->
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <i class="fa fa-qrcode" style="font-size:3rem;"></i>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <?php
                                                        include 'connection.php';
                                                        if (!isset($_SESSION['id'])) {

                                                            exit();
                                                        }
                                                        $user_id = $_SESSION['id'];
                                                        // Query to count the number of registered QR codes
                                                        $countSql = "SELECT COUNT(id) AS qr_code_count FROM register  where user_id='" . $user_id . "'
                                                         ";
                                                        $countResult = mysqli_query($conn, $countSql);

                                                        if ($countResult && mysqli_num_rows($countResult) > 0) {
                                                            $countRow = mysqli_fetch_assoc($countResult);
                                                            $qrCodeCount = $countRow['qr_code_count'];
                                                        } else {
                                                            $qrCodeCount = 0;
                                                        }
                                                        ?>

                                                        <h6>
                                                            <?php echo $qrCodeCount; ?>
                                                        </h6>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div class="col-lg-12 col-md-12 col-12 ">
                                <div class="row mt-5">
                                    <div class="Title col-md-6 col-12">
                                        <h4> QR Code List:-</h4>

                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body table-responsive p-0" style="position:static;zoom:1;">
                                        <table id="qr_table"
                                            class="table dataTable no-footer table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone no</th>
                                                    <th>Action</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php

                                                include 'connection.php';

                                                if (!isset($_SESSION['id'])) {

                                                    exit();
                                                }
                                                $user_id = $_SESSION['id'];
                                                // echo $user_id;
                                                $sql = "SELECT * FROM `register` where user_id='" . $user_id . "' AND status='active'";

                                                // die(); // Replace 'your_table_name' with the actual table name
                                                

                                                $result = mysqli_query($conn, $sql);


                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    $id = 1;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $id; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['name']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row['Email']; ?>
                                                            </td>
                                                            <td>

                                                                <?php echo $row['phone']; ?>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success"
                                                                    href="download.php?image=<?php echo urlencode($row['QRCodeImage']); ?>"
                                                                    download><i class="fa fa-qrcode"
                                                                        aria-hidden="true"></i></a>&nbsp;



                                                                <a class="btn btn-success text-danger"
                                                                    href="edit.php?id=<?php echo $row['id'] ?>"><i
                                                                        class="fas fa-edit"></i></a>



                                                            </td>
                                            </div>
                                            </td>

                                            </tr>

                                            <?php
                                            $id++;
                                                    }
                                                } else {
                                                    ?>
                                        <tr>
                                            <td class="text-center" colspan="8">No data Found</td>
                                        </tr>
                                        <?php
                                                }
                                                ?>
                                    </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        </div>

        </section>

    </div>
    </div>




    <?php
    include '../footer_1.php';
    ?>
    <script>
        $(document).ready(function () {
            // Toggle the side navigation
            const sidebarToggle = $('#sidebar-toggle');
            if (sidebarToggle.length) {
                sidebarToggle.on('click', function (event) {
                    event.preventDefault();
                    $('body').toggleClass('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', $('body').hasClass('sb-sidenav-toggled'));
                });

                // Uncomment below to persist sidebar toggle between refreshes
                if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                    $('body').addClass('sb-sidenav-toggled');
                }
            }
        });

        $(document).ready(function () {
            new DataTable('#qr_table', {
                select: true
            }).DataTable({
                dom: 'Bfrtip',
                pagination: true,
                lengthMenu: [10, 25, 50, 100],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        })

    </script>