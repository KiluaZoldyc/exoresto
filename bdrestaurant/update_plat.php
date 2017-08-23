<?php
include("includes/templates/header.php");
include("connection.php");
$id  = $_GET['id_plat'];

$updt = $bdd -> prepare("SELECT * FROM plat WHERE id_plat=" . $id .";");
$updt -> execute();
$reponse = $updt->fetch();
?>
<div class="top">
  <h3 class="plat">Modifier un plat:</h3>
  <form action="traitement_update_plat.php?id_plat=<?=$_GET['id_plat']?>" class="plat" method="post">
    Nom:  <input type="text" value="<?php echo $reponse['nom']?>" name="nom"/>
    Prix: <input type="number" value="<?php echo $reponse['prix']?>" name="prix"/>
    <input type="submit" value="Valider" />
  </form>
</div>

<?php
include("includes/templates/footer.php");
?>