<!doctype html>
<html>
    <head>
        <title>Page de connexion</title>
        <h1> Connection <h1>
        <meta charset = "utf-8">
        <link rel ="stylesheet" href= "style.css">
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
</body>

</html>
