<?php
    //print_r($_POST);
    addHistorique();

    function addHistorique(){
        require_once('config.php');
        //On établit la connexion
        $conn = mysqli_connect($servername, $username, $password,$database);
        //On vérifie la connexion
        if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
        }
        $user=16;
    
        
        $sql1 = "INSERT INTO historique (date, heure, IdRepas, typeRepas, IdUtilisateur, commentaires) 
        VALUES ('".$_POST['date']."', 
        '".$_POST['time']."', NULL, '".$_POST['type']."', '16','".$_POST['comment']."');";
        echo "1  : :".$sql1;
        mysqli_query($conn,$sql1);
        
        

        mysqli_close($conn);
    }