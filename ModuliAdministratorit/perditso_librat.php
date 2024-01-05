<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<?php
// including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['perditso_librat']))
{	
	$id_libri_umlb = $_POST['id_libri_umlb'];
	$libri_umlb=$_POST['libri_umlb'];
	$viti_botimit_umlb=$_POST['viti_botimit_umlb'];
	$id_botuesi_umlb=$_POST['id_botuesi_umlb'];			
	
	$fotografia_umlb = addslashes (file_get_contents($_FILES['fotografia_umlb']['tmp_name']));
	$emri_fotografise_umlb = $_FILES['fotografia_umlb']['name'];



	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($libri_umlb) || empty($viti_botimit_umlb) || empty($id_botuesi_umlb) || empty($fotografia_umlb)) {	
			
		if(empty($libri_umlb)) {
			echo "<font color='red'>libri_umlb field is empty.</font><br/>";
		}
		
		if(empty($viti_botimit_umlb)) {
			echo "<font color='red'>viti_botimit_umlb field is empty.</font><br/>";
		}
		
		if(empty($id_botuesi_umlb)) {
			echo "<font color='red'>id_botuesi_umlb field is empty.</font><br/>";
		}
		if(empty($fotografia_umlb)) {
			echo "<font color='red'>Fotografia field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($konfiguro,"UPDATE librat_umlb SET libri_umlb='$libri_umlb',viti_botimit_umlb='$viti_botimit_umlb',id_botuesi_umlb='$id_botuesi_umlb',fotografia_umlb='$fotografia_umlb',emri_fotografise_umlb='$emri_fotografise_umlb' WHERE id_libri_umlb='$id_libri_umlb'");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: menaxho_liber.php");
	}
}
?>
<?php
//getting id_libri_umlb from url
$id_libri_umlb = $_GET['id_libri_umlb'];

//selecting data associated with this particular id_libri_umlb
$rezultati = mysqli_query($konfiguro,"SELECT * FROM librat_umlb WHERE id_libri_umlb='$id_libri_umlb'");

while($rez = mysqli_fetch_array($rezultati))
{
	$libri_umlb = $rez['libri_umlb'];
	$viti_botimit_umlb = $rez['viti_botimit_umlb'];
	$id_botuesi_umlb = $rez['id_botuesi_umlb'];	
	$fotografia_umlb = $rez['fotografia_umlb'];
	$emri_fotografise_umlb = $rez['emri_fotografise_umlb']; 
}
?>
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
						<h1>Modifiko Librat</h1>
					</header>
					<?php include("menyja.php") ?>
			<section id="main">
				<div class="main special">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $perdoruesi_kyqur;?>!</em></p>
				<div class="content">
					
						<div>

	<form enctype="multipart/form-data"  name="form1" method="post" action="perditso_librat.php">
		<table>
		<tr>
			<select name="id_botuesi_umlb">
				<option selected="selected" required>Zgjedh Botuesin</option>
					<?php
					$rez=mysqli_query($konfiguro,"SELECT * FROM botuesit_umlb");
					while($rreshti=$rez->fetch_array())
					{
						?>
						<option value="<?php echo $rreshti['id_botuesi_umlb']; ?>"><?php echo $rreshti['botuesi_umlb']; ?></option>
						<?php
					}
					?>
			</selectBotuesinbr />
			</tr>
			<tr> 
				<td style="color: 000;">Libri</td>
				<td><input type="text" name="libri_umlb" value='<?php echo $libri_umlb;?>' required /></td>
			</tr>
			<tr> 
				<td style="color: 000;">Viti</td>
				<td><input type="text" name="viti_botimit_umlb" value='<?php echo $viti_botimit_umlb;?>' required /></td>
			</tr>
			<tr>
                <td style="color: 000;">Fotografia</td>
			<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
			<td style="color: 000;"><input name="fotografia_umlb" type="file" /></td>
			</tr>
			
			
			<tr>
				<td><input type="hidden" name="id_libri_umlb" value='<?php echo $_GET['id_libri_umlb'];?>' /></td>
				<td><input type="submit" name="perditso_librat" value="Modifiko"></td>
			</tr>
		</table>
	</form>
                        </div>
				</div>
				</div>
			</section>
			<?php include("mbarimi.php") ?>
		</div>
				<!-- Scripts -->
				<script src="asetet/js/jquery.min.js"></script>
			<script src="asetet/js/browser.min.js"></script>
			<script src="asetet/js/breakpoints.min.js"></script>
			<script src="asetet/js/util.js"></script>
			<script src="asetet/js/main.js"></script>
</body>
</html>
