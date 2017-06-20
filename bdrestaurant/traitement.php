<?php
include("connection.php");



// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO plat (image,nom,prix ) VALUES(?, ? , ?)');
$req->execute(array($_POST['image'], $_POST['nom'], $_POST['prix']));

header('Location: plat.php');
?>

