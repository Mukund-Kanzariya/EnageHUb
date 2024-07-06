<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Engage Hub | Admin</title>
  <link rel="shortcut icon" type="image/png" href="<?= urlOf('admin/assets/images/logos/favicon.png') ?>" />
  <link rel="stylesheet" href="<?= urlOf('admin/assets/css/styles.min.css') ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="<?= urlOf('admin/index.php') ?>" class="text-nowrap logo-img">
            <img src="<?= urlOf('assets/img/logo5.png') ?>" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= urlOf('admin/index.php')?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= urlOf('admin/pages/communityHall.php') ?>" aria-expanded="false">
                <span>
                <i class="ti ti-building-community"></i>
                </span>
                <span class="hide-menu">Community Halls</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= urlOf('admin/pages/kitchenArea.php') ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-tools-kitchen"></i>
                </span>
                <span class="hide-menu">Kitchen Area</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= urlOf('admin/pages/conferenceHall.php') ?>" aria-expanded="false">
                <span>
                <i class="ti ti-podium"></i>
                </span>
                <span class="hide-menu">Conference Hall</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->