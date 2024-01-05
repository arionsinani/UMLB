<?php include("kontrollo.php") ?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Stellar by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="asetet/css/main.css" />
		<noscript><link rel="stylesheet" href="asetet/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


		<!-- Wrapper -->
			<div id="wrapper">


			<header id="header" class="alt">
						<h1>Menaxho Botuesit</h1>
					</header>

			<!-- Meny -->
			<?php include("menyja.php") ?>

		<!-- Main -->
		<section id="main">
			<div class="main special">
			<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
			<div class="content">
				
					<div class="row">
						<div class="col-12 col-12-medium">
							<!-- Form -->
								<h3>Shto të dhënat e botuesve</h3>
								
								<div class="table-wrapper">
								<form method="post" action="shto_botues.php">
									<div class="table-wrapper">
									<div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<input type="text" name="botuesi_umlb" id="botuesi_umlb" value="" placeholder="Botuesit" />
										</div>
										<div class="col-6">
											<ul class="actions">
												<li><input type="submit" name="ShtoBotues" value="Shto" class="primary" /></li>
											
											</ul>
										</div>
									</div>
									
								</form>
								<br>
								<form action="" method="post">  
<br>
<br>
<table>
<tr>
<h3>Kërko të dhënat e Botuesve për modifikim ose fshirje</h3>
</tr>
<tr>

<td>
Shkruaj:
</td>
<td>
<input type="text" name="kerko" placeholder="Botuesit" value="%"/>
</td>
<td> <input type="submit" value="Kërko" /></td>
</tr>
</table> 
</div>
</div>
</form> 
<div class="table-wrapper">
<table>
<div class="table-wrapper">
<tr>
	<td>Botuesit</td>
	<td>Modifiko</td>
	<td>Fshije</td>
</tr> 
<?php
if (!empty($_REQUEST['kerko'])) {
$kerko = mysqli_real_escape_string
($konfiguro,$_REQUEST['kerko']);     
$sql = mysqli_query($konfiguro,
"SELECT * FROM botuesit_umlb 
WHERE botuesi_umlb LIKE '%".$kerko."%'"); 
while($rreshti = mysqli_fetch_array($sql)) { 		
	echo "<tr>";
	echo "<td>".$rreshti['botuesi_umlb']."</td>";
	echo "<td><a href=\"perditso_botuesit.php?id_botuesi_umlb=$rreshti[id_botuesi_umlb]\" class='button' class='button primary'>
Modifiko</a></td>";
echo "<td><a href=\"fshij_botuesit.php?id_botuesi_umlb=$rreshti[id_botuesi_umlb]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini botuesin?')\" class='button' class='button primary'>Fshijë</a>
	</td></tr>";		
}

}

?>
</div>
</table>

								</div>
					</div>		
					</div>
			</div>
		</section>
		<?php include("mbarimi.php") ?>
					</div>

				<!-- Footer -->

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