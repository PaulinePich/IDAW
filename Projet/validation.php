<?php
            $servname = 'localhost';
            $dbname = 'projet';
            $user = 'root';
            $pass = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $a=$_POST['NewLogin'];
                $b=$_POST['NewPassword'];
                $c=$_POST['sexe'];
                $d=$_POST['Age'];
                $e=$_POST['sport'];


                $sql = "INSERT INTO projet (login,password,sexe, age, sport)
                VALUES ('$a','$b','$c', '$d','$e')";
                $dbco->exec($sql);
                echo 'Inscription réussie';
                
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }
                
                ?>
    
    <p>Votre login est <?php echo $_POST['NewLogin']?>
    <a href=login.php>Connexion</a>

?>