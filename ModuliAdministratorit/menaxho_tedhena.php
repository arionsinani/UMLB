<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php include("konfigurimi.php");

$rezultati = mysqli_query($konfiguro,
"SELECT * FROM te_dhenat_umlb ORDER BY id_e_dhena DESC");
?>


<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="asetet/css/main.css" />
	</head>
	<body class="is-preload">

		<?php /*include_once("header.php");*/ ?>


		<!-- Nav -->

		<!-- Main -->
		<div id="wrapper">
		<header id="header" class="alt">
						<h1>Menaxho Te Dhenat</h1>
					</header>
					<?php include("menyja.php") ?>
					<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">


	<div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
	<tr>
	<h3>Kërko të dhënat për modifikim</h3>
	</tr>
	<tr>

	<td>
	Shkruaj:
	</td>
	<td>
	<input type="text" name="kerko" placeholder="Titullit ose Pamjes se faqes" value="%"/>
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
		<td>Titulli</td>
		<td>Pershkrimi</td>
		<td>Emri i file-it</td>
		<td>Pamja e faqes</td>
		<td>Modifiko</td>
	</tr> 
<?php
if (!empty($_REQUEST['kerko'])) {
$kerko = mysqli_real_escape_string
($konfiguro,$_REQUEST['kerko']);     
$sql = mysqli_query($konfiguro,
"SELECT * FROM te_dhenat_umlb 
WHERE titulli LIKE '%".$kerko."%' 
OR  pamja_faqes LIKE '%".$kerko."%'"); 
while($rreshti = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['titulli']."</td>";
		echo "<td>".$rreshti['pershkrimi']."</td>";
		echo "<td>".$rreshti['dosja']."</td>";	
		echo "<td>".$rreshti['pamja_faqes']."</td>";	
		echo "<td><a href=\"perditso_tedhena.php?id_e_dhena=$rreshti[id_e_dhena]\" class='button' class='button primary'>
		Modifiko</a></td></tr>";		
	}

}

?>
</div>	
	</table>


						</div>
				</div>
			</section>
			<?php include("mbarimi.php") ?>
		</div>
		</div>
			
			
			

		<!-- Footer -->
	

		</div>

		<!-- Scripts -->
			<script src="asetet/js/jquery.min.js"></script>
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>

	</body>
</html>