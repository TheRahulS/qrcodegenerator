<!DOCTYPE html>
<html lang="en">

<head>
<?php include './assets/_head.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <title>Profile Page</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Dancing+Script);

    * {
      margin: 0;
    }

    body {
      background-color: #EBF0F6;
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
      /* color: #e7e7e8; */
      left: 100%;
      bottom: 40px;
    }

    #edit:hover {
      color: red;
      font-size: 30px;
    }
  </style>
  <?php include './assets/_head.php'; ?>
  <!-- FontAwesome 5 -->
</head>

<body style="background-color:#F8F6F4">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home&nbsp;</a></li>
    <li class="active"><a href="dashboard.php">Dashboard&nbsp;/&nbsp;&nbsp;</li>
    <li class="active"><a href="profiles_List.php">Users_List</li>
  </ol>
  <!-- Navbar top -->


  <div class="profile" style="margin-right:15px">
    <img
      src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
      alt="" width="100" height="100" style="margin-right:130px">


    <div class="job" style="
    margin-right: 110px;
">
      Alexander Pearce
    </div>

  </div>



  </div>
  <!-- End -->

  <!-- Main -->
  <div class="main" style="padding-left:60px">
    <a href="Edit.php"><i class="fas fa-edit" id="edit"></i></a>
    <!-- <i class="fa fa-pen fa-xs edit"></i> -->
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
  </div>

</body>

</html>