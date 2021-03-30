
  <h1> Inscription </h1>

    <link rel="stylesheet" href="../FrontEnd/style.css">




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


                $sql = "INSERT INTO utilisateur (login,password,sexe, age, sport)
                VALUES ('$a','$b','$c', '$d','$e')";
                $dbco->exec($sql);
             
                
                
               
                echo 'Inscription réussie';
                
                
                
                  
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
              }
                
                ?>
    
    <p>Votre login est <?php echo $_POST['NewLogin']?></p>
            </br>
    <a href='../FrontEnd/index.php'>Connexion</a>


