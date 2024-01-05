<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$id_botuesi_umlb = $_GET['id_botuesi_umlb'];
echo $id_botuesi_umlb;

//deleting the row from table
$rezultati = mysqli_query($konfiguro,"DELETE FROM botuesit_umlb WHERE id_botuesi_umlb=$id_botuesi_umlb");
echo $rezultati;

//redirecting to the display page (index.php in our case)
header("Location: menaxho_botues.php");
?>

