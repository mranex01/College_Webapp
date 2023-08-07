
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">DKTE's YCP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if($title == "YCP - Home"){ echo"active"; } ?>"><a href="index.php">Home</a></li>
          <li class="<?php if($title == "YCP - About"){ echo"active"; } ?>"><a href="about.php">About</a></li>
          <li class="<?php if($title == "YCP - Office"){ echo"active"; } ?>"><a href="office.php">Office</a></li>
          <li class="<?php if($title == "YCP - Library"){ echo"active"; } ?>"><a href="library.php">Library</a></li>
          
          <li class="<?php if($title == "YCP - Contact"){ echo"active"; } ?>"><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?php if($title == "YCP - Login"){ echo"register.php";}else{ echo"login.php";} ?>" class="get-started-btn"><?php if($title == "YCP - Login"){ echo"Register"; }else{ echo"Login"; } ?></a>

    </div>
  </header><!-- End Header -->
   <!-- $$$$$$$$$$$$$$$$$$$         CHECKING SESSIONS       $$$$$$$$$$$$$$$$$$$$$$$$$ -->
   <?php //require("database.php"); ?>

   <?php //if(!isset($_SESSION['username'])){ header("location: index.php"); }?>
                        
                        <!-- $$$$$$$$$$$$$$$$$$$       ####################       $$$$$$$$$$$$$$$$$$$$$$$$$ -->
                        