<?php include("kontrollo.php") ?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Uebsite per Menaxhimin e Librave sipas Botuesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="asetet/css/main.css" />
		<noscript><link rel="stylesheet" href="asetet/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

			<!-- Header -->
			<?php include("fillimi.php") ?>
			<!-- Meny -->
			<?php include("menyja.php") ?>

				<!-- Main -->
					<div id="main">
						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
									<a style="float: left;" class="button" href="Ajax/index.php">Voto</a>
									<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Menaxhimi i Perdoruesve</h2>
								</header>
								<br><br>
								<ul class="features">
									<li>
										<span><a href="shto_perdorues.php"><img height="50%" width="50%" src="fotografite/shto_perdorues.png" alt="shto_perdorues"></a></span>
										<br><br>
										<h3>Shto Perdorues</h3>
										<p>Forma per Shtimin e Perdoruesve.</p>
									</li>
									<li>
									<span><a href="modifiko_perdorues.php"><img height="50%" width="50%" src="fotografite/perditso_perdorues.png" alt="perditso_perdorues"></a></span>
										<br><br>
										<h3>Modifiko Perdroues</h3>
										<p>Forma per Modifikimin e Perdoruesve.</p>
									</li>
									<li>
									<span><a href="fshije_perdorues.php"><img height="50%" width="50%" src="fotografite/fshij_perdorues.png" alt="fshij_perdorues"></a></span>
										<br><br>
										<h3>Fshij Perdorues</h3>
										<p>Forma per Fshirjen e Perdoruesve.</p>
									</li>
								</ul>
							</section>
					</div>

			<?php include("mbarimi.php") ?>

			</div>

		<!-- Scripts -->
			<script src="asetet/js/jquery.min.js"></script>
			<script src="asetet/js/jquery.scrollex.min.js"></script>
			<script src="asetet/js/jquery.scrolly.min.js"></script>
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>

	</body>
</html>