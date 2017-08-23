<?php
include("includes/templates/header.php");
include("connection.php");
?>
<div class="row">
    <?php
// On récupère tout le contenu de la table associations
    $reponse = $bdd->query('SELECT * FROM plat');
// On affiche chaque entrée une à une et colonne par colonne
    while ($donnees = $reponse->fetch())
    {
        ?>
        <div class="col-md-4 col-md-offset-3">
           <img class="ico_plat" alt="Votre visuel" src="assets/img/<?php echo $donnees['image']; ?> "/>
           <h2 class="plat"> <?php echo $donnees['nom']; ?></h2>
           <h2 class="plat"> <?php echo $donnees['prix']; ?> Euros</h2>
           <a href="delete_plat.php?id_plat=<?=$donnees['id_plat']?>"><button type="submit">supprimer</button></a>
           <a href="update_plat.php?id_plat=<?=$donnees['id_plat']?>"><button type="submit">modifier</button></a>
       </div>

       <?php
   }

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</div>
    <?php
    include("includes/templates/footer.php");
    ?>
