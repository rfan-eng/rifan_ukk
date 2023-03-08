<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $judul ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/mdi/css/materialdesignicons.min.css"> 
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="<?= base_url('assets/'); ?>index.html"><img src="<?= base_url('assets/'); ?>images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?= base_url('assets/'); ?>index.html"><img src="<?= base_url('assets/'); ?>images/cover.png" alt="cover" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="d-block">
                <div class="nav-profile-image">
                  <img src="<?= base_url('assets/'); ?>images/faces/cover.png" width="100px" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= $this->session->userdata('nama')  . ' - ' . $this->session->userdata('role'); ?></span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                <span class="menu-title">dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <?php if ($this->session->userdata('role') != 'kasir'): ?>  
              <?php if ($this->session->userdata('role') != 'owner'): ?>     
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('outlet'); ?>">Data outlet</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('paket'); ?>">Data Paket</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('member'); ?>">Data Member</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('user'); ?>">Data User</a></li>
                </ul>
              </div>
              </li>
              <?php endif ?>
              <?php endif ?>

              <?php if ($this->session->userdata('role') != 'owner'): ?>            
              <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('transaksi/tambah/'); ?>">Transaksi Baru</a></li>
                  <?php if ($this->session->userdata('role') != 'admin'): ?>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('member'); ?>">Data Member</a></li>
                  <?php endif ?>
                  <li class="nav-item"> <a class="nav-link" href="<?= base_url('transaksi'); ?>">Riwayat Transaksi</a></li>
                </ul>
              </div>
            </li>
            <?php endif ?>

              <?php if ($this->session->userdata('role') != 'kasir'): ?>
              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('laporan'); ?>">
                <span class="menu-title">Laporan</span>
                <i class="mdi mdi-clipboard-text menu-icon"></i>
              </a>
            </li>
            <?php endif ?>

              <li class="nav-item">
              <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <span class="menu-title">Logout</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <?php if ($judul != 'Tambah Transaksi'): ?>
        
          <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> <?= $judul ?>
              </h3>
             </div>
          <!-- content-wrapper ends -->
          <?php endif ?>