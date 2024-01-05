<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database ko$konfiguroection file
include_once("konfigurimi.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($konfiguro,
"SELECT * FROM perdoruesit_umlb ORDER BY id_perdoruesi_umlb DESC");
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
						<h1>Fshij Perdorues</h1>
					</header>
		<?php include_once("menyja.php"); ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">


	<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat e përdoruesit për fshirje</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="kerko" placeholder="Përdoruesin" value="%"/>
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
		<td>Përdoruesi</td>
		<td>Fjalëkalimi</td>
		<!-- <td>Email</td> -->
		<td>Fshijë</td>
	</tr> 
<?php
if (!empty($_REQUEST['kerko'])) {
$kerko = mysqli_real_escape_string
($konfiguro,$_REQUEST['kerko']);     
$sql = mysqli_query($konfiguro,
"SELECT * FROM perdoruesit_umlb 
WHERE perdoruesi_umlb LIKE '%".$kerko."%'"); 
while($rreshti = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['perdoruesi_umlb']."</td>";
		echo "<td>".$rreshti['fjalekalimi_umlb']."</td>";
		// echo "<td>".$rreshti['email']."</td>";	
		echo "<td><a href=\"fshije.php?id_perdoruesi_umlb=$rreshti[id_perdoruesi_umlb]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
	</table>


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