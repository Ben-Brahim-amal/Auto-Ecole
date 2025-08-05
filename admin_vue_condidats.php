<?php
session_start();

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

    <!-- Tab CSS File -->
  <link rel="stylesheet" href="fiche.css">

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

      <h1 class="logo me-auto"><a href="index.php">Drive<em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="Accueil.php">Accueil</a></li>
          <li><a class="active" href="admin_heures.php">Horaires</a>
          </li>

          <li class="dropdown"><a href=""><span>Log Out</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="logout.php ">Log Out</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- <script src="tab1.js"></script> -->
  <main id="main">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
  
    <div class="fiche">
  <br>
  <br>
    <div class='signup-container'>
      <img src="assets/img/testimonials/testimonials-4.jpg"  width="400px"  height="500px">
    <div class='right-container'>

        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Nom : <br> Smiai
            </label>
          </div>
          <div class='pets-photo'>
            <label for='pets-upload'>CIN : <br> 12345678  </label>

          </div>
        </div>

        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Prénom : <br> Nour</label>
          </div>
          <div class='pets-birthday'>
            <label for='pets-birthday'>Birthday</label>
          </div>
        </div>

        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Adresse : <br>11111 ALI JRIDI</label>
          </div>
          <div class='pets-photo'>
            <label for='pets-upload'>Email <br> pi@pi.tn</label>

          </div>
        </div>
        
        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Formation <br></label>
          </div>
          <div class='pets-photo'>
            <label for='pets-upload'>Mot de passe <br> </label>

          </div>
        </div>
        
        <div class='set'>
          <div class='pets-name'>
            <label for='pets-name'>Télèphone : <br> 87654321</label>
          </div>
          <div class='pets-photo'>
            <label for='pets-upload'>Upload a photo</label>

          </div>
        </div>
        
        <div class='set'>
          <div class='pets-breed'>
            <label for='pets-breed'>Breed</label>
          </div>
          <div class='pets-birthday'>
            <label for='pets-birthday'>Birthday</label>
          </div>
        </div>
          <button id="pic-submit">Confirmer</button>
        

          </div>
  </div>
</div>


<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  <?php
  include 'connexion.php';
  include 'functions.php';
  $id_c = $_GET['id_c'];
  echo 'candidat  ' . $id_c;
  // echo "<script type='text/javascript'>alert(" . $_SESSION['id'] . ");</script>";
  $stmt = $conn->prepare('SELECT * FROM candidats where id_c=?');
  $stmt->bind_param('i', $id_c);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($row = $result->fetch_assoc()) {
    $_SESSION['id_c'] = $row['id_c'];
    echo "<tr>";
    echo "<td>" . $row['id_c'] . "</td>";
    echo "<td>" . $row['CIN'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['prenom'] . "</td>";
    echo "<td>" . $row['naissance'] . "</td>";
    echo "<td>" . $row['profession'] . "</td>";
    echo "<td>" . $row['adresse'] . "</td>";
    echo "<td>" . $row['tel'] . "</td>";
    echo "<td>" . $row['id_m'] . "</td>";
    echo "<td>" . $row['mail'] . "</td>";
    echo "<td>" . $row['formation'] . "</td>";
    echo "<tr>";
    echo "<a href='admin_vue_candidats.php/?id_c=" . $row['id_c'] . "'>inscrire<a/>";

  }
  if (isset($_GET['id_c'])) {
    inscrire($_GET['id_c']);
  } ?>
      </div>
    </section>
  </main> 
  
  
  
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
  
  
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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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