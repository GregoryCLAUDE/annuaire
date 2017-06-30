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
      <table>
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
          $reponse = $bdd->query("SELECT * FROM annuaire");
          while ($donnees=$reponse->fetch()) {
            echo "<tr>
                  <td>".$donnees["Nom"]."</td>
                  <td>".$donnees["Prenom"]."</td>
                  <td>".$donnees["Entreprise"]."</td>
                  <td>".$donnees["Date de naissance"]."</td>
                  <td>".$donnees["Telephone"]."</td>
                  <td>".$donnees["Groupe"]."</td>
                  <td><button id=".$donnees["id"].">supprimer</button></td>
                  <tr>";
          }
           ?>
        </tbody>
        <a href="index.php" type="button">nouvel utilisateur</a>
      </table>
  </div>
  </body>
</html>
