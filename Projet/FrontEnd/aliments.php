<!DOCTYPE html>
<html>
  <head>
      <div class="header">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Site de Nassim Bouaziz & Pauline Pichon </title>
  <h1> Mes aliments </h1>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    </div>
  </head>

  <body>

  
<div class="page">

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
            </tbody>
        </table>


        <?php
        echo 'test';
            $servname = 'localhost';
            $dbname = 'projet';
            $user = 'root';
            $pass = 'root';
            
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->prepare('SELECT name, type, calories FROM aliment');
                
 
                //$aliments= $dbco->fetchAll();
                //var_dump($aliments);
    
        ?>

</div>


<script>
</script>


<a href='ajout_aliment.php'> Ajout aliment </a>

</body>
  </html>