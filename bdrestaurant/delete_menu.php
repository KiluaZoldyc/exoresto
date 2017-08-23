<?php
include("connection.php");

$id  = $_GET['id_menu'];
$supp = $bdd -> prepare("DELETE FROM menu_plat WHERE id_menu=" . $id .";");
$supp -> execute();
$supp = $bdd -> prepare("DELETE FROM menu WHERE id_menu=" . $id .";");
$supp -> execute();

//$reponse -> closeCursor();
header('location: menu.php');

?>