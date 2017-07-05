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
     <title>liste des groupes</title>
   </head>
   <body>
     <a href="client.php">vers les clients</a>
     <?php
      $groupe =$bdd->query(
        "SELECT *
        FROM groupe"
      );

        while ($grp = $groupe->fetch()){
          echo "
                <h2>".$grp["name_grp"]."</h2>
                <table border='solid'>
                  <thead>
                    <tr>
                      <td>Nom</td>
                      <td>Prenom</td>
                      <td>Telephone</td>
                    </tr>
                    <tbody>
                  ";
            $reponse =$bdd->query(
              "SELECT *
              FROM appartenir
              INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
              INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
              ");
              while ($donnees=$reponse->fetch()){
                    if ($grp["id_grp"]==$donnees["fk_groupe"]) {
                      echo "
                      <tr>
                      <td>".$donnees["Nom"]."</td>
                      <td>".$donnees["Prenom"]."</td>
                      <td>".$donnees["Telephone"]."</td>
                      </tr>
                      ";
                    }

                  }
                  echo "
                  </tbody>
                  </table>";
        }
      ?>

   </body>
 </html>
