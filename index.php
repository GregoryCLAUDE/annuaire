<?php
try {
  $bdd = new PDO("mysql:host=localhost; dbname=annuaire; charset=utf8", "root", "root");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
  </head>
  <body>
    <theader>
      <label for="">login :</label>
      <input type="text" name="" value="">
      <label for="">password</label>
      <input type="password" name="" value="">
      <button type="button" name="button">valider</button>
    </theader>
    <tbody>
      <h3>Inscription</h3>
      <form action="annuaire_post.php" method="post">
        <p>
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom">
        </p>
        <p>
          <label for="prenom">Prenom</label>
          <input type="text" name="prenom" id="prenom">
        </p>
        <p>
          <label for="entreprise">Entreprise</label>
          <input type="text" name="entreprise" id="entreprise">
        </p>
        <p>
          <label for="naissance">Date de naissance</label>
          <input type="date" name="naissance" id="naissance">
        </p>
        <p>
          <label for="adresse">Adresse</label>
          <input type="text" name="adresse" id="adresse">
        </p>
        <p>
          <label for="telephone">telephone</label>
          <input type="int" name="telephone" id="telephone">
        </p>
        <p>
          <label for="groupe">Groupe</label>
          <input type="text" name="groupe" id="groupe">
        </p>
        <button type="submit" name="button">s'inscrire</button>

      </form>
      <a href="client.php"> vers cliients</a>
    </tbody>
  </body>
</html>
