<h1> Ajout aliment </h1>

    <link rel="stylesheet" href="style.css">


<?php
        $servname = 'localhost';
        $dbname = 'aliments';
        $user = 'root';
        $pass = 'root';
        
        try{
            $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $b=$_POST['name'];
            $c=$_POST['type'];
            $d=$_POST['calories'];
  


            $sql = "INSERT INTO projet (name, type, calories)
            VALUES ('$b','$c', '$d')";
            $dbco->exec($sql);
         
            
            
           
            echo 'Ajout aliment réussi';
            
            
            
              
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
          }
            
            ?>


