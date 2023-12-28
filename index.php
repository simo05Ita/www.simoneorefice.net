<?php
$db = mysqli_init();
$db->ssl_set(NULL, NULL, 'sqlca.pem', NULL, NULL);
mysqli_real_connect ($db, 'sql665.your-server.de', 'simoneaa_1', 'MiTRaDNG265kQaqt','simoneaa_db1', 3306, NULL, MYSQLI_CLIENT_SSL);
/*$db->real_connect ($db, string $hostname='sql665.your-server.de', string $username='simoneaa_1', string $password='MiTRaDNG265kQaqt', string $database='simoneaa_db1', int $port=3306, string, $socket=NULL);*/


/*$db->real_connect(mysqli $db, ?string $hostname = 'sql665.your-server.de', ?string $username = 'simoneaa_1', ?string $password = 'MiTRaDNG265kQaqt', ?string $database = 'simoneaa_db1', ?int $port = 3306, ?string $socket = null, int $flags = 0,): bool*/


$default = ['email' => '' , 'nome' => '' , 'Soggetto' => '' , 'messaggio' => '' , ];

$_POST = array_replace( $default, $_POST );


$nome = $_POST['nome'];
$email = $_POST["email"];
$Soggetto = $_POST["Soggetto"];
$messaggio = $_POST["messaggio"];


// Esempio di query
$query = "INSERT INTO contatti(nome, email, Soggetto, messaggio) values ('$nome','$email','$Soggetto', '$messaggio');";
$result = $db->query($query);

// Verifica dell'esito della query
if (!$result) {
    die("Query non riuscita: " . $db->error);
}


// Chiudi la connessione
$db->close();
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Simone Orefice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>S</span>imone</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Riguardo a</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Abilità</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Progetti</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contatti</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">
          		<span class="subheading">Ciao! mi chiamo</span>
		  				<h1>Simone Orefice</h1>
			  				<h2>sono un
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='["Appassionato di programmazione web.", "futuro sognatore di questo lavoro."]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
    	        <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(IMMAGINEMIA.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
                <div id="page-0" class= "page one">
		          	<h1 class="big">Riguardo</h1>
		            <h2 class="mb-4">Riguardo me</h2>
		            <p>io sono un appassionato di programmazione web da quando avevo 14 anni, e vorrei rendere questa passione un vero lavoro. Come suol dirsi "fare un lavoro che ci piace non ci farà lavorare 1 giorno!"</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Nome:</span> <span>Simone Orefice</span></li>
		            	<li class="d-flex"><span>Data di nascita:</span> <span>18 Febbraio 2005</span></li>
		            	<li class="d-flex"><span>Email:</span> <span><a href="mailto:webmaster@simoneorefice.net">webmaster@simoneorefice.net</a></span></li>
		            </ul>
                </div>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="3">0</span>
	                <span>Progetti completi</span>
                </p>
                <p><a href="CURRICULUM OREFICE SIMONE.pdf" download="CURRICULUM OREFICE SIMONE.pdf" class="btn btn-primary py-3 px-3">Scarica il mio CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>



    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
                <li><a href="#page-0">Riguardo me</a></li>
					      <li><a href="#page-3">Le mie abilità</a></li>
					    </ul>
					  </nav>
					</div>
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Le mie abilità</h2>
					  	<div class="row progress-circle mb-5">
					  		<div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='50'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">50<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">35%</div><span class="small text-gray">Ultima settimana</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">15%</div><span class="small text-gray">Ultimo mese</span>
						          </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='50'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">50<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">25%</div><span class="small text-gray">Utima settimana</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">25%</div><span class="small text-gray">Ultimo mese</span>
						          </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">javascript</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='30'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
						            <div class="h2 font-weight-bold">30<sup class="small">%</sup></div>
						          </div>
						        </div>
						        <!-- END -->

						        <!-- Demo info -->
						        <div class="row text-center mt-4">
						          <div class="col-6 border-right">
						            <div class="h4 font-weight-bold mb-0">15%</div><span class="small text-gray">Ultima settimana</span>
						          </div>
						          <div class="col-6">
						            <div class="h4 font-weight-bold mb-0">15%</div><span class="small text-gray">Ultimo mese</span>
						          </div>
						        </div>
						        <!-- END -->
						      </div>
						    </div>
					  	</div>
										</div>
									</div>
								</div>
					  	</div>
					  </div>
					</div>
			  </div>
    	</div>
    </section>




    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container-fluid px-md-0">
    		<div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Progetti</h1>
            <h2 class="mb-4">I miei progetti</h2>
            <p></p>
          </div>
        </div>

    		<div class="row no-gutters">
    			<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(FOTORIFATTA2.png); background-size: cover;">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="https://yugiohinformations.altervista.org/">Questo è un mio progetto</a></h3>
	    					<span>Questo è un mio progetto</span>
	    				</div>
    				</div>
  				</div>

  				<div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(FOTORIFATTA.png); background-size: cover;">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="https://www.regoledigitali.altervista.org/">Questo è un mio progetto</a></h3>
	    					<span>Questo è un mio progetto</span>
	    				</div>
    				</div>
  				</div>

    		</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contatti</h1>
            <h2 class="mb-4">Contattami</h2>
            <p></p>
          </div>
        </div>

		<div class="row d-flex contact-info mb-5">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate fadeInUp ftco-animated">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<div>
						<h3 class="mb-4">indirizzo email</h3>
					  <p><a href="mailto:webmaster@simoneorefice.net">webmaster@simoneorefice.net</a></p>
					</div>
				</div>
			</div>
		  </div>

		  <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <h1 class="big big-2">Contatti</h1>
            <h2 class="mb-4">Oppure scrivimi qui:</h2>
          </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="index.php" class="bg-light p-4 p-md-5 contact-form" method="POST">
              <div class="form-group">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="scrivi qui il tuo nome">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="qui la tua email">
              </div>
              <div class="form-group">
                <input type="text" name="Soggetto" id="Soggetto" class="form-control" placeholder="Soggetto">
              </div>
              <div class="form-group">
                <textarea name="messaggio" id="messaggio" cols="30" rows="7" class="form-control" placeholder="scrivi pure un messaggio"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Invia Messaggio" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex2">
          	<div class="img" style="background-image: url(IMMAGINEMIA.png);"></div>
          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">social</h2>
              <p>puoi trovarmi su:</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/simo05_ita"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100005305996662"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/fattiifattituoi__29/"><span class="icon-instagram"></span></a></li>
				<li class="ftco-animate"><a href="https://github.com/simo05Ita"><svg xmlns="http://www.w3.org/2000/svg" height="32" width="31" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright ©<script>document.write(new Date().getFullYear());</script>2023 All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
