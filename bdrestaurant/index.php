<?php
include("includes/templates/header.php");
include("connection.php");

?>
<div class="top">
<h3 class="plat">Ajouter un nouveau plat:</h3>
<form action="traitement_plat.php" class="plat" method="post">

		Img: <input type="file" name="image" />
		Nom: <input type="text" name="nom" />
		Prix: <input type="number" name="prix" />
		<input type="submit" value="Valider" />

	


	
</form>
</div>

<?php
include("includes/templates/footer.php");
?>
