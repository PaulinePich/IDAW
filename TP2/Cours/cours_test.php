<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $prenom = "Pierre";
            $age = 28; //$age stocke le nombre 28
            
            echo "La variable \$age contient : ";
            echo $age;
            echo "<br>";
            
            $age = 29; //$age stocke le nombre 29
            echo "La variable \$age contient : ";
            echo $age;


            function bjr(){
                echo 'bonjour <br>';
            }


            bjr();
            bjr();
            bjr();


            $prenoms = ['Mathilde', 'Pierre', 'Amandine', 'Florian'];
            
            //On récupère la taille du tableau et on la stocke dans $taille
            $taille = count($prenoms);
            
            //On peut soit parcourir le tableau et afficher les valeurs une à une
            for($i = 0; $i < $taille; $i++){
                echo $prenoms[$i]. ', ';
            }
            
            echo '<br><br>';
            
            //...soit les stocker dans une autre variable et echo cette variable
            for($i = 0; $i < $taille; $i++){
                $p .= $prenoms[$i]. ', ';
            }
            echo $p;

        ?>
    </body>
</html>