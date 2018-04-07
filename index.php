<?php
require ('model.php');
$connexion = get_connect();
$getproduits = get_produits(' order by DateProduction DESC limit 2' , $connexion);
$getproduits1 = get_produits('' , $connexion);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Retrouvez toutes les montres uniques Daniel Wellington. D´un style à la fois élegant et decontracté, cette montre convient à toutes les occasions. Parcourez notre sélection en ligne !">
    <meta name="author" content="">

    <title>Daniel Wellington-Une montre pour homme et femme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h1> Daniel Wellington </h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Acceuil</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->


	
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(img/Daniel6.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Daniel Wellington</h2>
                                    <p class="animation animated-item-2">Une montre pour homme et femme </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
	    <!-- End Services -->


<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h3>Nos derniers produits</h3>
				</div>
		
		
			<ul class="grid cs-style-3">
			<?php foreach($getproduits as $getproduit) { ?>
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="../img/<?php echo $getproduit->image ?>" alt="<?php echo $getproduit->Alt ?>">
						<figcaption>
							<h3><?php echo $getproduit->Libelle ?></h3>
							<h3><?php echo $getproduit->Prix ?>$</h3>
							<a  href="<?php  echo splitter($getproduit->Libelle)?>-<?php  echo $getproduit->Couleur?>-<?php  echo $getproduit->idproduit?>.php">Plus de details</a>
						</figcaption>
					</figure>
	        	</div>	
			<?php } ?>
			</ul>
	        	</div>
	        </div>
	    </div>
		
		     <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h3>Tous nos produits</h3>
				</div>
		
		
			<ul class="grid cs-style-3">
			<?php foreach($getproduits1 as $getproduit) { ?>
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="../img/<?php echo $getproduit->image ?>" alt="<?php echo $getproduit->Alt ?>">
						<figcaption>
							<h3><?php echo $getproduit->Libelle ?></h3>
							<h3><?php echo $getproduit->Prix ?>$</h3>
							<a  href="<?php  echo splitter($getproduit->Libelle)?>-<?php  echo $getproduit->Couleur?>-<?php  echo $getproduit->idproduit?>.php">Plus de details</a>
						</figcaption>
					</figure>
	        	</div>	
			<?php } ?>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->
			
<hr>

		<!-- Our Clients -->

	    <!-- End Our Clients -->

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact </h3>
		    			<p class="contact-us-details">
	        				<b>Nom :</b> MANANIRINA<br/>
	        				<b>Prénom :</b> Henintsoa <br/>
	        				<b>Numero :</b> ETU000557<br/>
	        				<b>Email:</b> henintsoz13@gmail.com</a>
	        			</p>
		    		</div>				
		    	

		    	</div>
		    	<div class="row">
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>