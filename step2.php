


<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Quick repair - Contact</title>
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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Quick repair form</title>

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

    <?php include_once('nav.php'); ?>

  <!-- form -->
<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading2"></div>
                <div class="card-body">
                    <h2 class="title">Select your device</h2>
                    <form method="POST">

                        <form name="form1" id="form1" action="/action_page.php">						
							  <select name="device" id="device">
								<option disabled="disabled" selected="selected"> Select Device</option>
							  </select>
							  <br><br>
							  <select name="brand" id="brand">
								<option disabled="disabled" selected="selected">Select Brand</option>
							  </select>
							  <br><br>
							  <select name="model" id="model">
								<option disabled="disabled" selected="selected">Select Model</option>
							  </select>
							  <br><br>
							  <label for="img">*Select image:</label>
								  <input type="file" id="img" name="img" accept="image/*">
						</form>
						<br>
						
						<form class="p-t-10" action="membership.php" >
						<h2 class="title">Obtenir un Abonnement</h2>
						<button class="btn btn--pill btn--green" type="submit">Continuer</button>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>


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
<script src="js/form.js"></script>


</body>

</html>
<!-- end document-->

