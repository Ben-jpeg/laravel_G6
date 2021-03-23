<?php  require '../database/connexion_bdd.php';
$datapourmots = $bdd->prepare("SELECT * FROM words WHERE wordname=:wordname, definition=:definition");

  
$datapourmots->execute(['wordname' => $wordname]);
$datapourmots->execute(['definition' => $definition]); 
$user = $datapourmots->fetch(); 

?>