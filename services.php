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
			<div class="chatbox-message-content"><br><br>
				<h4 class="chatbox-message-no-message">You don't have message yet!</h4><br><br>
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

      <h1 class="logo me-auto"><a href="accueil.php">Drive <em>PI</em></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="accueil.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="Accueil.php">Accueil</a></li>
          <li class="dropdown"><a href="a-propos.php"><span> A  Propos</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="a-propos.php#equipe">Equipes</a></li>
              <li><a href="a-propos.php#voiture">Voitures</a></li>
            </ul>
          </li>  
          <li class="dropdown"><a href="information.php"><span>Informations</span></a> </li>
          <li class="dropdown"><a class="active" href="services.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="services.php#etape"><span>Programme</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#code">Code</a></li>
                  <li><a href="#circuit">Circuit</a></li>
                  <li><a href="#parc">parc</a></li>
                </ul>
              </li>
              <li><a href="#forfait">Forfaits</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
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
        <h1>Nos Services </h1>
        <p>
          Bienvenue à Drive PI centre de formation & auto école Tunisie. 
          <div class="retour">
            <a href="accueil.php">« Accueil »</a>
          </div>
        </p>
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
  

<div class="forfait">
  <img width="800" height="500" src="assets/img/forfait1.jpeg">
</div>

<br>
<br>


    <div id="etape"></div>

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

 

  <!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
  <div class="container">
    <div class="row counters">
      <div class="forfait" > 
        <h1>
          Programme de formation
        </h1>  
        <h3>
          Les Differents Etapes Pour Avoir son permis
        </h3>
      </div>
    </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<br>
<br>
<br>



    <section id="about" class="about">
      <div class="container" data-aos="fade-up">    
        <div class="row">
          <div class="center">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">       
              <img src="assets/img/maitriser.jpg">
              <br>
              <br>
                <div class="margleft">
                  <h4>MAÎTRISER LE MANIEMENT</h4>
                  <p class="fst-italic">
                    du véhicule dans un trafic faible ou nul
                  </p>
                </div>
                <br>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Connaître les principaux organes et commandes du véhicule, effectuer des vérifications intérieures et extérieures.</li>
                  <li><i class="bi bi-check-circle"></i> Entrer, s’installer au poste de conduite et en sortir.</li>
                  <li><i class="bi bi-check-circle"></i> Tenir, tourner le volant et maintenir la trajectoire.</li>
                  <li><i class="bi bi-check-circle"></i> Démarrer et s’arrêter.</li>
                  <li><i class="bi bi-check-circle"></i> Doser l’accélération et le freinage à diverses allures.</li>
                  <li><i class="bi bi-check-circle"></i> Utiliser la boîte de vitesses.</li>
                  <li><i class="bi bi-check-circle"></i> Diriger la voiture en avant en ligne droite et en courbe en adaptant allure et trajectoire.</li>
                  <li><i class="bi bi-check-circle"></i> Regarder autour de soi et avertir.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section> 

    <br>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="center">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">   
              <img src="assets/img/circuler.jpg">
              <br>
              <br>
                <div class="margeleft">
                  <div class="centeeer">
                  <h4>CIRCULER</h4></div>
                  <p class="fst-italic">
                  dans des conditions difficiles et partager la route avec les autres usagers
                  </p>
                </div>
                <br>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Évaluer et maintenir les distances de sécurité.</li>
                  <li><i class="bi bi-check-circle"></i> Croiser, dépasser, être dépassé.</li>
                  <li><i class="bi bi-check-circle"></i> Passer des virages et conduire en déclivité.</li>
                  <li><i class="bi bi-check-circle"></i> Connaître les caractéristiques des autres usagers et savoir se comporter à leur égard avec respect et courtoisie.</li>
                  <li><i class="bi bi-check-circle"></i> S’insérer, circuler et sortir d’une voie rapide.</li>
                  <li><i class="bi bi-check-circle"></i> Conduire dans une file de véhicules et dans une circulation dense.</li>
                  <li><i class="bi bi-check-circle"></i> Conduire quand l’adhérence et la visibilité sont réduites.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>

    <br>

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="center">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">   
              <img src="assets/img/apprehender.jpg">
              <br>
              <br>
                <div class="margleft">
                  <div class="centeer">
                  <h4>APPRÉHENDER</h4></div>
                  <p class="fst-italic">
                  la route et circuler dans des conditions normales
                  </p>
                </div>
                <br>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Rechercher la signalisation, les indices utiles et en tenir compte.</li>
                  <li><i class="bi bi-check-circle"></i> Positionner le véhicule sur la chaussée et choisir la voie de circulation.</li>
                  <li><i class="bi bi-check-circle"></i> Adapter l’allure aux situations.</li>
                  <li><i class="bi bi-check-circle"></i> Tourner à droite et à gauche en agglomération.</li>
                  <li><i class="bi bi-check-circle"></i> Détecter, identifier et franchir les intersections suivant le régime de priorité.</li>
                  <li><i class="bi bi-check-circle"></i> Franchir les ronds-points et les carrefours à sens giratoire.</li>
                  <li><i class="bi bi-check-circle"></i> S’arrêter et stationner en épi, en bataille et en créneau.</li>
                  <li><i class="bi bi-check-circle"></i> Effectuer une marche arrière et un demi-tour en sécurité.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>


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
    <div id="forfait"></div>
<div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts section-bg">
  <div class="container">

    <div class="row counters">
      <div class="forfait" >
      <h1>  
      Nos forfaits en boîte manuelle
      </h1>  
        <h3>
          Payable en 3 fois sans frais
        </h3>
      </div>
      <br>
      <br>
    </div>

    </div>

  </div>
</section><!-- End Counts Section -->

    


              
    <br>
    <br>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h2>20 leçons de conduite</h2>
              <h4>1390 <sup>DT</sup><!--<span> / heure</span>--></h4>
              <ul>
                <br>
                <li>Frais d'inscription  </li>
                <li>Forfait code + Examens blancs (valable 6 mois)</li>
                <li> 20 leçons de conduite, dont 3 leçons sur simulateur</li>
                <li /*class="na"*/>Code en ligne valable 6 mois  </li>
                <li >Livre de code</li>
                <li >Frais d’accompagnement à la conduite  </li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h2>25 leçons de conduite</h2>
              <h4>1390 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>Frais d'inscription</li>
                <li>Forfait code + Examens blancs (valable 6 mois)</li>
                <li>25 leçons de conduite, dont 3 leçons sur simulateur</li>
                <li>Code en ligne valable 6 mois</li>
                <li >Livre de code</li>
                <li>Frais d’accompagnement à la conduite </li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h2>30 leçons de conduite</h2>
              <h4>1620 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>Frais d'inscription</li>
                <li>Forfait code + Examens blancs (valable 6 mois)</li>
                <li>30 leçons de conduite, dont 3 leçons sur simulateur</li>
                <li>Code en ligne valable 6 mois</li>
                <li >Livre de code</li>
                <li>Frais d’accompagnement à la conduite </li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Formation B sans code</h3>
              <h4>995 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>Frais d'inscription   </li>
                <li>20 leçons de conduite , dont 3 leçons sur simulateur   </li>
                <li>Frais d’accompagnement à la conduite    </li>
                <li class="na">Livre de code</li>
                <li class="na">Code en ligne valable 6 mois</li>
                <li class="na">Forfait code + Examens blancs (valable 6 mois)</li>
              </ul>
              
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

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

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">
        <div class="forfait">
          <h1>
            <br>
            Nos forfaits en boîte automatique
            <br>
            <br>
          </h1>
        </div>
        <br>
      </div>

      </div>

    </div>
  </section><!-- End Counts Section -->


  <div>
    <br>
    <br>
    <br>
    
  </div>

  <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h2>13 leçons de conduite</h2>
              <h4>800 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>Frais d'inscription</li>
                <li>Forfait code + Examens blancs (valable 6 mois)</li>
                <li>13 leçons de conduite, dont 2 leçons sur simulateur</li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <br>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              
                <h2>20 leçons de conduite</h2>
                <h4>1280 <sup>DT</sup></h4>
                <ul>
                  <br>
                  <li>Frais d'inscription</li>
                  <li>Forfait code + Examens blancs (valable 6 mois)</li>
                  <li>20 leçons de conduite, dont 3 leçons sur simulateur</li>
                <!-- <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div> -->
                <br>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              
                <h2>25 leçons de conduite</h2>
                <h4>1600 <sup>DT</sup></h4>
                <ul>
                  <br>
                  <li>Frais d'inscription</li>
                  <li>Forfait code + Examens blancs (valable 6 mois)</li>
                  <li>25 leçons de conduite, dont 3 leçons sur simulateur</li>
                <!-- <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div> -->
                <br>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              
                <h2>30 leçons de conduite</h2>
                <h4>1950 <sup>DT</sup></h4>
                <ul>
                  <br>
                  <li>Frais d'inscription</li>
                  <li>Forfait code + Examens blancs (valable 6 mois)</li>
                  <li>30 leçons de conduite, dont 3 leçons sur simulateur</li>
                <!-- <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div> -->
                <br>
              
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Pricing Section -->
  
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
        <div class="forfait">
          <h1>
            <br>
            Nos prestations à l’unité
            <br>
            <br>
          </h1>
        </div>
        <br>
      </div>

      </div>

    </div>
  </section><!-- End Counts Section -->



     <!-- ======= Counts Section ======= -->

        <section id="about" class="about">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/forfait2.jpg" class="fluidd" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">    
                <br>
                <br>        
                <h4>
                  Documents à fournir pour le permis B
                </h4><br>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Frais d’inscription : 55 DT</li>
                  <li><i class="bi bi-check-circle"></i> Forfait code et tests inclus (valables 6 mois) : 150,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Prolongation forfait code 3 mois (durant la validité du contrat) : 50,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Prolongation forfait code 1 mois : 30,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Frais d’accompagnement boîte manuelle : 55,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Frais d’accompagnement boîte automatique : 60,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Tarif leçon de conduite boîte manuelle (55min) : 55,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Tarif de leçon de conduite boîte automatique (55min) : 60,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Livre de code : 25,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Code en ligne valable 6 mois : 100,00 DT</li>
                  <li><i class="bi bi-check-circle"></i> Forfait 10 leçons (valable 1 mois) : 530,00 DT</li>
                </ul>
                
              </div>
            </div>
          </div>
        </section><!-- End Counts Section -->

  

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
        <div class="forfait">
          
          <h1>
            <br>
            Nos Forfaits par heures
            <br>
            <br>
          </h1>
        </div>
        <br>
      </div>

      </div>

    </div>
  </section><!-- End Counts Section -->



  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

  <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <span class="advanced">attention</span>
              <h2>Boîte automatique  </h2>
              <h4>290 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>10h : 650 DT </li>
                <li>13h : 800 DT </li>
                <li>20h : 1280 DT</li>
                <li>25h : 1600 DT </li>
                <li>30h : 1950 DT </li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
              <br>
            </div>
          </div>       
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/forfait3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              
              <span class="advanced">attention</span>
              <h2>Boîte manuelle  </h2>
              <h4>290 <sup>DT</sup></h4>
              <ul>
                <br>
                <li>5h : 300 DT </li>
                <li>10h : 600 DT</li>
                <li>20h : 1160 DT </li>
                <li>25h : 1390 DT </li>
                <li>30h : 1620 DT </li>
                <li>35h : 1900 DT </li>
              </ul>
              <!-- <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div> -->
            </div>
          </div>         

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <div>
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

  <div style="text-align:center">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.2386191473433!2d10.229505315211545!3d36.83676087334071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd353c2a9bdafb%3A0xf40a3b2820de190d!2sPolytech-Intl!5e0!3m2!1sen!2stn!4v1680353742817!5m2!1sen!2stn"
    width="100%" height="350" allowfullscreen="true" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  
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
                                  <li><a href="Accueil.php" >Accueil</a></li>
                                  <li><a href="a-propos.php">A Propos</a></li>
                                  <li><a href="services.php" class="active">Services</a></li>                                  
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