<?php
$bdd = new PDO('mysql:host=localhost;dbname=wsprosit5;', 'root', '');

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['motDePasse'];

// Requ�te pr�par�e pour emp�cher les injections SQL
$requete = $bdd->prepare("INSERT INTO utilisateurs (pseudo, motDePasse) VALUES( :psdd,:msdqd)");

$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
$requete->bindValue(':motDePasse', $motDePasse, PDO::PARAM_STR);

$requete->execute();

?>