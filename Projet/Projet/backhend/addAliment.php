<?php

print_r($_POST);
addAlimentToDB();

function addAlimentToDB(){
    require_once('config.php');

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = 
        "INSERT INTO Aliment(nom, type) 
        VALUES (".$_POST['nom'].",".
            "'".$_POST['type']."',";
            
    echo $query;
    mysqli_query($connect, $query);

    mysqli_close($connect); 
}