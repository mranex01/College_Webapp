<!-- ======= Header ======= -->
<?php session_start(); if(!isset($_SESSION['username'])){ header("location: index.php"); }?>


<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">DKTE's YCP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if($title == "YCP - Home"){ echo"active"; } ?>"><a href="admin-home.php">Home</a></li>
          <li class="<?php if($title == "YCP - Students"){ echo"active"; } ?>"><a href="admin-studinfo.php">Students</a></li>
          <li class="<?php if($title == "YCP - Library"){ echo"active"; } ?>"><a href="admin-notice.php">Notice</a></li>
          <li class="<?php if($title == "YCP - Contact"){ echo"active"; } ?>"><a href="#">pending</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="stud-profile.php" class="get-started-btn">Your Profile</a>

    </div>
  </header><!-- End Header -->
 