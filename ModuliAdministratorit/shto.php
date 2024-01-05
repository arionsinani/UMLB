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

if(isset($_POST['shto_perdorues'])) {	
	$perdoruesi = $_POST['perdoruesi_umlb'];
	$fjalekalimi = $_POST['fjalekalimi_umlb'];
	// $email = $_POST['email'];
		
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi)) { // || empty($email)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Fusha e perdoruesit eshte e zbrazet!</font><br/>";}
		if(empty($fjalekalimi)) {echo "<font color='red'>Fusha e fjalekalimit eshte e zbrazet!</font><br/>";}
		//if(empty($email)) {echo "<font color='red'>Fusha e emailit eshte e zbrazet!</font><br/>";}
		//link to the previous fjalekalimi
		echo "<br/><a href='javascript:self.history.back();'>Shko mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($konfiguro, "INSERT INTO perdoruesit_umlb(perdoruesi_umlb,fjalekalimi_umlb) VALUES('$perdoruesi','$fjalekalimi')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 3000); 
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
		// echo "<font color='green'>E dhena u shtua me sukses.";
		//echo "<br/><a href='perdoruesit.php'>Shiko rezultatin</a>";
	}
}
?>

</body>
</html>
