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
            <li class=""><a href="dashboard.php">Dashboard </a></li>
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
                    <th scope="col">Create_User</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../config/connection.php';

                $sql = "SELECT register.user_id, register.name, register.status, register.email, register.phone, users.name as user_name
            FROM register
            JOIN users ON register.user_id = users.id";

                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $id = 1;
                    ?>
                    <form method="post" id="statusForm">
                        <?php
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
                                    <?php echo $row['user_name']; ?>
                                </td>
                                <td>
                                    <select name="status" onchange="updateStatus(this)">
                                        <option value="active" <?php echo ($row['status'] == 'active') ? 'selected="selected"' : ''; ?>>Active</option>
                                        <option value="inactive" <?php echo ($row['status'] == 'inactive') ? 'selected="selected"' : ''; ?>>Inactive</option>
                                    </select>
                                    <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                </td>
                            </tr>
                            <?php
                            $id++;
                        }
                        ?>
                    </form>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script>
                        function updateStatus(selectElement) {
                            var user_id = $(selectElement).next("input[name='user_id']").val();
                            var newStatus = $(selectElement).val();

                            // Update the status in the database using AJAX
                            $.ajax({
                                type: "POST",
                                url: "update_status.php", // Replace with the actual PHP script that handles the update
                                data: { user_id: user_id, status: newStatus },
                                success: function (response) {
                                    console.log(response); // Log the response from the server
                                },
                                error: function (error) {
                                    console.error("Error updating status: " + error.responseText);
                                }
                            });
                        }
                    </script>
                    <?php
                } else {
                    ?>
                    <tr>
                        <td class="text-center" colspan="6">No data Found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    </section>

</div>
<?php include './assets/_footer.php'; ?>