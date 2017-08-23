<?php
include("connection.php");
$id  = $_GET['id_plat'];
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('UPDATE plat SET nom=:nom, prix=:prix WHERE id_plat=:id_plat');
$req->execute(array('id_plat'=>$id, 'nom' => $_POST['nom'], 'prix' => $_POST['prix'],));

header('Location: plat.php');
?>