<?php
try {
  $bdd = new PDO("mysql:host=localhost; dbname=annuaire; charset=utf8", "root", "root");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$entreprise = $_POST["entreprise"];
$naissance = $_POST["naissance"];
$adresse = $_POST["adresse"];
$telephone = $_POST["telephone"];
$groupe = $_POST["groupe"];

$req = $bdd->prepare("INSERT INTO `annuaire`(`id`,`Nom`, `Prenom`, `Entreprise`, `Date de naissance`, `Adresse`, `Telephone`)
            VALUES (NULL, :nom, :prenom, :entreprise, :naissance, :adresse, :telephone)");

$req->execute([
    "nom" => $nom,
    "prenom" => $prenom,
    "entreprise" => $entreprise,
    "naissance" => $naissance,
    "adresse" => $adresse,
    "telephone" => $telephone,
  ]);




$id = $bdd->lastInsertId();
var_dump($id);
$req = $bdd->prepare("INSERT INTO appartenir (`fk_user`,`fk_groupe`) VALUES (:id, :groupe)");


foreach($groupe as $valeur)
{
  $req->execute([
    "id"=>$id,
    "groupe"=>$valeur
  ]);

}



header("Location:client.php");
 echo "vous avez été enregistré";
?>
