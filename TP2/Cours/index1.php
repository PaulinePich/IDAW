<!DOCTYPE html>
<html>
    <head>
        <title>TP2</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Affichage de l'heure</h1>
        <?php
           echo date("d/m/Y"); // Affiche la date du jour
           echo "Il est " . date("H:i:s") ; // Affiche l'heure 
        ?>
    </body>
</html>
