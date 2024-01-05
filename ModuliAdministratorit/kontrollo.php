<?php
/* Kontrollon sesionin */
include('konfigurimi.php');
session_start();
$shiko_emrin= $_SESSION['perdoruesi_umlb'];
$sesioni_sql = mysqli_query($konfiguro,"SELECT perdoruesi_umlb FROM perdoruesit_umlb WHERE perdoruesi_umlb='$shiko_emrin' ");
$rreshti=mysqli_fetch_array($sesioni_sql,MYSQLI_ASSOC);
$perdoruesi_kyqur=$rreshti['perdoruesi_umlb'];
if(!isset($shiko_emrin))
{ header("Location: index.php");} 
?>
