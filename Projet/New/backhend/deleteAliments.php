<?php
    print_r($_POST);
    deleteAliment();

    function deleteAliment(){
        require_once('config.php');
       
        $conn = mysqli_connect($servername, $username, $password,$database);
        if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
        }
        $sql = "DELETE FROM aliment 
        WHERE id=".$_POST['idsql']."";
        

        echo $sql;

        mysqli_query($conn,$sql);
        mysqli_close($conn);
    }