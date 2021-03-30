<link rel="stylesheet" href="style.css">

<div class="header">
<h1> Inscription </h1>
</div>


<form id="inscription" action="../BackEnd/validation.php" method="POST">
    <table>
    <tr>
<th>Login :</th>
<td><input type="text" name="NewLogin"></td>
    </tr>
    
    <tr>
<th>Mot de passe :</th>
<td><input type="password" name="NewPassword"></td>
    </tr>
    <tr>
<th>Confirmation mot de passe :</th>
<td><input type="password" name="NewPassword"></td>
    </tr>
    <tr>
<th>Sexe : </th>

<td>
    <input type="radio" id="homme" name="sexe" value="homme">
    <label for="homme">Homme</label><br>
    <input type="radio" id="femme" name="sexe" value="femme">
    <label for="femme">Femme</label><br>
</td>
    </tr>
    <tr>
<th>Age :</th>
<td><input type="age" name="Age"></td>
    </tr>
    <tr>
<th>Niveau de pratique de sport : </th>

<td>
    <input type="radio" id="sport" name="sport" value="bas">
    <label for="bas">Bas</label><br>
    <input type="radio" id="sport" name="sport" value="moyen">
    <label for="moyen">Moyen</label><br>
    <input type="radio" id="sport" name="sport" value="eleve">
    <label for="eleve">Elevé</label><br>
</td>
    </tr>
    <tr>
<th></th>
<td><input type="submit" value="Inscription" /></td>
    </tr>

</table>
</form>