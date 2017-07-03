<?php
$base = mysqli_connect("localhost","root","root","annuaire");// je me connecte a ma base

$id = $_POST["id"]; // je recupere mon id

$supp = mysqli_query($base, "DELETE FROM appartenir WHERE `fk_user`=$id");// je supprime l'entrée en fonction de l'id choisie
if ($supp === FALSE) {
  echo "l'entrée n'a pas été supprimé";   // si y'a un probleme
}else{

  header("Location:client.php");// je retourne sur ma page d'annuaire
  echo "l'entrée a été supprimé";
}

?>
