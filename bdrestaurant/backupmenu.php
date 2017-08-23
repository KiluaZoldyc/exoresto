<?php
	include("includes/templates/header.php");
	include("connection.php");
?>
<div class="row">
	<h2 class="plat">Creer un nouveau menu :</h2>	
		<form action="traitement_menu.php" method="post">
			Img:<input type="file" name="image" />
			Nom:<input type="text" name="nom" />
			Prix:<input type="number" name="prix" />	
			<?php
// On récupère tout le contenu de la table associations
			$reponse = $bdd->query('SELECT * FROM plat');
// On affiche chaque entrée une à une et colonne par colonne
		// echo "<div class='col-md-3'><select class='form-control form-control-lg' name='id_plat[]' multiple></div>";
			while ($donnees = $reponse->fetch())
			{
				echo "<option value='" . $donnees['id_plat'] . "'>" . $donnees['nom'] . "</option>";

				echo "<input class='checkbox' name='id_plat[]' type='checkbox' value='" . $donnees['id_plat'] . "' />";
			}
			echo "</select>";
			?>
			<input type="submit" value="Valider" />
		</form>
	
</div>
<?php
// On récupère tout le contenu de la table associations
	$reponse = $bdd->query('SELECT menu.image AS menu_image, menu.nom AS menu_nom,menu.prix AS menu_prix, GROUP_CONCAT(plat.nom SEPARATOR "</br>") AS plat_nom ,menu.id_menu AS menu_id FROM `menu_plat` LEFT JOIN `plat` on menu_plat.id_plat=plat.id_plat LEFT JOIN `menu` on menu_plat.id_menu=menu.id_menu GROUP BY `menu`.id_menu');
// On affiche chaque entrée une à une et colonne par colonne
	while ($donnees = $reponse->fetch())
	{
		?>
		<div class="col-md-12">
			<div>
				<h2 class="plat"> <?php echo $donnees['plat_nom']; ?></h2>
				<h2 class="plat"><?php echo $donnees['menu_nom'];?></h2>
				<h2 class="plat"> <?php echo $donnees['menu_prix']; ?> Euros</h2>
				<a href="delete_menu.php?id_menu=<?=$donnees['menu_id']?>"><button type="submit">supprimer</button></a>
			</div>
				<img class="ico_plat" alt="Votre visuel" src="assets/img/<?php echo $donnees['menu_image']; ?> "/>
		</div>

	<?php
	}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
</div>

<?php
	include("includes/templates/footer.php");
?>
