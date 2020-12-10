<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quick repair - Join the club</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	 <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

</head>
<body>

<!-- navigation -->

<?php include_once('nav.php'); 

if(isset($_GET['uid'])){ 
	$uid = $_GET['uid'];
}else{
	$uid = 0;
}
?>
<!-- divider section -->
<div class="page-wrapper bg-gra-01 p-t-60 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780 p-b-40">
            <h1 class="text-center">Votre appareil a été ajouté.</h1>
            <h3 class="text-center p-t-10">Nous aurions une dernière question pour vous.</h3>
        </div>
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <h4>Le jour où le club ouvrira, quel type d'affiliation souhaiteriez-vous prendre:</h4>
                    <p class="p-b-40">Votre réponse ne vous engage à rien.</p>
                    <div class="divider" id="tarification">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-user-plus"></i>
					<h2>Abonnement de Base</h2>
					<p> 15€/mois </p>
					<p>Accès jusqu'à 2 fois par semaine aux outils et 120 points* offerts pour les pièces de rechange.</p>
					<a href="server/add_abonnement.php?c=basique&uid=<?php echo $_GET['uid']; ?>" class="btn btn-default">Sélectionner</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-users"></i>
					<h2>Abonnement Suppérieur</h2>
					<p> 25€/mois </p>
					<p>Accès illimité aux outils et 240 points* offerts pour les pièces de rechange.</p>
					<a href="server/add_abonnement.php?c=supperieur&uid=<?php echo $_GET['uid']; ?>" class="btn btn-default">Sélectionner</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-cogs"></i>
					<h2>Collaborateur bénévole</h2>
					<p> GRATUIT </p>
					<p>Juste là pour aider ? Partagez vos compétences et soyez récompensés pour l'aide apportée.</p>
					<a href="server/add_abonnement.php?c=benevole&uid=<?php echo $_GET['uid']; ?>" class="btn btn-default">Sélectionner</a>
				</div>
			</div>
		</div>
	</div>
	<p>* Les points sont cumulables d'un mois à l'autre. 10 points équivallent à une valeur de 1€ en pièces de rechange.</p>
                </div>
            </div>
        </div>
</div>

<!-- membership section -->

<!-- footer section -->
<footer>
	<div class="container">
			<div class="col-md-6 col-sm-4">
				<img src="images/logo2.png" class="img-responsive" alt="logo">
			</div>

			<div class="col-md-3 col-sm-4 newsletter">
				<p><i class="fa fa-envelope-o"></i>contact@selfrepair.club</p>
				<p><i class="fa fa-globe"></i> www.selfrepair.club</p>
			</div>
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-6">
				<p>Copyright © 2020 Self repair club</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="mailto:contact@selfrepair.club" class="fa fa-envelope-o"></a></li>
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RG2Y36F46Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-RG2Y36F46Y');
</script>
</body>
</html>
