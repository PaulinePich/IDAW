<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="js/aliments.js" async></script>
        
        <title>Aliments</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody id='alimentTableBody'>
                
            </tbody>
        </table>
        <h1>Ajouter un aliment</h1>
        
        <form id="alimentForm">
            <div class="form-group row">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="nom" id="inputnom">
            </div>
            <div class="form-group row">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" id="inputtype">
            </div>
            
            <div class="form-group row">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </body>
</html>
