
<?php
try {
  $base = new PDO("mysql:host=localhost; dbname=annuaire; charset=utf8", "root", "root");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}

$ngroup = $_POST["ngroup"];
var_dump($ngroup);

$req = $base->prepare("INSERT INTO `groupe`(id_grp, name_grp) VALUES (NULL, :ngroup)");

$req->execute([
  "ngroup" => $ngroup
]);

header("Location:index.php");

 ?>
