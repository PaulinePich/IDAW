<?php
        $login = "anonymous";

            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            $database='pauline';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,$database);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }

            $sql = $conn->query("SELECT * from login");
        
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
    
    ?>
 