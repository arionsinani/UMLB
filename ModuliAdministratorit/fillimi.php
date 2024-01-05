
<? include("konfigurimi.php") ?>
				<!-- Header -->
					<header id="header" class="alt">
		
		<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='Fillimi'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>

					<span class="logo"><img src="<?php echo $dosja ?>"/></span>
						<h1><?php echo $titulli ?></h1>
					</header>
	<?php } ?>