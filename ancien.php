

    </head>
    <body>
        <div class="page">
            <div class="header">
                <h1> Mon site Pro de POPo</h1>
            </div>
        
        
        <div class="sidebar">
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('projet');
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
        <?php
        require_once('template_footer.php');?>
        </div>
    </div>
    </body>
</html>



Cv :

<?php
require_once('template_header.php');
?>
<html>
    <head>
        <title> CV de Pauline </title>
        <meta charset = "utf-8">
        <link rel ="stylesheet" href= "style1.css">
    </head>
    <body>
        <div class="page">
            <div class="header">
                <h1> Mon site Pro</h1>
            </div>
        
        
        <div class="sidebar">
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('Cv');
        ?>
        </div>
        
        <div class="content">
        <h1 class="CV"> Mon CV </h1>
        <p>Mes formations</p>
        <ol>
            <li>Collège</li>
            <li>Lycée</li>
            <li>Prépa</li>
            <li>Ecole d'ingénieur</li>
        </ol>
        </br>
        <p>Mon parcours</p>
        <ol>
            <li>Stage 1</li>
            <li>Stage 2</li>
            <li>Emploi 1</li>
            <li>Emploi 2</li>
        </ol>
        </br>
        <p><a href="https://www.linkedin.com/in/pauline-pichon-7330761a3/">Linkedin </a></p>
    

        </div>
        <div class="footer">
            <?php
        require_once('template_footer.php');?>
        </div>
    </div>
    </body>
</html>