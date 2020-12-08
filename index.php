<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quick repair</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/style.css?v=<?=time();?>">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- navigation -->
<?php include_once('nav.php'); ?>

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3"></div>
			<div class="col-md-7 col-sm-9">
				<h3>Bienvenue au</h3>
				<h1 id="club-name">Repair Club <span>[BETA]</span></h1>
			</div>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container" id="main-advantages">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-wrench"></i>
					<h2>Réparez facilement</h2>
					<p>Découvrez l'expérience passionante de réparer votre propre appareil</p>
					<form action="membership.php">
					<a href="membership.php" class="btn btn-default">Pré-inscription</a>
					<!-- <button type="submit" class="btn btn-primary btn-sm" >Pré-inscription</button> -->
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-shopping-cart"></i>
					<h2>En partenariat avec ...</h2>
					<p>Le club bénéficie d'un accès privilégié aux pièces de réparation</p>
					<form action="#devices">
					<a id ="patner" class="btn btn-default">Voir les partenaires</a>
					<!-- <button type="submit" class="btn btn-primary btn-sm">Voir les partenaires</button> -->
					</form>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-truck"></i>
					<h2>Système de crédits</h2>
					<p>Soyez récompensés quand vous aidez les autres membres du club</p>
					<form action="#try">
					<a href="about.php" class="btn btn-default">En savoir plus</a>
					<!-- <button type="submit" class="btn btn-primary btn-sm">En savoir plus</button> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- "about" section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="images/recyclage2.jpg" width="500" height="600">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2>Ayez un impact positif</h2>
				<br>
				<p>En 2019, plus de 50 millions de tonnes de déchets électroniques ont été produites. Il est temps que cela cesse !</p>
				<p>Contribuez à réduire le gaspillage électronique en réparant votre appareil au lieu de le jeter.</p>
				<a href="membership.php" class="btn btn-default">Préinscrivez-vous</a>
			</div>
		</div>
	</div>
</div>


<!-- section -->
<div id="evaluation">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 about-des">
				<h2>Faites-vous aider</h2>
				<br>
				<p>Réparez vous-même votre produit, avec l'aide d'autres membres du clubs et de nos collaborateurs.</p>
				<br/>
				<a href="about.php" class="btn btn-default">EN SAVOIR PLUS</a>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="images/people-helping.jpeg" width="500" height="600">
			</div>
		</div>
	</div>
</div>

<!-- t -->
<div id="patner">
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-sm-12">
				<img src="images/try.jpg" width="500" height="600">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2>Réparation rapide</h2>
				<br/>
				<p>Grâce à nos partenaires, nous vous offrons un accès rapide et privilégié aux pièces de remplacement. </p>
				<p>Nous avons des miliers de pièces en stock, de l'écran de téléphone à la plus petite pièce de votre machine àn laver.</p>
				<br/>
				<a href="#" class="btn btn-default">Voir les partenaires</a>
			</div>

		</div>
	</div>
</div>
<!-- section -->
<div id="devices">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12 about-des">
				<h2>Ne payez que pour les pièces</h2>
				<br/>
				<p>Avec notre abonnement, vous ne payez que pour les pièces de remplacement. L'accès au club, aux outils et l'aide sont OFFERTS.</p>
				<p></p>
				<br/>
				<a href="membership.php" class="btn btn-default">Découvrir l'offre</a>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="images/home-bgg.jpg" width="700" height="600">
			</div>
		</div>
	</div>
</div>

<div id="last">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="images/about-img.jpg" width="500" height="600">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2>Nous récompensons l'entraide</h2>
				<br>
				<p>L'entraide est une valeur que nous valorisons !</p>
				<p>Lorsque vous aidez un autre membre du club, vous recevez des points qui vous permettront d'obtenir des pièces de remplacement gratuitement.</p>
				<a href="about.php" class="btn btn-default">EN SAVOIR PLUS</a>
			</div>
		</div>
	</div>
</div>

<!-- Join beta -->

<div id="join-beta">
	<div class="container">
		<div class="row">
			<div class="text-center">
				<h2>Soyez informés dès le lancement officiel</h2>
				<br/>
				<p>Inscrivez-vous dès maintenant pour être les premiers informés du lancement du Club !</p>
			</div>

			<div class="text-center">
				<form action="membership.php">
				<a href="membership.php" class="btn btn-default">Préinscrivez-vous au Club</a>
				<!-- <button type="submit" class="btn btn-primary btn-sm" >Préinscrivez-vous au Club</button> -->
				</form>
			</div>
		</div>
	</div>
</div>

<!-- footer section -->
<footer>
	<div class="container">
			<div class="col-md-5 col-sm-4">
				<img src="images/logo.png" class="img-responsive" alt="logo">
			</div>

			<div class="col-md-4 col-sm-4 newsletter">
				<p><i class="fa fa-phone"></i> +32-000-00-00-00 </p>
				<p><i class="fa fa-envelope-o"></i> contact@quickrepair.com </p>
				<p><i class="fa fa-globe"></i> www.quickrepair.com</p>
			</div>
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p>Copyright © 2084 Quick repair</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-pinterest"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-envelope-o"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- javascript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
