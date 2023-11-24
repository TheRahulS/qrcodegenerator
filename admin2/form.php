<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './assets/_head.php'; ?>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Dancing+Script);

    * {
      margin: 0;
    }

    body {
      background-color: #F8F6F4;
      font-family: Arial;
      overflow: hidden;
    }

    .profile {
      margin-bottom: 20px;
      margin-top: -12px;
      text-align: center;
      margin-top: 20px;
      margin-right: 750px;
    }

    .profile img {
      border-radius: 50%;
      box-shadow: 0px 0px 5px 1px grey;
    }

    .name {
      font-size: 20px;
      font-weight: bold;
      padding-top: 20px;
    }

    div h1 {
      color: black;
    }

    .job {
      font-size: 16px;
      font-weight: bold;
      padding-top: 10px;

    }

    .main {
      margin-top: 2%;
      margin-left: 29%;
      font-size: 20px;
      padding: 0 10px;
      width: 58%;
      background-color: white;
      margin-left: 285px;

    }

    .main h2 {
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .main .card table {
      border: none;
      font-size: 16px;
      height: 270px;
      width: 80%;
    }

    #edit {
      position: relative;
      top: 130px;
      /* color: #e7e7e8; */
      /* left: 100%; */
      bottom: 40px;
      /* color:white; */
      border: 1px solid #F8F6F4;
      margin-left: 870px;
      font-size: 20px;
      color: red;
      border-radius: 50px;

    }

    /* #edit:hover {
      color: red;
      font-size: 30px;
    } */
  </style>
  <!-- DATA TABLES -->
  <!-- <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" /> -->
</head>
<!-- header and sidebar -->
<?php include './assets/_header.php'; ?>
<!--// header and sidebar -->

<!-- Right side column all content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Admin
      <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li class="active"><a href="Profiles_List">user_List</a></li>
    </ol>
  </section>

  <!-- Main content -->


  <section class="content">
    <!-- <a href="Edit.php"><i class='fas fa-edit' id="edit"></i> -->
    <button id="edit"><a href="Edit.php">Edit</a></button>
    <div class="profile" style="margin-right:15px;">
      <img
        src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
        alt="" width="100" height="100" style="margin-right:13px;
      padding-right:6px">



      <div class="job" style="
    margin-right: 11px;
">
        Alexander Pearce
      </div>
      <div class="main">

        <table class="table table-stripped">

          <tbody>
            <tr>

              <td>Name</td>
              <td>:</td>
              <td>ImDezCode</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td>imdezcode@gmail.com</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>:</td>
              <td>Bali, Indonesia</td>
            </tr>
            <tr>
              <td>Hobbies</td>
              <td>:</td>
              <td>Diving, Reading Book</td>
            </tr>
            <tr>
              <td>Job</td>
              <td>:</td>
              <td>Admin User</td>
            </tr>
            <tr>
              <td>Skill</td>
              <td>:</td>
              <td>PHP, HTML, CSS, Java</td>
            </tr>
            <tr>
              <td>About</td>
              <td>:</td>
              <td>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione autem dolorem inventore?</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div><!-- /.row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

</div>



</div>
<!-- End -->

<!-- Main -->


<!-- footer -->
<?php include './assets/_footer.php'; ?>
<!--// footer -->


<!-- DATA TABES SCRIPT -->
<!-- jQuery 2.1.3 -->
<!-- <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script> -->
<!-- Bootstrap 3.3.2 JS -->