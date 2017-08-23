<?php
include("connection.php");
// print_r($_POST['id_plat']);
// exit;
// Insertion du message à l'aide d'une requête préparée

$nom = $_POST['nom'];
$prix = $_POST['prix'];
$image = $_POST['image'];


$req = $bdd->prepare('INSERT INTO menu (nom,prix,image ) VALUES(?, ? , ?)');
$req->execute(array($nom, $prix, $image));

$id_menu = $bdd->lastInsertId();
$tab_plats = $_POST['id_plat'];

//parcourir tableau $tab_plats avec foreach a chaque tour lier le plat demander au menu.
foreach ($tab_plats as $id_plat) {
	# code...
$req = $bdd->prepare('INSERT INTO menu_plat (id_menu,id_plat) VALUES(?, ?)');
$req->execute(array($id_menu, $id_plat));
}
header('Location: menu.php');
?>
