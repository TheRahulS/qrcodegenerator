<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './assets/_head.php'; ?>
</head>

<!-- header and sidebar -->
<?php include './assets/_header.php'; ?>
<!--// header and sidebar -->

<!-- Right side column all content  -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
            include '../config/connection.php';
            $countSql = "SELECT COUNT(id) AS qr_code_count FROM register";
            $countResult = mysqli_query($conn, $countSql);

            if ($countResult && mysqli_num_rows($countResult) > 0) {
              $countRow = mysqli_fetch_assoc($countResult);
              $qrCodeCount = $countRow['qr_code_count'];
            } else {
              $qrCodeCount = 0;
            }



            ?>
            <h3>
              <?php echo $qrCodeCount; ?>
            </h3>
            <p>Total Digital Card</p>
          </div>
          <div class="icon">
            <i class="fa fa-qrcode"></i>
          </div>
          <a href="profiles_List.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->


      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            include '../config/connection.php';
            $countSql = "SELECT COUNT(id) FROM users";

            $countSql = "SELECT COUNT(id) as userCount FROM users";
            $countResult = mysqli_query($conn, $countSql);

            if ($countResult && mysqli_num_rows($countResult) > 0) {
              $countRow = mysqli_fetch_assoc($countResult);
              $userCount = $countRow['userCount'];
            } else {
              $userCount = 0;
            }

            ?>


            <h3>
              <?php echo $userCount; ?>
            </h3>
            <p>Total Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="Users_List.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->


  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<!-- footer -->
<?php include './assets/_footer.php'; ?>
<!--// footer -->