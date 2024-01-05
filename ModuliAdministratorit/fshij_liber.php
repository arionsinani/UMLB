<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$id_libri_umlb = $_GET['id_libri_umlb'];

//deleting the row from table
$rezultati = mysqli_query($konfiguro,"DELETE FROM librat_umlb WHERE id_libri_umlb=$id_libri_umlb");

//redirecting to the display page (index.php in our case)
header("Location: menaxho_liber.php");
?>

