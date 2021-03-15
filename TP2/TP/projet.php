<?php
require_once('template_header.php');
?>
<html>
    <head>
        <title> Mes projets </title>
        <meta charset = "utf-8">
        <link rel ="stylesheet" href= "style1.css">
    </head>
    <body>
        <div class="page">
            <div class="header">
                <h1> Mon site Pro de POPo</h1>
            </div>
        
        
        <div class="sidebar">
        <?php
        require_once('template_menu.php');
        ?>
        </div>
        
        <div class="content">
        <h1 class="CV"> Mes projets </h1>
        <p>Stage de M1</p>
        </br>
        <p>DOUBLE DIPLOME </p>
        <ol>
            <li>Canada</li>
            <li>Montréal</li>
            <li>ETS</li>
        </ol>
        </br>    
        </div>
        <div class="footer">
            <p> Cours d'IDAW </p>
        </div>
    </div>
    </body>
</html>