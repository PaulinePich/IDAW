<link rel="stylesheet" href="style.css">

<div class="header">
<h1> Ajout aliment </h1>
</div>


<form id="ajout" action="ajout_aliment_validation.php" method="POST">
    <table>
    <tr>
<th>Nom </th>
<td><input type="text" name="name"></td>
    </tr>
    
    <tr>
<th>Type</th>
<td><input type="type" name="type"></td>
    </tr>


    <tr>
<th>Calories</th>
<td><input type="calories" name="calories"></td>
    </tr>
   
    <tr>
<th></th>
<td><input type="submit" value="Ajout" /></td>
    </tr>

</table>
</form>