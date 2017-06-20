<?php
include("header.php");
?>

<?php
$servername = "localhost";
$myDB = "restaurant";
$username = "root";
$password = "admin";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$myDB;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

// On récupère tout le contenu de la table associations
$reponse = $bdd->query('SELECT * FROM plat');

// On affiche chaque entrée une à une et colonne par colonne
while ($donnees = $reponse->fetch())
{
?>

<p>Plat: <?php echo $donnees['nom']; ?>
Prix: <?php echo $donnees['prix']; ?>
Img: <?php echo $donnees['image']; ?>
</p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
    
<?php

include("footer.php");
?>


