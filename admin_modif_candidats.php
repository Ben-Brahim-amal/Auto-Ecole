<?php
include 'connexion.php';
include 'functions.php';
$id_c = $_GET['id_c'];
echo 'candidat  ' . $id_c;

// if (isset($_GET['id_c'])) {
//   inscrire($_GET['id_c']);
// }


$stmt = $conn->prepare('select * from moniteurs;');
$stmt->execute();
$result_mon = $stmt->get_result();

$stmt1 = $conn->prepare('select * from examens where id_c=?;');
$stmt1->bind_param('i', $id_c);
$stmt1->execute();
$result_ex = $stmt1->get_result();


?>
</table>


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

      <h1 class="logo me-auto"><a href="index.php">Drive<em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="Accueil.php">Accueil</a></li>

          <li class="dropdown"><a href=""> <span>Horaires</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="admin_h_code.php ">Heures de code</a></li>
              <li><a href="admin_h_conduite.php ">heure de conduite</a></li>
            </ul>
          </li>
          <li><a href='admin-home.php'>retour au compte</a></li>

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


  <script src="tab1.js"></script>
  <main>
    <section>
      <div class="container">


        <?php
        $id_c = $_GET['id_c'];
        // echo "<script type='text/javascript'>alert(" . $_SESSION['id'] . ");</script>";
        $stmt = $conn->prepare('SELECT * FROM candidats where id_c=?');
        $stmt->bind_param('i', $id_c);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
          $_SESSION['id_c'] = $row['id_c'];
          echo "<input type='submit' name='achevee' value='Formation achevee avec succes' class='open-button'  />";

          if (isset($_POST['achevee'])) {
            formation_achevee($row['id_c']);

          } ?>


          <div class="fiche">
            <br>
            <br>
            <img src="<?php echo $row['img_path'] ?>" width="250px" height="300px"
              style="top: 20%; left: 60%; position: relative; float:left;">
            <div class='signup-container'>

              <div class='right-container'>

                <div class='set'>
                  <div class='pets-name'>
                    <label for='pets-name'>Nom :
                      <?php echo $row['nom']; ?>
                    </label>
                  </div>
                  <div class='pets-photo'>
                    <label for='pets-upload'>CIN :
                      <?php echo $row['CIN'] ?>
                    </label>
                  </div>
                  <div class='set'>
                    <div class='pets-name'>
                      <label for='pets-name'>Prénom :
                        <?php echo $row['prenom'] ?>
                      </label>
                    </div>
                    <div class='pets-birthday'>
                      <label for='pets-birthday'>Date de naissance :
                        <?php echo $row['naissance']
                          ?>
                      </label>
                    </div>
                  </div>

                  <div class='set'>
                    <div class='pets-name'>
                      <label for='pets-name'>Adresse :
                        <?php echo $row['profession']
                          ?>
                      </label>
                    </div>
                    <div class='pets-photo'>
                      <label for='pets-upload'>Email
                        <?php echo $row['mail'] ?>
                      </label>
                    </div>
                  </div>
                  <div class='pets-photo'>
                    <label for='pets-upload'> Adresse:
                      <?php echo $row['adresse'] ?>
                    </label>
                  </div>


                  <div class='pets-photo'>
                    <label for='pets-upload'>Profession:
                      <?php echo $row['profession'] ?>
                    </label>

                  </div>
                </div>

                <div class='set'>
                  <div class='pets-name'>
                    <label for='pets-name'>Télèphone :
                      <?php echo $row['tel'] ?>
                    </label>
                  </div>
                  <div class='set'>
                    <div class='pets-name'>
                      <label for='pets-name'>Formation:
                        <?php echo $row['formation'] ?>
                      </label>
                    </div>


                    <div class='set'>
                      <div class='pets-name'>
                        <label for='pets-name'>Tarifs heure de code:
                          <?php echo $row['tarif_code'] ?>DT
                        </label>
                      </div>
                      <div class='set'>
                        <div class='pets-name'>
                          <label for='pets-name'>Tarifs heure de conduite :
                            <?php echo $row['tarif_conduite'] ?>DT
                          </label>
                        </div>

                        <div class='pets-photo'>
                          <label for='pets-upload'> moniteur:
                            <?php
                            // $stmt = $conn->prepare('select nom, prenom from moniteurs where id_m=?');
                            // $stmt->bind_param('i', $row['id_m']);
                            // $stmt->execute();
                            $sql = "select nom,prenom from moniteurs where id_m='$row[id_m]'";
                            $res = $conn->query($sql);
                            $row = $res->fetch_assoc();
                            echo $row['nom'] . ' ' . $row['prenom'];
        } ?>
                        </label>


                        <?php if ($result_ex) {
                          foreach ($result_ex as $ex) {
                            // echo "<script type='text/javascript'>alert('EXXXXX');</script>";
                            $time = $ex['heure'];
                            echo "<div class='set'>";
                            echo "<div class='pets-name'>";
                            echo "<label for='pets-name'>Date examin " . $ex['type_ex'] . ":";
                            echo $ex['jour'] . " a " . $time;
                            echo "</label>";
                            echo "</div>";
                          }

                        } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <?php


                if (isset($_GET['id_c'])) { ?>
                  <div width='500'>

                    <h3>changer les donnees:</h3>
                    <form class="form" action="admin_operations_candidats.php" method="post">
                      moniteur :
                      <select name="moniteurs" id="">
                        <?php
                        while ($row = $result_mon->fetch_assoc()) {
                          echo '<option value=' . $row['id_m'] . '>' . $row['nom'] . ' ' . $row['prenom'] . '</option>';
                        }
                        ?>
                      </select>
                      tarif de code:<input type="text" name="tarif_code" class="input"
                        value="<?php echo $row['tarif_code']; ?>" type="text">
                      tarif de conduite: <input type="text" name="tarif_conduite" class="input" type="text"
                        value="<?php echo $row['tarif_conduite']; ?>">
                      <input type="hidden" name="id_c" value="<?php echo $id_c; ?>">
                      <input type="hidden" name="form" value="1">
                      <input id='btn' type='submit'>
                    </form>
                    <?php

                } ?>
                  <h3>affecter les dates des examens:</h3>
                  <form class="form" action="admin_operations_candidats.php" method="post">
                    Type d'examen :
                    <select name="type_ex" id="">
                      <option value='code'>code</option>
                      <option value='circuit'>circuit</option>
                      <option value='park'>park</option>
                    </select>
                    Date:<input type="date" name="date" class="input" type="text">
                    Heure: <input type="time" name="heure" class="input" type="text">
                    num de convocation: <input type="num_convocation" name="num_convocation" class="input" type="text">
                    <input type="hidden" name="id_c" value="<?php echo $id_c; ?>">
                    <input type="hidden" name="form" value="2">
                    <input id='btn' type='submit'>
                  </form>
                </div>

                <?php


                ?>
              </div>
    </section>
  </main>



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

<style>
  .form {
    width: 50%;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: lightgreen;
    padding: 2.5em;
    border-radius: 25px;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
  }

  .form:hover {
    transform: translateX(-0.25em) translateY(-0.5em);
    border: 1px solid #171717;
    box-shadow: 10px 10px 0px #666666;
  }

  .heading {
    color: black;
    padding-bottom: 2em;
    text-align: center;
    font-weight: bold;
  }

  .input {
    border-radius: 5px;
    border: 1px solid whitesmoke;
    background-color: whitesmoke;
    outline: none;
    padding: 0.7em;
    transition: .4s ease-in-out;
  }

  .input:hover {
    box-shadow: 6px 6px 0px #969696,
      -3px -3px 10px #ffffff;
  }

  .input:focus {
    background: #ffffff;
    box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.3);
  }

  .form .btn {
    margin-top: 2em;
    align-self: center;
    padding: 0.7em;
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 10px;
    border: none;
    color: black;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
  }

  .form .btn:hover {
    box-shadow: 6px 6px 0px #969696,
      -3px -3px 10px #ffffff;
    transform: translateX(-0.5em) translateY(-0.5em);
  }

  .form .btn:active {
    transition: .2s;
    transform: translateX(0em) translateY(0em);
    box-shadow: none;
  }

  .form .input #btn {
    margin-top: 2em;
    align-self: center;
    padding: 0.7em;
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 0px;
    border: none;
    color: black;
    width: 50px;
    transition: .4s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.4) 1px 1px 1px;
  }
</style>