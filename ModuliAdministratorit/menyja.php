
<?php
            $rezultati = mysqli_query($konfiguro, "SELECT * FROM te_dhenat_umlb WHERE pamja_faqes='menyja'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>