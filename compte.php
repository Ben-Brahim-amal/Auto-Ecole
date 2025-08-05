<?php
include "connexion.php";
print("<br>");

session_start();
echo $_SESSION['mail'];
print("<br>");

// echo '<script> alert(' . $_SESSION["id"] . ')</script>';
$id_c = $_SESSION["id"];
$mail = $_SESSION['mail'];
$req = array();

$stmt = $conn->prepare('SELECT nom,adresse,id_m from candidats where id_c=?');
$stmt->bind_param('i', $id_c);
$stmt->execute();
$result = $stmt->get_result();
foreach ($result as $row) {
  foreach ($row as $value) {
    array_push($req, $value);
    print_r($value);

    // print("<br>");
  }
}
echo 'Bienvenue ' . strval($req[0]);

print("<br>");
print("<br>");

// $result = $stmt->fetch(PDO::FETCH_LAZY);
// print_r($result);
// print("\n");

// $result = $stmt->get_result();
// foreach ($result as $row) {
//   foreach ($row as $value) {
//     print_r($value);
//     print("<br>");
//   }
// }


$sender = 'candidat';
$_SESSION['sender'] = [];

array_push($_SESSION['sender'], $req[2], $id_c, $sender);

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
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

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
  <link rel="stylesheet" href="Mentor\assets\scss\style.css">
  <link rel="stylesheet" href="Mentor\assets\scss\style.css.map">



  <!-- mssg -->
  <link href="tab.css" rel="stylesheet">


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
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="Accueil.php">Accueil</a></li>
          <li> <a>la date du code:
            </a></li>

          <li> <a> la date de conduite: </a></li>
          <li class="dropdown"><a href=""><span>Log Out</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="logout.php ">Log Out</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar style="margin-left:10px" -->


    </div>
  </header>
  <!-- End Header -->


  <main>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <a class="weatherwidget-io" href="https://forecast7.com/en/36d8110d18/tunis/" data-label_1="TUNIS"
              data-label_2="WEATHER" data-mode="Current" data-theme="original" data-basecolor="#1f567c"
              data-textcolor="#efefef">TUNIS WEATHER</a>
            <script>
              !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
            </script>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h1>
              <?php echo 'Bienvenue ' . strval($req[0]); ?>
            </h1>
          </div>

        </div>
      </div>
    
      <div class="container">
  <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Nom</div>
      <div class="col col-2">Date</div>
      <div class="col col-3">Debut</div>
      <div class="col col-4">Fin</div>
      <div class="col col-5">Etat</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">heure de Coonduite</div>
      <div class="col col-2" data-label="Customer Name">2023-05-03</div>
      <div class="col col-3" data-label="Amount">00:00:00</div>
      <div class="col col-4" data-label="Payment Status">00:00:00</div>
      <div class="col col-5" data-label="Payment Status">confirmee</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">heure de Coonduite</div>
      <div class="col col-2" data-label="Customer Name">2023-05-03</div>
      <div class="col col-3" data-label="Amount">00:00:00</div>
      <div class="col col-4" data-label="Payment Status">00:00:00</div>
      <div class="col col-5" data-label="Payment Status">confirmee</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">heure de Coonduite</div>
      <div class="col col-2" data-label="Customer Name">2023-05-03</div>
      <div class="col col-3" data-label="Amount">00:00:00</div>
      <div class="col col-4" data-label="Payment Status">00:00:00</div>
      <div class="col col-5" data-label="Payment Status">confirmee</div>
    </li>
    <li class="table-row">
      <div class="col col-1" data-label="Job Id">heure de Coonduite</div>
      <div class="col col-2" data-label="Customer Name">2023-05-03</div>
      <div class="col col-3" data-label="Amount">00:00:00</div>
      <div class="col col-4" data-label="Payment Status">00:00:00</div>
      <div class="col col-5" data-label="Payment Status">confirmee</div>
    </li>
  </ul>
</div>

          <?php
          $stmt = $conn->prepare('SELECT * from h_code where id_c=? ');
          $stmt->bind_param('i', $id_c);
          $stmt->execute();
          $result = $stmt->get_result();
          foreach ($result as $row) {
            echo '<li class="table-row">';
            echo '<div class="col col-1">heure de Code</div>';
            echo '<div class="col col-1">' . $row['jour'] . '</div>';
            echo '<div class="col col-1">' . $row['debut'] . '</div>';
            echo '<div class="col col-1">' . $row['fin'] . '</div>';
            echo '<div class="col col-1">' . $row['etat'] . '</div>';
            echo '</li>';
          }

          $stmt = $conn->prepare('SELECT * from h_conduite where id_c=? ');
          $stmt->bind_param('i', $id_c);
          $stmt->execute();
          $result = $stmt->get_result();
          foreach ($result as $row) {
            echo '<li class="table-row">';
            echo '<div class="col col-1">heure de Coonduite</div>';
            echo '<div class="col col-1">' . $row['jour'] . '</div>';
            echo '<div class="col col-1">' . $row['debut'] . '</div>';
            echo '<div class="col col-1">' . $row['fin'] . '</div>';
            echo '<div class="col col-1">' . $row['etat'] . '</div>';
            echo '</li>';
          }

          ?>
        </ul>
      </div>

      <?php
      $stmt = $conn->prepare('SELECT * from h_code where id_c=? ');
      $stmt->bind_param('i', $id_c);
      $stmt->execute();
      $result = $stmt->get_result();
      foreach ($result as $row) {
        echo '<li class="table-row">';
        echo '<td>heure de Code</td>';
        echo '<td>' . $row['jour'] . '</td>';
        echo '<td>' . $row['debut'] . '</td>';
        echo '<td>' . $row['fin'] . '</td>';
        echo '<td>' . $row['etat'] . '</td>';
        echo '</tr>';
      }

      $stmt = $conn->prepare('SELECT * from h_conduite where id_c=? ');
      $stmt->bind_param('i', $id_c);
      $stmt->execute();
      $result = $stmt->get_result();
      foreach ($result as $row) {
        echo '<tr>';
        echo '<td>heure de Conduite</td>';
        echo '<td>' . $row['jour'] . '</td>';
        echo '<td>' . $row['debut'] . '</td>';
        echo '<td>' . $row['fin'] . '</td>';
        echo '<td>' . $row['etat'] . '</td>';
        echo '</tr>';
      }

      ?>
      
      <div>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>

      <div class="container" data-aos="fade-up">
        <div class="msg">
          <ul>
            <div class="forfait">
            <h2>Les Messages</h2>
            <br>
            </div>
            <?php
            $stmt = $conn->prepare('SELECT * from messagerie where id_c=? and id_m=? order by timestamp');
            $stmt->bind_param('ii', $id_c, $req[2]);
            $stmt->execute();
            $result = $stmt->get_result();
            foreach ($result as $row) {
              if ($row['sender'] == 'candidat') {
                echo '<div class="box-msg cand"><span >' . $row['content'] . '</span></div>';
              } elseif ($row['sender'] == 'moniteur') {
                echo '<div class="box-msg mont" ><span >' . $row['content'] . '</span></div>';
              }
            }
            ?>
          </ul>
        </div>
        <div class="but">
        <form method="post" action='messagerie.php'>
          <input type="text" name="content" placeholder="Message" required>
          <button type="submit">Envoyer</button>
        </form>
          </div>

      </div>

      <h5 style="align:left; font-color:black;"></h5>

      <h5 style="align:right; font-color:blue;"></h5>
    </section>
  </main>


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