<!DOCTYPE html>
<html>
  <head>
      <div class="header">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Site de Nassim Bouaziz & Pauline Pichon </title>
  <h1> Mon historique</h1>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    </div>
  </head>

  <body>
  
  <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Calorie pour 100g</th>
                    <th scope="col">CRUD</th>
                </tr>
            </thead>
            <tbody id="alimentsTableBody">
            <?php

            $servname = 'localhost';
            $dbname = 'projet';
            $user = 'root';
            $pass = 'root';
           
          
            try
            {
              // On se connecte à MySQL
              $bdd = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",  $user, $pass);
            }
            catch(Exception $e)
            {
              // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
            }


            $reponse = $bdd->query('SELECT name,type,calories FROM aliment');

            while ($donnees = $reponse->fetch())
            {
            ?>
                <tr>
                  <td><?php echo $donnees['name']; ?></td>
                  <td><?php echo $donnees['type']; ?></td>
                  <td><?php echo $donnees['calories']; ?></td>
                  <td><button>Editer</button> <button>Supprimer</button></td>
                </tr>
            <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête

            ?>
            </tbody>
        </table>



</body>
  </html>