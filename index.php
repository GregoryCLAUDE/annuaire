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
          <input type="text" name="nom" id="nom" value="">
        </p>
        <p>
          <label for="prenom">Prenom</label>
          <input type="text" name="prenom" id="prenom" value="">
        </p>
        <p>
          <label for="entreprise">Entreprise</label>
          <input type="text" name="entreprise" id="entreprise" value="">
        </p>
        <p>
          <label for="naissance">Date de naissance</label>
          <input type="date" name="naissance" id="naissance" value="">
        </p>
        <p>
          <label for="adresse">Adresse</label>
          <input type="text" name="adresse" id="adresse" value="">
        </p>
        <p>
          <label for="telephone">telephone</label>
          <input type="int" name="telephone" id="telephone" value="">
        </p>
        <p>
              <?php
              $reponse = $bdd->query("SELECT * FROM groupe");
              while ($donnees=$reponse -> fetch()){
                echo "<input type='checkbox' name='groupe[]' value=".$donnees["id_grp"]."><label>".$donnees['name_grp']."</label>";
              }
              ?>
          </select>
        </p>
        <button type="submit" name="button">s'inscrire</button>

      </form>
      <form class="" action="new_group.php" method="post">
      <label for="ngroup">nouveau groupe</label>
      <input type="text" id="ngroup" name="ngroup">
      <button type="submit" name="button">créer</button>
    </form>
      <a href="client.php"> vers clients</a>
    </tbody>
  </body>
</html>
