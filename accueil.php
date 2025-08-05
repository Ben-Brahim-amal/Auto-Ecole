
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

      <h1 class="logo me-auto"><a href="Accueil.php">Drive<em>PI</em></a></h1>
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
          <li class="dropdown"><a href="information.php"><span>Informations</span></a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      
      <h1><br>Bienvenue</h1>
      <h2>Nous sommes l'equipes de l'auto-école DRIVE PI</h2>
      <?php if (isset($_SESSION['mail'])) {
        $syn = "<a href=" . "'verif.php'" . "class=" . "'btn-get-started'" . ">retour au compte</a>";
        echo $syn;
        // header('Location: compte.php');
      } else {
        $syn = "<a href=" . "'login.html'" . "class=" . "'btn-get-started'" . ">connecter-vous</a>";
        echo $syn;
      }
      ?>
    </div>
    
    
  </section><!-- End Hero -->

  <main id="main">

<br>
<br>
<br>
<br>
    <!-- ======= About Section ======= -->

    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            
            

            <h2>Le permis à portée de main avec Auto-école du DrivePI!</h2>
            <p class="fst-italic">
              <h4>école du Drive PI est une agence familiale, jeune et mixte qui vous accueille dans ses chaleureux locaux tout au long de l’année.</h4>
            </p>
            
            <br>

            <ul>
              <li><i class="bi bi-check-circle"></i> Vous aurez à disposition une salle de code et des formateurs impliqués qui vous suivront individuellement dans l’apprentissage du code et de la conduite.</li>
              <li><i class="bi bi-check-circle"></i> L’auto-école vous propose également la formation en accéléré sans supplément de prix !</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     <section id="about" class="about">
            <div class="container" data-aos="fade-up">
      
              <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
  
                </div>
                    
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <p>
                  <strong><span>Auto-école du Drive PI est une Ecole de Conduite  </span></strong>
                  <br>
                  <br>
                  « Apprendre en toute confiance » : une école de conduite , c’est la certitude de bénéficier d’une formation de qualité et des meilleurs services.
                  <br>
                  <br>
                  L’auto-école Drive PI enseigne la conduite et le comportement idéal pour être un bon conducteur, mais surtout pour une meilleure sécurité.
                  <br>
                  <br>
                  <strong><span>« Notre principal objectif est VOTRE REUSSITE. »</span></strong> 

              </div>
              </div>
            </section>

            <br>
            <br>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        
        <br>
        <a href="services.php" class="get-started-btn">voir nos services</a>
        <br>
        <br>
      </div>
    </section>
    <!-- End Counts Section -->

<br>
<br>
<br>
<br>
<br>

    <!-- ======= Why Us Section ======= -->

    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <p>Nos Forfaits</p>
          <h2>Suivez les dernières nouvelles </h2>
        </div>
        <br>
        <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <br>
              <br>
              <h1>Nos Forfaits</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <div class="text-center">
                <a href="services.php#forfait" class="more-btn">En savoir plus<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h6>CONDUITE ACCOMPAGNÉE  </h6>
                    <hr >
                    <br>
                    <div class="strong">
                      </strong><strong>1485 DT</strong>
                    </div>
                    <br>
                    <p>Retrouvez toutes nos formules concernant la conduite accompagnée</p>
                    <div class="btn-wrap">
                      <a href="services.php#forfait" class="btn-buy">En savoir plus</a>
                    </div>
                  </div>
                  
                </div>
                
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h6>PERMIS <br> «B» </h6>
                    <hr >
                    <br>
                    <div class="strong">
                    </strong><strong>995 DT</strong>
                    </div>
                    <br>
                    <p>Retrouvez toutes nos formules concernant le Permis B</p>
                    <br>
                    <div class="btn-wrap">
                      <a href="services.php#forfait" class="btn-buy">En savoir plus</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <h6>ANNULATION DE CODE & CONDUITE </h6>
                    <hr >
                    <br>
                    <div class="strong">
                    </strong><strong>690 DT</strong>
                    </div>
                    <br>
                    <p>Retrouvez toutes nos formules concernant le Permis B</p>
                    <br>
                    <div class="btn-wrap">
                      <a href="services.php#forfait" class="btn-buy">En savoir plus</a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
  </div>
</section><!-- End Why Us Section -->

<br>
<br>
<br>
<br>
    
    <!-- ======= Popular Courses Section ======= -->
    
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <p>Nos actualités</p>
          <h2>Suivez les dernières nouvelles et actualités</h2>
        </div>
        <br>
        <br>
        <br>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>

                <br>
                
                <h3><a href="suit1.php">Combien de points faut-il pour avoir son permis ?</a></h3>
                <p>Passer son permis peut être une épreuve stressante pour les nouveaux conducteurs. Le système de notation du permis de conduire note les candidats sur trente.</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <!--<div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>-->

                  <a href="suit1.php" class="btn-get-started" > LIRE LA SUITE »</a>

                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="..." >
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <br>

                <h3><a href="suit2.php">Comment convertir un permis automatique en manuel ?</a></h3>
                <p>Comment convertir un permis automatique en permis manuel ? Convertir une boîte automatique vers une boîte manuelle n’est pas une tâche aussi ardue qu’il n’y</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <!--<div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="" >
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>-->
                
                  <a href="suit2.php" class="btn-get-started" > LIRE LA SUITE »</a>

                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <br>

                <h3><a href="suit3.php">Conduire seul pour la première fois : nos conseils</a></h3>
                <p>Vous venez d’avoir votre permis de conduire ? Toutes nos félicitations, c’est la preuve que vous avez les compétences nécessaires pour prendre le volant</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!--<img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85-->

                    <a href="suit3.php" class="btn-get-started" > LIRE LA SUITE »</a>

                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

<!-- 
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                </div>

                <br>
                
                <h3><a href="course-details.php">Combien de points faut-il pour avoir son permis ?</a></h3>
                <p>Passer son permis peut être une épreuve stressante pour les nouveaux conducteurs. Le système de notation du permis de conduire note les candidats sur trente.</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <!--<div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>-->
<!-- 
                  <a href="suit1.php" class="btn-get-started" > LIRE LA SUITE »</a>

                </div>
              </div>
            </div>
          </div> End Course Item

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="..." >
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>

                <br>

                <h3><a href="course-details.php">Comment convertir un permis automatique en manuel ?</a></h3>
                <p>Comment convertir un permis automatique en permis manuel ? Convertir une boîte automatique vers une boîte manuelle n’est pas une tâche aussi ardue qu’il n’y</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="" >
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>-->
                
                  <!-- <a href="suit2.php" class="btn-get-started" > LIRE LA SUITE »</a>

                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
<!-- 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                </div>
                <br>

                <h3><a href="course-details.php">Conduire seul pour la première fois : nos conseils</a></h3>
                <p>Vous venez d’avoir votre permis de conduire ? Toutes nos félicitations, c’est la preuve que vous avez les compétences nécessaires pour prendre le volant</p>
                <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!--<img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85-->

                    <!-- <a href="suit3.php" class="btn-get-started" > LIRE LA SUITE »</a>

                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
<!-- 
          
        </div>--> 
        <br>
        <br>
        
        <br>

      </div>
   <section id="counts" class="counts section-bg">
      <div class="container">
        
        <br>
        <a href="contact.php" class="get-started-btn">connecter-nous</a>
        <br>
        <br>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>


     
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Nos témoignages</h2>
              <p>What are they saying</p>
            </div>
    
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3>Ines Anane</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                          Très très bonne auto-école . Auto-école avec des moniteurs et des monitrices pédagogues , sérieux, appliqués , patients . Et qui veulent que leur élèves obtiennent leurs permis et cela le plus rapidement possible. Pour ma part code plus permis obtenu en 5 mois et les 2 du premier coup.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
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
                          Très bonne auto école. J’ai réussi à avoir mon code et mon permis du premier coup et en 6 mois. La gérante est très sympathique et accorde de l’importance à chaque élève. Lorsque nous ne comprenons pas quelque chose sur le code ils sont là pour nous expliquer et répondre a nos questions. Ensuite au niveau de la conduite, chaque moniteur ont leurs qualités qui nous permettent de progresser rapidement. Ils sont pédagogiques à l’écoute et agréables. C’est une très bonne auto école que je recommande vivement.
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
                          Si vous voulez avoir votre permis de conduire avec une méthode d’apprentissage exceptionnelle, alors n’hésitez pas, FONCEZ à l’auto-école du Drive PI, Toute l’équipe souhaite votre réussite et il faut surtout bien écouter les conseils car ils sont la pour vous! Ils ne vous font pas attendre pour les dates d examen. Si vous êtes prêts, vous passez rapidement. Je ne manquerai pas d’inscrire mon plus jeune fils a l’auto-école du Drive PI et je vous encourage à le faire.
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
                        Très bonne auto école. Mon fils a eu son permis rapidement avec une organisation au top, le code bien préparé et la conduite des horaires adaptes à son emploi du temps. Ils viennent vous cherchez et ils peuvent vous déposez à votre domicile. Franchement ils font tout pour la réussite de l’examen final. Ils ont été plusieurs amis a tous avoir leur permis dans cette très bonne auto-école.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
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
                          J’ai changée d’auto-école pour venir dans l’auto-école du Drive PI et je ne regrette pas du tout mon choix c’est une auto-école au top !! De très bon moniteurs, très sérieux, gentils, qui connaissent leur métiers. Ils poussent les élèves à fond, les motives. Il y a eu un suivi ce qui était très important pour moi, j’avais besoin de moniteur qui me soutienne. Une directrice très chaleureuse, elle motive, conseille, soutien aussi tout ces élèves; elle fait le nécessaire pour nous aider dans notre apprentissage. Très contente d’avoir mon permis avec Drive PI.
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
    
      </main><!-- End #main -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- *** Map ***-->
  <div style="text-align:center">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.2386191473433!2d10.229505315211545!3d36.83676087334071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd353c2a9bdafb%3A0xf40a3b2820de190d!2sPolytech-Intl!5e0!3m2!1sen!2stn!4v1680353742817!5m2!1sen!2stn"
    width="100%" height="350" allowfullscreen="true" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
  </div>


  <div class="subscribe">
  </div>

  <br>
  <br>
  
  
<!-- ======= Counts Section ======= -->


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