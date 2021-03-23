
<?php
            $servname = 'localhost';
            $dbname = 'pauline';
            $user = 'root';
            $pass = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $a=$_POST['NewLogin'];
                $b=$_POST['NewPassword'];
                $c=$_POST['NewPseudo'];


                $sql = "INSERT INTO tp3 (login,password,pseudo)
                VALUES ('$a','$b','$c')";
                $dbco->exec($sql);
                echo 'Entrée ajoutée dans la table';
                
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }
                
                ?>
    <h2> Inscription réussie </h2>
    <p>Votre login est <?php echo $_POST['NewLogin']?>
    <a href=login.php>Connexion</a>

?>



