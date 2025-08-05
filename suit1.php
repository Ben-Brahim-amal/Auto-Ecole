
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
        <h1>Combien de points faut-il pour avoir son permis ?</h1>
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
        <img width="700" height="500" src="assets/img/course-1.jpg">
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
              Passer son permis peut être une épreuve stressante pour les nouveaux conducteurs. Le système de notation du permis de conduire note les candidats sur trente facteurs précis. Les candidats doivent obtenir au moins 20 points à l’examen du permis pour recevoir leur permis de conduire.
              <br><br>
              Une grille d’évaluation du permis, aussi appelée CEPC (Certificat d’Examen du Permis de Conduire), est transmise à chaque candidat. La grille d’évaluation permet aux candidats de voir les domaines dans lesquels ils excellent et ceux dans lesquels ils doivent s’améliorer. Les points sont accumulés durant leur apprentissage et lors de l’examen de conduite. Chaque compétence est évaluée sur 4 niveaux d’appréciation.
            
            <br>
            <br>
            <br>

            </p>
          </div>
        </div>

      </div>
    </section><!-- End suit1 -->


     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          <br>
          <br>
          <div class="suit">
          <p>
            <h2>L’ÉVALUATION DU PERMIS : LES 4 COMPÉTENCES PRINCIPAUX À MAÎTRISER</h2>
            
          </p>

          </div>
          <br>
          <br>
        </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <div>
    </div>


    <!-- 1 -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://autoecoleduvillage-sarcelles.fr/wp-content/uploads/2023/04/points-permis-b-autoecoldeduvillage-sarcelles-2.jpeg" class="fluidd" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">    
            <br>
            <br>        
            <br>
            <br> 
        
            <h4>1. Connaître et maîtriser son véhicule :</h4><br>
            <p class="fst-italic">
              La capacité à pouvoir maîtriser son véhicule est importante lors d’un examen de conduite. Vous serez évalué sur les critères suivants :
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> S’installer et s’assurer d’une bonne visibilité en voiture , en effectuant les réglages des rétroviseurs et du siège <strong><span>(2 points)</strong></span>.</li>
              <li><i class="bi bi-check-circle"></i> Avoir une bonne connaissance de son véhicule . L’examinateur vous pose 3 questions pour déterminer votre niveau de connaissance du véhicule et les premiers secours <strong><span>(3 points)</strong></span>.</li>
              <li><i class="bi bi-check-circle"></i> Avoir une connaissance des commandes de la voiture . L’examinateur s’assurera que vous savez utiliser toutes les pièces mécaniques de la voiture pendant le test , comme les clignotants et les essuie-glaces <br><strong><span>(3 points)</strong></span>.</li>
            </ul>
            
          </div>
        </div>
    </section>
    <!-- End 1 -->


    <!-- 2 -->
        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

              </div>
                
                <h4>2. Appréhender la route :</h4><br><br>
                  <p class="fst-italic">
                    Vous serez examiné sur votre connaissance du code de la route :
                  </p>
                  <ul>
                    <li> La prise d’information : durant votre examen de conduite, l’inspecteur vérifiera que vous scrutez la route pour repérer les panneaux, les marquages routiers et les feux de signalisation. Il voudra également voir si vous utilisez correctement vos rétroviseurs lors de vos manœuvres  <strong><span>(3 points).</strong></span></li>
                    <li> L’allure du véhicule : vous devez adapter votre rythme au flux de la circulation, en ralentissant ou en accélérant selon les besoins <strong><span>(3 points)</strong></span>.</li>
                    <li> L’application de la réglementation : la bonne conduite permet d’obtenir un meilleur score en adhérant aux règles strictes du code de la route : respecter les panneaux de signalisation, conduire à une vitesse adaptée aux conditions, etc.<strong><span>(3 points)</strong></span>.</li>
                  </ul>
                <br>
                <br>
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
                  
                  <h4>3. Partager la route avec d’autres conducteurs:
                  </h4>
                  <br>
                  <br>
                    <p class="fst-italic">
                      L’examinateur évaluera votre capacité à assurer votre propre sécurité et celle des autres dans trois domaines :
                    </p>
                    <ul>
                      <li> La communication avec les autres usagers : vous devez utiliser vos clignotants lorsque vous changez de voie ou tournez et vos feux de détresse en cas de besoin pour avertir les autres usagers <strong><span>(3 points)</strong></span> .</li>
                      <li> Le partage de la chaussée : lorsque vous conduisez sur la route, veillez à ne pas mettre en danger ou à gêner les autres conducteurs. Veillez également à tenir et à tourner correctement le volant afin de garder le contrôle de votre véhicule dans les virages <strong><span>(3 points)</strong></span>.</li>
                      <li> 
                        Le maintien des espaces de sécurité : respectez toujours les distances de sécurité nécessaires entre vous et les autres véhicules <strong><span>(3 points)</strong></span>.</li>
                    </ul>
                  <br>
                  <br>
              </div>
              </div>
            </section>
      <!-- End 3 -->


      <!-- 4 -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">

            </div>
              
              <h4>4. Autonomie et conscience du risque :
              </h4>
              <br>
              <br>
                <p class="fst-italic">
                  Vous êtes tester sur votre assurance en tant que conducteur. Vous devez être capable d’être vigilant afin de gérer les situations imprévues.
                  Vous serez noté selon les critères suivant :                
                </p>
                <ul>
                  <li> 
                    L’analyse des situations : l’inspecteur peut vous poser des questions pour savoir si vous connaissez des stratégies pour faire face à des risques potentiels (par exemple, en cas de circulation intense, de sortie d’école, de mauvais temps…) <strong><span>(1 points)</strong></span>.</li>
                  <li> L’adaptation aux situations : vous devez prendre les mesures nécessaires pour adapter votre conduite en fonction des circonstances, comme allumer vos phares ou changer de voie <strong><span>(1 points)</strong></span>.</li>
                  <li> La conduite autonome : vous devez être capable d’emprunter un itinéraire sans assistance et de respecter le code de la route <strong><span>(1 points)</strong></span>.
                  </ul>
              <br>
              <br>
              <br>
          </div>
          </div>
        </section>
  <!-- End 4 -->


        
        <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          <br>
          <br>
          <div class="suit">
            <p><h2> NOS CONSEILS POUR GAGNER DES POINTS FACILEMENT </h2></p>

          </div>
          
        </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://autoecoleduvillage-sarcelles.fr/wp-content/uploads/2023/04/points-permis-b-autoecoldeduvillage-sarcelles-1.jpeg" class="fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

            <h4>Maîtriser les contrôles visuels :</h4><br>
            <p class="fst-italic">
              Effectuer des contrôles de conduite est un moyen important de garantir votre sécurité et celle des autres. L’inspecteur examinera ce point très attentivement. Durant votre conduite, assurez-vous de vérifier fréquemment vos rétroviseurs (intérieur et extérieur) et n’oubliez pas de vérifier vos angles morts. Faites les vérifications uniquement quand il le faut, afin que l’examinateur n’ait pas l’impression que vous manquez de confiance en vous. 
            </p>
            <h4>Maîtriser la vitesse de son véhicule : </h4><br>
            <p class="fst-italic">
              Maîtriser la vitesse de son véhicule :
              L’examinateur sera très strict quant à la vitesse à laquelle vous conduisez. Ne négligez pas les panneaux d’indication de vitesse autorisée. L’examinateur évalue la capacité d’une personne à conduire de manière raisonnable et responsable dans diverses situations de circulation.
            </p>
            <h4>Appliquer le code de la route : </h4><br>
            <p class="fst-italic">
              Vous devez être capable de conduire sans commettre d’infractions au code de la route. Il est important de faire attention aux panneaux de signalisation routière, afin d’éviter les accidents et de perdre des points. Par exemple, ne pas tourner là quand l’accès est interdit, respecter la priorité à droite, s’arrêter au passage pour piétons, les marquages au sol, en autres.
            </p>
            
          </div>
        </div>
    </section>    

  </main><!-- End #main -->


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
        <a href="Accueil.php"><i class="bx bx-chevron-left"></i>RETOUR A L'ACCUEIL </a>
        <a href="Accueil.php"><h6> nos actualités</h6></a>
      </div>
      
      <div class="col-lg-2 col-md-6 footer-links">
      
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <div class="bas">
          <a href="suit2.php">SUIVANT<i class="bx bx-chevron-right"></i></a>
          <a href="suit2.php"><h6>Combien de points faut-il pour avoir son permis ?</h6></a>
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