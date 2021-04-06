<?php
    print_r($_POST);
    editAliment();

    function editAliment(){
        require_once('config.php');
    
        $conn = mysqli_connect($servername, $username, $password,$database);
        if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
        }
        $sql = "UPDATE aliments
        SET nom ='".$_POST['nom']."',
        type='".$_POST['type']."',
        calories='".$_POST['calories']."',
        proteines='".$_POST['proteines']."',
        glucides='".$_POST['glucides']."'
        WHERE idAliments=".$_POST['idsql']."";
        echo $sql;

        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }