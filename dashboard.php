<?php
$title = 'dashboard';
include("header.php");
include("sidebar.php");
?>
<main class="main-content">
  <div class="position-relative iq-banner">
    <?php include("navbar.php"); ?>
    <!-- Nav Header Component Start -->
    <div class="iq-navbar-header" style="height: 215px;">
      <div class="container-fluid iq-container">
        <div class="row">
          <div class="col-md-12">
            <div class="flex-wrap d-flex justify-content-between align-items-center">
              <div>
                <h1>Hallo Admin!</h1>
                <p>Selamat datang di sistem informasi Wisma Wijaya Kusuma.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="iq-header-img">
        <img src="assets/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header1.png" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header2.png" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header3.png" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header4.png" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
        <img src="assets/images/dashboard/top-header5.png" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
      </div>
    </div>
    <!-- Nav Header Component End -->
    <!--Nav End-->
  </div>
  <div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
      <div class="col-md-12 col-lg-12">

        <!-- Star content -->

        <?php include("info.php"); ?>

        <!-- Akhir content -->


      </div>

    </div>
  </div>

  <?php include("footer.php"); ?>