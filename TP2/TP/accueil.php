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
        renderMenuToHTML('index');
        ?>
        </div>
        <div class="content">
            <p> Welcome to my profesional site</p>
        </div>
        <div class="footer">
        <?php
        require_once('template_footer.php');?>
        </div>
    </div>
    </body>
</html>