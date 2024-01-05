<?php
//including the database connection file
include("konfigurimi.php");

//getting id_perdoruesi_umlb of the data from url
$id_perdoruesi_umlb = $_GET['id_perdoruesi_umlb'];

//deleting the row from table
$rezultati = mysqli_query($konfiguro,"DELETE FROM perdoruesit_umlb WHERE id_perdoruesi_umlb=$id_perdoruesi_umlb");

//redirecting to the display page (index.php in our case)
header("Location:fshije_perdorues.php");
?>

