
<!DOCTYPE html>
<html>
  <head>
      <div class="header">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Site de Nassim Bouaziz & Pauline Pichon </title>
  <h1> Connexion </h1>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    </div>
  </head>

  <body>
  <form id="login_form" action="connected.php" method="POST">
    <table>
        <tr>
            <th>Login :</th>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <th>Mot de passe :</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Se connecter..." /></td>
            
        </tr>
    </table>
</form>




<a href="inscription.php" class="btn btn-outline-dark" tabindex="-1" role="button" aria-disabled="true">M'inscrire</a>
</body>




  
  </html>