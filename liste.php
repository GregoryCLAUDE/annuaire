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
     <?php
      $reponse =$bdd->query(
        "SELECT *
        FROM appartenir
        INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
        INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
        WHERE fk_groupe = 1");

        while ($donnees=$reponse->fetch()){
          var_dump($donnees["Nom"]);

          echo "<h3>".$donnees['name_grp']."</h3>
          <table>
            <thead>
              <tr>
              <td>Nom</td>
              <td>Prenom</td>
              <td>Telephone</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>".$donnees["Nom"]."</td>
                <td>".$donnees["Prenom"]."</td>
                <td>".$donnees["Telephone"]."</td>
              </tr>
            </tbody>
          </table>";

        }
      ?>
      <!-- <?php
      $reponse =$bdd->query(
        "SELECT *
        FROM appartenir
        INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
        INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
        WHERE id_grp = 2");

        while ($donnees=$reponse->fetch()){
          echo "<h3>".$donnees['name_grp']."</h3>
          <table>
            <thead>
              <tr>
              <td>Nom</td>
              <td>Prenom</td>
              <td>Telephone</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>".$donnees["Nom"]."</td>
                <td>".$donnees["Prenom"]."</td>
                <td>".$donnees["Telephone"]."</td>
              </tr>
            </tbody>
          </table>";
        }
       ?>
       <?php
       $reponse =$bdd->query(
         "SELECT *
         FROM appartenir
         INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
         INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
         WHERE id_grp = 3");

         while ($donnees=$reponse->fetch()){
           echo "<h3>".$donnees['name_grp']."</h3>
           <table>
             <thead>
               <tr>
               <td>Nom</td>
               <td>Prenom</td>
               <td>Telephone</td>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>".$donnees["Nom"]."</td>
                 <td>".$donnees["Prenom"]."</td>
                 <td>".$donnees["Telephone"]."</td>
               </tr>
             </tbody>
           </table>";

         }
        ?>
        <?php
        $reponse =$bdd->query(
          "SELECT *
          FROM appartenir
          INNER JOIN annuaire ON appartenir.fk_user=annuaire.id
          INNER JOIN groupe ON appartenir.fk_groupe=groupe.id_grp
          WHERE id_grp = 5");

          while ($donnees=$reponse->fetch()){
            echo "<h3>".$donnees['name_grp']."</h3>
            <table>
              <thead>
                <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Telephone</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>".$donnees["Nom"]."</td>
                  <td>".$donnees["Prenom"]."</td>
                  <td>".$donnees["Telephone"]."</td>
                </tr>
              </tbody>
            </table>";

          }
         ?> -->


   </body>
 </html>
