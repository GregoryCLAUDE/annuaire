<?php
try {
  $bdd = new PDO("mysql:host=localhost; dbname=annuaire; charset=utf8", "root", "root");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}


$id = $donnees["id"];

$bdd->exec("DELETE FROM annuaire WHERE id=$id");

header("Location:client.php");
echo "entrée supprimée";
?>
