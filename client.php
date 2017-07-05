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
    <title>annuaire clients</title>
  </head>
  <body>
    <h1>page clients</h1>
    <div class="container">
      <table border="solid">
        <thead>
          <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Entreprise</td>
            <td>Date de naissance</td>
            <td>Adresse</td>
            <td>Telephone</td>
            <td>Groupe</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $reponse = $bdd->query("SELECT *
                                  FROM appartenir
                                  INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
                                  INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
                                  ");
          while ($donnees=$reponse->fetch()) {
            echo "<tr>
                  <td>".$donnees["Nom"]."</td>
                  <td>".$donnees["Prenom"]."</td>
                  <td>".$donnees["Entreprise"]."</td>
                  <td>".$donnees["Date de naissance"]."</td>
                  <td>".$donnees["Adresse"]."</td>
                  <td>".$donnees["Telephone"]."</td>
                  <td>".$donnees["name_grp"]."</td>
                  <td><form action='supprim.php' method='GET'><input type='HIDDEN' name='id' value=".$donnees["id"]."><button type='submit'>supprimer</button></form></td>
                  <td><form action='modif.php' method='GET'><input type='HIDDEN' name='id' value=".$donnees["id"]."><button type='submit'>modifier</button></form></td>
                  </tr>";
          }
           ?>
        </tbody>
        <a href="index.php" type="button">nouvel utilisateur</a>
      </table>
</div>
<div class="container">
      <a href="liste.php">vers les liste par groupe</a>
      <table border="solid">
        <thead>
          <tr>
            <td>id</td>
            <td>groupe</td>
          </tr>
        </thead>
        <tbody>
          <?php
            $reponse = $bdd->query("SELECT * FROM groupe");
            while ($donnees=$reponse->fetch()){
              echo "<tr>
                    <td>".$donnees["id_grp"]."</td>
                    <td>".$donnees["name_grp"]."</td>
                    </tr>";
            }
           ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
