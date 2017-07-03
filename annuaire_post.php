<?php
try {
  $bdd = new PDO("mysql:host=localhost; dbname=annuaire; charset=utf8", "root", "root");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}

SELECT i.id id_annuaire, u.fk_user fk_user_appartenir
FROM annuaire i, appartenir u
WHERE u.fake_user = i.id

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$entreprise = $_POST["entreprise"];
$naissance = $_POST["naissance"];
$adresse = $_POST["adresse"];
$telephone = $_POST["telephone"];
$groupe = $_POST["groupe"];

var_dump($groupe);
$req = $bdd->prepare("INSERT INTO `annuaire`(`id`,`Nom`, `Prenom`, `Entreprise`, `Date de naissance`, `Adresse`, `Telephone`, `Groupe`)
            VALUES (NULL, :nom, :prenom, :entreprise, :naissance, :adresse, :telephone, :groupe)");

$req->execute([
    "nom" => $nom,
    "prenom" => $prenom,
    "entreprise" => $entreprise,
    "naissance" => $naissance,
    "adresse" => $adresse,
    "telephone" => $telephone,
    "groupe" => $groupe
  ]);


 //header("Location:client.php");
 echo "vous avez été enregistré";
?>
