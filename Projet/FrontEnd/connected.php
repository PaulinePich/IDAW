
<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Site de Nassim Bouaziz & Pauline Pichon </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

<?php
    $users = array(
    // login => password
        'pauline' => 'pich',
        'nassim' => 'nass',
        'user' => 'user'); 
    
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
        $errorText = "Erreur de login/password";
    } else
    $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
 
        echo "<h1>Bienvenue sur votre session ".$login."</h1>";
        echo "<a href='index2.php' > Accéder à mon espace </a>"; 
        
        
    }

    ?>

</body>
  </html>