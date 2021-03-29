<h1> Ajout aliment </h1>

    <link rel="stylesheet" href="style.css">


<?php
        $servname = 'localhost';
        $dbname = 'projet';
        $user = 'root';
        $pass = 'root';
        
        try{
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $b=$_POST['name'];
            $c=$_POST['type'];
            $d=$_POST['calories'];
  


            $sql = "INSERT INTO aliment(name, type, calories)
            VALUES ('$b','$c', '$d')";
            $dbco->exec($sql);
         
            
            
           
            echo 'Ajout aliment réussi';
            
            
            
              
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
          }
            
            ?>


<p>Le nouvel aliment est <?php echo $_POST['name']?></p>
            </br>
    <a href='../FrontEnd/aliments.php'>Mes aliments</a>


