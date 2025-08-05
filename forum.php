<?php
session_start();

include 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>autoecoleDRIVE PI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


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

      <h1 class="logo me-auto"><a href="accueil.php">Drive <em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="accueil.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="Accueil.php">Accueil</a></li>
          <li class="dropdown"><a href="a-propos.php"><span> A Propos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="equipes.php">Equipes</a></li>
              <li><a href="voitures.php">Voitures</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="information.php"><span>Informations</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="location.php">Location</a></li>
              <li><a href="horaires.php">Horaires</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="types.php"><span>Types</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="code.php">Code</a></li>
                  <li><a href="circuit.php">Circuit</a></li>
                  <li><a href="crono.php">Crono</a></li>
                </ul>
              </li>
              <li><a href="forfait.php">Forfaits</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="active" href="forum.php">Forum</a></li>
          <li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      if (isset($_SESSION['mail'])) { ?>
        <a href='verif.php' class="get-started-btn">retour au compte</a>
      <?php } else { ?>
        <a href='login.html' class="get-started-btn">connecter-vous</a>

      <?php } ?>
      <!-- <a href="login.html">Log</a> -->



    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h1>Forum</h1>
        <p>Bienvenue à Drive PI centre de formation & auto école Tunisie. </p>
      </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos témoignages</h2>
          <p>What are they saying</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            $stmt = $conn->prepare('Select nom_prenom,occupation,commentaire from commentaires');
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
              echo '<div class="swiper-slide">';
              echo '<div class="testimonial-wrap">';
              echo '<div class="testimonial-item">';
              echo '<img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">';
              echo '<h3>';
              echo $row['nom_prenom'];
              ?>
              </h3>
              <h4>
                <?php
                echo $row['occupation'];
                ?>
              </h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php
                echo $row['commentaire'];
                ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

              </p>
            </div>
          </div>
        </div>
      <?php }
            ?>



      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Ines Anane</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Très très bonne auto-école . Auto-école avec des moniteurs et des monitrices pédagogues , sérieux,
              appliqués , patients . Et qui veulent que leur élèves obtiennent leurs permis et cela le plus
              rapidement possible. Pour ma part code plus permis obtenu en 5 mois et les 2 du premier coup.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>

            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Très bonne auto école. J’ai réussi à avoir mon code et mon permis du premier coup et en 6 mois. La
              gérante est très sympathique et accorde de l’importance à chaque élève. Lorsque nous ne comprenons
              pas quelque chose sur le code ils sont là pour nous expliquer et répondre a nos questions. Ensuite
              au niveau de la conduite, chaque moniteur ont leurs qualités qui nous permettent de progresser
              rapidement. Ils sont pédagogiques à l’écoute et agréables. C’est une très bonne auto école que je
              recommande vivement.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>

            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Si vous voulez avoir votre permis de conduire avec une méthode d’apprentissage exceptionnelle,
              alors
              n’hésitez pas, FONCEZ à l’auto-école du Drive PI, Toute l’équipe souhaite votre réussite et il
              faut
              surtout bien écouter les conseils car ils sont la pour vous! Ils ne vous font pas attendre pour
              les
              dates d examen. Si vous êtes prêts, vous passez rapidement. Je ne manquerai pas d’inscrire mon
              plus
              jeune fils a l’auto-école du Drive PI et je vous encourage à le faire.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              <br>
              <br>
            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Très bonne auto école. Mon fils a eu son permis rapidement avec une organisation au top, le code
              bien préparé et la conduite des horaires adaptes à son emploi du temps. Ils viennent vous cherchez
              et ils peuvent vous déposez à votre domicile. Franchement ils font tout pour la réussite de
              l’examen
              final. Ils ont été plusieurs amis a tous avoir leur permis dans cette très bonne auto-école.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              <br>
              <br>
              <br>
              <br>
            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Nour</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              J’ai changée d’auto-école pour venir dans l’auto-école du Drive PI et je ne regrette pas du tout
              mon
              choix c’est une auto-école au top !! De très bon moniteurs, très sérieux, gentils, qui connaissent
              leur métiers. Ils poussent les élèves à fond, les motives. Il y a eu un suivi ce qui était très
              important pour moi, j’avais besoin de moniteur qui me soutienne. Une directrice très chaleureuse,
              elle motive, conseille, soutien aussi tout ces élèves; elle fait le nécessaire pour nous aider
              dans
              notre apprentissage. Très contente d’avoir mon permis avec Drive PI.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              <br>
            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
      </div>

      </div>
    </section><!-- End Testimonials Section -->




    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <form action="forum.php" method="post">
          nom: <input type="text" name="nom" class="form-control">
          prenom: <input type="text" name="prenom" class="form-control">
          occupation <input type="text" name="occupation" class="form-control">
          commentaire <textarea class="form-control" name="commentaire" id="" cols="30" rows="10"></textarea>
          <button type="submit">commenter</button>
        </form>
      </div>
    </section>
  </main><!-- End #main -->



  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
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

<?php
if (!empty($_POST)) {
  // echo '<script> alert("posted")</script>';
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $occupation = $_POST['occupation'];
  $commentaire = $_POST['commentaire'];

  $full_name = $nom . ' ' . $prenom;

  $stmt = $conn->prepare('insert into commentaires(nom_prenom,occupation,commentaire) values(?,?,?)');
  $stmt->bind_param('sss', $full_name, $occupation, $commentaire);
  $stmt->execute();

  if ($stmt) {
    // echo '<script> alert("inserted")</script>';
  }

}


?>