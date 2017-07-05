<?php
$base = mysqli_connect("localhost","root","root","annuaire");// je me connecte a ma base

$id = $_GET["id"]; // je recupere mon id

$supp = mysqli_query($base, "DELETE FROM appartenir WHERE `fk_user`=$id" );// je supprime le lien
$del = mysqli_query($base, "DELETE FROM annuaire WHERE `id`= $id");// je ssuprime de la base de donnée des contacts
if ($supp === FALSE || $del === FALSE) {
  echo "l'entrée n'a pas été supprimé";   // si y'a un probleme
}else{

  header("Location:client.php");// je retourne sur ma page d'annuaire
  echo "l'entrée a été supprimé";
}

?>
