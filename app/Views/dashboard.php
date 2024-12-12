<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PLN Gambut</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="purple-free/src/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="purple-free/src/assets/vendors/font-awesome/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="purple-free/src/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="purple-free/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="purple-free/src/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="purple-free/src/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo" href="index.html"><img src="purple-free/src/assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="purple-free/src/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="purple-free/src/assets/images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">David Greymaax</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="purple-free/src/assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">David Grey. H</span>
                <span class="text-secondary text-small">Project Manager</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-1" aria-expanded="false" aria-controls="ui-basic-1">
              <span class="menu-title">Pasang Baru</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic-1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Data pelanggan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Tindak Lanjut</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Selesai</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic-2">
              <span class="menu-title">Perubahan Daya</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic-2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Data pelanggan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Tindak Lanjut</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Selesai</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Data Pasang Baru<i class="mdi mdi-chart-line mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5">15,0000</h2>
                  <h6 class="card-text">Increased by 60%</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="purple-free/src/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Perubahan Daya<i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                  </h4>
                  <h2 class="mb-5">45,6334</h2>
                  <h6 class="card-text">Decreased by 10%</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body p-0 d-flex">
                  <div id="inline-datepicker" class="datepicker datepicker-custom"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">PLN ULP Gambut<a href="https://www.bootstrapdash.com/" target="_blank"></a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="purple-free/src/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="purple-free/src/assets/vendors/chart.js/chart.umd.js"></script>
  <script src="purple-free/src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="purple-free/src/assets/js/off-canvas.js"></script>
  <script src="purple-free/src/assets/js/misc.js"></script>
  <script src="purple-free/src/assets/js/settings.js"></script>
  <script src="purple-free/src/assets/js/todolist.js"></script>
  <script src="purple-free/src/assets/js/jquery.cookie.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="purple-free/src/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>