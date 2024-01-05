<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['perditso_botuesit']))
{	
	$ID_botuesi = $_POST['id_botuesi_umlb'];
	
	$botuesi=$_POST['botuesi_umlb'];
	
	
	// checking empty fields
	if(empty($botuesi) ) {	
			
		if(empty($botuesi)) {
			echo "<font color='red'>Fusha Botuesi eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		$rezultati = mysqli_query($konfiguro,"UPDATE botuesit_umlb SET botuesi_umlb='$botuesi' WHERE id_botuesi_umlb=$ID_botuesi");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: menaxho_botues.php");
	}
}
?>
<?php
//getting ID_Dep from url
$ID_botuesi = $_GET['id_botuesi_umlb'];

//selecting data associated with this particular ID_Dep
$rezultati = mysqli_query($konfiguro,"SELECT * FROM botuesit_umlb WHERE id_botuesi_umlb=$ID_botuesi");

while($rez = mysqli_fetch_array($rezultati))
{
	$botuesi = $rez['botuesi_umlb'];
	
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
		<?php /*include_once("header.php");*/ ?>


		<!-- Nav -->
		<?php /*include_once("meny.php");*/ ?>

			
		<!-- Main -->
		<div id="wrapper">
		<header id="header" class="alt">
						<h1>Modifiko Botuesit</h1>
					</header>
					<?php include("menyja.php") ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">


	<form Botuesi="form1" method="post" action="perditso_botuesit.php">
	
	<h3>Modifiko të dhënat e Botuesit</h3>

			
				<span>Botuesi</span>
				<input type="text" name="botuesi_umlb" value='<?php echo $botuesi;?>'   required />
				<br>
		
				<input type="hidden" name="id_botuesi_umlb" value='<?php echo $_GET['id_botuesi_umlb'];?>' />
				<input type="submit" name="perditso_botuesit" value="Modifiko">
		
		
	</form>

						</div>
				</div>
			</section>
			<?php include("mbarimi.php") ?>
		</div>
			</div>

		<!-- Scripts -->
			<script src="asetet/js/jquery.min.js"></script>
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>

	</body>
</html>