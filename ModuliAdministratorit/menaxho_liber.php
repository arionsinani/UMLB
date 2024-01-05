<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php include("konfigurimi.php") ?>

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
						<h1>Menaxho Librat</h1>
					</header>
					<?php include("menyja.php") ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">
							<div class="col-12 col-12-medium">

								<!-- Buttons -->
									

								<!-- Form -->
									<h3>Shto të dhënat e Librit</h3>
									
									<div >
										<form enctype="multipart/form-data"  action="shto_liber.php" method="post" name="form1">
								<!-- class="table-wrapper" -->
										<table>
												
												<tr>
												<select name="id_botuesi_umlb">
													<option selected="selected">Zgjedh Botuesin</option>
														<?php
														$rezultati=mysqli_query($konfiguro,"SELECT * FROM botuesit_umlb");
														while($row=$rezultati->fetch_array())
														{
															?>
															<option value="<?php echo $row['id_botuesi_umlb']; ?>"><?php echo $row['botuesi_umlb']; ?></option>
															<?php
														}
														?>
												</select><br />
												</tr>
												
												
												<tr> 
													<td>Libri</td>
													<td><input type="text" name="libri_umlb"></td>
												</tr>
												<tr> 
													<td>Viti</td>
													<td><input type="int" name="viti_botimit_umlb"></td>
												</tr>
											    <tr> 

												<tr>
													<td>Fotografia</td>
													<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="fotografia_umlb" type="file" /></td>

												</tr>
												

												<tr> 
													
													<td><input type="submit" name="shtoLiber" value="Shto" class="primary" ></td>
												</tr>
												
											</table>
									</form>
																		</div>
																		
										<div class="row">
										<div class="col-12 col-12-medium">
												<form action="" method="post">  
										
										<table>
										<tr>
										<h3>Kërko të dhënat e librit për menaxhim</h3>
										</tr>
										<tr>

										<td>
										Shkruaj:
										</td>
										<td>
										<input type="text" name="kerko" placeholder="Libri" value="%"/>
									</td>
									<td> <input type="submit" value="Kërko" /></td>
									</tr>
									</table>
									<table>

										<tr>
											<td>Libri</td>
											<td>Viti</td>
											<td>Botuesi</td>											
											<td>Fotografia</td>
											
											<td>Modifiko</td>
											<td>Fshije</td>
										</tr> 

									<?php
										if (!empty($_REQUEST['kerko'])) {

										$kerko = mysqli_real_escape_string($konfiguro,$_REQUEST['kerko']);     

										$sql = mysqli_query($konfiguro,	
									"SELECT
									l.id_libri_umlb,
									l.libri_umlb,
									l.viti_botimit_umlb,
									b.botuesi_umlb,
									l.fotografia_umlb

									FROM
									  librat_umlb l
									INNER JOIN
									  botuesit_umlb b ON l.id_botuesi_umlb = b.id_botuesi_umlb
									WHERE
									  l.libri_umlb LIKE '%".$kerko."%' OR l.viti_botimit_umlb LIKE '%".$kerko."%'"
										); 

										while($rreshti = mysqli_fetch_array($sql)) { 		
												echo "<tr>";
												echo "<td>".$rreshti['libri_umlb']."</td>";
												echo "<td>".$rreshti['viti_botimit_umlb']."</td>";
												echo "<td>".$rreshti['botuesi_umlb']."</td>";
		
												
												echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['fotografia_umlb'])." width='80'  height='100'/></td>";
												
												echo "<td><a href=\"perditso_librat.php?id_libri_umlb=$rreshti[id_libri_umlb]\" class='button' class='button primary'>Modifiko</a> </td>";	
echo "<td><a href=\"fshij_liber.php?id_libri_umlb=$rreshti[id_libri_umlb]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini librin?')\" class='button' class='button primary'>Fshijë</a> </td>";			
														
											}

										}

										?>
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
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>

	</body>
</html>