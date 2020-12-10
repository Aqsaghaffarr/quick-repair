<?php
if(!isset($page)){
	$page="";
}
 ?>
<div class="container">
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php" <?php if($page=='index'){ ?> class="active" <?php } ?>><i class="fa fa-home fa-3x"></i></a></li>
				<li><a href="membershipform.php" style="font-weight:bold;" <?php if($page=='join'){ ?> class="active" <?php } ?>>PRÉ-INSCRIPTION</a></li>
<!-- 				<li><a href="about.php" <?php if($page=='about'){ ?> class="active" <?php } ?>>A PROPOS</a></li> -->
				<li><a href="contact.php" <?php if($page=='contact'){ ?> class="active" <?php } ?>>CONTACT</a></li>
			</ul>
		</div>
	</div>
</div>
