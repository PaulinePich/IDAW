<?php

initJournal();

function initJournal(){
    require_once('config.php');

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = 


        "SELECT * FROM aliments";



    $result = mysqli_query($connect, $query);

    $array = array();
    while($row = mysqli_fetch_row($result)){
        array_push($array, $row);
    }
    echo json_encode($array, JSON_UNESCAPED_UNICODE);

    mysqli_close($connect); 
}