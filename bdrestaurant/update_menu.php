<?php
include("connection.php");

$id  = $_GET['id_menu'];
$supp = $bdd -> prepare("UPDATE FROM menu_plat WHERE id_menu=" . $id .";");
$supp -> execute();
$supp = $bdd -> prepare("UPDATE FROM menu WHERE id_menu=" . $id .";");
$supp -> execute();
 
//$reponse -> closeCursor();
header('location: menu.php');

$menu_id = $_GET['id_menu'];
//select
$nom = 

// Prépare une requête de type UPDATE.

    $edit = $bdd->prepare('UPDATE menu SET nom = :nom, prix = :prix, image = :image WHERE id_menu = :id_menu');

    // Assignation des valeurs à la requête.

    $edit->bindValue(':id_menu',$menu_id);

    $edit->bindValue(':nom',$nom);

    $edit->bindValue(':prix',$prix;

    $edit->bindValue(':image',$image;

    // Exécution de la requête.

    $reponse = $edit->execute();
?>



