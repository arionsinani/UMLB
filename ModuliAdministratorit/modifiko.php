<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database ko$konfiguroection file
include_once("konfigurimi.php");

if(isset($_POST['modifiko']))
{	
	$id_perdoruesi_umlb = $_POST['id_perdoruesi_umlb'];
	
	$perdoruesi_umlb=$_POST['perdoruesi_umlb'];
	$fjalekalimi_umlb=$_POST['fjalekalimi_umlb'];
	// $email=$_POST['email'];	
	
	// checking empty fields
	if(empty($perdoruesi_umlb) || empty($fjalekalimi_umlb)){// || empty($email)) {	
			
		if(empty($perdoruesi_umlb)) {
			echo "<font color='red'>perdoruesi_umlb field is empty.</font><br/>";
		}
		
		if(empty($fjalekalimi_umlb)) {
			echo "<font color='red'>fjalekalimi_umlb field is empty.</font><br/>";
		}
		
		// if(empty($email)) {
			// echo "<font color='red'>Email field is empty.</font><br/>";
		// }		
	} else {	
		//updating the table
		$rezultati = mysqli_query($konfiguro,"UPDATE perdoruesit_umlb SET perdoruesi_umlb='$perdoruesi_umlb',fjalekalimi_umlb='$fjalekalimi_umlb' WHERE id_perdoruesi_umlb=$id_perdoruesi_umlb");
		
		//redirectig to the display pfjalekalimi_umlb. In our case, it is admin.php
		header("Location: modifiko_perdorues.php");
	}
}
?>
<?php
//getting id_perdoruesi_umlb from url
$id_perdoruesi_umlb = $_GET['id_perdoruesi_umlb'];

//selecting data associated with this particular id_perdoruesi_umlb
$rezultati = mysqli_query($konfiguro,"SELECT * FROM perdoruesit_umlb WHERE id_perdoruesi_umlb=$id_perdoruesi_umlb");

while($res = mysqli_fetch_array($rezultati))
{
	$perdoruesi_umlb = $res['perdoruesi_umlb'];
	$fjalekalimi_umlb = $res['fjalekalimi_umlb'];
	// $email = $res['email'];
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
		<title>Modifikimi i perdoruesëve</title>
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
						<h1>Modifiko Perdorues</h1>
					</header>
			<?php include("menyja.php") ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div class="row">

<div class="col-12 col-12-medium">
	<form name="form1" method="post" action="modifiko.php">
	
	<h3>Modifiko të dhënat e përdoruesit</h3>

			
				Përdoruesi
				<input type="text" name="perdoruesi_umlb" value='<?php echo $perdoruesi_umlb;?>' />
				<br>
				Fjalëkalimi
				<input type="text" name="fjalekalimi_umlb" value='<?php echo $fjalekalimi_umlb;?>' />
				<br>
				<!-- Email-i -->
				<!-- <input type="text" name="email" value='<?php echo $email;?>' /> -->
				<br >
				<input type="hidden" name="id_perdoruesi_umlb" value='<?php echo $_GET['id_perdoruesi_umlb'];?>' />
				<input type="submit" name="modifiko" value="Modifiko">
		
		
	</form>
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