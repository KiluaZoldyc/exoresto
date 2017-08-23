<?php
include("connection.php");
?>

<?php
// on teste si la variable du formulaire est bien déclarée
if (isset($_POST['nom'])) {

	// on recherche le numero du membre à supprimer
	$sql = 'SELECT nom FROM plat WHERE nom = "'.$_POST[nom].'"';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	// on recupere le resultat sous forme d'un tableau
	$data = mysql_fetch_array($req);

	// on recupere la valeur qui nous intersse
	$prix = $data['prix'];

	// on libère l'espace mémoire alloué pour cette interrogation de la base
	mysql_free_result ($req);

	// lancement de la requête pour effacer notre membre
	$sql ='DELETE from plat WHERE nom="'.$_POST['nom'].'"';

	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

	// lancement de la requête pour effacer les disques de notre membre
	$sql ='DELETE from plat WHERE nom="'.$prix_plat.'"';

	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

	// on ferme la connexion à la base
	mysql_close();

	// un petit message afin de voir ce qui s'est passé
	echo 'Nous venons de supprimer '.$_POST['proprio'].' de la base ainsi que tous ces disques';
}
else {
	echo 'La variable de notre formulaire n\'est pas initialisée.';
}
?>