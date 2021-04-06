<?php
    require_once("config.php");
    
    $a=$_POST['typeA'];
    

    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        $infosAliments = $dbco->prepare("SELECT * FROM aliment WHERE type='".$a."'");
        $infosAliments->execute();
        

        $resultatinfosAliments = $infosAliments->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultatinfosAliments);
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }


    
?>