<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database ko$konfiguroection dosja
include_once("konfigurimi.php");

if(isset($_POST['perditso_tedhena']))
{	
	$id_e_dhena = $_POST['id_e_dhena'];
	
	$id_e_dhena=$_POST['id_e_dhena'];
	$pershkrimi=$_POST['pershkrimi'];
	$dosja=$_POST['dosja'];	
		$pamja_faqes=$_POST['pamja_faqes'];	
	// checking empty fields
	if(empty($id_e_dhena) || empty($pershkrimi) || empty($dosja) || empty($pamja_faqes)){	
			
		if(empty($id_e_dhena)) {
			echo "<font color='red'>Fusha id_e_dhena eshte e zbrazet!</font><br/>";
		}
		
		if(empty($pershkrimi)) {
			echo "<font color='red'>Fusha Pershkrimi eshte e zbrazet!</font><br/>";
		}
		
		if(empty($dosja)) {
			echo "<font color='red'>Fusha dosja eshte e zbrazet!</font><br/>";
		}	
	if(empty($pamja_faqes)) {
			echo "<font color='red'>Fusha pamja_faqes eshte e zbrazet!</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($konfiguro,"UPDATE te_dhenat_umlb SET id_e_dhena='$id_e_dhena',pershkrimi='$pershkrimi',dosja='images/$dosja',pamja_faqes='$pamja_faqes' WHERE id_e_dhena=$id_e_dhena");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
}
?>
<?php
//getting ID_Dep from url
$id_e_dhena = $_GET['id_e_dhena'];

//selecting data associated with this particular ID_Dep
$rezultati = mysqli_query($konfiguro,"SELECT * FROM te_dhenat_umlb WHERE id_e_dhena=$id_e_dhena");

while($res = mysqli_fetch_array($rezultati))
{
	$id_e_dhena = $res['id_e_dhena'];
	$pershkrimi = $res['pershkrimi'];
	$dosja = $res['dosja'];
		$pamja_faqes = $res['pamja_faqes'];
}
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
			<!-- Header -->
			<?php /*include_once("header.php");*/ ?>

		<!-- Nav -->



		<!-- Heading -->
				<!-- Heading -->
	
		<!-- Main -->
		<div id="wrapper">
		<header id="header" class="alt">
						<h1>Modifiko Te Dhenat</h1>
					</header>
		<?php include_once("menyja.php"); ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">

														<div class="col-12 col-12-medium">

	<form method="post" action="perditso_tedhena.php">
	
	<h3>Modifiko të dhënat</h3>

			
				ID e te dhenes
				<input type="text" name="id_e_dhena" value='<?php echo $id_e_dhena;?>'   required />
				<br>
				Pershkrimi
				<!--<input type="text" name="pershkrimi" value='<?php /*echo $pershkrimi;*/?>'   required />-->
								<textarea name="pershkrimi"  rows="10" cols="30"><?php echo $pershkrimi;?></textarea>
				<br>
				Emri i dosjes
				<input type="text" name="dosja" value='<?php echo $dosja;?>'   required />
				<br >
				Pamja e faqes
				<input type="text" name="pamja_faqes" value='<?php echo $pamja_faqes;?>'   required />
				<br >
				<input type="hidden" name="id_e_dhena" value='<?php echo $_GET['id_e_dhena'];?>' />
				<input type="submit" name="update_data" value="Modifiko">
		
		
	</form>

						</div>
						</div>
				</div>
			</section>
			<?php include_once("mbarimi.php"); ?>
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