<?php
session_start();
include('connexion.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Drive PI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="accueil.php">Drive<em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="Accueil.php">Accueil</a></li>
          <li class="dropdown"><a href="a-propos.php"><span> A Propos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="a-propos.php#equipe">Equipes</a></li>
              <li><a href="a-propos.php#voiture">Voitures</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="information.php"><span>Informations</span> <i
                class="bi bi-chevron-down"></i></a>
          </li>
          <li class="dropdown"><a href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="services.php#etape"><span>Etapes</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#code">Code</a></li>
                  <li><a href="#circuit">Circuit</a></li>
                  <li><a href="#parc">parc</a></li>
                </ul>
              </li>
              <li><a href="services.php#forfait">Forfaits</a></li>
            </ul>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="forum.php">Forum</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      if (isset($_SESSION['identifiant'])) { ?>
        <a href='verif.php' class="get-started-btn">retour au compte</a>
      <?php } else { ?>
        <a href='login.html' class="get-started-btn">connecter-vous</a>

      <?php } ?>
      <!-- <a href="login.html">Log</a> -->



    </div>
  </header><!-- End Header -->

  <div>
    <br>
    <br>
    <br>
  </div>

  <main>
    <section>

      <div class="login-space">
        <div class="block-right"><br><br>
          <form action="admin-login-verif.php" method="post" class="login-form">
            <div class="ident">
              Identifiant : <input id="Login-admin" type="text" name="identifiant" placeholder="              identifiant">
            </div> <br> <br>
              Mot de passe : <input type="password" name="mdp-admin" id="mdp-login" placeholder="            mot de passe"><br><br><br>
            <button href="admin-login-verif.php" type="submit" id="submit-login">Confirmer</button>
          </form>
        </div>
      </div>
    </section>
  </main>



  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

  <section id="counts" class="counts section-bg">
      <div class="container">
    
        
    
      </div>
    </section><!-- End Counts Section -->


  <!-- ======= Footer ======= -->
  <footer>

    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Notre Adresse:</h3>
          <p>
            <span>Rue du Lac d'annecy <br>
              Les Berges du Lac 1053<br>
              Tunis, Tunisie</span>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">

        </div>

        <div class="col-lg-3 col-md-6 footer-links">

        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <div class="bas">
            <h4>contactez-nous</h4>
            <ul>
              <li>contact@pi.tn</li>
              <li>(+216)-70 026 426</li>
              <li>(+216)-29 310 031</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="sub-footer">
            <div class="row">
              <div class="col-lg-3">
                <div class="logo"><span>Drive<em>PI</em></span></div>
              </div>
              <div class="col-lg-6">
                <div class="menu">
                  <ul>
                    <li><a href="Accueil.php" class="active">Accueil</a></li>
                    <li><a href="a-propos.php">A Propos</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="information.php">Informations</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                  <ul>
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>