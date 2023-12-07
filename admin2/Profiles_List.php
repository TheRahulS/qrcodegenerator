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
        <table class="table table-striped" border="1px solid black" style="text-align:center" id="tblList3">
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
                // if(isset($_GET['id'])) {
                //     $id = $_GET['id'];
                //     exit();
                // }
                
                include '../config/connection.php';

                $sql = "SELECT register.user_id, register.id, register.name, register.status, register.email, register.phone, users.name as user_name
                FROM register
                JOIN users ON register.user_id = users.id";








                $result = mysqli_query($conn, $sql);

                ;



                if($result && mysqli_num_rows($result) > 0) {
                    $id = 1;
                    ?>
                    <form method="post" id="statusForm">
                        <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            // echo "<pre>";
                            // print_r($row);
                    
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
                                    <select name="status_<?php echo $row['user_id']; ?>"
                                        data-user-id="<?php echo $row['user_id']; ?>" data-id="<?php echo $row['id']; ?>"
                                        onchange="updateStatus(this)">
                                        <option value="active" <?php echo ($row['status'] == 'active') ? 'selected="selected"' : ''; ?>>Active</option>
                                        <option value="inactive" <?php echo ($row['status'] == 'inactive') ? 'selected="selected"' : ''; ?>>Inactive</option>
                                    </select>

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
                            // Unbind the onchange event to prevent recursion
                            $(selectElement).off('change');

                            var user_id = selectElement.dataset.userId;
                            var id = selectElement.dataset.id;
                            var selectedStatus = selectElement.value;

                            $.ajax({
                                type: "POST",
                                url: "update_status.php",
                                data: { id, status: selectedStatus, user_id },

                                success: function (response) {
                                    try {

                                        console.log(reaponse);
                                    } catch (e) {
                                        console.error("Error parsing JSON response:", e);
                                        console.log("Non-JSON response:", response);
                                    }
                                },
                                error: function (xhr, status, error) {
                                    console.error("Error updating status:");
                                    console.log("Status: " + status);
                                    console.log("Error: " + error);
                                },

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