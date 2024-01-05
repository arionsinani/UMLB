<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="asetet/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		<?php /*include_once("header.php");*/ ?>

		<!-- Nav -->
	
		<!-- Main -->
		<div id="wrapper">
		<header id="header" class="alt">
						<h1>Shto Perdorues</h1>
					</header>
		<?php include("menyja.php"); ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">
														<div class="col-12 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e përdoruesit</h3>
									
									<div class="table-wrapper">
									<form method="post" action="shto.php">
										<div class="table-wrapper">
										<div class="row gtr-uniform">
											<div class="col-12 col-12-medium">
												<input type="text" name="perdoruesi_umlb" id="perdoruesi_umlb" value="" placeholder="Përdoruesi" />
											
											<br>
												<input type="password" name="fjalekalimi_umlb" id="fjalekalimi_umlb" value="" placeholder="Fjalëkalimi" />
											<br>
												<!-- <input type="email" name="email" id="email" value="" placeholder="Email-i" /> -->
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shto_perdorues" value="Shto" class="primary" /></li>
												
												</ul>
											</div>
										</div>
										
									</form>
									</div>
						</div>		
						</div>
				</div>
			</section>
			<?php include_once("mbarimi.php"); ?>
			</div>


		<!-- Footer -->
				


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>