<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './assets/_head.php'; ?>
    <style>
        th {
            text-align: center;
        }
    </style>
</head>

<?php include './assets/_header.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Total
            <small>Users</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="dashboard.php">Dashboard </a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <table class="table table-striped" border="1px solid black" style="text-align:center">
            <thead style="background:black;color:white;">
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Username</th>

                </tr>
            </thead>
            <tbody>

                <?php

                include '../config/connection.php';


                // echo $user_id;
                $sql = "select name,email,phone,username from users";
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
                                <?php echo $row['email']; ?>
                            </td>
                            <td>

                                <?php echo $row['phone']; ?>
                            </td>
                            <td>

                                <?php echo $row['username']; ?>
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

</section>

</div>
<?php include './assets/_footer.php'; ?>