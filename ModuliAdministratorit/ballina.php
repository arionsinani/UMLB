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
									<h2>Menaxhimi i te dhenave te ballines</h2>
								</header>
								<br><br>
								<ul class="features">
									<li>
										<span><a href="menaxho_botues.php"><img height="50%" width="50%" src="fotografite/menaxho_botuesit.png" alt="menaxho_botuesit"></a></span>
										<br><br>
										<h3>Menaxho Botuesit</h3>
										<p>Forma per menaxhimin e botuesve ne webaplikacion.</p>
									</li>
									<li>
									<span><a href="menaxho_liber.php"><img height="50%" width="50%" src="fotografite/menaxho_librat.png" alt="menaxho_librat"></a></span>
										<br><br>
										<h3>Menaxho Librat</h3>
										<p>Forma per menaxhimin e librave ne webaplikacion.</p>
									</li>
									<li>
									<span><a href="menaxho_tedhena.php"><img height="50%" width="50%" src="fotografite/modifiko_dhenat.png" alt="modifiko_te_dhenat"></a></span>
										<br><br>
										<h3>Modifiko te Dhenat</h3>
										<p>Forma per modifikimin e te dhenave te webaplikacionit.</p>
									</li>
								</ul>
								<!-- <footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer> -->
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