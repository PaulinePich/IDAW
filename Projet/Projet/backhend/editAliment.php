<?php

print_r($_POST);
editAlimentFromDB();

function editAlimentFromDB(){
    require_once('config.php');

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = 
        "UPDATE Aliment 
        SET nom=       '". $_POST['nom']      ."', 
            type=       '". $_POST['type']      ."'
        WHERE nom=".$_POST['nom'];
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}