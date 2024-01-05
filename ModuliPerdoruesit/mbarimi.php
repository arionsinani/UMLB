				<!-- Footer -->
                <footer id="footer">
						<section>
							<h2>Kontakti</h2>
							<dl class="alt">
<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='mbarimi_adresa'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>

								<dt><?php echo $titulli ?></dt>
								<dd><?php echo $pershkrimi ?></dd>
<?php } ?>

<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='mbarimi_telefoni'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>
								<dt><?php echo $titulli ?></dt>
								<dd><?php echo $pershkrimi ?></dd>
<?php } ?>

<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='mbarimi_email'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>
								<dt><?php echo $titulli ?></dt>
								<dd><?php echo $pershkrimi ?></dd>

<?php } ?>

							</dl>

<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='rrjetet_sociale'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>
    <?php echo $pershkrimi ?>
<?php } ?>


						</section>
<?php
	$rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='mbarimi_copyright'");
	while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	  extract($rreshti);
	
if($rezultati==null)
mysqli_free_result($rezultati);
?>
                        <?php echo $pershkrimi ?>
<?php } ?>
                    </footer>
