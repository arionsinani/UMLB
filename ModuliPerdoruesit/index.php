<?php include("konfigurimi.php"); ?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Moduli Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="asetet/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->

			

		<!-- Nav -->


			
           

		<!-- FSHK -->
		<div id="wrapper">
		<?php include("fillimi.php");?>
		<?php /*include("menyja.php");*/ ?>
			<section id="main">
				<div class="main special">
					<header class="major">
						<h2>Sami Frasheri</h2>
					</header> 	
					<div class="testimonials">
									<?php
            $rezultati = mysqli_query($konfiguro, "SELECT  b.botuesi_umlb, l.libri_umlb, l.viti_botimit_umlb, l.fotografia_umlb FROM librat_umlb l
LEFT OUTER JOIN botuesit_umlb b ON l.id_botuesi_umlb = b.id_botuesi_umlb  WHERE b.botuesi_umlb LIKE '%".'Sami Frasheri'."%'
GROUP BY b.botuesi_umlb, l.libri_umlb, l.viti_botimit_umlb, l.fotografia_umlb ORDER BY b.id_botuesi_umlb, l.libri_umlb DESC LIMIT 3");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section >
									<div>
										<?php echo '<img src="data:fotografite/jpeg;base64,'.base64_encode( $rreshti['fotografia_umlb'] ).'" width="200px" height="200px">'; ?>
									<blockquote>
									<span><strong><?php echo $libri_umlb .' ' ?></strong></span> 
									<br>
									<span><?php echo $viti_botimit_umlb; ?></span>
								</blockquote></div>
						</section>
						<?php } ?>
						</div>

						<header class="major">
							<h2>Gjergj Fishta</h2>
						</header> 	
						<div class="testimonials">
									<?php
            $rezultati = mysqli_query($konfiguro, "SELECT  b.botuesi_umlb, l.libri_umlb, l.viti_botimit_umlb, l.fotografia_umlb FROM librat_umlb l
LEFT OUTER JOIN botuesit_umlb b ON l.id_botuesi_umlb = b.id_botuesi_umlb  WHERE b.botuesi_umlb LIKE '%".'Gjergj Fishta'."%'
GROUP BY b.botuesi_umlb, l.libri_umlb, l.viti_botimit_umlb, l.fotografia_umlb ORDER BY b.id_botuesi_umlb, l.libri_umlb DESC LIMIT 3");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>

						<section >
									<div>
										<?php echo '<img src="data:fotografite/jpeg;base64,'.base64_encode( $rreshti['fotografia_umlb'] ).'" width="200px" height="200px">'; ?>
									<blockquote>
									<span><strong><?php echo $libri_umlb .' ' ?></strong></span> 
									<br>
									<span><?php echo $viti_botimit_umlb; ?></span>
								</blockquote></div>
						</section>
						<?php } ?>

						</div>
					</div>
			</section>
					<?php include("mbarimi.php"); ?>
			</div>
				




		<!-- Footer -->
	
           

		<!-- Scripts -->
			<script src="asetet/js/jquery.min.js"></script>
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>

	</body>
</html>