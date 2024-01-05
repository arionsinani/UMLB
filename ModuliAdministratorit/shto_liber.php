<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head

<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['shtoLiber'])) {	
	$Libri = $_POST['libri_umlb'];
	$Viti = $_POST['viti_botimit_umlb'];
	$ID_Botuesi = $_POST['id_botuesi_umlb'];
	
	// $Fotografia = $_POST['fotografia_umlb'];
	$Fotografia =addslashes (file_get_contents($_FILES['fotografia_umlb']['tmp_name']));
	$Emri_Fotografies = $_FILES['fotografia_umlb']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($Libri) || empty($Viti) || empty($ID_Botuesi)) {
				
		if(empty($Libri)) {
			echo "<font color='red'>Fusha Libri eshte e zbrazet!</font><br/>";
		}
		
		if(empty($Viti)) {
			echo "<font color='red'>Fusha Viti eshte e zbrazet!</font><br/>";
		}

		if(empty($ID_Botuesi)) {
			echo "<font color='red'>Fusha ID_Botuesi eshte e zbrazet!</font><br/>";
		}
		
		//link to the previous pViti
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati =$test = mysqli_query($konfiguro, "INSERT INTO librat_umlb(libri_umlb, viti_botimit_umlb, id_botuesi_umlb, fotografia_umlb) VALUES('$Libri', '$Viti', '$ID_Botuesi', '$Fotografia')");


		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_liber.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
		 
		//echo "<font color='green'>E dhena eshte shtuar me sukses.";
		//echo "<br/><a href='ballina.php'>Shiko reultaitin</a>";
	}
}
?>

</body>
</html>
