<?php
require_once('template_header.php');
?>

<html>
    <head>
        <title> Accueil </title>
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
            <p> Welcome to my profesional site</p>
        </div>
        <div class="footer">
            <p> Cours d'IDAW </p>
        </div>
    </div>
    </body>
</html>