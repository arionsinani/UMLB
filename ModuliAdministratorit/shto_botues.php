<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 
	</head>
<body>
<?php
//including the database connection file
include_once("konfigurimi.php");

if(isset($_POST['ShtoBotues'])) {	
	$Botuesi = $_POST['botuesi_umlb'];
	
		
	// checking empty fields
	if(empty($Botuesi)) {			
		if(empty($Botuesi)) {echo "<font color='red'>Fusha Botuesi eshte e zbrazet.</font><br/>";}
		
		//link to the previous programi
		echo "<br/><a href='javascript:self.history.back();'>Shko mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($konfiguro, "INSERT INTO botuesit_umlb(botuesi_umlb) VALUES('$Botuesi')");
		//display success message
		// echo "<font color='green'>E dhena u shtua me sukses.";
		//echo "<br/><a href='ballina.php'>Shiko rezultaitin</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'menaxho_botues.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
