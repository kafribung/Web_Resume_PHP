<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
  <title>Dashboard</title>
  <!-- Bootstrap Core CSS -->
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- chartist CSS -->
  <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
  <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
  <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
  <!--This page css - Morris CSS -->
  <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="css/colors/blue.css" id="theme" rel="stylesheet">

  <!-- Favico -->
  <link href="../assets/images/users/icon_k.ico" rel="icon">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src=" https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"> </script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
  </script>
  <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <h4>Bung Dev</h4>
          </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto mt-md-0">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
              <form class="app-search" action="" method="GET">
                <input type="text" class="form-control" placeholder="Search & enter" disabled> <a class="srh-btn"><i class="ti-close"></i></a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <ul class="navbar-nav my-lg-0">
            <!-- ============================================================== -->
            <!-- Profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpeg" alt="user" class="profile-pic m-r-10" />Admin</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li> <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="manajemen.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Manajemen</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="about.php" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">About</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="motivasi.php" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Motivasi</span></a>
            </li>

            <li> <a class="waves-effect waves-dark" href="edukasi.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Edukasi</span></a>
            </li>
            <li> <a class="waves-effect waves-dark" href="komentar.php" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">Komentar</span></a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
      <!-- Bottom points-->
      <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
      <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->