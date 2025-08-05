
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


  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="chatbot.css">
	<title>Chatbox</title>

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
  <!-- <link href="../fontawesome-free-6.4.0-web/css/all.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


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
<div class="chatbox-wrapper">
		<div class="chatbox-toggle">
    <i class="fa fa-car" aria-hidden="true"></i>
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="assets/img/chat.jpg" alt="" class="chatbox-message-image">
					<div>
						<h4 class="chatbox-message-name">chatbot</h4>
						<p class="chatbox-message-status"> Je vous réponds <br> 24h/24 , 7j/7</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">
					<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
					<ul class="chatbox-message-dropdown-menu">
						<li>
							<a href="#">Search</a>
						</li>
						<li>
							<a href="#">Report</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="chatbox-message-content"><br>
				<h4 class="chatbox-message-no-message">You don't have message yet!</h4><br>
				<!-- <div class="chatbox-message-item sent">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div>
				<div class="chatbox-message-item received">
					<span class="chatbox-message-item-text">
						Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Quod, fugiat?
					</span>
					<span class="chatbox-message-item-time">08:30</span>
				</div> -->
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Saisissez votre question ici..." class="chatbox-message-input"></textarea>
					<button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>
	

	<script src="chatbot.js"></script>

  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="Accueil.php">Drive <em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="Accueil.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="Accueil.php">Accueil</a></li>
          <li  class="dropdown"><a  href="a-propos.php"><span> A  Propos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="a-propos.php#equipe">Equipes</a></li>
              <li><a href="a-propos.php#voiture">Voitures</a></li>
            </ul>
          </li>   
          <li class="dropdown"><a href="information.php"><span>Informations</span></a> </li>
          <li class="dropdown"><a  href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
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
          </li>
          <li><a  href="contact.php">Contact</a></li>
          <li><a href="forum.php">Forum</a></li>
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
        <br>
        <br>
        <h1>Comment convertir un permis automatique en manuel ?  </h1>
        <div class="retour">
            <a href="accueil.php">« Accueil »</a>
          </div>
        <br>
        
            
      </div>
    </div><!-- End Breadcrumbs -->


    <div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- suit1 -->

    <div class="suit">
        <img width="700" height="500" src="assets/img/course-2.jpg">
    </div>

    <!-- End suit1 -->


    <div>
        <br>
        <br>
        <br>
    </div>


    <!-- contenus suit1--> 
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            
          </div>
         
            <p>
                <br>
         
                Comment convertir un permis automatique en permis manuel ? Convertir une boîte automatique vers une boîte manuelle n’est pas une tâche aussi ardue qu’il n’y paraît.
            <br>
            <br>
                Cependant, prendre le temps d’effectuer cette conversion vous permettra de tester les performances de votre voiture et de voir si vous êtes d’accord pour effectuer cette transition.
            
            <br>
            <br>
            Dans cet article, <strong><span>AUTO ECOLE DRIVE PI</span></strong> vous explique comment faire <strong><span>la passerelle entre une boîte auto vers une boîte manuelle.</span></strong>
            <br>

            </p>
          </div>
        </div>

      </div>
    </section><!-- End suit1 -->
    <br>
    <br>
    <br>

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          <br>
          <br>
          <div class="suit">
            <p><h2>COMMENT OBTENIR VOTRE PERMIS À BOÎTE AUTOMATIQUE ? </h2></p>

          </div>
          <br>
        </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <div>
    </div>

    <br>
            <br>
            <br>
            <br>

    <!-- 1 -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://autoecoleduvillage-sarcelles.fr/wp-content/uploads/2022/09/auto-ecole-du-village-comment-convertir-un-permis-automatique-en-manuel-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">    
            <br>
            <h4></h4>
            
            <br>
            <br>
            <p class="fst-italic">
                Convertir votre permis automatique en permis manuel, ce n’est pas très compliqué.
                <br>
                <br>
                Si vous avez un permis de conduire B limité aux véhicules équipés d’une boîte à transmission automatique, pour des raisons non médicales, il est facile de convertir votre permis B classique (boîte manuelle). Au moins trois mois après l’obtention du permis de conduire, vous devrez suivre 7 heures de formation dans une auto-école.
                <br>
                <br>
                A l’issue de la formation, le conducteur doit être capable de conduire en toute sécurité un véhicule à boîte manuelle simultanément à d’autres tâches de conduite. Il doit être capable de conduire sans être une gêne pour les autres et en respectant la sécurité routière.
                
            </p>
            
          </div>
        </div>
    </section>
    <!-- End 1 -->

    <br>
            <br>
            <br>
            <br>
    <br>
    <br>
    <br>

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          <br>
          <br>
          <div class="suit">
            <p><h2>LA FORMATION </h2>
          </p>

          </div>
          <br>
        </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <br>
            <br>
            <br>
            <br>
    <!-- 2 -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://autoecoleduvillage-sarcelles.fr/wp-content/uploads/2023/04/points-permis-b-autoecoldeduvillage-sarcelles-2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">    
            <br>
            <br>       
            <br>
            <br>
            <br> 
            <h4> </h4>
            
            <p class="">
              La transmission manuelle n’est pas difficile, mais elle est différente de la transmission automatique. La principale différence est que vous devez changer de vitesse vous-même au lieu de laisser la voiture le faire pour vous. 
              <br>
              <br>
                            
              Pour que vous compreniez comment utiliser votre boîte de vitesses manuelle de manière rationnelle et sûre dans les conditions de circulation mentionnées ci-dessus et adopter des techniques d’éco-conduite, vous devez obligatoirement avoir 7 heures de cours de conduite, divisé en deux sessions :           
             </p>
              <ul>
              </ul>
            
          </div>
        </div>
    </section>
    <!-- End 2 -->

    <!-- 3 -->
          <section id="about" class="about">
            <div class="container" data-aos="fade-up">
      
              <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
  
                </div>
                  
                    </p>
                    <ul>
                      <li> <strong><span>1ère séquence de 2 heures :</strong></span> Cette séquence s’effectue en trafic nul ou faible, l’élève doit acquérir les connaissances et compétences suivantes : Comprendre le principe du point de glissement de l’embrayage et assurer sa mise en œuvre. Être capable d’effectuer un démarrage en côte en toute sécurité.</li>
                      <br>
                      <li> <strong><span> 2ème séquence de 5 heures :</strong></span> Cette séquence se déroule dans des conditions de circulation variées, simples et complexes. Elle permet l’acquisition des compétences suivantes : savoir utiliser la boîte de vitesses manuelle de manière rationnelle et sûre dans les conditions de circulation citées ci-dessus et adopter les techniques d’éco-conduite.</li>
                    </ul>
                  <br>
                  <br>
                  <p>
                    
                    Il n’y a pas d’examen de conduite final à passer. Suite au stage, vous allez recevoir une attestation qui certifie que vous pouvez conduire une voiture équipée d’une boîte de vitesses manuelle. 
                    <br>
                    Attention, seules les écoles disposant du label « École, conduite, qualité » peuvent dispenser cette formation de 7 heures.
                  </p>
              </div>
              </div>
            </section>
      <!-- End 3 -->


      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>



      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="suit1.php"><i class="bx bx-chevron-left"></i>PRECEDENT </a>
            <a href="suit1.php"><h6>Combien de points faut-il pour avoir son permis ?</h6></a>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
          
          </div>
  
          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>
  
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <div class="bas">
              <a href="suit3.php">SUIVANT<i class="bx bx-chevron-right"></i></a>
              <a href="suit3.php"><h6>Conduire seul pour la première fois</h6></a>
            </div>
          </div>

      
          <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

  <div style="text-align:center"><iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.2386191473433!2d10.229505315211545!3d36.83676087334071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd353c2a9bdafb%3A0xf40a3b2820de190d!2sPolytech-Intl!5e0!3m2!1sen!2stn!4v1680353742817!5m2!1sen!2stn"
    width="100%" height="350" allowfullscreen="true" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <br>
  <br>  
  <br>
  <br>
      
      
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