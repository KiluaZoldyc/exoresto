<?php
include("connection.php");

$id  = $_GET['id_plat'];

$supp = $bdd -> prepare("DELETE FROM plat WHERE id_plat=" . $id .";");
$supp -> execute();
 
//$reponse -> closeCursor();
header('location: plat.php');

?>