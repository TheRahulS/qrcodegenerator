<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <!-- <a href="index.php" class="logo"><b>Admin</b>LTE</a> -->
            <a href="index.php"><img src="assets/images/logo.png" alt="" srcset="" width="120" class="logo"
                    style="background:white"></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation" style="background:white">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="color:black">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/user2-160x160.jpg" class="user-image" alt="User Image" />
                                <!-- <span class="hidden-xs">Alexander Pierce</span> -->
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="assets/images/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                    <p>Admin</p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="pull-right text-centre">
                                        <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <!-- <li class="header">MAIN NAVIGATION</li> -->

                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-home" aria-hidden="true" style="margin-top:45px"></i> <span>Dashboard</span>
                        </a>

                    </li>


                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Manage </span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="Users_List.php">Users_List</a></li>
                            <li class="active"><a href="Profiles_List.php">Profiles_List</a></li>

                        </ul>

                    </li>



                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>