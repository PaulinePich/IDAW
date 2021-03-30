<?php

$login = "anonymous";

            $servername = 'localhost';
            $dbname = 'projet';
            $username = 'root';
            $password = 'root';
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "SELECT * from login";
                $dbco->exec($sql);


                $errorText = "";
                $successfullyLogged = false;
                if(isset($_POST['login']) && isset($_POST['password'])) {
                $tryLogin=$_POST['login'];
                $tryPwd=$_POST['password'];
                
        
                // si login existe et password correspond
                    while($row = $sql->fetch_assoc()){ 
                        if($row['Login']==$tryLogin && $row['Password']==$tryPwd){
                        $successfullyLogged = true;
                        $login = $tryLogin;
                        } 
                        else{
                        $errorText = "Erreur de login/password veuillez réessayer<br>";
                        }
                    }
                } 
                else
                $errorText = "Merci d'utiliser le formulaire de Connection<br>";
                
                if(!$successfullyLogged) {
                echo $errorText;
                } else {
                //echo "<h1>Bienvenu ".$login."</h1>";
                $_SESSION['login'] = $login;
                }
                
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


        
       
       
    ?>