<?php
    print_r($_POST);
    addAliment();

    function addAliment(){
        require_once('config.php');
      

        $conn = mysqli_connect($servername, $username, $password,$database);
 
        
        if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
        }
        $sql = "INSERT INTO aliments(nom, type,
        calories, proteines, glucides) 
        VALUES ("."'".$_POST['nom']."',".
        "'".$_POST['type']."',".
        "'".$_POST['calories']."',".
        "'".$_POST['proteines']."',".
        "'".$_POST['glucides'].."')";

        echo $sql;

        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }
