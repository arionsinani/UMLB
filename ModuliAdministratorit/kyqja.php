<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("konfigurimi.php"); //Establishing connection with our database
	
	$gabim = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["perdoruesi_umlb"]) || empty($_POST["fjalekalimi_umlb"]))
		{
			$gabim = "Te dyja fushat duhet te mbushen!";
			echo $gabim;
		}else
		{
			// Define $username and $password
			$perdoruesi=$_POST['perdoruesi_umlb'];
			$fjalekalimi=$_POST['fjalekalimi_umlb'];
			//Check username and password from database
			$sql="SELECT id_perdoruesi_umlb FROM perdoruesit_umlb WHERE perdoruesi_umlb='$perdoruesi' 
			and fjalekalimi_umlb='$fjalekalimi'";
	
			$rezultati=mysqli_query($konfiguro,$sql);
	
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			// var_dump($rreshti);
			// die();
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['perdoruesi_umlb'] = $perdoruesi; // Initializing Session
				header("location: ballina.php"); // Redirecting To Other Page
			}else
			{
				$gabim = "Fusha Perdoruesi ose Fjalekalimi nuk jane plotesuar korrekt!";
				echo $gabim;
			}
		}
	}
?>